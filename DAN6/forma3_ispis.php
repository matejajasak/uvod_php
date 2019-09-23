<?php

if (isset($_POST['submit'])) {
    echo "Ime: $_POST[ime]<br>";
    echo "Prezime: $_POST[prezime]<br>";
}else {
    header('Location:forma3.php'); 
}