@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>{{ $project->name }}</h3>

                        </div>

                         <div class="panel-body">
                            <h3>Commanditaire du Pojet</h3>
                            <p>{{ $project->name_author }}</p>

                            <h3>Adresse postale</h3>
                            <p>{{ $project->adress }}</p>

                            <h3>Numéro de téléphone</h3>
                            <p>{{ $project->telephone }}</p>

                            <h3>Fiche d identité</h3>
                            <p>{{ $project->fiche }}</p>

                            <h3>Adresse postale</h3>
                            <p>{{ $project->adresse }}</p>

                            <h3>Numéro de téléphone</h3>
                            <p>{{ $project->telephones }}</p>

                            <h3>Fiche d identité</h3>
                            <p>{{ $project->fiche }}</p>

                            <h3>Type du projet</h3>
                            <p>{{ $project->type_project }}</p>

                            <h3>Contexte</h3>
                            <p>{{ $project->contexte }}</p>

                            <h3>Demande</h3>
                            <p>{{ $project->demande }}</p>

                            <h3>Les Objectifs</h3>
                            <p>{{ $project->objectifs }}</p>

                            <h3>Contraintes</h3>
                            <p>{{ $project->contraintes }}</p>

                        </div>

                        @if(Auth::check() && Auth::user()->isAdmin == 1)

                            <div class="panel-body">
                                <a href="{{ route('project.index') }}">Retour aux projects</a>
                            </div>
                        @elseif(Auth::check() && Auth::user()->id == $project->user_id)
                            <div class="text-center">
                                <a href="{{ route('project.edit', $project->id) }}" class="btn btn-warning">MODIFIER PROJET</a>
                            </div>

                        @endif
                    </div>
            </div>
        </div>
    </div>
@endsection
