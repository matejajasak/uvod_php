<?php

echo "<select name='broj'>
    <option value='0'>Molimo odaberite broj!</option>";
for ($i=1; $i <= 10; $i++) {
    echo "<option value = '$i'>broj - $i</option>";
}

echo '</select>';