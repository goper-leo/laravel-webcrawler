# README #

Laravel wrapper for spatie/crawler.

### Installation ###

1. Add this to your composer.json

    ```
    "repositories": [
            {
                "type": "vcs",
                "url": "git@bitbucket.org:eetechmedia/parts.git"        
            }
        ]
    ```

2. Require this package

    ``` "eetechmedia/parts": "dev-master" ```

3. Run `composer install` or `composer update`

4. Run `php artisan vendor:publish --provider=PartsServiceProvider` to publish **parts.php** config file

### How to use ###

1. Include facade on your controller
``` use Parts;
```
2. To call search `Parts::search($partNumber)`

### Environment Variables ###
``` ECIA_COMPANY_ID=EETech ```
``` ECIA_API_KEY=f51d0e92-facf-4c51-a4f6-e2c54dcd8c13 ```
