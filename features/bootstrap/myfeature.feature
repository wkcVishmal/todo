Feature: Todo list
  In order to list items
  As a user
  I need to be able to add items I should do next in to my list

Scenario: Add item to list
  Given I am on "/"
  And I fill in "name" with "myItem"
  And I fill in "priority" with "1"
  And I press "submit"
  Then I should see "myItem"
