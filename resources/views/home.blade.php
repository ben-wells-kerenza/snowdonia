@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Game</div>

                <div class="panel-body">
                    <div class="center-block">
                        <a href="{{ url('/game/new') }}" class="btn btn-primary">
                            Start
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
