<?php

function centerText($text) {
    $line_length = strlen($text);
    $padding = str_repeat(" ", (100 - $line_length) / 2);
    return $padding . $text . $padding;
}

echo "<h1 style='font-size: 24px; text-align: center;'>Style</h1>";

echo "<p style='font-size: 12px; text-align: center;'>by Taylor Swift<br><br></p>";

echo "<div style='text-align: center;'>";

echo "<span style='font-size: 14px;'>[Intro]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                 Am       F       Am       F</span><br><br>";

echo "<span style='font-size: 14px;'>[Verse 1]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am                                   F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Midnight you come and pick me up, no headlights</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am                                          F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Long drive, could end in burnin' flames, or paradise</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>     Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Fade in to view, oh, it's been a while since I have even</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Heard from you, heard from you</span><br><br>";

echo "<span style='font-family: Arial, sans-serif;'>Dm*                                         Em*</span><br>";
echo "<span style='font-family: Arial, sans-serif;'> And I should just tell you to leave cause I</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                                 F*</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Know exactly where It leads but I</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                                 F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Watch us go round and round each time</span><br><br>";

echo "<span style='font-size: 14px;'>[Chorus]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>             C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>You got that James Dean day dream look in your eye</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And I got that red lip classic thing that you like</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And when we go crashing down we come back every time</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                  F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Cause we never go out of style, we never go out of style</span><br><br>";

echo "<span style='font-family: Arial, sans-serif;'>            C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>You got the long hair slicked back, white t-shirt</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And I got that good girl faith and a tight little skirt</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And when we go crashing down we come back every time</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                  F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Cause we never go out of style, we never go out of style</span><br><br>";

echo "<span style='font-size: 14px;'>[Verse 2]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am                                      F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>So it goes, he can't keep his wild eyes on the road</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Am                                        F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Takes me home, lights are off he's taking off his coat</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>       Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>I say 'I heard (oh) that you've been out and about</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>          F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>With some other girl' (some other girl)</span><br><br>";

echo "<span style='font-family: Arial, sans-serif;'>Dm*                                 Em*</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>You say what you heard is true but I</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                                   F*</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Can't stop thinking about you and I</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                                F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>I say I've been there too a few times</span><br><br>";

echo "<span style='font-size: 14px;'>[Chorus]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                   C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Cause you got that James Dean day dream look in your eye</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And I got that red lip classic thing that you like</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And when we go crashing down we come back every time</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                  F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Cause we never go out of style, we never go out of style</span><br><br>";

echo "<span style='font-family: Arial, sans-serif;'>            C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>You got the long hair slicked back, white t-shirt</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And I got that good girl faith and a tight little skirt</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And when we go crashing down we come back every time</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                  F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Cause we never go out of style, we never go out of style</span><br><br>";

echo "<span style='font-size: 14px;'>[Bridge]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>        C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Take me home</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>             F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Just take me home, yeah</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>             C           F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Just take me home, ohohohoh</span><br><br>";

echo "<span style='font-size: 14px;'>[Chorus]</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                   C</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Cause you got that James Dean day dream look in your eye</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               F</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And I got that red lip classic thing that you like</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>               Am</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>And when we go crashing down we come back every time</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>                  F                                      C*</span><br>";
echo "<span style='font-family: Arial, sans-serif;'>Cause we never go out of style, we never go out of style</span><br>";

?>
