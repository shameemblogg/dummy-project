<?php

include "config.php";
session_start();// session ko start krne k lue ye code likhte h
session_unset();// sesssion m jo v value hogi wo remove ho jayege yani unset hojayegi
session_destroy();// session ko delete krne k lue iska use krte h
header("Location: {$hostname}/admin/");

?>
