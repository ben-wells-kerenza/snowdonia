@inject('deck', 'App\Deck')
<ul>
@foreach($station_deck->get($deck::DISPLAY) as $station)
	@for($i = 0; $i < $station->track; $i++)
	@include('game.cards.track', [
		'track' => $track_deck->shift(),
	])
	@endfor
	@include('game.cards.station', [
		'station' => $station,
	])
@endforeach
</ul>