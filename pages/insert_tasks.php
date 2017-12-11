
<h1>Insert Record</h1>
<?php session_start();?>
<form class="form" action="index.php?page=tasks&action=insert&id=<?php echo $_SESSION['userID']; ?>" method="post" enctype="multipart/form-data" >

    <?php

    if($data->message){
        $message = $data->message;
    }else{
        $message='';
    }

    if($data->id){
        $taskid = $data->id;
    }else{
        $taskid='';
    }
    ?>

    Message
    <input type="text" name="Message" value="<?php echo $message; ?>" required /><br/>

    <input type="hidden" name="taskid" value="<?php echo $taskid; ?>"/>



 <input type="submit" value="Summit" />

 </form>
