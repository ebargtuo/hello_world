Feature: HelloWorld
  In order to test my code
  As a developer
  I need to be able to run Behat tests

Scenario: Say hello
  Given the audience is "World"
  When I say "Hello"
  Then I should get "Hello World"
