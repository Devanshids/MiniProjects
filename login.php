<?php 
 include('connection.php');
?>
<form action = "" method = "POST">
    username<input type = "text" name = "username"><br><br>
    password<input type = "password" name = "password"><br><br>
    <input type = "submit" name = "submit" value = "login">
</form>

<?php
 $user = $_POST['username'];
 $psd = $_POST['password'];

 if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $psd=$_POST['password'];
        $query = "SELECT * FROM data WHERE  username = '$user'";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
        echo $total;

 }
 ?>