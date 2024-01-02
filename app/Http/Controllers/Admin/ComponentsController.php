<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComponentRequest;
use App\Models\Component;
use App\Models\ComponentFile;
use Illuminate\Support\Facades\Redirect;
use App\Models\Section;
use App\Repositories\Interfaces\ComponentInterfaceRepository;
use App\Repositories\Interfaces\ComponentPostRepositoryInterface;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ComponentsController extends Controller
{
    use FileUploadTrait;

    public function __construct(
        private ComponentInterfaceRepository $componentrepository,

        private ComponentPostRepositoryInterface $componentPostRepository
    ) {
    }

    /**
     * index
     *  Lists Sections
     *
     * @return void
     */
    public function index(Request $request)
    {

        $count = $this->componentrepository->getCount($request->all());
        $components = $this->componentrepository->getComponents($request->all());

        return view('admin.components.list', compact('components', 'count'));
    }

    public function create()
    {
        $components = Component::with('translation')->get();
        $sections = Section::all();
        return view('admin.components.add', compact(['components', 'sections']));
    }

    public function store(ComponentRequest $request)
    {
        // dd($request->all());
        try {
            // Validate the request
            $data = $request->validated();
            // Create the component
            $component = Component::create($data);

            $componentTypes = getContentTypes('componentTypes');

            return redirect()->route('components.index', [app()->getLocale()])->with([
                'component' => $component,
                'connection' => $component->connectionPosts,
                'type' => $componentTypes,
            ], Response::HTTP_CREATED);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Validation failed
            dd($e->errors());
        }
    }


    public function edit($id, $sec = null)
    {

        $main_component = Component::FindOrFail($id);
        // dd($component);
        $components = Component::all();
        $sections = Section::all();
        $section = Section::first();
        // dd($components);
        return view('admin.components.edit', compact(['main_component', 'section', 'components', 'sections']));
    }

    public function update($id, Request $request)
    {
        DB::beginTransaction();

        try {

            $data = $request->all();

            if (empty($data['section_id'])) {
                $data['section_id'] = null;
            }

            $component = Component::find($id);
            $component->update($data);

            if (isset($data['sort'])) {
                $this->componentPostRepository->sort($data['sort']);
            }
            $component = $component->load('componentables.componentable.translation', 'author');

            // Handle Post Files ------
            // $filesData = $this->uploadFiles($data, $component->id, 'component_id');
            // if ($filesData) {
            //     $component->files()->insert($filesData);
            // }

            // // Handle Section Files Delete  ------
            // if (isset($data['deleted_files'])) {
            //     foreach ($data['deleted_files'] as $id) {
            //         $file = ComponentFile::whereId($id)->first();
            //         if ($file && $file->file) {
            //             $this->uploadFiles($file->file, 'public');
            //         }
            //     }
            //     ComponentFile::whereIn('id', $data['deleted_files'])->delete();
            // }
            // $component = $component->load('files',  'componentables.componentable.translation', 'author');
            DB::commit();

            return redirect()->route('components.index', [app()->getLocale()])->with(
                [
                    'message' => __('component-updated-successfully'),
                    'component' => $component,
                    // 'connection' => $component->connectionPosts,
                ],
                Response::HTTP_CREATED,
            );
        } catch (\Throwable $th) {
            DB::rollBack();

            return response(
                [
                    'error' => 'An error occurred',
                    'message' => $th->getMessage(),
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR,
            );
        }
    }

    public function getType($typeId)
    {
        $componentTypes = getContentType('componentTypes', $typeId);
        $type = $componentTypes[array_key_first($componentTypes)];

        return view('admin.components.add', compact(['type']));
    }

    public function post($id)
    {
        $data = $this->componentrepository->componentPost($id);
        $id = $data['id'];

        return view('admin.components.list', compact('components', 'id', 'section'));
    }

    public function destroy($id)
    {

        Component::where('id', $id)->delete();

        return Redirect::route('components.index',  [app()->getLocale()])->with('success', 'Component deleted successfully.')->with('id', $id);
    }

    public function arrange(Request $request)
    {
        $array = $request->input('orderArr');
        Section::componentrearrange($array);

        return ['error' => false];
    }
}
