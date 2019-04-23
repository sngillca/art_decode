<!DOCTYPE html>
<html>
    <head>
        <title>EventBuzz</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style type="text/css">
           
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 15%;
                background-color: #f1f1f1;
                position: fixed;
                height: 100%;
                overflow: auto;
            }
            
            li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }
            
            li a.active {
                background-color: #4CAF50;
                color: white;
            }
            
            li a:hover:not(.active) {
                background-color: #555;
                color: white;
            }
            
            h1 {
                text-align: center;
            }
            
            .cont {
                text-align: center;
            }
            
        
        </style>
   
    </head>
    
    <body>
        
        <ul>
            <li>
                <a></a>
            </li>
        </ul>
        

        <h1>EventBuzz: A Platform for Events</h1>
        
        <p id="demo" class="cont">Hello World <br>
        <button onclick="myFunc()" >Local Events</button></p>
        
        
        <script>
            function myFunc() {
                alert("hello world");
                document.getElementById("demo").innerHTML += "These are the latest events.";
            }
        </script>
    </body>
</html>