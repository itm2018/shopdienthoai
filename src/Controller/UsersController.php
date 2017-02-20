<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    var $name = "Users";
    var $helpers = array("Html");
    var $component = array("Session");
    public $uses = array('Users');

    /**
     * dang nhap he thong
     */
    public function login()
    {
        $error = "";
        if ($this->request->is('post')) {
            $username = $this->request->data('username');
            $password = $this->request->data('password');
            if ($this->Users->checkLogin($username, $password)) {
                $this->Session->write("Session", $username); //ghi session
                $this->redirect("edit");//đăng nhập thành công chuyển trang thông tin
            } else {
                $error = "Tên đăng nhập và mật khẩu không đúng";
            }
        }
        $this->set("error", $error);
    }
}