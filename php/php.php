<?php

    function checkAnswer($userAnswer, $expectedAnswer) {
        if( $expectedAnswer == (getPost($userAnswer))) {
            echo "<h1>WELL DONE</h1>";
        } else {
            echo "<h1>TRY AGAIN</h1>";
            echo $userAnswer;
            echo "<br>";
            echo $expectedAnswer;
        }
    }
    
    function getPost($thePost) {
        return $_POST['.$thePost.'];
    }
    
    function modal() {
        echo '<div class="container">
  <h3>Answer</h3>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Show answer</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">The answer is:</h4>
        </div>
        <div class="modal-body">
          <p>idk</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
';
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Art Decode</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <style type="text/css">
            .box {
                background-color: #EFEEEF;
            }
            
            p {
                font-size: 20px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="./php.php">PHP <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="./index.php">Home</a> </li>
                </ul>
                <form class="form-inline my-2 my-md-0"> </form>
            </div>
        </nav>
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="./test.php">Test Yourself</a> </li>
                    <li> <a href="./basics.php">Intro PHP</a> </li>
                    <li> <a href="./forms.php">Forms</a> </li>
                    <li> <a href="./sql.php">MySQL Database</a> </li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <!--CONTENT GOES HERE-->
                    
                    <div class="jumbotron text-center">
                        <h1>PHP Questions</h1>
                    </div>
                    <h1>Variables</h1><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                 <?php modal(); ?>
                            </div>
                            <div class="col-sm-4">
                                <form method="post">
                                    <input type="text" name="ans1"/>
                                    <input type="submit" value="RUN"/>
                                </form>     
                                <?php checkAnswer($_GET['ans1'],"$"."food = 'pizza';") ?>
                            </div>         
                            
                            <div class="col-sm-4">
                                <div class="box">
                                    <p>Write PHP code to store the word <strong>pizza</strong> in the variable <strong>food</strong></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                 <?php modal(); ?>
                            </div>
                            <div class="col-sm-4">
                                <form method="post">
                                    <input type="text" name="ans2"/>
                                    <input type="submit" value="RUN"/>
                                </form>                                
                            </div>         
                            
                            <div class="col-sm-4">
                                <div class="box">
                                    <p>Write PHP code to store the name <strong>Mellow Yellow</strong> in the variable <strong>me</strong></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                 <?php modal(); ?>
                            </div>
                            <div class="col-sm-4">
                                <form method="post">
                                    <input type="text" name="ans3"/>
                                    <input type="submit" value="RUN"/>
                                </form>                                
                            </div>         
                            
                            <div class="col-sm-4">
                                <div class="box">
                                    <p>Write PHP code to store the string <strong>my president</strong> in the variable <strong>not</strong></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                 <?php modal(); ?>
                            </div>
                            <div class="col-sm-4">
                                <form method="post">
                                    <input type="text" name="ans4"/>
                                    <input type="submit" value="RUN"/>
                                </form>                                
                            </div>         
                            
                            <div class="col-sm-4">
                                <div class="box">
                                    <p>Create a var </p>
                                </div>
                            </div>
                            

                    
                        </div><!--END row DIV -->
                    </div>
                    <!--CONTENT GOES HERE-->
               
                </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->
        <!-- Bootstrap core JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script>
        
    </body>
</html>