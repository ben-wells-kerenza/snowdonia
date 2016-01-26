@inject('deck', 'App\Deck')
@inject('resource', 'App\ORM\Resource')
<ul class="yard iron">
	<?php $iron = $resource::find($resource::IRON); ?>
	@for($i=0; $i<$stock_deck->get($deck::DISPLAY)->where('id', $iron->id)->count(); $i++)
	<li class="block">{{ $iron->name }}</li>
	@endfor
</ul>
<ul class="yard stone">
	<?php $stone = $resource::find($resource::STONE); ?>
	@for($i=0; $i<$stock_deck->get($deck::DISPLAY)->where('id', $stone->id)->count(); $i++)
	<li class="block">{{ $stone->name }}</li>
	@endfor
</ul>
<ul class="yard coal">
	<?php $coal = $resource::find($resource::COAL); ?>
	@for($i=0; $i<$stock_deck->get($deck::DISPLAY)->where('id', $coal->id)->count(); $i++)
	<li class="block">{{ $coal->name }}</li>
	@endfor
</ul>
