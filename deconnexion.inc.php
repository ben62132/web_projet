<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php?error=none_well_deconnected");
exit();
?>