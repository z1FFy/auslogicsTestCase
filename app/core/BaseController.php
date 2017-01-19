<?php

/**
 * Base controller class
 */
class Controller {
    function render($name, $data= []) {
        require_once ("app/views/{$name}.php");
    }
}