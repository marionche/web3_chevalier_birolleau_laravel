@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @include('errors.message')
            @foreach($list as $bap)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('bap.show' , $bap->id) }}">
                                {{ $bap->title }}
                            </a>

                        </div>
                        <div class="panel-body">
                            {{ $bap->content }}
                        </div>
                    </div>
                </div>
            @endforeach
            {!! $list->links() !!}}
        </div>
    </div>
@endsection