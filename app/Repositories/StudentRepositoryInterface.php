<?php

namespace App\Repositories;

interface StudentRepositoryInterface
{
  public function getAllStudent();
  public function create($collection = []);
  public function update($id,$collection = []);
  public function getStudentById($id);
  public function deleteStudent($id);
}