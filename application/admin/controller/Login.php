<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;

class Login extends Controller {
    public function login(Request $request){
        if($request->isPost()){
            $params = $request->param();
        }else{
            $this->fetch();
        }
    }
}