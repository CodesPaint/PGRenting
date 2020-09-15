<?php
namespace Phppot;

use \Phppot\DataSource;

class User
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "DataSource.php";
        $this->ds = new DataSource();
    }

/*    function validateMember()
    {
        $valid = true;
        $errorMessage = array();
        foreach ($_POST as $key => $value) {
            if (empty($_POST[$key])) {
                $valid = false;
            }
        }
        
        if($valid == true) {
            // Password Matching Validation
            if ($_POST['password'] != $_POST['confirm_password']) {
                $errorMessage[] = 'Passwords should be same.';
                $valid = false;
            }
            
            // Email Validation
            if (! isset($error_message)) {
                if (! filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
                    $errorMessage[] = "Invalid email address.";
                    $valid = false;
                }
            }
            
            // Validation to check if Terms and Conditions are accepted
            if (! isset($error_message)) {
                if (! isset($_POST["terms"])) {
                    $errorMessage[] = "Accept terms and conditions.";
                    $valid = false;
                }
            }
        }
        else {
            $errorMessage[] = "All fields are required.";
        }
        
        if ($valid == false) {
            return $errorMessage;
        }
        return;
    }
*/
    function isUserExists($email)
    {
        $query = "select * from user where email = ?";
        $paramType = 's';
        $paramArray = array($email);
        $rows = $this->ds->select($query, $paramType, $paramArray);
        print $rows;
        return 1;
    }

    function insertUserRecord($name, $email, $password)
    {
        //$passwordHash = md5($password);

        $query = "insert into user (name,email,password) values(?, ?, ?)";
        $paramType = "sss";
        $paramArray = array(
            $name,
            $email,
            $password
        );
        $insertId = $this->ds->insert($query, $paramType, $paramArray);

        return $insertId;
    }
}