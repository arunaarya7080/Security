
# Restricted all file 


<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{HTTP_COOKIE} !.*wordpress_logged_in.*$ [NC]
    RewriteCond %{REQUEST_URI} ^(.*?/?)wp-content/uploads/.* [NC]
    RewriteRule . http://%{HTTP_HOST}%1/404/?redirect_to=%{REQUEST_URI} [L,QSA]
</IfModule>



# Restricted custom file 

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{HTTP_COOKIE} !.*wordpress_logged_in.*$ [NC]
    RewriteCond %{REQUEST_URI} ^(.*?/?)wp-content/uploads/.*\.(?:gif|png|jpe?g|pdf|txt|rtf|html|htm|xlsx?|docx?|mp3|mp4|mov)$ [NC]
    RewriteRule . http://%{HTTP_HOST}%1/wp-login.php?redirect_to=%{REQUEST_URI} [L,QSA]
</IfModule>

# //Restricted file 
