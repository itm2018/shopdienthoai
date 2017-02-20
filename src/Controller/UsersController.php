<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    var $name = "Users";
    var $helpers = array("Html");
    var $component = array("Session");
    public $uses = array('Users');

    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Index',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Index',
                'action' => 'index',
                'home'
            ]
        ]);
    }

    /**
     * dang nhap he thong
     */
    public function login()
    {
        $error = "";
        if ($this->request->is('post')) {
           /* $username = $this->request->data('username');
            $password = $this->request->data('password');
            if ($this->Users->checkLogin($username, $password)) {
                $this->Session->write("Session", $username); //ghi session
                $this->redirect("edit");//đăng nhập thành công chuyển trang thông tin
            } else {
                $error = "Tên đăng nhập và mật khẩu không đúng";
            }*/
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        $this->set("error", $error);
    }
}