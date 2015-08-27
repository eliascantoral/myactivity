<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include_once 'function.php'; get_header();
    if(isset($_GET["logout"])){
        logout();
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php out(get_variable("sitename"));?></title>    
        <meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/ihover.css">
        <link rel="stylesheet" href="style/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style/style.css">

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.js"></script>
        <script src="style/bootstrap/js/bootstrap.min.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-21400652-24', 'auto');
		  ga('send', 'pageview');

		</script>
    </head>
    <body>
        <div class="container-fluid">
            <?php if(is_login()){?>
                <nav class="navbar navbar-default navbar-fixed-top">
                 <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                      <a class="navbar-brand" href="#">
                          <img alt="Brand" src="image/banner.png" height="100%">
                      </a>
                    </div>                     
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">            
                        <p class="navbar-text navbar-right">Bienvenido <a href="#" class="navbar-link"><?php echo get_userdata("name");?></a>&nbsp;&nbsp;<a href="?logout=ok" class="navbar-link">Salir</a></p>
                    </div>
                </div>
                </nav>                  
            <?php }?>
         
