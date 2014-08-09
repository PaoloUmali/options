@extends('opt::template')

@section('#main')
	<div	id="main" role="main">
	@foreach($option_models as $option)
		@include('opt::_formPanel', array(
			'option' => $option,
		))
	@endforeach
	</div><!--	/#main	-->
@stop

@section('#sidebar')
	<div	id="sidebar">
		<div class="panel panel-default">
			<div class="panel-heading">
				Options
			</div>
			<ul class="list-group">
				@foreach(Opt::getSettingsGroups() as $option_key)
				<li class="list-group-item"><a href="#{{$option_key}}_anchor">{{$option_key}}</a></li>
				@endforeach
			</ul>
		</div>
	</div><!--	/#sidebar	-->
@stop
