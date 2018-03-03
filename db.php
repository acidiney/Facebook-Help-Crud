<?php

$connect = [
  'host' => '127.0.0.1',
  'username' => 'root',
  'password' => '',
  'database_name' => 'test'
];

$con = @mysqli_connect($connect['host'],
                      $connect['username'],
                      $connect['password'],
                      $connect['database_name']
                      );
if($con)
  return [
    "db" => $con,
    "status" => 200
  ];
else
  return [
    "message" => 'Não foi possivel conectar ao banco',
    "status" => 404
  ];
