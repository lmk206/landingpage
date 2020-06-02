<?
include_once
    $_SERVER["DOCUMENT_ROOT"]."/admin/admin_check.php";
    $session =$_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link rel="stylesheet" href="/asset/css/admin_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/asset/js/admin_common.js"></script>
    <title>Document</title>
</head>
<body>

<header>
    <?=$session?>님 환영합니다.
    <a href="/admin/logout.php">[로그아웃]</a>
    <nav>
        <a href="/admin/work/list.php">Portfolio</a>
        <a href="/admin/contact/list.php">Contact</a>
    </nav>
</header>
    
</body>
</html>