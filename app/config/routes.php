<?php
defined('BASEPATH') OR die('404. That’s an error.');

foreach(glob("app/routes/*.php") as $filename)
{
    require_once($filename);
}
