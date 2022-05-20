# LaravelFromScratchPOS
Laravel 8 from Scratch Tutorial for POS (HTL Imst)  
[Laravel Tutorial](https://laracasts.com/series/laravel-8-from-scratch)

# php artisan serve Error
I got following error when starting the Laravel project

## Error:
```
directory in D:\dev\FSE\LaravelFromScratchPOS\blog\artisan on line 18

Warning: require(D:\dev\FSE\LaravelFromScratchPOS\blog/vendor/autoload.php): failed to open stream: No such file or directory in D:\dev\FSE\LaravelFromScratchPOS\blog\artisan on line 18
PHP Fatal error:  require(): Failed opening required 'D:\dev\FSE\LaravelFromScratchPOS\blog/vendor/autoload.php' (include_path='C:\xampp\php\PEAR') in D:\dev\FSE\LaravelFromScratchPOS\blog\artisan on line 18

Fatal error: require(): Failed opening required 'D:\dev\FSE\LaravelFromScratchPOS\blog/vendor/autoload.php' (include_path='C:\xampp\php\PEAR') in D:\dev\FSE\LaravelFromScratchPOS\blog\artisan on line 18
```

## Solution
1. rename ```.env.example``` to ```.env```
2. run ```php artisan key:generate```
3. run ```php artisan serve```

## Tip
you may have to run following two commands
```
composer update
composer install
```


# used libraries
* [yaml-front-matter](https://github.com/spatie/yaml-front-matter)


