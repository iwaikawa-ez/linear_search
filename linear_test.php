<?php
require_once('linear.php');

class linearSearchTest extends PHPUnit_Framework_TestCase
{
  public function test_find()
  {
    $this->assertEquals(linear_search(array(10, 1, 3, 5), 3), 2);
  }

  public function test_cannot_find()
  {
    $this->assertEquals(linear_search(array(10, 1, 3, 5), 7), false);
  }
}
