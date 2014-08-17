Feature: API
  In order to greet people
  As an API
  I need to be able to say "Hello"

Scenario: Say hello
  Given I have a "BEHAT_TEST_URL"
  When I request "/hello"
  Then I should get the message "Hello"

Scenario: Say hello world
  Given I have a "BEHAT_TEST_URL"
  When I request "/hello/world"
  Then I should get the message "Hello World"

Scenario: Say hellow world
  Given I have a "BEHAT_TEST_URL"
  When I request "/hellow/world"
  Then I should not get a message

