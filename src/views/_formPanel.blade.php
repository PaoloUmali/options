<a id="{{$option_group_key}}_anchor" name="{{$option_group_key}}_anchor" class="anchor"></a>
<!-- form panel -->
<div class="panel panel-default">
	<div class="panel-heading">{{Str::title($option->title)}} Settings</div>
	<div class="panel-body">
		@include('opt::form.'.$option_group_key)
	</div>
</div>