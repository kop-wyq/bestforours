<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $str = <<<STR
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        width: 80%;
        height: 80%;
        margin: 0 auto;
        background-image: url('static/images/20200318001838.jpg');
    }
</style>
<body>
    <div></div>
</body>
</html>
STR;
        echo $str;
    }
}
