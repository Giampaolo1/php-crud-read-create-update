<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- J query -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS -->
    <script src="script.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
      <p> [{{id}}] {{ name }} {{ lastname }}</p>
    </script>

    <title>BE Test</title>
  </head>
  <body>

    <div id="container" class="container">
    </div>

    <p>------------------------------------------------------</p>

    <form id="myForm">
    <label for="name">Name:</label>
    <input type="text" name="name" value="new n deb"><br>
    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" value="new s deb"><br>
    <input type="submit" name="submit" value="Nuova persona">
    </form>


  </body>
</html>
