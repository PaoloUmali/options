<a id="{{$option->key}}_anchor" name="{{$option->key}}_anchor" class="anchor"></a>
<!-- form panel -->
<div class="panel panel-default">
	<div class="panel-heading">{{Str::title($option->title)}} Settings</div>
	<div class="panel-body">
		@include('opt::form.'.$option->key, compact('option'))
	</div>
</div>