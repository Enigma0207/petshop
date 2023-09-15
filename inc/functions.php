<!-- pour debugage en cas de pepin -->

<?php
function debug($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}
function debugDie($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
    die;
}
