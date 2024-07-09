<?php 

namespace App\models;

use Database\Database; 

class Model {
    protected $connection; 

    public function __construct() {
        $this->connection = Database::getInstance()->getConnection();
    }
}