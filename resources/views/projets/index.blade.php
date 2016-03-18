@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
            </div>
            @foreach($list as $projet)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('projet.show', $projet->id) }}">
                               <h4>{{ $projet->name}}</h4>
                            </a>
                            <div class="text-right">
                                @if($projet->status == 0)
                                    <h5>Oupsi il va falloir un petit peu patienter ^^ <i class="fa fa-circle-o"></i></h5>
                                @elseif($projet->status == 1)
                                    <h5>Oups votre projet n'est pas accepté <i class="fa fa-times"></i></h5>
                                @elseif($projet->status == 2)
                                    <h5>Wouah votre projet est accepté ! :)  <i class="fa fa-check"></i></h5>
                                @endif
                            </div>
                        </div>

                        <div class="panel-body">
                            <h4>Profil Client</h4>
                            <p>{{ $projet->name_author }}</p>
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