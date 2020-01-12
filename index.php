<!-- TODO TODAY:

REPO: php-crud-read-create-update

GOAL:
creare una pagina che stampi tutte le configurazioni presenti nel DB. Dare inoltre la possibilita' di aggiungere una nuova configurazione (titolo e descrizione) e tentare l'approccio per una update (aggiornamento di una configurazione esistente).
in caso di prematura riuscita di tutto l'esercizio procedere con l'eliminazione di una configurazione esistente
N.B.: qualunque scelta di front-end sara' tollerata -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-CRUD</title>

    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
      <p>[{{ id }}] {{ title }} - {{ description }}</p>
    </script>

    <!-- CSS: MY STYLE -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

  </head>
  <body>
    <h1>Hello World</h1>

    <div id="container" class="container">
    </div>
  </body>
</html>
