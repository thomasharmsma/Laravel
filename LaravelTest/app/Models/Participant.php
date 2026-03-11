<?php

use Illuminate\Database\Eloquent\Model;
 
class Student extends Model
{
    protected $table = 'participants';
 
    protected $fillable = [
        'id',
        'name',
        'date_of_birth'
    ];
}