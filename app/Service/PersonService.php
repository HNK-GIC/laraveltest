<?php
namespace App\Service;

interface PersonService
{
    public function getList();
    public function save(array $data);
    public function search(array $search_data);
}
?>