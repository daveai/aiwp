<?php
/**
 * @package ai_core
 * @version 1.0
 */
/*
Plugin Name: Ai Core
Plugin URI: http://www.agileinf.com
Description: Agileinf Dedicated plugin.
Author: Dave
Version: 1.0
Author URI: http://www.agileinf.com
*/
class AiCore_Plugin {
	private $templatePath = WP_PLUGIN_URL . "/ai-core/templates";
	function __construct() {
		add_shortcode("quote", array($this, 'quote'));
	}

	public function quote() {
	   include($this->templatePath . "/mytemplate.php");
	}
}
$obj = new AiCore_Plugin();
