<?php

namespace App\Repository;

use App\Models\Person;

class PersonRepository
{
    protected $model;

    public function __construct(Person $model)
    {
        $this->model = $model;
    }

    public function allRecords()
    {
        return $this->model::all();
    }

    public function saveRecords(array $data)
    {
        return $this->model->create($data);
    }

    public function searchRecords(array $search_data)
    {
        $column = ["name","id"];
        $data = $this->model::select($column)
                            ->where($search_data)->get();
        return $data;
    }
}

?>