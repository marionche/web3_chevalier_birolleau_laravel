@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if($errors->any())
            <div class="alert alert-danger">

                @foreach($errors->all() as $error)
                    {{ $error}}
                @endforeach
            </div>
        @endif

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">AJOUTER UN PROJET</div>

                <div class="panel-body">
                    {!! Form::open(
                    array(
                    'route' => 'project.store',
                    'method' => 'POST'
                    ))
                    !!}

                    <div class="form-group">

                    {!! Form::label('name', 'Mon superbe project') !!}
                    {!! Form::text('name', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Nom du project'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('name_author', 'Commanditaire du project') !!}
                    {!! Form::text('name_author', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Nom, Prénom, Fonction du commanditaire du projet'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('adress', 'Adresse Postale') !!}
                    {!! Form::text('adress', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'N° .. avenue..'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('telephone', 'Téléphone') !!}
                    {!! Form::text('telephone', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Votre numéro de téléphone'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('suivi', 'Nom et Fonction du contact pour le suivi du projet avec étudiants') !!}
                    {!! Form::text('suivi', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Nom, prénom, et fonction'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('adresse', 'Adresse Postale') !!}
                    {!! Form::text('adresse', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'N° .. avenue..'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('telephones', 'Téléphone') !!}
                    {!! Form::text('telephones', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Votre numéro de téléphone'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('fiche', 'Votre fiche d identité') !!}
                    {!! Form::text('fiche', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Votre fiche d identité'
                        ]) 
                    !!}

                    </div>

                    <div class="panel-heading">DESCRIPTIF DU PROJET</div>

                    <div class="form-group">

                    {!! Form::label('type_project', 'Type de projet') !!}
                    {!! Form::text('type_project', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Site internet, 3D, Animation 2D, Installation multimédia, Jeu vidéo, DVD, Print, CD-Rom, Evenement, autre ...'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('contexte', 'Contexte de la demande') !!}
                    {!! Form::text('contexte', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Contexte'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('demande', 'Votre demande') !!}
                    {!! Form::text('demande', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Formulez précisément votre demande en décrivant le projet tel que vous le voyez'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('objectifs', 'Vos objectifs') !!}
                    {!! Form::text('objectifs', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Quelles sont vos attentes ?'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('contraintes', 'Contraintes particulières éventuelles et informations complementaires') !!}
                    {!! Form::text('contraintes', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Vos contraintes'
                        ]) 
                    !!}

                    </div>

                    
                    {!! Form::submit('Enregistrer votre bébé',
                    ['class' => 'btn btn-primary'])
                    !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>
</div>
@endsection