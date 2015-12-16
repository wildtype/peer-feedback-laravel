<?php

class SlidingFormTest extends \PHPUnit_Framework_TestCase
{
    protected $wd;
    protected $url = 'http://peer.local/feedback/progremer/new';

    protected function setUp()
    {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $this->wd = RemoteWebDriver::create('http://127.0.0.1:4444/wd/hub', $capabilities);
    }

    protected function tearDown()
    {
        $this->wd->quit();
    }

    public function testInputExists()
    {
        $this->wd->get($this->url);
        $not_found = True;
        try{
            if($this->wd->findElement(
                WebDriverBy::cssSelector('input[type="text"]')
            )) $not_found = False;
        } catch (Facebook\WebDriver\Exception\NoSuchElementException $e) {
            $this->fail('input not found');
        }
        $this->assertFalse($not_found);
    }
}
