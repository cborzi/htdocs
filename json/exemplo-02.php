<?php


$json = '[{"nome":"Carlos","idade":49},{"nome":"Lucas","idade":1}]';

//transforme em array
$data = json_decode($json,true);

//transforme em objeto
$data = json_decode($json);

var_dump($data);


?>