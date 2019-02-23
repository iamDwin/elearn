<?php

  class Faculty{

    public function addfac($facID,$facultyName,$dateToday){
      $result= insert("INSERT INTO faculty(facID,facultyName,doe) VALUES('$facID','$facultyName','$dateToday') ");
      return $result;
    }

    public function updateFac($facID,$facultyName){
        $result = update("UPDATE faculty SET facultyName='$facultyName' WHERE facID='$facID'");
        return $result;
    }

    public function find_by_facID($facID){
      $result=query("SELECT * FROM faculty WHERE facID='$facID' ");
      return $result;
    }

    public function find_by_facultyName($facultyName){
      $result=query("SELECT * FROM faculty WHERE facultyName='$facultyName' ");
      return $result;
    }

    public function find_all_fac(){
      $result=query("SELECT * FROM faculty");
      return $result;
    }

    public function find_num_fac(){
      $result=query("SELECT * FROM faculty");
      $num = count($result);
      return $num;
    }

    public function find_num_facdep($facID){
      $result=query("SELECT * FROM department WHERE facID='$facID'");
      $num = count($result);
      return $num;
    }

  }

  class Department{

    public function addDep($depID,$facID,$departmentName,$dateToday){
      $result= insert("INSERT INTO department(depID,facID,departmentName,doe) VALUES('$depID','$facID','$departmentName','$dateToday') ");
      return $result;
    }

    public function updateFac($facID,$facultyName){
        $result = update("UPDATE department SET facultyName='$facultyName' WHERE facID='$facID'");
        return $result;
    }

    public function find_by_depName($departmentName){
      $result=query("SELECT * FROM department WHERE departmentName='$departmentName' ");
      return $result;
    }

    public function find_all_dep(){
      $result=query("SELECT * FROM department");
      return $result;
    }

    public function find_by_facID($facID){
      $result=query("SELECT * FROM department WHERE facID='$facID' ");
      return $result;
    }

    public function find_num_dep(){
      $result=query("SELECT * FROM department");
      $num = count($result);
      return $num;
    }

    public function find_num_deplec($depID){
      $result=query("SELECT * FROM lecturer WHERE depID='$depID'");
      $num = count($result);
      return $num;
    }

  }

  class Lecturer{

    public function addfac($facID,$facultyName,$dateToday){
      $result= insert("INSERT INTO lecturer(facID,facultyName,doe) VALUES('$facID','$facultyName','$dateToday') ");
      return $result;
    }

    public function updateFac($facID,$facultyName){
        $result = update("UPDATE lecturer SET facultyName='$facultyName' WHERE facID='$facID'");
        return $result;
    }

    public function find_all_lec(){
      $result=query("SELECT * FROM lecturer");
      return $result;
    }

    public function find_by_facID($facID){
      $result=query("SELECT * FROM lecturer WHERE facID='$facID' ");
      return $result;
    }

    public function find_num_lec(){
      $result=query("SELECT * FROM lecturer");
      $num = count($result);
      return $num;
    }

  }


  class Student{

    public function addfac($facID,$facultyName,$dateToday){
      $result= insert("INSERT INTO student(facID,facultyName,doe) VALUES('$facID','$facultyName','$dateToday') ");
      return $result;
    }

    public function updateFac($facID,$facultyName){
        $result = update("UPDATE student SET facultyName='$facultyName' WHERE facID='$facID'");
        return $result;
    }

    public function find_by_facID($facID){
      $result=query("SELECT * FROM student WHERE facID='$facID' ");
      return $result;
    }

    public function find_all_student(){
      $result=query("SELECT * FROM student");
      return $result;
    }

    public function find_num_student(){
      $result=query("SELECT * FROM student");
      $num = count($result);
      return $num;
    }

  }

  class Course{

    public function addfac($cID,$depID,$courseName){
      $result= insert("INSERT INTO courses(cID,depID,courseName) VALUES('$cID','$depID','$courseName') ");
      return $result;
    }

    public function updateCourse($cID,$courseName){
        $result = update("UPDATE courses SET courseName='$courseName' WHERE cID='$cID'");
        return $result;
    }

    public function find_by_depID($depID){
      $result=query("SELECT * FROM courses WHERE depID='$depID' ");
      return $result;
    }

    public function find_all_courses(){
      $result=query("SELECT * FROM courses");
      return $result;
    }

    public function find_num_courses(){
      $result=query("SELECT * FROM courses");
      $num = count($result);
      return $num;
    }

  }

  class User{

    public function addUser($facID,$facultyName,$dateToday){
      $result= insert("INSERT INTO users(facID,facultyName,doe) VALUES('$facID','$facultyName','$dateToday') ");
      return $result;
    }

    public function updateUser($facID,$facultyName){
        $result = update("UPDATE users SET facultyName='$facultyName' WHERE facID='$facID'");
        return $result;
    }

    public function signin($email,$password){
      $result=query("SELECT * FROM users WHERE email='$email' AND password='$password' ");
      return $result;
    }

    public function find_num_users(){
      $result=query("SELECT * FROM users");
      $num = count($result);
      return $num;
    }

  }
?>
