<?php
include('inc/connection.php');
include('inc/core.php');
$admin = New Admin;
if(isset($_GET['value']) AND isset($_GET['page-name']) AND isset($_GET['action']))
{
  if($_GET['page-name']=='departments.php' AND $_GET['action']=='Delete')
  {
    $values = array('status' => "unactive",
                    'id'=>$_GET['value']);
    $sql='UPDATE departments SET status=:status WHERE department_id=:id';
    $admin->updateData($sql,$values);
    header('location:departments.php');
  }
  else if($_GET['page-name']=='courses.php' AND $_GET['action']=='Delete')
  {
    $values = array('status' => "unactive",
                    'id'=>$_GET['value']);
    $sql='UPDATE courses SET status=:status WHERE id=:id';
    $admin->updateData($sql,$values);
    header('location:courses.php');
  }
  else if($_GET['page-name']=='subjects.php' AND $_GET['action']=='Delete')
  {
    $values = array('status' => "unactive",
                    'id'=>$_GET['value']);
    $sql='UPDATE subjects SET status=:status WHERE subject_id=:id';
    $admin->updateData($sql,$values);
    header('location:subjects.php');
  }
  else if($_GET['page-name']=='news.php' AND $_GET['action']=='Delete')
  {
    $values = array('status' => "unactive",
                    'id'=>$_GET['value']);
    $sql='UPDATE news SET status=:status WHERE news_id=:id';
    $admin->updateData($sql,$values);
    header('location:news.php');
  }
}
?>
