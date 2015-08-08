<?php

namespace Chat\Mappers;

class UserMapper
{
    /**
     * @var \PDO
     */
    protected $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }
    
    public function auth($email, $pass)
    { 
        $stm = $this->db->prepare("SELECT * FROM users WHERE email=:email AND pass=:pass");
        $stm->execute([
            ":email" => $email,
            ":pass" => $pass
        ]);
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}