<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    if($_POST){
        $string = $_POST['username'];
        $pattern = '#^[A-z][\w\.]{5,31}$#';
        if(preg_match($pattern, $string, $match) == 1){
        $report = '<span style=\'color:#298426\'>Bạn vừa nhập vào một tài khoản hợp lệ!</span>';
        }
    else{
        $report = '<span style=\'color:#FF0400\'>Bạn vừa nhập vào một tài khoản không hợp lệ!</span>';
        }
        }
        ?>
    <fieldset>
    <legend><b>Đăng ký tài khoản</b></legend>
    <form method="post">
    Nhập tài khoản hợp lệ: <?php if(isset($report)){echo $report;}?><br />
    <input type="text" name="username" />
    <input type="submit" name="submit_name" value="Đăng ký" />
    </form>
    </fieldset>
</body>
</html>