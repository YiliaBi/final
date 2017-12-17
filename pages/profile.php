
<div class="container">

    <div class="col-md-6  col-sm-12 col-xs-12">

        <form action="index.php?page=accounts&action=save&email=<?php echo $data->email?> " method="POST" >

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $data->fname?>" required placeholder="Enter new name">
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" value="<?php echo $data->email?>" required placeholder="Enter new email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $data->password?>" required placeholder="Enter new password">
            </div>




    <input type="submit" name="edit">
</form>

