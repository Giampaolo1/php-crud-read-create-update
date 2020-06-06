
<?php
  // impostiamo la lingua di comunicazione tra js e php (php sta in mezzo tra js e db)
  header('Content-Type: application/json');
  // dati x accesso al db
  $server = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "hoteldb";
  // instauriamo la connessione con il db
  $conn = new mysqli($server, $username, $password, $dbname);
  // verifichiamo che sia andato tutto bene
  if ($conn -> connect_errno) {

    echo json_encode(-1);
    return;
  }
  // Lanciamo la query che ci interessa
  $sql = "

      SELECT *
      FROM configurazioni

  ";

  // Eseguiamo la query
  $res = $conn -> query($sql);

  // piccolo algoritmo che va a testare se ci sono risultati e se si, l'iesimo risultato va nella variabile $conf

  if ($res -> num_rows < 1) {

    echo json_encode(-2);
    return;
  }

  $confs = [];
  while($conf = $res -> fetch_assoc()) {
    // push
    $configurazioni[] = $conf;
  }

  // chiudiamo la connessione
  $conn -> close();
  // codificare i risultati nella lingua di comunicazione tra js e php
  echo json_encode($configurazioni);
