<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../JS/labyrinth.js"></script>
    <script src="../JS/konami.js"></script>
</head>
<?php
include "../HTML/header.html";
?>
<body>
    <section class="container-fluid content">
        <div class="row">    
            <div class="col-md-6">
                <table id="labyrinthe">
                </table>
            </div>
        </div>
    </section>

    <style>.content {
        padding : 20px;
      }
      
      #labyrinthe tr {
          height: 30px;
      }
      
      #labyrinthe td {
          width: 30px;
      }</style>
    
</body>
</html>