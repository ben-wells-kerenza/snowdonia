<?php if (empty($contract)) return; ?>
@if (!isset($side) || $side == 'front')
<div class="contract front">
 	<section class="points">
 	   	<span class="requirements">
 	   		<span class="label">Requires: </span>
 	   			<ul>
 	   			<?php
 	   			$resource = (
 	   				is_array($contract->requirements['resource']) ?
 	   				$contract->requirements['resource'] :
 	   				[$contract->requirements['resource']]
 	   			);
 	   			if (isset($contract->requirements['amount']))
 	   			{
	 	   			$amount = (
	 	   				is_array($contract->requirements['amount']) ?
	 	   				$contract->requirements['amount'] :
	 	   				[$contract->requirements['amount']]
	 	   			);
	 	   			foreach($resource as $k=>$r)
	 	   				echo '<li>'.$r.' '.$amount[$k].'</li>';
 	   			}
 	   			else
 	   			{
 	   				foreach($resource as $k=>$r)
 	   					echo '<li>'.$r.' / '.$contract->requirements['points'].'</li>';
 	   			}
 	   			?>
 	   			</ul>
 	   	</span>
    	<span class="points">
    		<span class="label">Points: </span>
    			{{ $contract->points }}
    	</span>
	</section>
    <section class="power">
    	<span class="description">{{ $contract->power['description'] }}</span>
    </section>
    <span class="card_no">{{ $contract->id }}</span>
</div>
@else
<div class="contract back">
 	<section class="weather">
 		@include('game.components.weather.disc', [
 			'weather' => $contract->weather,
 		])
    </section>
</div>
@endif
