@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                @if(Auth::check() && Auth::user()->id == $profile->id)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Je modifie mon profil</h4>
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
                            {!! Form::label('email', 'Adresse email de l utilisateur', [
                            'class' => 'col-md-4 control-label'
                            ]) !!}
                            <div class="col-md-5">
                                {!! Form::email('email', $profile->email, [
                                'class' => 'form-control'
                                ])
                            !!}
                            </div>
                        </div>

                        <div class="text-center">
                            {!! Form::submit('Enregistrer vos modifications :) ',
                                ['class' => 'btn btn-primary'])
                            !!}
                        </div>

                        {!! Form::close() !!}



                        <a href="{{ route('profile.show', Auth::user()->id) }}">Revoir mon profil</a>
                    </div>
                </div>
                @else
                    <div class="alert-danger alert">
                        <div class="text-center">
                            <p> Attention ce n est pas votre profil !</p>
                        </div>
                        <a href="{{ route('profile.show', Auth::user()->id) }}">Revoir mon profil</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection