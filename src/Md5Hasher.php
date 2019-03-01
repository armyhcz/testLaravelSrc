<?php
/**
 * Created by PhpStorm.
 * User: houpingguo
 * Date: 2019/3/1
 * Time: 09:32
 */

namespace LaravistTest\HasherTest;


class Md5Hasher
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options = []){
        $salt = $options['salt'] ?? '';
        return hash('md5',$value.$salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashValue, array $options = []){
        $salt = $options['salt'] ?? '';
        return hash('md5',$value.$salt) === $hashValue;
    }
    public function test($password, $number){
        return $password == $number;
    }
}