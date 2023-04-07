<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function updateUser($request, $user);
    public function getUserData();
    public function storeUserData($userDetails);
    public function changeUserStatus($userId, $status);
    public function getUserDataById($id);
    public function deleteUser($userId);
    public function updateUserData($userDetails);
    public function getUserDetailsAjax($request);
}
