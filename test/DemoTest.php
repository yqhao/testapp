
<?php
use PHPUnit\Framework\TestCase;
class DemoTest extends TestCase {

public function testPass() {

$this->assertTrue(true);

}

public function testFail() {

$this->assertFalse(false);

}

}

?>
