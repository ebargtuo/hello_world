<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use GuzzleHttp\Client;


//
// Require 3rd-party libraries here:
//
// require_once 'PHPUnit/Autoload.php';
// require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    private $url;
    private $response;

    /**
     * @Given /^I have a "([^"]*)"$/
     */
    public function iHaveA($var)
    {
        $this->url = $_ENV[$var];
    }

    /**
     * @When /^I request "([^"]*)"$/
     */
    public function iRequest($path)
    {
        $client = new Client();
        $this->response = $client->get($this->url . $path, array("exceptions" => false));
    }

    /**
     * @Given /^I should get the message "([^"]*)"$/
     */
    public function iShouldGetMessage($message)
    {
        PHPUnit_Framework_Assert::assertEquals(200, $this->response->getStatusCode());
        $body = json_decode($this->response->getBody());
        PHPUnit_Framework_Assert::assertObjectHasAttribute('message', $body);
        PHPUnit_Framework_Assert::assertEquals($message, $body->message);
    }

    /**
     * @Then /^I should not get a message$/
     */
    public function iShouldNotGetAMessage()
    {
        PHPUnit_Framework_Assert::assertEquals(404, $this->response->getStatusCode());
    }

}
