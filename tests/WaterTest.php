<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace tests;

use fenghoer\Image;

class WaterTest extends TestCase
{
    public function testJpeg()
    {
        $pathname = TEST_PATH . 'tmp/water.jpg';
        $image    = Image::open($this->getJpeg());

        $image->water(TEST_PATH . 'images/test.gif')->save($pathname);

        $file = new \SplFileInfo($pathname);

        $this->assertTrue($file->isFile());

        @unlink($pathname);
    }

    public function testPng()
    {
        $pathname = TEST_PATH . 'tmp/water.png';
        $image    = Image::open($this->getPng());

        $image->water(TEST_PATH . 'images/test.gif')->save($pathname);

        $file = new \SplFileInfo($pathname);

        $this->assertTrue($file->isFile());

        @unlink($pathname);
    }

    public function testGif()
    {
        $pathname = TEST_PATH . 'tmp/water.gif';
        $image    = Image::open($this->getGif());

        $image->water(TEST_PATH . 'images/test.jpg')->save($pathname);

        $file = new \SplFileInfo($pathname);

        $this->assertTrue($file->isFile());

        @unlink($pathname);
    }
}
