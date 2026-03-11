<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['id', 'name', 'date_of_birth'];  
}


class Gebruiker extends Model
{
    protected $table = 'participant';

    protected $fillable = [
        'naam',
        'email'
    ];
}