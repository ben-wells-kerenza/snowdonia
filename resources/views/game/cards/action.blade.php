<div class="card front action phase_{{ $action->phase_letter }}">
	<section class="phase">
		<span class=""phase"">{{ $action->phase_letter }}</span>
	</section>
	<section class="places">
		<ul>
			@for($i=1; $i<=$action->spaces; $i++)
			<li class="space">{{ $i }}</li>
			@endfor
		</ul>
	</section>
	<section class="description">
		<p>{{ $action->description }}</p>
	</section>
</div>