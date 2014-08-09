{{Form::model(Opt::getModel('tpl'), array('route' => array('option.update', Opt::getModel('tpl')->id), 'method' => 'put'))}}
	<ul>
		<li>{{Form::label('id')}} {{Form::text('id', null, array('disabled'=>'disabled'))}}</li>
		<li>{{Form::label('key')}} {{Form::text('key', null, array('disabled'=>'disabled'))}}</li>
		<li>{{Form::label('value[img_favicon]')}} {{Form::text('value[img_favicon]')}}</li>
		@foreach([57, 72, 114, 144] as $val0)
		<li class="text-info">{{Form::label("value[img_ati{$val0}]")}} {{Form::text("value[img_ati{$val0}]")}}</li>
		@endforeach

	@if(isset(Opt::getModel('tpl')->value->css_header))
		@foreach(Opt::getModel('tpl')->value->css_header as $key1 => $val1)
		<li class="text-success">{{Form::label("value[css_header][$key1]")}} {{Form::text("value[css_header][$key1]", $val1)}}</li>
		@endforeach
	@endif

	@if(isset(Opt::getModel('tpl')->value->js_header))
		@foreach(Opt::getModel('tpl')->value->js_header as $key2 => $val2)
		<li class="text-danger">{{Form::label("value[js_header][$key2]")}} {{Form::text("value[js_header][$key2]", $val2)}}</li>
		@endforeach
	@endif

	@if(isset(Opt::getModel('tpl')->value->js_footer))
		@foreach(Opt::getModel('tpl')->value->js_footer as $key3 => $val3)
		<li class="text-warning">{{Form::label("value[js_footer][$key3]")}} {{Form::text("value[js_footer][$key3]", $val3)}}</li>
		@endforeach
	@endif

	</ul>
	{{Form::submit()}}
{{Form::close()}}

<script>
	console.log({{Opt::getValueInJson('tpl')}});
</script>