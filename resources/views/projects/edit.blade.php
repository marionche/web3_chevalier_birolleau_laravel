@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('errors.message')
             @if(Auth::check() && (Auth::user()->id == $project->user_id))
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">MODIFIER PROJET</div>

                    <div class="panel-body">
                        
                            {!! Form::model($project,
                            array(
                            'route' => array('project.update', $project->id),
                            'method' => 'PUT'
                            )) !!}

                       <div class="form-group">

                        {!! Form::label('name', 'Mon jolie projet') !!}
                        {!! Form::text('name', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Nom du projet'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('name_author', 'Commanditaire du projet') !!}
                        {!! Form::text('name_author', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Nom, Prénom, Fonction du commanditaire du projet'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('adress', 'Adresse Postale') !!}
                        {!! Form::text('adress', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'N° .. avenue..'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('telephone', 'Téléphone') !!}
                        {!! Form::text('telephone', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Votre numéro de téléphone'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('suivi', 'Nom et Fonction du contact pour le suivi du projet avec étudiants') !!}
                        {!! Form::text('suivi', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Nom, prénom, et fonction'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('adresse', 'Adresse Postale') !!}
                        {!! Form::text('adresse', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'N° .. avenue..'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('telephones', 'Téléphone') !!}
                        {!! Form::text('telephones', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Votre numéro de téléphone'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('fiche', 'Votre fiche d identité') !!}
                        {!! Form::text('fiche', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Votre fiche d identité'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="panel-heading">DESCRIPTIF DU PROJET</div>

                        <div class="form-group">

                        {!! Form::label('type_project', 'Type de projet') !!}
                        {!! Form::text('type_project', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Site internet, 3D, Animation 2D, Installation multimédia, Jeu vidéo, DVD, Print, CD-Rom, Evenement, autre ...'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('contexte', 'Contexte de la demande') !!}
                        {!! Form::text('contexte', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Contexte'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('demande', 'Votre demande') !!}
                        {!! Form::text('demande', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Formulez précisément votre demande en décrivant le projet tel que vous le voyez'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('objectifs', 'Vos objectifs') !!}
                        {!! Form::text('objectifs', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Quelles sont vos attentes ?'
                            'required'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('contraintes', 'Contraintes particulières éventuelles et informations complementaires') !!}
                        {!! Form::text('contraintes', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Vos contraintes'
                            'required'
                            ]) 
                        !!}

                        </div>



                        {!! Form::submit('Enregistrer',
                        ['class' => 'btn btn-primary'])
                        !!}
                        {!! Form::close() !!}

                        <a href="{{ route('projects.show', $project->id) }}">Retour à la page précédente</a>
                        </div>
                    </div>
                @else
                    <div class="alert-danger alert">
                        <div class="text-center">
                            <p>Oupsi vous n êtes pas sur votre projet ! :P</p>
                        </div>
                        <a href="{{ route('profile.show', Auth::user()->id) }}">Retourner sur votre profil</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection