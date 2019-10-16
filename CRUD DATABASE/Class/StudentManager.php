<?php
include_once "User.php";
include_once "DBConnect.php";

class StudentManager
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect('mysql:host=localhost;dbname=my_database', 'BUM', '1');
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM studentmanager";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $studentList = [];
        foreach ($result as $value) {
            $student = new User($value['name'], $value['phone'], $value['address']);
            $student->id = $value['id'];
            array_push($studentList, $student);
        }
        return $studentList;
    }

    public function add($student)
    {
        $stmt = $this->conn->prepare('INSERT INTO studentmanager(name,phone,address) VALUES(:name,:phone,:address)');
        $stmt->bindParam(':name', $student->name);
        $stmt->bindParam(':phone', $student->phone);
        $stmt->bindParam(':address', $student->address);
        $stmt->execute();
    }

    public function delete($index)
    {
        $stmt = $this->conn->prepare('DELETE FROM studentmanager WHERE id=:id');
        $stmt->bindParam(':id', $index);
        $stmt->execute();
    }

    public function showStudentByIndex($id)
    {
        $stmt = $this->conn->prepare('SELECT name,phone,address FROM `studentmanager` WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($id, $studentInfo)
    {
        $stmt = $this->conn->prepare('UPDATE studentmanager SET name=:name,phone=:phone,address=:address WHERE id=:id');
        $stmt->bindParam(':name',$studentInfo->name);
        $stmt->bindParam(':phone',$studentInfo->phone);
        $stmt->bindParam(':address',$studentInfo->address);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

    public function search($text)
    {
        $stmt = $this->conn->query("SELECT * FROM studentmanager WHERE name like '%$text%'");
        $result = $stmt->fetchAll();
        $studentList = [];
        foreach ($result as $value) {
            $student = new User($value['name'], $value['phone'], $value['address']);
            $student->id = $value['id'];
            array_push($studentList, $student);
        }
        return $studentList;
    }
}