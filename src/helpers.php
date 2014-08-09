<?php

use Paoloumali\Options\OptFacade as Opt;

if ( ! function_exists('opt_getValue'))
{
	function opt_getValue($key)
	{
		return Opt::getValue($key);
	}
}
