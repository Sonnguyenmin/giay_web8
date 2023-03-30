<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    //model muốn tương tác
    protected $model;

   //khởi tạo
    public function __construct()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    //lấy model tương ứng
    abstract public function getModel();

    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $object = $this->model->find($id);

        return $object->update($data);
    }

    public function delete($id)
    {
        $object = $this->model->find($id);

        return $object->delete();
    }
}
