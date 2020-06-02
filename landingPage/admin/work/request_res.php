<?

    include_once
    $_SERVER["DOCUMENT_ROOT"]."/asset/inc/db.php";

    $title = $_POST['title'];
    $url = $_POST['url'];
    $date = $_POST['date'];
    $upload = $_FILES['upload']; // 파일은 files로 가져오기
    $contents = $_POST['contents'];    
    $state = $_POST['state'];

    //file 등록
    $fileName = $upload['name'];
    $fileTmp = $upload['tmp_name'];
    $fileFolder = "../upload/thum/".$fileName;
    $fileDir = '/admin/upload/thum/'.$fileName;

    move_uploaded_file($fileTmp, $fileFolder);
    // move_uploaded_file은 상대경로로만 가능하다...
    if(!isset($_POST['mode'])){
    $query = "INSERT INTO project(
            title, url, date, upload, contents, state
            ) VALUES(
            '$title','$url','$date','$fileDir','$contents','$state'
            )";
    }else{
        $num = $_POST['num'];
        if(!empty($fileName)){
            $query = "update project set upload='$fileDir' where num='$num'";   
            mq($query);
        }
        $query = "update biz set 
        title='$title', url='$url', date='$date', 
        contents='$contents', state='$state' 
        where num='$num'";
    }
    mq($query); //쿼리명령문 실행
    //mysqli_query(php내부 method를 호출)
    
    page('list.php');
?>