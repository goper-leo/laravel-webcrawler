# README #

Laravel wrapper for spatie/browsershot.

### Installation ###

1. Add this to your composer.json

    ```
    "repositories": [
            {
                "type": "vcs",
                "url": "git@github.com:goper-leo/laravel-webcrawler.git"        
            }
        ]
    ```

2. Require this package

    ``` "goper/websaper": "dev-master" ```

3. Run `composer install` or `composer update`

4. Run `php artisan vendor:publish --provider=WebsaperServiceProvider` to publish **websaper.php** config file

### How to use ###

1. Include facade on your controller
``` use WebSaper;
```
2. Create a pattern that implements `Goper\Websaper\Contracts\Picker` class.
3. You want to get the content only just use `WebSaper::testCrawl($url_you_want_to_crawl);`
4. You want to build and get the content
```
$content = WebSaper::testCrawl($request->url);
```
