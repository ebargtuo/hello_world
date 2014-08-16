<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
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

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//

    private $audience;
    private $message;

    /**
     * @Given /^the audience is "([^"]*)"$/
     */
    public function theAudienceIs($audience)
    {
        $this->audience = $audience;
    }

    /**
     * @When /^I say "([^"]*)"$/
     */
    public function iSay($message)
    {
        $this->message = $message;
    }

    /**
     * @Then /^I should get "([^"]*)"$/
     */
    public function iShouldGet($result)
    {
        if ($this->message . ' ' . $this->audience !== $result) {
            throw new Exception();
        }
    }

}
