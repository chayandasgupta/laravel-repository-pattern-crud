<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
   protected $student;

   public function getAllStudent()
   {
      return Student::all();
   }

   public function createOrUpdate($id = null, $collection = [])
   {
      if(is_null($id)) {
         $student = new Student();
         return $student->fill($collection)->save();
      }
      $student = Student::find($id);
      return $student->fill($collection)->save();
   }

   public function getStudentById($id)
   {
      return Student::find($id);
   }
   
   public function deleteStudent($id)
   {
      return Student::find($id)->delete();
   }
}