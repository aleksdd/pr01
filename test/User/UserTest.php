<?php

namespace Pr01\Test\User;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Pr01\User\User;

class UserTest extends TestCase
{
    public function setUp(): void
    {
        $this->User = new User();
    }

    public function tearDown(): void
    {
        unset($this->User);
    }

    /**
     * @dataProvider usernamesProvider
     */
    public function testGetName($value, $expected)
    {
        $output = $this->User->getName($value);
        $this->assertIsString($output, 'String expected');
        $this->assertLessThan(20, strlen($output), 'Output length too big');
        $this->assertNotFalse($output, 'Not False expected');
    }

    public function testMayBeFailedOrNot()
    {
        $this->assertEquals(2, 2);
    }

    public function usernamesProvider()
    {
        return [
            ['username', 'username'],
            ['wrongusername', 'username'],
            ['', 'username'],
            [5, 'username'],
            [false, 'username'],
        ];
    }
}
