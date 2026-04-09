<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Competition;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

      public function competitions()
     {
      return $this->belongsToMany(Competition::class, 'participant_wedstrijd');
}
}


?>