<?php


$sample = array(
    'name'=>'My Name',
    'email'=>'my_email@example.com'
);

header('Content-Type: application/json');
echo json_encode($sample);

?>
