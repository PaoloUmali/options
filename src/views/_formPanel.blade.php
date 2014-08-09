	<!-- form panel -->
<div class="panel panel-default">
	<div class="panel-heading">Edit {{Str::title($option_key)}}</div>
	<div class="panel-body">
		@include('opt::form.'.$option_key)
	</div>
</div>