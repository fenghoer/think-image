# The Image Package

[![Latest Version](https://img.shields.io/packagist/v/fenghoer/think-image.svg)](https://packagist.org/packages/fenghoer/think-image)
[![Build Status](https://img.shields.io/travis/fenghoer/think-image.svg)](https://travis-ci.org/fenghoer/think-image)
[![Php Version](https://img.shields.io/badge/php-%3E=7.4-brightgreen.svg)](https://secure.php.net/)
[![Packagist Status](https://img.shields.io/packagist/v/fenghoer/think-image.svg)](https://packagist.org/packages/fenghoer/think-image)
[![Packagist Downloads](https://img.shields.io/packagist/dt/fenghoer/think-image.svg)](https://packagist.org/packages/fenghoer/think-image)

## 安装

> composer require fenghoer/think-image:dev-master

## 使用

~~~
$image = \fenghoer\Image::open('./image.jpg');
或者
$image = \fenghoer\Image::open(request()->file('image'));


$image->crop(...)
    ->thumb(...)
    ->water(...)
    ->text(....)
    ->save(..);

## water 接口在原基础上支持了对string格式水印图片资源的兼容
~~~