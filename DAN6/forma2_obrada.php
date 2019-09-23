<?php

    if (isset($_POST['submit'])) {
  
        if (!empty($_POST['ime']) && !empty($_POST['prezime'])) {
            echo "Ime: $_POST[ime]<br>";
            echo "Prezime: $_POST[prezime]<br>";
        }else {
            echo 'Popunite sva polja!';
        }
    }else {
        header('Location:forma2_obrazac.php'); //ove podatke ne smije vidjeti pa u ovom koraku preusmjeravamo na forma2 obrazac
    }
