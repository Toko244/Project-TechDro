<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateComponentableRequest;
use App\Http\Requests\GetComponentablesRequest;
use App\Models\Component;
use Illuminate\Support\Facades\Redirect;
use App\Models\Componentable;
use App\Models\Post;
use App\Models\Section;
use App\Repositories\Interfaces\ComponentableRepositoryInterface;
use Illuminate\Http\Request;

class ComponentableController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct(private ComponentableRepositoryInterface $componentableRepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(GetComponentablesRequest $request)
    {

        $section = Section::where('id', $request->id)->first();
        $post = Post::where('id', $request->id)->first();
        $componentables = $this->componentableRepository->getComponentables($request->all());

        return view('admin.componentable.list', compact('componentables', 'section', 'post'));
    }

    public function create(Request $request)
    {
        $Id = $request->id;
        $sections = Section::all();
        $components = Component::all();

        return view('admin.componentable.add', compact('sections', 'Id',  'components'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateComponentableRequest $request)
    {
        $componentable = $this->componentableRepository->create($request->validated());


        return view('admin.componentable.list', compact('componentable'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Componentable $componentable)
    {
        $componentable->load(['componentable', 'component']);

        return response([
            'componentable' => $componentable,
        ], 200);
    }
    public function edit($id)
    {

        $components = Component::all();
        $componentable = Componentable::where('id', $id)->first();

        $sections = Section::all();
        return view('admin.componentable.edit', compact('componentable', 'sections', 'components'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComponentableRequest $request, Componentable $componentable)
    {
        $componentable->update($request->validated());

        return response([
            'componentable' => $componentable->refresh(),
            'message' => 'Componentable Updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Componentable $componentable)
    {

        $componentable->delete();

        return Redirect::route('componentable.index', [app()->getLocale(), 'id' => $componentable->componentable_id]);
    }

    /**
     * Sort Resources in storage.
     */
    public function sort(SortComponentableRequest $request)
    {
        $this->componentableRepository->sort($request->validated());

        return response([
            'message' => 'Componentable Sorted',
        ], 200);
    }
}
