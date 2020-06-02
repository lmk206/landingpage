<?
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/head.php";
?>

<script type="text/javascript" src="/editor/js/HuskyEZCreator.js" charset="utf-8"></script>
<article class="request">
    <h2>Contact us</h2>
    <form action="request_res.php" name="popol" enctype="multipart/form-data" method="post">
       <!--db_name = "contact"
       컬럼 -> num, name, subject, email,<contents></contents>-->
        <ul>
            <li><input type="text" name="name" placeholder="name"></li>
            <li><input type="text" name="subject" placeholder="subject" ></li>
            <li><input type="email" name="email" placeholder="email" ></li>
            <li>
                <textarea name="contents"></textarea>
                
            </li>
            <li><input type="submit" value="SAVE" class="btn"></li>
        </ul>
    </form>
</article>
<?
//    fun('contact()');
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/foot.php";
?>

