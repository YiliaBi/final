<?php

/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        //session_start();

        $userID = $_SESSION['userID'];

        //
        $records = todos::findTasksbyID($userID);
        //var_dump($records);
        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        print_r($_POST);
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('insert_tasks', $record);

    }

    //this is the function to view edit record form
    public static function insert()
        {

        self::getTemplate('insert_tasks', '');

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {


        //$record = todos::findOne($_REQUEST['id']);
        //$record->body = $_REQUEST['body'];
        //session_start();
        $id = $_REQUEST['id'];
        $user = accounts::findOne($id);

        $newrecord = new todo();

        if(isset($_POST['taskid'])){
            $newrecord->id = $_POST['taskid'];
        }

        $newrecord->owneremail = $user->email;
        $newrecord->ownerid = $id;
        $newrecord->createddate = "2017-6-4";
        $newrecord->duedate = "2018-6-4";
        $newrecord->message = $_POST['Message'];
        $newrecord->isdone = "0";

        $newrecord->save();

        header("Location: index.php?page=tasks&action=all");



        //print_r(newrecord);

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();

        echo "Deleted The following record";
        echo utility\htmlTable::generateTableFromOneRecord($record);

        echo '<a class="btn btn-info" href="https://web.njit.edu/~yb83/finalpro/index.php?page=tasks&action=all">Go back to Tasks Page</a>';
        //header("Location: index.php?page=tasks&action=all");

    }

    public static function update ()


    {
        $record = todos::update($_REQUEST['id']);
        $record->update();
        self::getTemplate('update', $record);

    }

    public static function save() {
    $user = todos::findOne($_REQUEST['id']);

    $user->owneremail = $_POST['owneremail'];
    $user->ownerid = $_POST['ownerid'];
    $user->createddate= $_POST['craeteddate'];
    $user->duedate = $_POST['duedate'];
    $user->message = $_POST['message'];
    $user->isdone = $_POST['isdone'];
    $user->save();
    header("Location: index.php?page=todos&action=all");

}
}