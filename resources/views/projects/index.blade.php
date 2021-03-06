@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
            </div>
            @foreach($list as $project)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('project.show', $project->id) }}">
                               <h4>{{ $project->name}}</h4>
                            </a>
                        </div>

                        <div class="panel-body">
                            <h4>Profil Client</h4>
                            <p>{{ $project->name_author }}</p>
                            <p>{{ $project->demande }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                {!! $list->links() !!}
            </div>
        </div>
    </div>
@endsection