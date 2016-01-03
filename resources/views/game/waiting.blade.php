@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Game Lounge</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <form role="form" method="POST" action="{{ url('/game/waiting', ['game'=>$game->id]) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="game_id" value="{{ $game->id }}" />
                        <fieldset class="form-group row">
                            <div class="col-md-3">
                                @foreach($users as $user)
                                @include('user.avatar', [
                                    'user' => $user,
                                ])
                                    @if(Auth::user()->id === $user->id || Auth::user()->id === $game->creator->id)
                                    @include('form.checkbox', [
                                        'label' => (Auth::user()->id === $user->id?'Leave':'Remove'),
                                        'name' => 'remove',
                                        'array' => TRUE,
                                        'value' => $user->id,
                                    ])
                                    @endif
                                @endforeach
                            </div>
                            @if (count($users)%4 != 0)
                            <div class="col-md-{{ (4-(count($users)%4))*3 }}">&nbsp;</div>
                            @endif
                        </fieldset>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                @if(count($users) == $game->no_players && Auth::user()->id === $game->creator->id)
                                <a href="{{ url('/game/play', ['game' => $game->id]) }}" class="btn btn-primary">
                                    Start
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection