<?
    //data_query.php
    //query
    include_once
    $_SERVER['DOCUMENT_ROOT']."/admin/admin_check.php";

    $num = $_POST['num'];
    $mode = $_POST['mode'];
    //삭제
    if($mode=='del'){
    $query = "delete from contact where num ='$num'";
    mq($query);
    }
?>