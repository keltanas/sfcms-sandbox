Sanbox application for SiteForeverCMS
http://siteforever.ru

### Installation:
*   Download sandbox:

    ```bash
    $ wget https://github.com/keltanas/sfcms-sandbox/archive/master.zip
    ```

*   Unpack sanbox to current dir:
  
    ```bash
    $ unzip master.zip
    $ mv sfcms-sandbox-master/* .
    $ rm -Rf sfcms-sandbox-master
    ```

*   Download composer:    

    ```bash
    $ curl -sS https://getcomposer.org/installer | php
    ```

*   Install cms and components:
    
    ```bash
    $ php composer.phar install
    ```

*   Settings:
    
    Modify `application/config.php` file for configuration template and database parameters (in "db" section).
