<!DOCTYPE html>
<html lang="en">
<style>
input[type=text], input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hhover {
    background-color: #45a049;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<h3><center>Login</h3>
<div>
<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
    <label for="fname">Username</label>
    <input type="text" id="fname" name="username" placeholder="username..">

    <label for="fname">Password</label>
    <input type="password" id="lname" name="password" placeholder="password..">

    <input type="submit" value="Login">
    </form>
</div>



</body>
</html>