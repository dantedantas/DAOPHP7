# DAOPHP7


This is just a project to test the PHP7.
Now, on the folder DAO we are using a friendlly URL.

# .htaccess



    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
 


# index.php


    require_once ('util'.DIRECTORY_SEPARATOR.'config.php');
 
    $url = explode('/',$_GET['url']);
 
    $pagina = !empty($url[0]) ? $url[0] : 'home';
    $parametro = !empty($url[1]) ? $url[1] : null;
    $parametro2 = !empty($url[2]) ? $url[2] : null;
 
    if (file_exists($pagina.'.php')) {
        include $pagina.'.php';
    } else {<br>
        include 'filenotfound.php';
    }

