<!DOCTYPE html>
<html>
<head>
    <title>jQuery Ajax To Update Records</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>


</head>
<body>


<div class="container">
    <h3>jQuery Ajax To Update Records</h3>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th width="100px">Action</th>
        </tr>


        <?php
        require('config.php');


        $sql = "SELECT * FROM users";
        $users = $mysqli->query($sql);


        while($user = $users->fetch_assoc()){
        ?>
            <tr>
                <td><a href="" class="update" data-name="name" data-type="text" data-pk="<?php echo $user['id'] ?>" data-title="Enter Name"><?php echo $user['name'] ?></a></td>
                <td><a href="" class="update" data-name="email" data-type="email" data-pk="<?php echo $user['id'] ?>" data-title="Enter Email"><?php echo $user['email'] ?></a></td>

 
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
        <?php } ?>
    </table>
</div> 


<!-- container / end -->


</body>
<script type="text/javascript">
    $('.update').editable({
           url: 'update.php',
           type: 'text',
           pk: 1,
           name: 'name',
           title: 'Enter name'
    });
</script>
</html>