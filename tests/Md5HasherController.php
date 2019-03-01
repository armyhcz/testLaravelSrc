<?php
/**
 * Created by PhpStorm.
 * User: houpingguo
 * Date: 2019/3/1
 * Time: 11:50
 */
use PHPUnit\Framework\TestCase;

class Md5HasherConxtrollerTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        parent::setUp();
        $this->hasher = new \LaravistTest\HasherTest\Md5Hasher();
    }

    public function testMd5HasherMake(){
        $res = $this->hasher->make('password',['salt'=>'hcz']);
        $password = hash('md5','password'.'hcz');
        $this->assertEquals($password,$res);
    }

    public function testMd5HasherCheck(){
        $password = hash('md5','password'.'hcz');
        $res = $this->hasher->check('password', $password, ['salt'=>'hcz']);
        $this->assertEquals(true,$res);
    }
}