<?php 
/*

* Plugin Name: Change Title
* Plugin URI: https://devsoffice.com
* Description: Using this plugin you can add any text or anything on post tile
* Author: Ashiq Hosen
* Author URI: https://devsoffice.com
 * Version: 1.2.0
*/

class Our_First_Plugin{
    public function __construct(){
        add_action("init", array( $this,"initialize") );
    }
    function initialize(){
        add_filter("the_title", array( $this,"change_title") );
    }

    function change_title($post_title){
        $new_title = "<span class='changed_title'>😊</span>" . $post_title;
        return $new_title;
    }
}
new Our_First_Plugin();