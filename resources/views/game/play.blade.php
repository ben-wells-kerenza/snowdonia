@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default stock">
                <div class="panel-heading">Stock</div>
                <div class="panel-body">
		    	@include('game.play.stock', [
					'stock_deck' => $game->data->stock_deck,
		    	])
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default actions">
                <div class="panel-heading">Actions</div>
                <div class="panel-body">
		    	@include('game.play.actions', [
					'action_deck' => $game->data->action_deck,
		    	])
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default track">
                <div class="panel-heading">Track</div>
                <div class="panel-body">
		    	@include('game.play.track', [
					'track_deck' => $game->data->track_deck,
					'station_deck' => $game->data->station_deck,
		    	])
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default contracts">
                <div class="panel-heading">Contracts</div>
                <div class="panel-body">
		    	@include('game.play.contracts', [
					'contract_deck' => $game->data->contract_deck,
		    	])
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default trains">
                <div class="panel-heading">Trains</div>
                <div class="panel-body">
		    	@include('game.play.trains', [
					'train_deck' => $game->data->train_deck,
		    	])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
