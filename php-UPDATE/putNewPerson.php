<?php

  header("Content-Type: application/json");

  // echo json_encode($_POST);

  list($name, $lastname) = [ $_POST["name"],
                             $_POST["lastname"]
                           ];
  // echo json_encode($name);

  // verifica che ci sono tutti i campi
  if (!$name || !$lastname) {
    echo json_encode(-2);
    return;
  }

  // istaurazione connessione

  header("Content-Type: application/json");

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "listautenti";

  // CONNECT
  $conn = new mysqli($servername,$username,$password,$dbname);
  // Check connection
  if ($conn -> connect_errno) {
    echo json_encode(-1);
    return;
  }

  // echo json_encode($_POST);

  // TECNICA di PREPARE e BIND per la query

  $sql = "

    INSERT INTO persons (name, lastname)
    VALUES (?,?)

  ";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $name, $lastname);

  $res = $stmt -> execute();
  echo json_encode($res);
