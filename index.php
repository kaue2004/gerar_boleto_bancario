<?php 

    if(isset($_GET['url'])){
        $explode = explode('/',$_GET['url']);
        $file    = $explode[0].'.php';
         if(is_file('pages/'.$file)){
             include_once 'pages/'.$file;
         }else{
             include_once 'pages/404.php';
            }
        }else{
                include_once 'pages/home.php';
            }
        }
        include_once 'inc/footer.php';
?>