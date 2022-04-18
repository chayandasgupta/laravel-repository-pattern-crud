<?php

namespace App\Repositories;

interface StudentRepositoryInterface
{
  public function getAllStudent();
  public function createOrUpdate($id = null, $collection = []);
  public function getStudentById($id);
  public function deleteStudent($id);
}