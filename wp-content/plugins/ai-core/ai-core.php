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
	private $posts;
	function __construct() {
		add_shortcode("posts_from_category_1", array($this, 'posts_from_category_1'));
	}

	public function posts_from_category_1( $atts ) {
		ob_start();
		global $posts;
		$args = array('category_name' => $atts['category_slug'] );
		$posts = get_posts( $args );			
		$this->render($posts);
	   	return ob_get_clean();
	}

	public function render($posts){
		?>
		<pre>
			<?php //print_r($posts); ?>
		</pre>
		<?php
	}
}
$obj = new AiCore_Plugin();
