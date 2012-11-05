<?php
//   more about routing

//  more about controllers

echo($_SERVER['REQUEST_METHOD']);

$sample = array(
    'api_info'=>'json',
    'name'=>'My Name',
    'email'=>'my_email@example.com',
    'avatar'=>'http://www.google.com/images/logos/logo.gif'
);

  header('Content-Type: application/json');
  echo json_encode($sample);

?>
