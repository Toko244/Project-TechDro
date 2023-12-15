<?php

namespace App\Repositories;

use App\Models\Componentable;
use App\Models\Post;
use App\Models\Section;
use App\Repositories\Interfaces\ComponentableRepositoryInterface;

class ComponentableRepository implements ComponentableRepositoryInterface
{
    public function getComponentables(array $data)
    {
        $componentable = isset($data['section_id'])
            ? Section::findOrFail($data['section_id'])
            : (isset($data['post_id'])
                ? Post::findOrFail($data['post_id'])
                : null); // Provide a default value here

        $componentables = $componentable->componentables()->with('component:id,name,type_id')->orderBy('sort', 'asc')->get();

        return $componentables;
    }

    public function create($data)
    {
        $componentable = isset($data['section_id']) ?
            Section::findOrFail($data['section_id']) :
            Post::findOrFail($data['post_id']);

        $data['sort'] = $componentable->componentables()->max('sort') + 1;

        return $componentable->componentables()->create($data);
    }

    public function sort($data)
    {
        foreach ($data['componentables'] as $componentable) {
            Componentable::where('id', $componentable['id'])->update([
                'sort' => $componentable['sort'],
            ]);
        }

        return true;
    }
}
