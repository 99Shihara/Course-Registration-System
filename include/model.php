<?php

Class Model {

    private $server = "localhost:4306";
    private $username = "root";
    private $password='';
    private $db = "tvet_guide";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            die("Connection is failed " . $e->getMessage());
        }
    }

    public function insert() {
        if (isset($_POST['submit'])) {
            if (isset($_POST['code']) && isset($_POST['des'])) {
                if (!empty($_POST['code']) && !empty($_POST['des'])) {

                    $code = $_POST['code'];
                    $des = $_POST['des'];

                    $query = "INSERT INTO sector (code,description) VALUES ('$code','$des')";
                    if (!$this->isDupSecCode($code)) {
                        if ($sql = $this->conn->query($query)) {
                            echo "<script>alert('records added successfully');</script>";
                            echo "<script>window.location.href = '../index.php';</script>";
                        } else {
                            echo "<script>alert('failed');</script>";
                            echo "<script>window.location.href = '../index.php';</script>";
                        }
                    } else {
                         echo "<script>alert('This $code sector code already exists');</script>";
                            echo "<script>window.location.href = '../index.php';</script>";
                    }
                } else {
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href = '../index.php';</script>";
                }
            }
        }
    }

    public function isDupSecCode($sectorCode) {

        $query = "SELECT code FROM sector where code = '$sectorCode'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            return true;
        }
        return false;
    }

    public function fetch() {
        $data = null;

        $query = "SELECT * FROM sector";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

}

?>