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

- **Sample Input**  
hello world  

- **Sample Output**  
HELLO WORLD  
hElLo wOrLd  
CSV created!  

CSV file is created on the root directory with the name output.csv, which containing:
h,e,l,l,o, ,w,o,r,l,d

**RUN TESTING**
<hr>

```
vendor/bin/phpunit .\StringUtilsTest.php
```