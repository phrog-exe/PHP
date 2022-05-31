<!DOCTYPE html>
<html>
<style>

    input[type=text], select {
        width: 100%;
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
        background-color: lightblue;

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
    <form action="/action_page.php">
        <label for="text1">Enter text you want to translate: </label>
        <input type="text" id="tex1" name="text1" placeholder="Enter text here" pattern="^[a-zA-Z0-9\d\ ?.,\s]+$">
<label for="x">Output:</label>
        <output type="text" name="x" ></output><br><br>

        <label for="text2">Enter text you want to translate: </label>
        <input type="text" id="tex2" name="lastname" placeholder="Enter text here" pattern="^[a-zA-Z0-9\d\ ?.,\s]+$">
        </select>
        <small>Drop your file here: </small><br><br>
        <input type="submit" value="Submit">
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
