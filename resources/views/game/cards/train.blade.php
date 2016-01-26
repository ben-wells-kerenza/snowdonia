<?php if (empty($train)) return; ?>
<div class="train card front">
	<section class="identification">
    	<span class="card_no">{{ $train->id }}</span>
    	<span class="name">{{ $train->name }}</span>
    </section>
    <section class="cost">
		<ul>
 	   	<?php
 	   	$resource = (
 	   		is_array($train->cost['resource']) ?
 	   		$train->cost['resource'] :
 	   		[$train->cost['resource']]
 	   	);
 	   	$amount = (
 	   		is_array($train->cost['amount']) ?
 	   		$train->cost['amount'] :
 	   		[$train->cost['amount']]
 	   	);
 	   	foreach($resource as $k=>$r)
 	   		echo '<li>'.$r.' '.$amount[$k].'</li>';
 	   	?>
 	   	</ul>
    </section>
    <section class="power">
    	<span class="description">{{ $train->power['description'] }}</span>
    </section>
</div>