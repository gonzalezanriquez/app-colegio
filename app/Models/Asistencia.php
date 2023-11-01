<?php

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    // ...

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
}