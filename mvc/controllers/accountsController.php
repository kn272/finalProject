<?php

class accountsController extends http\controller
{
    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }

    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }
    
    public static function register()
    {        
        self::getTemplate('register');
    }

    public static function store()
    {
        
        $user = accounts::findUserbyEmail($_REQUEST['email']);
        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
            $user->password = $user->setPassword($_POST['password']);
            $user->save();
            header("Location: https://web.njit.edu/~kn272/finalProject/mvc/");
        } else {
            $error = 'already registered';
            self::getTemplate('error', $error);
        }
    }

    public static function edit()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);

        self::getTemplate('edit_account', $record);

    }
    
    public static function save() {
        $user = accounts::findOne($_REQUEST['id']);
        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->password = $user->setPassword($_POST['password']);
        $user->save();
        header("Location: index.php?page=tasks&action=all");
    }
    
    public static function delete()
    {
        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=accounts&action=all");
    }

    public static function login()
    {
        
        $user = accounts::findUserbyEmail($_REQUEST['uname']);
        if ($user == FALSE) {
            $data = 'user not found';
            self::getTemplate('error',$data);
        } else {
            if($user->checkPassword($_POST['psw']) == TRUE) {
                session_start();
                $_SESSION["userID"] = $user->id;
                $_SESSION["email"] = $user->email;
                header("Location: index.php?page=tasks&action=all");                
            } else {
                $data = 'password does not match';
                self::getTemplate('error',$data);
            }
        }

    }
    
    public static function logout()
    {
      
      session_destroy();
      header("Location: https://web.njit.edu/~kn272/finalProject/mvc/");
    }

}