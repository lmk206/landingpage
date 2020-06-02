<?

    include_once
    $_SERVER["DOCUMENT_ROOT"]."/asset/inc/db.php";

    $title = $_POST['title'];
    $type = $_POST['type'];    
    $summery = $_POST['summery'];
    $used = $_POST['summery'];
    $browser = $_POST['summery'];
    $page = $_POST['summery'];
    $date = date('y-m-d');

    // move_uploaded_file은 상대경로로만 가능하다...
    $query = "INSERT INTO contact(
            title, type, summery, used, browser, page, date
            ) VALUES( '$title','$type','$summery','$used','$browser','$page','$date'
            )";

    mq($query); //쿼리명령문 실행
    //mysqli_query(php내부 method를 호출)
    
    page('project.php');
?>