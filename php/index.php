
<!DOCTYPE html>
<html>
    <head>
        <title>Art Decode</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <style type="text/css">
            a {
                color: black;
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
                    <div class="jumbotron text-center">
                        <h1>Art Decode</h1>
                        <p>Practice your coding skills and perfect your art</p>
                    </div>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <h3><a href="./php.php">PHP</a></h3>
                                <p>Server-side scripting</p>
                                <p>Hypertext Preprocessor</p>
                            </div>
                            <div class="col-sm-4">
                                <h3><a href="./js.php">Javascript/JQuery</a></h3>
                                <p>HTML DOM Tree traversal and manipulation</p>
                                <p>CSS animation</p>
                                <p>AJAX</p>
                            </div>
                            <div class="col-sm-4">
                                <h3><a href="./html.php">HTML/CSS</a></h3>
                                <p>Hypertext Markup Language</p>
                                <p>Cascading Style Sheet</p>
                                <p>Create</p>
                            </div>
                        </div>
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