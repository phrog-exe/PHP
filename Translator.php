<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    body {
        background: linear-gradient(-45deg, #87E879, #E1A6E3, #BF90E8,#8AC1E3);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;
    }


    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }

    }

    input[type=text], select {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=text]:focus {
        background-color: lightblue;

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=text]:focus {
        background-color: dodgerblue;

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;

    }




</style>

<body>


<h1>Morse code translator</h1>

<div>

    <form action="/action_page.php" method="POST">
        <button><span>Home</span></button><button><span>Morse code</span></button><button><span>Caesar code</span></button><br><br>
        <label for="text1">Enter text you want to translate: </label><br>
        <input type="text" name="text" id="text" placeholder="Enter text here" pattern="^[a-zA-Z0-9\d\ ?.,\s]+$"><br>
        <input type="submit" name="submit" id="submit" value="Submit" />

    </form>
</div>

</body>
</html>

<?php

$convert = function($carry, $item) {
    $table = array(
        "a" => ".-",
        "b" => "-...",
        "c" => "-.-.",
        "d" => "-..",
        "e" => ".",
        "f" => "..-.",
        "g" => "--.",
        "h" => "....",
        "i" => "..",
        "j" => ".---",
        "k" => "-.-",
        "l" => ".-..",
        "m" => "--",
        "n" => "-.",
        "o" => "---",
        "p" => ".--.",
        "q" => "--.-",
        "r" => ".-.",
        "s" => "...",
        "t" => "-",
        "u" => "..-",
        "v" => "...-",
        "w" => ".--",
        "x" => "-..-",
        "y" => "-.--",
        "z" => "--..",
        "0" => "-----",
        "1" => ".----",
        "2" => "..---",
        "3" => "...--",
        "4" => "....-",
        "5" => ".....",
        "6" => "-....",
        "7" => "--...",
        "8" => "---..",
        "9" => "----.",
        "." => ".-.-.-",
        "," => "--..--",
        "?" => "..--..",
        "/" => "-..-.",
        " " => " ");

    $morse = $table[$item];

    return $carry . $morse;
};

echo array_reduce(str_split('human'), $convert);
