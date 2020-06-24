<?php 
    require_once 'include/database.php';
    require_once 'include/function.php';
    $categories = get_categories();

    var_dump($link);
?>
<html>
     <head>
        <title>Тестовый сайт (резюме)</title>
        <meta charset="utf-8">
         
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
        <script src="../public/js/script.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="caption" class="navbar-brand logo" href="/">Band BTS</a>
                </div>
                <div class="navbar-collapse collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <?php foreach ($categories as $short): ?>
                        <li>
                            <a id="caption" class="logo" href="/<?=$short['subname']?>.php"><?=$short['name']?></a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <div class="form-group">
                        <form action="/army.php" class="navbar-form navbar-right" method="POST" onsubmit="return (CorrectMail())">
                            <input type="text" name="email" value="" placeholder="Email" class="form-control" required>
                            <input type="password" name="password" value="" placeholder="password" class="form-control" required>
                            <button type="submit" class="btn btn-success enter-botton">Enter <i class="glyphicon glyphicon-user"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        