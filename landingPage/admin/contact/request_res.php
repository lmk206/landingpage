<?

    include_once $_SERVER["DOCUMENT_ROOT"]."/asset/inc/db.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $date = date('y-m-d');

    // move_uploaded_file은 상대경로로만 가능하다...
    $query = "INSERT INTO contact(
            name, email, message, date
            ) VALUES( '$name','$email','$message','$date')";

    mq($query); //쿼리명령문 실행
    //mysqli_query(php내부 method를 호출)
    
    back('등록되었습니다.');
?>