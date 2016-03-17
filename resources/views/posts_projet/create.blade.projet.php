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

                    {!! Form::label('title', 'Titre') !!}
                    {!! Form::text('title', '', [
                        'class' =>'form-control', 
                        'placeholder' => 'Mon projet'
                        ]) 
                    !!}

                    </div>

                    <div class="form-group">

                        {!! Form::label('content', 'Contenu') !!}
                        {!! Form::textarea('content', '', [
                            'class' =>'form-control',
                            'placeholder' => 'Commanditaire du Projet'
                            ])
                        !!}

                        {!! Form::label('content', 'Contenu') !!}
                        {!! Form::textarea('content', '', [
                            'class' =>'form-control',
                            'placeholder' => 'Adresse postale'
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