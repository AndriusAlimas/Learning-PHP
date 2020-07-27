<?php ob_start(); ?> 
<!DOCTYPE html> 
<html lang="en">     
    <head>         
        <meta charset="utf-8">         
        <meta http-equiv="X-UA-Compatible" content="IE=edge">         
        <meta name="viewport" content="width=device-width, initial-scale=1">         
        <title>File Upload</title>
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
                    <h1>Upload file:</h1> 
                    <?php 
                    if($_POST["submit"]){ 
                        //file details
                        $name = $_FILES["file"]["name"];
                        $type = $_FILES["file"]["type"];    
                        $size = $_FILES["file"]["size"];     
                        $file_error = $_FILES["file"]["error"];     
                        $tmp_loc = $_FILES["file"]["tmp_name"];     
                        $perm_loc = "uploads/" . $_FILES["file"]["name"]; 
                        
//                        //error messages to display    
                        $noFiletoUpload = "<p><strong>Please upload a file!</strong></p>";   
                        $fileAlreadyExists = "<p><strong>This file ". $name ." in ". $perm_loc . " already exists!</strong></p>";  
                        $wrongFormat = "<p><strong>Sorry, you can only upload pdf and text files!</strong></p>";    
                        $fileTooLarge = "<p><strong>You can only upload files smaller than 3Mo!</strong></p>"; 
                        
//                        //allowed formats to upload     
                        $allowedFormats = array("pdf"=>"application/pdf", "text"=>"text/plain");   
                        
//                        //check for errors     
                        if($file_error == 4){        
                            $errors .=$noFiletoUpload;        
                        }else{  
                            if(file_exists($perm_loc)){   
                                $errors .= $fileAlreadyExists;   
                                     }         
                            if($size > 3*1024*1024){   
                                $errors .= $fileTooLarge; 
                            }        
                            if(!in_array($type, $allowedFormats)){       
                                $errors .= $wrongFormat;           
                            }       
                        }   
                    
                            if($errors){        
                                $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';   
                                echo $resultMessage;     
                            }else
                            {
                                if(move_uploaded_file($tmp_loc, $perm_loc)){
//                                            $resultMessage = '<div class="alert alert-success">File uploaded successfuly</div>';  
//                                             echo $resultMessage;    
                                   header("Location: 26.thanksforyourfile.php");    
                                }else{     
                                    $resultMessage = '<div class="alert alert-warning"Unable to upload file.
                                    Please try again later.></div>';       
                                    echo $resultMessage;      
                                }             
                            }                     
  
                        if($_FILES["file"]["error"]>0){        
                            echo "<p>There was an error: ". $file_error ."</p>";        
                        }else{    
                            echo "<p>File: ".  $name ."</p>";           
                            echo "<p>File type: ".  $type ."</p>";     
                            echo "<p>Temporary location: ".  $tmp_loc ."</p>";  
                            echo "<p>File size: ".  $size ."</p>";    
                            echo "<p>Permanent destination: ".  "uploads/" . $name. "</p>";       
                        } 
                    }
            
?>
                    <form method="post" enctype="multipart/form-data">                
                        <div class="form-group">                    
                            <label for="file">Choose file:</label>          
                            <input type="file" name="file" id="file" placeholder="File">                
                        </div>                 
                        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Upload">           
                    </form>         
                </div>     
            </div>
        </div> 
        <?php include "footer.php"; ?>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j query.min.js"></script>         
        <script src="js/bootstrap.min.js"></script>  
    </body> 
</html> 
<?php ob_flush(); ?>