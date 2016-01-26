@inject('deck', 'App\Deck')
<ul>
@foreach($train_deck->get($deck::DISPLAY) as $train)
    <li>
    	@include('game.cards.train', [
			'train' => $train,
    	])
    </li>
@endforeach
</ul>
