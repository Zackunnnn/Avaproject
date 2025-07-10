<?php

class User extends Connection {
    private $userid=0;
    private $email='';
    private $password='';
    private $name='';
    private $role='';
    private $address='';

    private $hasil = false;
    private $message = '';

    public function __get($atribute) {
        if (property_exists($this, $atribute)) {
            return $this->$atribute;
        }
    }

    public function __set($atribute, $value) {
        if (property_exists($this, $atribute)) {
            $this->$atribute = $value;
        }
    }

    public function AddUser() {
        $sql = "INSERT INTO user (email, password, name, role, address) VALUES ('$this->email', '$this->password', '$this->name', '$this->role', '$this->address')";
        $this->hasil = mysqli_query($this->connection, $sql);

        if ($this->hasil) {
            $this->message = 'User added successfully';
        } else {
            $this->message = 'Error adding user';
        }
    }   

public function ValidateEmail($inputEmail) {
    $sql = "SELECT * FROM user WHERE email = '$inputEmail'";
    $result = mysqli_query($this->connection, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $this->userid = $row['userid'];
        $this->email = $row['email'];
        $this->password = $row['password'];
        $this->name = $row['name'];
        $this->role = $row['role'];
        $this->address = $row['address'];
        $this->hasil = true;    // PENTING!
    } else {
        $this->hasil = false;   // PENTING!
    }
}

}
