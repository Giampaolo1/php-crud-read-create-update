<?php

  header('Content-Type: application/json');

  $server = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "hoteldb";

  $conn = new mysqli($server, $username, $password, $dbname);
  if ($conn -> connect_errno) {

    echo json_encode(-1);
    return;
  }

  $sql = "

      SELECT *
      FROM configurazioni

  ";

  $res = $conn -> query($sql);

  if ($res -> num_rows < 1) {

    echo json_encode(-2);
    return;
  }

  $confs = [];
  while($conf = $res -> fetch_assoc()) {
    $configurazioni[] = $conf;
  }

  echo json_encode($configurazioni);
