<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is Angular</title>
	<link rel="stylesheet" href="css/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-route.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-resource.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>
	<script src="dist/app.min.js"></script>
	
<style>
    body{
        background-color: #ddd;
    }
    header {
        background-color: deepskyblue;
        color: white;
        border-bottom: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    nav{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
    }
    
    nav ul{
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        list-style:none;

    }
    
    nav li{
        margin-left: 1em;
        cursor: pointer;
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        list-style: none;
    }
    
    nav a{
        color: deepskyblue;
    }
    
    .tweet{
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 5px;
        background-color: white;
    }
    
    .btn{
        background-color: deepskyblue;
        color: white;
        margin: 20px;
    }
    
    .button-wrapper{
        position: relative;
        top: 0;
        display: flex;
        justify-content: flex-end;
    }
    
</style>
</head>
<body ng-app="app">
    <header>
        <nav>
           <h1 style="font-size:6rem;">Tweeter</h1>
            <ul>
                <li><a href="#/">Tweets</a></li>
                <li><a href="#/newtweet">Add a New Tweet</a></li>
            </ul>
        </nav>
    </header>
	<div ng-view></div>
</body>
</html>