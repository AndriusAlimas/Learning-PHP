<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data types: strings</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <style>
          h1{
              color: purple;
          }
      </style>
  </head>
  <body>
      <div class="container-fluid">
        <h1>Strings:</h1>
          <div>
            <?php
              $name ='Andrius';
              echo 'Name: ' . $name . '<br />';
              $string = "Andriu's nice";
              echo   $string . "<br />";       
              
              $string2 ="My friend $name is nice";
              ?>
          </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>