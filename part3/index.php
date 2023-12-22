<?php

echo "I am main index";
// echo $_SERVER['QUERY_STRING'];

echo $_GET['url'];

// =>For Linux 
// sudo a2enmod rewrite 
// sudo service apache2 stop 
// sudo service apache2 start 
// sudo service apache2 restart 


// =>For Linux (Apache Edit for rewrite )
// sudo a2enmod rewrite 
// sudo  nano /etc/apache2/sites-enabled/000-default.conf 
// add these lines at the end 
// <Directory /var/www/html>
//    AllowOverride All 

// <Directory>

?>



<!-- It looks like there's a missing closing angle bracket (>) for the <Directory /var/www/html> block. This might be causing an issue in your Apache configuration. Here's how the corrected section should look:

apache
Copy code
<VirtualHost *:80>
        # ... other configuration settings ...

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        # ... other configuration settings ...

        <Directory /var/www/html>
           AllowOverride All
        </Directory>
</VirtualHost>
Ensure that the <Directory> block is properly closed with </Directory>. Save the changes to the file, and then restart Apache.

Here are the steps:

Press Ctrl + X to exit nano.
Press Y to confirm saving changes.
Press Enter to save the changes. -->