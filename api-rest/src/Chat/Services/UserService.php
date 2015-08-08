<?php

namespace Chat\Services;

use Chat\Mappers\UserMapper;

class UserService
{
    /**
     * @var \Chat\Mappers\UserMapper
     */
    protected $userMapper;
    
    public function __construct(UserMapper $userMapper) {
        $this->userMapper = $userMapper;
    }
    
    public function auth($email, $pass)
    {
        if (count($this->userMapper->auth($email, $pass))) {
            return ["success" => true];
        }
        return ["error" => true];
    }
}