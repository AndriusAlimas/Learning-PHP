<?php
    // cookies set before html elements
    // set a cookie, expired time one week, get with time() + 7 days multiply hours, minutes and seconds
         setcookie("username","Hinokame",time()+ 7 * 24 * 60 * 60);
    // to delete cookie simply set cookie that expired in the past:
         setcookie("username","",time()-1);
?>
<!DOCTYPE html> 
<html lang="en">     
    <head>         
        <meta charset="utf-8">         
        <meta http-equiv="X-UA-Compatible" content="IE=edge">         
        <meta name="viewport" content="width=device-width, initial-scale=1">         
        <title>Cookies</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">         
        <style>             
            h1{                
                color:purple;                
            }             
            h3{                 
                color:#42d5ce;                
            }             
            .containingDiv{                 
                border:1px solid #7c73f6;                 
                margin-top: 100px;                
                border-radius: 15px;             
            }
        </style>
    </head> 
    <body> 
        <?php include "header.php"; ?> 
        <div class="container-fluid">     
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 containingDiv">
                    <h1>Cookies:</h1> 
                    <?php 
                    print_r($_COOKIE);
                    if($_COOKIE["username"]){
                        echo "<p>Value of username cookie is: ". $_COOKIE["username"]."</p>";
                    }else{
                        echo "<p>Cookie not set</p>";
                    }
                    ?>
                </div>     
            </div>
        </div> 
        <?php include "footer.php"; ?>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j query.min.js"></script>         
        <script src="js/bootstrap.min.js"></script>  
    </body> 
</html> 