@extends('tpl::template')

@section('content')
	<hr />

	@foreach(['tpl','userman'] as $option_key)
		@include('opt::_formPanel', array(
			'option_key' => $option_key
		))
	@endforeach

@stop

@section('#main')
	<div id="main" class="container">
		<div>
			@yield('content')
		</div>
	</div><!-- /.container -->
@stop