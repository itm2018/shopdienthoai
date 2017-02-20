<?php
/**
 * Created by PhpStorm.
 * User: HANG LUN
 * Date: 02/21/2017
 * Time: 12:39 AM
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class Users extends Table
{
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required');
    }

    public function checkLogin($username, $password)
    {
        $sql = "Select QuyenSD,Password from users where QuyenSD='$username' AND Password ='$password'";
        $this->query($sql);
        if ($this->getNumRows() == 0) {
            return false;
        } else {
            return true;
        }
    }
}