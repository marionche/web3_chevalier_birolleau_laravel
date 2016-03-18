<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'name_author',
        'adress',
        'telephone',
        'suivi',
        'adresse',
        'telephones',
        'fiche',
        'type_project',
        'contexte',
        'demande',
        'objectifs',
        'contraintes'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
