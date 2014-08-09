{{Form::model($option, [
'route' => ['options.update', $option->id], 
'method' => 'put', 
'class'=>'form-horizontal'
])}}

		<fieldset>
			<legend>Common</legend>
			<div class="row">
				<div class="col-xs-4">{{Form::option_horizontal_text_group('title')}}</div>
				<div class="col-xs-4">{{Form::option_horizontal_text_group('id', null,  ['readonly'])}}</div>
				<div class="col-xs-4">{{Form::option_horizontal_text_group('key', null,  ['readonly'])}}</div>
			</div><!--.row-->
		</fieldset>

		<fieldset>
			<legend>Icons</legend>
			{{Form::option_horizontal_text_group('value[img_favicon]', null, [], 'Favicon')}}
			@foreach([57, 72, 114, 144] as $val0)
			{{Form::option_horizontal_text_group("value[img_ati{$val0}]", null, [], 'Apple Icon '.$val0)}}
			@endforeach
		</fieldset>

		<fieldset>
			@if(isset($option->value->css_header))
			<legend>CSS</legend>
				@foreach($option->value->css_header as $key1 => $val1)
				{{Form::option_horizontal_text_group("value[css_header][$key1]", $val1, [], 'CSS File '.$key1)}}
				@endforeach
			@endif
		</fieldset>

		<fieldset>
			@if(isset($option->value->js_header) && !empty($option->value->js_header))
			<legend>JS before &lt;/head&gt;</legend>
				@foreach($option->value->js_header as $key2 => $val2)
				{{Form::option_horizontal_text_group("value[js_header][$key2]", $val2, [], 'JS hFile '.$key2)}}
				@endforeach
			@endif
		</fieldset>

		<fieldset>
			@if(isset($option->value->js_footer))
			<legend>JS before &lt;/body&gt;</legend>
				@foreach($option->value->js_footer as $key3 => $val3)
				{{Form::option_horizontal_text_group("value[js_footer][$key3]", $val3, [], 'JS fFile '.$key3)}}
				@endforeach
			@endif
		</fieldset>


<hr>

	<div class="pull-right">
		<button class="btn btn-default">Previous</button>
		<button class="btn btn-default">Default</button>
	</div>
	{{Form::submit('Submit', ['class'=>"btn btn-primary"])}}
{{Form::close()}}