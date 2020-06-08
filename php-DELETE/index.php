<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- J query -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS -->
    <script src="script.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>

    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
      <p>
        <input class="changePers" type=button value="Update" data-id="{{id}}">
        <input class="deletePers" type=button value="Delete" data-id="{{id}}">
        [{{id}}] {{ name }} {{ lastname }}
      </p>
    </script>

    <title>BE Test</title>
  </head>
  <body>

    <div id="container" class="container">
    </div>

    <p>------------------------------------------------------</p>

    <form id="myForm">
    <label for="name">Name:</label>
    <input type="text" name="name" value=""><br>
    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" value=""><br>
    <input type="submit" name="submit" value="New Person">
    </form>

    <p>------------------------------------------------------</p>



  </body>
</html>
