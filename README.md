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
2. Install package
```
composer install goper-leo/laravel-webcrawler
```

3. Install puppetter `yarn add puppeteer`

4. Run `php artisan vendor:publish --provider=WebsaperServiceProvider` to publish **websaper.php** config file

5. Update config variables with your config.
```
NODE_BINARY=go_to_terminal_and_type- "which node" -paste result here
NPM_BINARY=go_to_terminal_and_type- "which npm" -paste result here

```

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
