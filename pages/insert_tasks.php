


<h1>Insert Record</h1>

<form action="index.php?page=tasks&action=insert&id=<?php echo $_SESSION['userID']; ?>" method="post" enctype="multipart/form-data" >

    <?php

    if(isset($data->message)){
        $message = $data->message;
    }else{
        $message='';
    }

    if(isset($data->id)){
        $taskid = $data->id;
    }else{
        $taskid='';
    }
    ?>

Message



    <div class="form-group">

        <input type="text" name="Message" class="form-control" id="exampleInputEmail1" required placeholder="Enter task name">
    </div>

        <input type="hidden" name="taskid" value="<?php echo $taskid; ?>"/>


     <input type="submit" value="Summit" />



 </form>
