<?php

namespace App\Models;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'name',
        'date',
        'location'
    ];

    public function participants()
    {
        return $this->belongsToMany(Participant::class, 'participant_wedstrijd');
    }
}