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
                <div class="panel-heading">AJOUTER UN ARTICLE</div>

                <div class="panel-body">
                    {!! Form::open(
                    array(
                    'route' => 'post.store',
                    'method' => 'POST'
                    ))
                    !!}

                    <div class="form-group">

                    {!! Form::label('title', 'Titre') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Mon titre'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                        {!! Form::label('content', 'Contenu') !!}
                        {!! Form::textarea('content', '', [
                            'class' =>'form-control',
                            'placeholder' => 'Contenu'
                            ])
                        !!}

                    </div>
                    
                    {!! Form::submit('Publier l\'article',
                    ['class' => 'btn btn-primary'])
                    !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>
</div>
@endsection