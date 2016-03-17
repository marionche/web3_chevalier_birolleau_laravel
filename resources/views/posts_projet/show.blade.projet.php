@extends('layouts.app')

@section('content')
    @include('errors.message')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>

                <div class="panel-body">
                    {{ $post->content }}

                    @if(Auth::check()
                    && (Auth::user()->id == $post->user_id
                    || Auth::user()->isAdmin))

                        {!!  Form::model($post,array(
                     'route' => array('post.destroy', $post->id),
                     'method' => 'DELETE'))
                     !!}

                    {!! Form::submit('Supprimer', ['class' => 'form-control']) !!}

                    {!! Form::close() !!}

                        <a href="{{ route('post.edit', $post->id) }}">
                            Modifier l'article
                        </a>

                    @endif



                    <a href="{{ route('post.index') }}">
                        Retour aux articles
                    </a>

                    <div class="panel-body">

                        <h3>Commentaires</h3>

                        @foreach ($post->comments as $comment)
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