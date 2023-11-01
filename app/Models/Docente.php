<?php

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }
}
