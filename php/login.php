<?php
include "connection.php"
?>

<?php

if(isset($POST["submit1"]))
{
$count=0;
$res=mysqli_query($link, "select * from anggota_tbl where username='$POST[username]' && password='$_POST[password]'");
$count=mysqli_num_rows($res);

if($count==0){
    ?>
    <div class="alert alert-danger col-lg-6 col-lg-push-3">
        <strong style="color:white">Invalid</strong> Username or Password.
</div>
<?php
}
else
{
    ?>
    <script type="text/javascript">
        window.location="aa.php";
        </script>
        <?php
}
}

?>