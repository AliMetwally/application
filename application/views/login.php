<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log in</title>

        <!-- Favicon -->
        
        <!-- favicon ends --->
        
        <!--- LOAD FILES -->
        <?php if($_SERVER['HTTP_HOST'] == "localhost" || (stristr($_SERVER['HTTP_HOST'], "192.168.") !== FALSE)|| (stristr($_SERVER['HTTP_HOST'], "127.0.0.") !== FALSE)): ?>
        <link rel="stylesheet" href="<?=base_url()?>public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>public/font-awesome/css/font-awesome.min.css">

        <script src="<?=base_url()?>public/js/jquery.min.js"></script>
        <script src="<?=base_url()?>public/bootstrap/js/bootstrap.min.js"></script>

        <?php else: ?>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php endif; ?> 
        
        <!-- CSS -->
        <link rel="stylesheet" href="<?=base_url()?>public/css/form-elements.css">
        <link rel="stylesheet" href="<?=base_url()?>public/css/style.css">
        <link rel="stylesheet" href="<?=base_url()?>public/css/main.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class='inner-bg'>
            <div class="containert">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <!--authantiaction msg-->
                    <div class="bg-primary text-center">
                        <span id='errMsg'>
                            error
                        </span>
                    </div>

                    <div class='form-bottom'>
                        <form id='loginForm'>
                            <!--username-->
                            <div class="form-group">
                              <label class="sr-only" for='username'>User Name</label>
                              <input type="text" class="form-control" name="username" placeholder="Enter User Name">                                                         
                            </div>

                            <!--password-->
                            <div class="form-group">
                              <label class='sr-only' for="password">Password</label>
                              <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div> <!-- /.form-bottom -->
                </div>          
            </div>
        </div>
        </div>
    </body>
</html>