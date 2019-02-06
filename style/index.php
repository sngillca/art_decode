
<!DOCTYPE html>
<html>
    <head>
        <title>Learn PHP</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="./styles.css" type="text/css" />
        <style type="text/css">
            .correct {
                color: green;
            } 
            
            .wrong {
                color: red;
            }
        </style>
    </head>
    
    <body>
        <nav class="navbar navbar-inverse sidebar" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			            </button>
			            <a class="navbar-brand" href="#">Brand</a>
			     </div>
			     <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			         <ul class="nav navbar-nav">
			             <li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
			             <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
			             <li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
			             <li class="dropdown">
			                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
			                 <ul class="dropdown-menu forAnimate" role="menu">
			                     <li><a href="#">Action</a></li>
						         <li><a href="#">Another action</a></li>
						         <li><a href="#">Something else here</a></li>
						         <li class="divider"></li>
						         <li><a href="#">Separated link</a></li>
						         <li class="divider"></li>
						         <li><a href="#">One more separated link</a></li>
					        </ul>
				        </li>
				        <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				        <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				        <li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
				        <li class="dropdown">
				            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
				            <ul class="dropdown-menu forAnimate" role="menu">
				                <li><a href="#">Action</a></li>
				                <li><a href="#">Another action</a></li>
				                <li><a href="#">Something else here</a></li>
						        <li class="divider"></li>
						        <li><a href="#">Separated link</a></li>
						        <li class="divider"></li>
						        <li><a href="#">One more separated link</a></li>
					        </ul>
				        </li>
			        </ul>
		        </div>
	        </div>
        </nav>
        <div class="main">
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
                        <?php checkAnswer($_POST['ans1'],"$"."food = 'pizza';"); ?>
                    </div>
                    <div class="col-sm-4">
                        <?php modal() ?>
                    </div>

                 </div>
            </div>
            
        </div>
    </body>
    
    
    <script type="text/javascript">
        function htmlbodyHeightUpdate(){
            var height3 = $( window ).height()
		    var height1 = $('.nav').height()+50
		    height2 = $('.main').height()
		    if(height2 > height3){
			    $('html').height(Math.max(height1,height3,height2)+10);
		    	$('body').height(Math.max(height1,height3,height2)+10);
		    }
		    else
		    {
			    $('html').height(Math.max(height1,height3,height2));
			    $('body').height(Math.max(height1,height3,height2));
		    }
		
	    }
	    $(document).ready(function () {
		    htmlbodyHeightUpdate()
		    $( window ).resize(function() {
			    htmlbodyHeightUpdate()
		    });
		    $( window ).scroll(function() {
			    height2 = $('.main').height()
  			    htmlbodyHeightUpdate()
		    });
	    });
    </script>

</html>
<?php 


    function checkAnswer($userAnswer, $expectedAnswer){
            echo $userAnswer;
     echo "<br>";
     echo $answer;
    
    if (isset($userAnswer)) {
        if ($userAnswer == $answer) {
            echo '<h1><p class="correct">CORRECT<p></h1>';
        } else {
            echo '<h1><p class="wrong">WRONG<p></h1>';
        }
    }
 
     
}












    function modal() {
        echo '<div class="container">
  <h2>Small Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>';
    }

?>