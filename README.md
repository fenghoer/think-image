# The ThinkPHP5 Image Package

[![Build Status](https://img.shields.io/travis/fenghoer/think-image.svg)](https://travis-ci.org/fenghoer/think-image)
[![Coverage Status](https://img.shields.io/codecov/c/github/fenghoer/think-image.svg)](https://codecov.io/github/fenghoer/think-image)
[![Downloads](https://img.shields.io/github/downloads/fenghoer/think-image/total.svg)](https://github.com/fenghoer/think-image/releases)
[![Releases](https://img.shields.io/github/release/fenghoer/think-image.svg)](https://github.com/fenghoer/think-image/releases/latest)
[![Releases Downloads](https://img.shields.io/github/downloads/fenghoer/think-image/latest/total.svg)](https://github.com/fenghoer/think-image/releases/latest)
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