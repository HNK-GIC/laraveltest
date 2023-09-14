<?php

namespace App\Service\ServiceImpl;

use App\Repository\PersonRepository;

use App\Service\PersonService;

class PersonServiceImpl implements PersonService
{
    private $personRepository;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function getList()
    {
        $data = $this->personRepository->allRecords();
        return $data;
    }

    public function save(array $data)
    {
        $result = $this->personRepository->saveRecords($data);
        $data = $this->personRepository->allRecords();
        return $data;
    }

    public function search(array $search_data)
    {
        $result = $this->personRepository->searchRecords($search_data);
        return $result;
    }
}
?>