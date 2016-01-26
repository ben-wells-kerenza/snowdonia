@inject('deck', 'App\Deck')
<ul>
@foreach($action_deck->get($deck::DISPLAY) as $action)
    <li>
    	@include('game.cards.action', [
			'action' => $action,
    	])
    </li>
@endforeach
</ul>
