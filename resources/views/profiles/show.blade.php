@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                @if(Auth::check() && Auth::user()->id == $profile->id)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>Mes petites informations</h4>
                    </div>
                    <div class="panel-body">

                        {!! Form::model($profile,
                        array(
                        'route' => array('profile.update', $profile->id),
                        'method' => 'PUT',
                        'class' => 'form-horizontal'
                        )) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nom de l utilisateur', [
                            'class' => 'col-md-4 control-label',
                            ]) !!}
                            <div class="col-md-5">
                                {!! Form::text('name', $profile->name, [
                                'class' => 'form-control'
                                ])
                            !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Adresse mail de l utilisateur', [
                            'class' => 'col-md-4 control-label'
                            ]) !!}
                            <div class="col-md-5">
                                {!! Form::email('email', $profile->email, [
                                'class' => 'form-control'
                                ])
                            !!}
                            </div>
                        </div>

                        {!! Form::close() !!}

                        {!! Form::model($profile,
                            array(
                                'route' => array('profile.destroy', $profile->id),
                                'method' => 'DELETE'))
                        !!}


                        <div class="text-center">
                            <a class="btn btn-warning" href="{{ route('profile.edit', Auth::user()->id) }}">Modifier mon profil</a>

                            {!! Form::submit('Suppression de mon profil', ['class' => 'btn btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

                @else
                    <div class="alert-danger alert">
                        <div class="text-center">
                            <p>Ce n'est pas votre profil</p>
                        </div>
                        <a href="{{ route('profile.show', Auth::user()->id) }}">Retour à mon profil</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection