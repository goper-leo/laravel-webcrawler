<?php
namespace Goper\Websaper;

use Spatie\Browsershot\Browsershot;
use Goper\Websaper\Traits\Validation;

class Websaper
{
    //** Traits
    use Validation;

    /**
     * Url to be crawled
     * @var string
     */
    protected $url;

    /**
     * Crawler class
     * @var object
     */
    protected $browsershot;

    /**
     * Config vars
     * @var array
     */
    protected $config;

    protected $DOM;

    /**
     * Constructor
     */
    public function __construct(Browsershot $browsershot)
    {
        $this->browsershot = $browsershot;
        $this->config = config('websaper');
    }

    /**
     * Crawl url
     *
     * @return string
     */
    public function crawl($url)
    {
        $this->url = $url;

        // domcontentloaded
        $content = $this->browsershot
                    ->url($this->url)
                    ->setChromePath($this->config['chrome_path'])
                    ->setNodeBinary($this->config['node_binary'])
                    ->setNpmBinary($this->config['npm_binary'])
                    ->setOption('args', ['--headless=false'])
                    ->noSandbox()
                    ->dismissDialogs()
                    ->timeout($this->config['time_out'])
                    ->bodyHtml();

        return $content;
    }

    /**
     * Test crawling method
     * @return array
     */
    public function testCrawl($file = 'hackaday/test.html')
    {
        return $this->sampleContent($file);
    }

    /**
     * Build crawled data into DOM
     * @param  string $class   class to be used on parsing data - this is the pattern
     * @param  string $content crawled result data
     * @return array - result of builder
     */
    public function builder($class, $content)
    {
        $this->DOM = new \DOMDocument();
        libxml_use_internal_errors(true);
        $this->DOM->loadHTML($content);
        $xpath = new \DOMXPath($this->DOM);

        $getters = new $class;
        $title = $getters->title($xpath);
        $summary = $getters->summary($xpath);
        $banner = $getters->banner($xpath);
        $materials = $getters->materials($xpath);
        $body = $getters->content($xpath);

        return compact('title', 'summary', 'body', 'banner', 'materials');
    }

}
