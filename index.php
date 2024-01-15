<?php
// Codice PHP
    $paragraph = "Topic sentences, also known as “paragraph leaders,” introduce the main idea that the paragraph is about. They shouldn’t reveal too much on their own, but rather prepare the reader for the rest of the paragraph by stating clearly what topic will be discussed. ";
    $badword = $_GET['badword'];
    $censoredParagraph = str_ireplace($badword, "***", $paragraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>

    <h1>
        PHP Badwords
    </h1>
    <h2>
        Paragraph: <br>
        Length: <?php echo strlen($paragraph); ?>
    </h2>
    <p>
        <?php echo $paragraph; ?>
    </p>
    <hr>
    <h2>
        Censored Paragraph: <br>
        Length: <?php echo strlen($censoredParagraph); ?>
    </h2>
    <p>
        <?php echo $censoredParagraph; ?>
    </p>


</body>
            