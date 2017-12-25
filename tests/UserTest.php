<?php

use App\Model\User;
use PHPUnit\Framework\TestCase;



class UserTest extends TestCase
{
    public function testUserName()
    {
        $user=new User();
        $user->setName('mahdi');
        $this->assertEquals('mahdi',$user->getName());
    }
}
