<?php
// Call System_Daemon_OSTest::main() if this source file is executed directly.
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "System_Daemon_OSTest::main");
}

require_once "PHPUnit/Framework/TestCase.php";
require_once "PHPUnit/Framework/TestSuite.php";

require_once 'System/Daemon/OS.php';

/**
 * Test class for System_Daemon_OS.
 * Generated by PHPUnit_Util_Skeleton on 2008-04-27 at 03:38:49.
 */
class System_Daemon_OSTest extends PHPUnit_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit/TextUI/TestRunner.php";

        $suite  = new PHPUnit_Framework_TestSuite("System_Daemon_OSTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    public function testDetermine() {
        $res = System_Daemon_OS::determine();
        
        $this->assertArrayHasKey("main", $res);
        $this->assertArrayHasKey("distro", $res);
        $this->assertArrayHasKey("version", $res);         
        $this->assertEquals(3, sizeof($res));
    }
}

// Call System_Daemon_OSTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == "System_Daemon_OSTest::main") {
    System_Daemon_OSTest::main();
}
?>