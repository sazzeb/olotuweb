<?php

namespace Olotu\Repositories\Utilities;

use Olotu\Models\Community;

class EloquentCommunity implements CommunityRepository
{
    private $model;
    
    public function __construct(Community $model)
    {
        $this->model = $model;    
    }
    public function getAll()
    {
        return $this->model->all();
    }
    
    public function getById($id) 
    {
        return $this->model->findOrFail($id);
    }
    
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
    
    public function update($id, array $attributes)
    {
        $member = $this->getById($id);
        return $member->update($attributes);
    }
    
    public function delete($id)
    {
        return $this->getById($id)->delete();
    }
}