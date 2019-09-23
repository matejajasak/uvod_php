<?php

function ispisi_ime($ime = 'Ja'){ /* 'Ja' - zadani parametar, ako se u ispisi_ime ništa ne upiše, ipisat će se zadani parametar. Ako se u ispisi_ime upiše neko ime (primjer: 'Mateja')
                                         ispisat će se Mateja */
    echo "Vaše ime je: $ime.";
}

ispisi_ime('Mateja');