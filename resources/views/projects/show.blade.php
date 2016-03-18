@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                @if(Auth::check()
                    && (Auth::user()->id == $project->user_id
                    || Auth::user()->isAdmin))
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>{{ $project->name }}</h3>
                            <div class="text-right">
                                 @if($project->status == 0)
                                    <h5>Oupsi il va falloir un petit peu patienter ^^ <i class="fa fa-circle-o"></i></h5>
                                @elseif($project->status == 1)
                                    <h5>Oups votre projet n'est pas accepté <i class="fa fa-times"></i></h5>
                                @elseif($project->status == 2)
                                    <h5>Wouah votre projet est accepté ! :)  <i class="fa fa-check"></i></h5>
                                @endif
                            </div>
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
                            <p>{{ $project->constraintes }}</p>

                        </div>

                        @if(Auth::check() && Auth::user()->isAdmin)
                            @include('projects.status')
                            <div class="panel-body">
                                <a href="{{ route('projects.index') }}">Retour aux projects</a>
                            </div>
                        @elseif(Auth::check() && Auth::user()->id == $project->user_id)
                            <div class="text-center">
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">MODIFIER PROJET</a>
                            </div>
                            <div class="panel-body">
                                <a href="{{ route('profil.show', Auth::user()->id) }}">Retourner sur votre profil</a>
                            </div>
                        @endif
                    </div>
                    @else
                    <div class="alert-danger alert">
                        <div class="text-center">
                            <p>Oupsi ce n'est pas votre profil</p>
                        </div>
                        @if(Auth::user()->isAdmin)
                            <div class="panel-body">
                                <a href="{{ route('projects.index') }}">Retour aux projects</a>
                            </div>
                        @else
                            <div class="panel-body">
                                <a href="{{ route('profil.show', Auth::user()->id) }}">Retourner sur votre profil</a>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
