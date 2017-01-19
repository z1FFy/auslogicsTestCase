<?php
/**
 * Getting request referer
 *
 * @return mixed
 */
function getRequestReferer(){
    if(isset($_SERVER['HTTP_REFERER'])) {
        return $_SERVER['HTTP_REFERER'];
    }
}


/**
 * Getting site request url
 *
 * @return mixed
 */
function getRequestUrl(){
    if (isset($_SERVER['REQUEST_URI']))
       return $_SERVER['REQUEST_URI'];
}
