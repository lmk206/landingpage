<?
    
    //data_query.php
    //query
    include_once
    $_SERVER['DOCUMENT_ROOT']."/admin/admin_check.php";
    
    $num = $_POST['num'];
    $mode = $_POST['mode'];

    //del, view
    if($mode == 'del'){
        //삭제
        $query = "delete from project where num ='$num'";
        mq($query);
    }else{
        //팝업 내용
        
        $query = "select * from project where num='$num'";
        $result = mq($query);
        $row = mysqli_fetch_array($result); //mysqli_fetch_array() - 배열의 형태로 값을 저장
        if($row['contents'] != '<br>'){
            echo $row['contents'];    
        }else{
            echo "입력된 값이 없습니다.<br>
            <a href='modify.php?num={$num}'>정보입력하기</a>";
        }
        
    }
?>