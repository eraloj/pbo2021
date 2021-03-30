<?php

spl_autoload_register(function($class) {
    $class = explode("\\",$class);
    require_once 'application/'. end($class) . '.php';
});