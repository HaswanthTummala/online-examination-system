<?php
session_start();
include"../connections.php";
if(!isset($_SESSION["admin"]))
{
    ?>

    <script type="text/javascript">
    window.location="index.php";
    </script>
    <?php
}
$id=$_GET["id"];
mysqli_query($link,"delete from registeration where id=$id");
?>
<script type="text/javascript">
	window.location="userslist.php";
</script>