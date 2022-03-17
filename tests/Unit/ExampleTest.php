<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** test test
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testUserCreation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => "testpassword"
        ]);
        $this->assertEquals('Test User', $user->name);
    }
}
