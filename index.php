<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    <title>Homepage</title>

</head>
<body>
<center>
<body ng-app="mainData">
<header>DEMO PAGE 2</header><br>

<div class="link">
      
    <a href="#!name">Login</a><br/>
    <a href="#!about">About</a>
    
    <div class="ng-view"></div><br>
   
</div>

<script src="app/route.js"></script>
<script src="app/controllers/newController.js"></script>
    </center>
    
</body>
</html>