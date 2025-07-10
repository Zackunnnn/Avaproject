<?php
require_once 'inc.koneksi.php';

class Client extends Connection {
    private $clientid = 0;
    private $email = '';
    private $password = '';
    private $name = '';
    private $address = '';

    public $hasil = false;
    public $message = '';

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

    public function AddClient() {
        $sql = "INSERT INTO client (email, password, name, address) VALUES ('$this->email', '$this->password', '$this->name', '$this->address')";
        $this->hasil = mysqli_query($this->connection, $sql);

        if ($this->hasil) {
            $this->message = 'Client registered successfully';
        } else {
            $this->message = 'Error registering client';
        }
    }

    public function ValidateLogin($inputEmail, $inputPassword) {
        $sql = "SELECT * FROM client WHERE email = '$inputEmail' AND password = '$inputPassword'";
        $result = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $this->clientid = $data['clientid'];
            $this->email = $data['email'];
            $this->password = $data['password'];
            $this->name = $data['name'];
            $this->address = $data['address'];
            $this->hasil = true;
        } else {
            $this->hasil = false;
            $this->message = 'Invalid email or password';
        }
    }
}
?>
