<?php
    // Set variable with some text
    $text = "Ten green bottles hanging on the wall, ten green bottles hanging on the wall and if one green bottle should accidentally fall, there'll be nine green bottles hanging on the wall...";
    // User pass by GET parameter a word to censor
    $forbidden_word = $_GET['forbidden_word'];
    // Set new text replacing the forbidden word with '***' in $text
    $new_text = str_replace($forbidden_word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <!-- Print the paragraph and its length. -->
    <p>
        My paragraph is: <?= $text; ?>
    </p>
    <span>
        My paragraph length is: <?= strlen($text); ?>
    </span>
    <!-- /Print the paragraph and its length. -->
    <!-- Print again the paragraph and its length after changes. -->
    <p>
        My paragraph with forbidden word is: <?= $new_text; ?>
    </p>
    <span>
        My paragraph length with forbidden word is now: <?= strlen($new_text) ?>
    </span>
    <!-- /Print again the paragraph and its length after changes. -->
</body>

</html>