<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
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
        'type_projet',
        'contexte',
        'demande',
        'objectifs',
        'contraintes'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
