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
                    'route' => 'post.store',
                    'method' => 'POST'
                    ))
                    !!}

                    <div class="form-group">

                    {!! Form::label('title', 'Mon projet') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Nom du projet'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Commanditaire du projet') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Nom, Prénom, Fonction du commanditaire du projet'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Adresse Postale') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'N° .. avenue..'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Téléphone') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Votre numéro de téléphone'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Nom et Fonction du contact pour le suivi du projet avec étudiants') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Nom, prénom, et fonction'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Adresse Postale') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'N° .. avenue..'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Téléphone') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Votre numéro de téléphone'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Votre fiche d identité') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Votre fiche d identité'
                        ]) 
                    !!}

                    </div>

                    <div class="panel-heading">DESCRIPTIF DU PROJET</div>

                    <div class="form-group">

                    {!! Form::label('title', 'Type de projet') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Site internet, 3D, Animation 2D, Installation multimédia, Jeu vidéo, DVD, Print, CD-Rom, Evenement, autre ...'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Contexte de la demande') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Contexte'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Votre demande') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Formulez précisément votre demande en décrivant le projet tel que vous le voyez'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Vos objectifs') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Quelles sont vos attentes ?'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                    {!! Form::label('title', 'Contraintes particulières éventuelles et informations complementaires') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Vos contraintes'
                        ]) 
                    !!}

                    </div>

                    
                    {!! Form::submit('Enregistrer',
                    ['class' => 'btn btn-primary'])
                    !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>
</div>
@endsection