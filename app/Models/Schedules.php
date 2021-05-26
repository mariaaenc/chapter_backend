<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    public function patient(){
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function dentist(){
        return $this->belongsTo(Dentist::class, 'dentist_id');
    }
}
