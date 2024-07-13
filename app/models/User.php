<?php 

namespace App\models;

use App\models\Model;

class User extends Model {

    public function create(array $data) {
        $date = date("Y-m-d H:i:s");
        $name = $data['name'];
        $surname = $data['surname'];
        $age = $data['age'];
        $sql = "INSERT INTO users (name, surname, age, created_at, updated_at)
                VALUES ('$name', '$surname', '$age', '$date', '$date')";
        if ($this->connection->query($sql)) {
            echo '';
        } else {
            echo 'some error';
        }
    } 

    public function delete(int $id) {
        $sql = "DELETE FROM users WHERE id=$id";
        if ($this->connection->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll() {
        $sql = "SELECT * FROM users";
        $resault = $this->connection->query($sql); 
        return $resault;
    } 

    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id=$id";
        $resault = $this->connection->query($sql); 
        if ($resault->num_rows) {
            return $resault->fetch_assoc();
        }
    } 

    public function edit($data) {
        $id = $data['id'];
        $name = $data['name'];
        $surname = $data['surname'];
        $age = $data['age']; 
        $sql = "UPDATE users SET name='$name', surname='$surname', age=$age WHERE id=$id";
        if ($this->connection->query($sql)) {
            return true;
        } else {
            echo 'some error'; 
            return false;
        }
    }
}