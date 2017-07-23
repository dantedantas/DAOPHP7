# DAOPHP7


This is just a project to test the PHP7.

# .htaccess

<code>
 RewriteEngine On<br>
 RewriteCond %{REQUEST_FILENAME} !-f<br>
 RewriteCond %{REQUEST_FILENAME} !-d<br>
 RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]<br>
 </code>

# index.php

<code>
 require_once ('util'.DIRECTORY_SEPARATOR.'config.php');<br>
 $url = explode('/',$_GET['url']);<br>
 $pagina = !empty($url[0]) ? $url[0] : 'home';<br>
 $parametro = !empty($url[1]) ? $url[1] : null;<br>
 $parametro2 = !empty($url[2]) ? $url[2] : null;<br><br>
    if (file_exists($pagina.'.php')) {<br>
        include $pagina.'.php';<br>
    } else {<br>
        include 'filenotfound.php';<br>
    }
</code>
