<?php
    //perulangan for
    for($i = 0; $i < 10; $i++){
        echo "<h2>inni perulangan ke-$i</h2>";
    }

    //perulangan while
    $ulangi = 0;

    while($ulangi <10){
        echo "<P> adalah perulangan ke-$ulangi</p>";
        $ulangi++;
    }

    //perulangan do/while
    $loop = 10;

    do {
        echo "<P>looping $ulangi</p>";
        $loop--;
    } while ($loop > 0);


    //perulangan foreach
    $books = [
        "panduan belajar PHP untuk pemula",
        "membangun aplikasi web dengan PHP",
        "tutorial PHP dan mysql",
        "membuat chat bot dengan PHP"
    ];

    echo "<h5>Judul Buku PHP:</h5>";
    echo "<ul>";
    foreach($books as $buku){
        echo "<li>$buku</li>";
    }
    echo "</ul";
?>    