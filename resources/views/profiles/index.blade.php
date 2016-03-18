@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
            </div>

            @foreach($users as $profile)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('profile.edit', $profile->id) }}">
                                <h4>{{ $profile->name }}</h4>
                            </a>

                        </div>

                        <div class="panel-body">
                            <h4>{{ $profile->email }}</h4>
                            {!! Form::model($profile,
                            array(
                                'route' => array('profile.destroy', $profile->id),
                                'method' => 'DELETE'))
                            !!}


                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection