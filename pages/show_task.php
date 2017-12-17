

<?php
//this is how you print something  $data contains the record that was selected on the table.

echo utility\htmlTable::generateTableFromOneRecord($data);
?>
<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="edit">edit</button>
</form>

<br/><br/>

<a class="btn btn-info" href="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> ">Delete</a>
<!--<form action="" method="post" id="form2">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>-->




<script src="js/scripts.js"></script>
</body>
</html>