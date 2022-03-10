<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP file</title>
</head>
<body>
    <?php
        // echo は 言語構成で関数じゃないから括弧が必要ないのと、引数をいくつも入れられる。
        echo "This" . " " .  "is" . " " . "my PHP script.";
        echo "<br>";
        // print も 言語構成であり、関数じゃないから括弧も必要ない。けど、引数は１つまで。
        print "This is my PHP script";

        // echo は文（ statement ）。他の式や文の一部として使うことができない。戻り値を持たない。
        // print は式（ expression ）。他の式や文の一部として使うことができる。戻り値を持っていて、それはいつも 1 。
    ?>
</body>
</html>