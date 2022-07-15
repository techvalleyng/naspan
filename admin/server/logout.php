<?php
session_start();
include("includes/config.php");
$_SESSION['adminlogin']=="";
session_unset();
session_destroy();

?>
<script language="javascript">
document.location="../index";
</script>