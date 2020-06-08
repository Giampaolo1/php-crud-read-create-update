<?php

    header("Content-Type: application/json");

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "listautenti";

  // CONNECT

  $conn = new mysqli($servername,$username,$password,$dbname);

  // Check connection

  if ($conn -> connect_errno) {
    echo "connection fail: " . $conn -> connect_errno;
  }

  // La query

  $persons = [];
  $sql = "

  SELECT * FROM persons

  ";

  // scaricare i risultati

  $res = $conn -> query($sql);
  if ($res -> num_rows > 0) {
    while ($row = $res -> fetch_assoc()) {
      $persons[] = $row;
    }
  }

  // Chiudiamo la connessione
  $conn -> close();

  // codifichiamo
  echo json_encode($persons);



  // $result = mysqli_query($db, "SELECT * from `persons`")
  // $json_array = array();
  // while ($row = mysqli_fetch_assoc($result)) {
  //   $json_array[] = $row;
  // }
  // print(json_encode($json_array));
  // mysqli_close($db);
