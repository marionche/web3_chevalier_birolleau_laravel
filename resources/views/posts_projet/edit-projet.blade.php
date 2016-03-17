@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('errors.message')

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">AJOUTER UN PROJET</div>

                    <div class="panel-body">

                        @if(Auth::check()
                        && (Auth::user()->id == $bap->user_id
                        || Auth::user()->isAdmin))

                            {!! Form::model($bap,

                       array(
                       'route' => array('bap.update', $bap->id),
                       'method' => 'PUT'
                       ))
                       !!}
                       <div class="form-group">

                        {!! Form::label('title', 'Mon projet') !!}
                        {!! Form::text('name', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Nom du projet'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Commanditaire du projet') !!}
                        {!! Form::text('name_author', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Nom, Prénom, Fonction du commanditaire du projet'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Adresse Postale') !!}
                        {!! Form::text('adress', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'N° .. avenue..'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Téléphone') !!}
                        {!! Form::text('tel', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Votre numéro de téléphone'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Nom et Fonction du contact pour le suivi du projet avec étudiants') !!}
                        {!! Form::text('suivi', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Nom, prénom, et fonction'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Adresse Postale') !!}
                        {!! Form::text('adress2', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'N° .. avenue..'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Téléphone') !!}
                        {!! Form::text('tel2', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Votre numéro de téléphone'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Votre fiche d identité') !!}
                        {!! Form::text('fiche', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Votre fiche d identité'
                            ]) 
                        !!}

                        </div>

                        <div class="panel-heading">DESCRIPTIF DU PROJET</div>

                        <div class="form-group">

                        {!! Form::label('title', 'Type de projet') !!}
                        {!! Form::text('type_projet', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Site internet, 3D, Animation 2D, Installation multimédia, Jeu vidéo, DVD, Print, CD-Rom, Evenement, autre ...'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Contexte de la demande') !!}
                        {!! Form::text('contexte', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Contexte'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Votre demande') !!}
                        {!! Form::text('demande', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Formulez précisément votre demande en décrivant le projet tel que vous le voyez'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Vos objectifs') !!}
                        {!! Form::text('objectifs', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Quelles sont vos attentes ?'
                            ]) 
                        !!}

                        </div>

                        <div class="form-group">

                        {!! Form::label('title', 'Contraintes particulières éventuelles et informations complementaires') !!}
                        {!! Form::text('contraintes', '', [
                            'class' =>'form-control', 
                            'placeholder' => 'Vos contraintes'
                            ]) 
                        !!}

                        </div>



                        {!! Form::submit('Enregistrer',
                        ['class' => 'btn btn-primary'])
                        !!}
                        {!! Form::close() !!}

                        @else
                            <p>Vous n'avez pas les droits necessaires</p>
                            <a href="{{ route('bap.show', $bap->id) }}">
                                Retour au projet
                            </a>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection