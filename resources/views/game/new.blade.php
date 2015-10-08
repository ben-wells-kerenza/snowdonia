@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Game</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/game/new') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						@include('form.input', [
                                                    'label' => 'No. Players',
                                                    'name' => 'no_players',
                                                    'type' => 'number',
                                                    'default' => 2,
                                                    'attr' => [
                                                        'maxlength' => 1,
                                                        'min' => 1,
                                                        'max' => 5,
                                                        'step' => 1,
                                                    ]
                                                ])

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Create
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection