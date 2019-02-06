<?php
    //$answer = $_POST['ans1'];
    
    
    
    
    function compare($userAnswer, $expectedAnswer) {
        

        if(empty($userAnswer)) {
            echo "<h1><p class='empty'>Please input code.</p></h1>";
        } 
        
        if($userAnswer == $expectedAnswer) {
            echo "<h1><p class='correct'>CORRECT</p></h1>";
            
        } 
        else {
            echo "<h1><p class='wrong'>WRONG</p></h1>";
        }
        echo "<h1>".$userAnswer."</h1>";
        echo "<br>";
        echo "<h1>".$expectedAnswer."</h1>";
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Learn PHP</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <style type="text/css">
          .correct {
              color: green;
          }
          .wrong {
              color: red;
          }
          .empty {
              color: #F29122;
          }
      </style>
        
    </head>
    
    <body>
        
        <div class="jumbotron text-center">
            <h1>PHP Questions</h1>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p>Enter PHP code to store the word <strong>pizza</strong> in the variable <strong>food</strong>.</p>
                </div>
                <div class="col-sm-4">
                    <form method="post">
                        <input type="text" name="ans1"/>
                        <input type="submit" value="RUN CODE"/>
                    </form>
                    <?php compare($_POST['ans1'],"$"."food = 'pizza';"); ?>
                </div>
            </div>
        </div>
        
        
    </body>
    
</html>