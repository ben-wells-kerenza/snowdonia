@inject('deck', 'App\Deck')
<p>Discard: 
	@include('game.cards.contract', [
		'contract' => $contract_deck->has($deck::DISCARD)
			? $contract_deck->get($deck::DISCARD)->last()
			: null,
	])
</p>
<p>Display:</p>
<ul>
@foreach($contract_deck->get($deck::DISPLAY) as $contract)
    <li>
    	@include('game.cards.contract', [
			'contract' => $contract,
    	])
    </li>
@endforeach
</ul>
<p>Draw:
	@include('game.cards.contract', [
		'contract' => $contract_deck->get($deck::DRAW)->first(),
		'side' => 'back',
	])
</p>
