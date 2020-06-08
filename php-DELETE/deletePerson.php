<?php

header("Content-Type: application/json");

$id = $_POST["id"];

if (!$id) {
  echo json_encode(-2);
  return;
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "listautenti";

// CONNECT

$conn = new mysqli($servername,$username,$password,$dbname);

  // Check connection
  if ($conn -> connect_errno) {

  echo json_encode(-2);
  return;
  }

// La query

$sql = "

DELETE FROM persons
WHERE id = ?

";

// ricaviamo risultato
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
// eseguiamo query
$res = $stmt -> execute();

// Chiudiamo la connessione
$conn -> close();
// Codifichiamo
echo json_encode($res);
