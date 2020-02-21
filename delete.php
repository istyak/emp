<?php
include "connect.php"
$id=$_GET["id"];
mysqli_query($con,"delete from user1 where id=$id");

?>

<script type="text/javascript">
window.location.href=window.location.href;
//</script>
