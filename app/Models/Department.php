<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Department extends Model
{
    use HasFactory;

    public function employees(){

      return  $this->hasMany(Employee::class,'dept_id');

    }

    public function users(){

        return  $this->hasOneThrough(User::class,Employee::class,'dept_id','emp_id');
  
      }
}
