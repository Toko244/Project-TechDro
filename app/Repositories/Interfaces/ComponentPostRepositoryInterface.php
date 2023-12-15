<?php

namespace App\Repositories\Interfaces;

interface ComponentPostRepositoryInterface
{
    public function createComponentPost($data);

    public function sort($data);

    public function getPostsBySection($sectionId, $with = []);

    public function getPostsByComponent($componentId, $with = []);

    public function getComponentPostsByType($typeId);

    public function deleteComponentPost($id);
}
