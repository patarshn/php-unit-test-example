# php-unit-test-example
 
**INSTALLATION**
<hr>

Using PHP 7.x
```
composer install
```
run composer install to install all required package


**RUN CODE**
<hr>

```
php .\main.php
```
or
```
php .\main.php "hello world"
```
If you use the first command, you will input via stdin  
csv file output will be created with the name output.csv 

**RUN TESTING**
<hr>

```
vendor/bin/phpunit .\StringUtilsTest.php
```