<?php

	class CookieCutterAdmin extends ModelAdmin{
		
		public static $managed_models = array(
			'CookieCutout'
		);
		
		static $url_segment = 'cookie-cutout';
		static $menu_title = 'Cookie Cutout';
		
	}