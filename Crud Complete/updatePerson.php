<?php
header("Content-Type: application/json");

list($id, $name, $lastname) = [
  $_POST["id"],
  $_POST["name"],
  $_POST["lastname"],
];

if (!$id || !$name || !$lastname) {
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

UPDATE persons
SET name = ?,
    lastname = ?
WHERE id = ?

";
// ricaviamo risultato
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $name, $lastname, $id);
// eseguiamo query
$res = $stmt -> execute();

// codifichiamo
// echo json_encode([$id , $name , $lastname]);

// Chiudiamo la connessione
$conn -> close();

echo json_encode($res);
