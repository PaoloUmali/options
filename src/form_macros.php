<?php

// add default
Form::macro('option_text', function($name, $value = null, $options = []){
	return Form::text($name, $value, $options + ['class'=>'form-control']);
});

Form::macro('option_horizontal_text_group', function($name, $value = null, $options = array(), $label=null, $col1=3,$col2=9, $size='sm'){
	return "<div class=\"form-group form-group-$size\">".
	Form::label($name, $label, ['class'=>"col-$size-$col1 control-label"]).
	"<div class=\"col-$size-$col2\">".
		Form::option_text($name, $value, $options).
	'</div>'.
'</div>';
});

