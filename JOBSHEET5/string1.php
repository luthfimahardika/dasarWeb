<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum omnis ab nam sequi natus eligendi dolores hic reiciendis cupiditate nemo id exercitationem ea fugit reprehenderit molestiae, excepturi tempora quos quidem!.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>