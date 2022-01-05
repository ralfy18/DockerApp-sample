<?php




// class crud extends \PHPUnit_Framework_TestCase{
// public function testTrueAssertstoTrue(){

//     $this->assertTrue();
// }
// }



// namespace App;
use \PHPUnit\Framework\TestCase;
class crudTest extends TestCase

{
    public function testInsert()
    {

        $crud = new app\Crud;
          $result = $crud->insert('admin','Ralfy@Gmail','Gingoog');
         $this->assertEquals(TRUE,$result);
    }


}


