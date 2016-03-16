<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Lang" content="en">
    <meta name="author" content="">
    <meta http-equiv="Reply-to" content="@.com">
    <meta name="generator" content="PhpED 6.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="creation-date" content="06/01/2011">
    <meta name="revisit-after" content="15 days">
    <title>Travelo Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../asset/css/business-frontpage.css" rel="stylesheet">
    <link href="../asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery CSS -->
    <link href="../asset/css/jquery-ui.css" rel="stylesheet">
    <!-- jQuery js -->
    <script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/jquery-1.10.2.js"></script>
    <script src="../asset/js/jquery-ui.js"></script>
    <!-- jQuery custom js -->
    <script src="../asset/js/jquery-custom.js"></script>

</head>
<body>
<h1>Hello world!~!~!~!</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('Login_ctrl/checkUser');
        echo "<div class='login'>
        <div class='id'>
        <label for='username' class='label'>User ID</label>";
             echo form_input('username', '', "id='username', placeholder='input ID...'");
        echo "</div>
        <div class='password'>
            <label for='password' class='label'>User PASSWORD</label>";
             echo form_input('password', '', "id='password', placeholder='input PASSWORD...'");
        echo"</div>
        <div class='btn'>";
             echo form_submit('mysubmit', 'Log in');
             echo form_close();?>
        </div>
    </div>
</form>
</body>
</html>