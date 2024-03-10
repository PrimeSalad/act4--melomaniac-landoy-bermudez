<?php

function centerText($text) {
    $line_length = strlen($text);
    $padding = str_repeat(" ", (100 - $line_length) / 2);
    return $padding . $text . $padding;
}

echo "<h1 style='font-size: 24px; text-align: center;'>Red</h1>";

echo "<p style='font-size: 12px; text-align: center;'>by Taylor Swift<br><br></p>";

echo "<div style='text-align: center;'>";

echo "<span style='font-size: 14px;'>[Intro]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><span style='font-weight: bold;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>e|---------------------------------|<br>";
echo "B|--------1-------1--------0-------|<br>";
echo "G|------2-------2--------0---------|<br>";
echo "D|----3-------2--------0-----------|<br>";
echo "A|---------------------------------|<br>";
echo "E|---------------------------------|<br></span>";
echo "<span style='font-family: Arial, sans-serif;'>(Or, single strum each chord)</span><br><br>";
echo "<span style='font-family: Arial, sans-serif;'>F  Am  G</span><br><br>";

echo "<span style='font-size: 14px;'>[Verse]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Lovin' him is like, drivin' a new Maserati</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Down a dead end street</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Faster than the wind, passionate as sin</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Ended so suddenly</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Loving him is like, tryin' to change your mind</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Once you're already flying through the free fall</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Like the colors in autumn so bright</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Just before they lose it all</span><br><br>";

echo "<span style='font-size: 14px;'>[Chorus]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Losing him was blue, like I'd never known</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Missing him was dark grey, all alone</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Forgetting him was like trying to know somebody</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>You never met</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>But loving him was red</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Re ee ed, re ee ed, re ee ed</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Lovin' him was red</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><span style='font-weight: bold;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Re ee ed, re ee ed, re ee ed</span><br><br>";

echo "<span style='font-size: 14px;'>[Verse]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Touching him was like, realizing all you ever wanted</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Was right there in front of you</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Memorizing him was as, easy as knowin' all the words</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>To your old favorite song</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Fighting with him was like tryin' to solve a</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Crossword and realizing there's no right answer</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Regretting him was like wishing you never found out</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>That love could be that strong</span><br><br>";

echo "<span style='font-size: 14px;'>[Chorus]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Losing him was blue, like I'd never known</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Missing him was dark grey, all alone</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Forgetting him was like trying to know somebody</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>You never met</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Cause loving him was red</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Re ee ed, re ee ed, oh red, re ee ed</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Burnin' red, re ee ed, re ee ed</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Re ee ed</span><br><br>";

echo "<span style='font-size: 14px;'>[Bridge]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Remembering him comes in flashbacks and echos</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Tellin' myself it's time now gotta let go</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>But moving on from him is impossible</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>When I still see it all in my, head</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F   Am  G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And burning red</span><br><br>";

echo "<span style='font-size: 14px;'>[Outro]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><span style='font-weight: bold;'>Am</span><span style='font-family: Arial, sans-serif;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And that's Why he's spinnin' 'round in my head</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Comes back to me, burnin' red</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><span style='font-weight: bold;'>G</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Yeah, yeah</span><br><br>";

echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>His love was like, drivin' a new Maserati</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Down a dead end street.</span><br>";

echo "</div>";

?>
