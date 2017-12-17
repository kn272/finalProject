<?php

class tasksController extends http\controller
{
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    public static function all()
    {
        $records = todos::findAll();
        session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {
               $data = 'you must be logged in to view tasks';
               self::getTemplate('error',$data);
           }
        $userID = $_SESSION['userID'];
        $records = todos::findTasksbyID($userID);
        self::getTemplate('all_tasks', $records);
    }

    public static function create()
    {
       $record = new account;
       self::getTemplate('create_task',$record);
        
    }

    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    public static function store()
    {
        print_r($_POST);
        session_start();
        $record = todos::findOne($_REQUEST['id']);
        $record->owneremail = $_REQUEST['owneremail'];
        $record->ownerid = $_SESSION['userID'];
        $record->createddate = $_REQUEST['createddate'];
        $record->duedate = $_REQUEST['duedate'];
        $record->message = $_REQUEST['message'];
        $record->isdone = $_REQUEST['isdone'];
        $record->save();
        header("Location: index.php?page=tasks&action=all");
        

    }
    
    public static function save() {
        session_start();
        $record = new todo();
        $record->owneremail = $_REQUEST['owneremail'];
        $record->createddate = $_REQUEST['createddate'];
        $record->duedate = $_REQUEST['duedate'];
        $record->message = $_REQUEST['message'];
        $record->isdone = $_REQUEST['isdone'];
        $record->ownerid = $_SESSION['userID'];
        $record->save();
        header("Location: index.php?page=tasks&action=all");
    }

    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");

    }

}