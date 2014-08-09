@extends('tpl::template')

@section('#middle')
<div	id="middle"	class="container">
	<div	class="row">
		<div	class="col-xs-3">
			@section('#sidebar')
			<div	id="sidebar">
				<div class="panel panel-default">
					<div class="panel-heading">
						Items
					</div>
					<ul class="list-group">
						@foreach(['item1', 'item2'] as $item)
						<li class="list-group-item">{{$item}}</li>
						@endforeach
					</ul>
				</div>
			</div><!--	/#sidebar	-->
			@show
		</div>
		<div	class="col-xs-9">
			@section('#main')
			<div	id="main" role="main">
			Main
			</div><!--	/#main	-->
			@show
		</div>
	</div><!--	/.row	-->
</div><!--	/.container	-->
@stop