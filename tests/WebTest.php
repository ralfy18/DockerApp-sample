<?php

use \PHPUnit\Framework\TestCase;

class WebTest extends TestCase
     {
          public function testInsert()
      {
          $web =new App\Web;
          $result = $web->insert();
          $this->assertEquals(False,$result);
     }
     
}
?>