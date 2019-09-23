<form method="POST"> 
    <p>
        <label for="ime">Ime:</label>
        <input type="text" name="ime">
    </p>
    <p>
        <label for="prezime">Prezime:</label>
        <input type="text" name="prezime">
    </p>
    <p>
        <input type="submit" name="submit" value="Pošalji">
    </p>
</form>

<?php
// forme bi uglavnom trebale koristiti POST - šalje podatke (skriverni parametri)


//ako želimo provjeriti samo kada je netko pristinsuo tipku Pošalji
if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    if($_POST['ime'] === '') {
        echo "Ime NIJE postavljeno!";
    }else{
        echo "Ime je postavljeno!";
    }
}

// ili

/*
if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    if (!empty($_POST['ime']) && !empty($_POST['prezime'])) {
        echo "Ime: $_POST[ime]<br>";
        echo "Prezime: $_POST[prezime]<br>";
    }else {
        echo 'Popunite sva polja!';
    }
}
*/