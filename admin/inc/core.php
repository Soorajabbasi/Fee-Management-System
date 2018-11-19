<?php
class Admin{
    function __construct(){
        require("inc/connection.php");
    }
    public function selectAll($sql)
    {   global $conn;
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query;
        return $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function select_param($sql,$values)
    {
      global $conn;
      $query = $conn->prepare($sql);
      $query->execute($values);
      return $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertdata($sql,$values)
    {
      global $conn;
      $statement = $conn->prepare($sql);
      $insert=$statement->execute($values);
      if($insert)
      {
        return true;
      }else{
        return false;
      }
    }
    public function updateData($sql,$values)
    {
      global $conn;
      $statement = $conn->prepare($sql);
      $update=$statement->execute($values);
      if($update)
      {
        return true;
      }else{
        return false;
      }
    }
    public function login($sql,$values)
    {
      global $conn;
      $statement = $conn->prepare($sql);
      $data=$statement->execute($values);
      $count=$statement->rowcount();
      if($count==1){
        $data=$statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $value) {
          $_SESSION['uid'] = $value['user_id'];
          if(isset($_SESSION['uid']))
					{
						header('location:dashboard.php');
          }else{
						header('location:index.php');
          }//if
        }//foreach
      }else{
        echo "<p class='text-danger'>Username or Password is incorect!</p>";}
    }//function
    public function rowCount($sql,$values)
    {
      global $conn;
      $statement = $conn->prepare($sql);
      $data=$statement->execute($values);
      return $count=$statement->rowcount();
    }
}
?>
