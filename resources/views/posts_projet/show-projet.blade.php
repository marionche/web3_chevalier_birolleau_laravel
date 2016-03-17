@extends('layouts.app')

@section('content')
    @include('errors.message')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $bap->title }}</div>

                <div class="panel-body">
                    {{ $bap->content }}

                    @if(Auth::check()
                    && (Auth::user()->id == $bap->user_id
                    || Auth::user()->isAdmin))

                        {!!  Form::model($bap,array(
                     'route' => array('bap.destroy', $bap->id),
                     'method' => 'DELETE'))
                     !!}

                    {!! Form::submit('Supprimer', ['class' => 'form-control']) !!}

                    {!! Form::close() !!}

                        <a href="{{ route('bap.edit', $bap->id) }}">
                            Modifier l'article
                        </a>

                    @endif



                    <a href="{{ route('bap.index') }}">
                        Retour aux projets
                    </a>

                    <div class="panel-body">

                        <h3>Commentaires</h3>

                        @foreach ($bap->comments as $comment)
                            <p>
                                <strong>{{ $comment->user->name }}</strong>
                                 <br>
                                {{ $comment->comment }}
                            </p>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection