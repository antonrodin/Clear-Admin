<?php
/**
 * Home controller class
 *
 * @author Anton Zekeriev Rodin
 */
class Home extends CI_Controller {
    
    function  __construct() {
        parent::__construct();
    }
    
    function index() {
        echo "Hello World!";
    }

}
?>
