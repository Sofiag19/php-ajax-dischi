<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>CON JS</title>
  </head>
  <body>
    <header>
      <img src="https://images-eu.ssl-images-amazon.com/images/I/51rttY7a%2B9L.png" alt="">
    </header>

    <div id="container-dischi">

    </div>


    <!-- template -->
    <script id="hb-disco" type="text/x-handlebars-template">
      <div class="thumb-disco">
        <img src="{{poster}}" alt="">
        <h2>{{title}}</h2>
        <h4>{{author}}</h4>
        <p>{{year}}</p>
      </div>
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.4.2/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
