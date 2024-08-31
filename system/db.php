<?php 

class Database {
  private $dsn = "mysql:host=localhost;dbname=php_crud_app";
  private $user = "imon";
  private $pass = "p@ssw0rd";
  public $conn;

  public function __construct(){
    try {
      $this->conn = new PDO($this->dsn, $this->user, $this->pass);
      // echo 'Successfully connected!';
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  } 

  /*  Insert Data */
  public function insert($fname, $lname, $email, $phone)
  {
    $sql = "INSERT INTO users (first_name, last_name, email, phone) VALUES(:fname, :lname, :email, :phone)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 'phone'=>$phone]);
    return true;
  }

  /*  View Data */
  public function read()
  {
    $data = [];
    $sql = "SELECT * FROM users";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row){
      $data[] = $row;
    }
    return $data;
  }

  /* get single record   */
  public function getUserById($id)
  {
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  /* update user record  */
  public function update($id, $fname, $lname, $email, $phone)
  {
    $sql = "UPDATE users SET first_name = :fname, last_name = :lname, email = :email, phone = :phone WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt-execute(['fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone'=>$phone, 'id' => $id]);
  }

  /*  delete record */
  public function delete()
  {
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['id'=>$id]);
    return true;
  }

  /*  total row count */
  public function totalRowCount()
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $t_rows = $stmt->rowCount();
    return $t_rows;
  }
}


$ob = new Database();
// print_r( $ob->read());
echo $ob->totalRowCount();

