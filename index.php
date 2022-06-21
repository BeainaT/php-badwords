<?php
// Set variable with some text
$text = "Ten green bottles hanging on the wall, ten green bottles hanging on the wall and if one green bottle should accidentally fall, there'll be nine green bottles hanging on the wall...";
// User pass by GET parameter a word to censor
$forbidden_word = $_GET['forbidden_word'];
// New length after inserted the forbidden word
$new_length = str_replace($forbidden_word, '***', $text);
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
    <!-- Replace the forbidden word in the paragraph with '***', so print again the paragraph and its length. -->
    <p>
        My paragraph with forbidden word is: <?= str_replace($forbidden_word, '***', $text); ?>
    </p>
    <span>
        My paragraph length with forbidden word is now: <?= strlen($new_length) ?>
    </span>
    <!-- /Replace the forbidden word in the paragraph with '***', so print again the paragraph and its length. -->
</body>

</html>