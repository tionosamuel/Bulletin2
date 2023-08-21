<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\parent_student\parent_student;

class Family extends Model
{
    protected $table='parents';
    use HasFactory, Notifiable;
    public function students(){
        return $this->belongsToMany(Student::class);
    }
    
}
