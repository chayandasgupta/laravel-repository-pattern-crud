<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
   protected $student;

   public function getAllStudent()
   {
      return Student::cursorPaginate(10);
   }

   public function create($collection = [])
   {
      $student = new Student();
      return $student->fill($collection)->save();
   }

   public function getStudentById($id)
   {
      return Student::find($id);
   }

   public function update($id, $collection = [])
   {   
      $student = Student::find($id);
      return $student->fill($collection)->save();
   }
   
   public function deleteStudent($id)
   {  
      return Student::find($id)->delete();
   }
}