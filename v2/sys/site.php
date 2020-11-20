<?php
function get_input($key)
{
    return isset($_GET[$key]) ? $_GET[$key] : false;
}

function post_input($key)
{
    return isset($_POST[$key]) ? $_POST[$key] : false;
}

function head()
{
    require('site/widget/header.php');
}

function menu()
{
    require('site/widget/menu.php');
}

function hoverbar()
{
    require('site/widget/hoverbar.php');
}

function preloading()
{
    require('site/widget/preloading.php');
}

function content($name)
{
    require('site/widget/' . $name . '-content.php');
}
