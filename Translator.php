<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
    @import url("http://fonts.googleapis.com/css?family=Cinzel+Decorative:700");
    body {


        background: linear-gradient(-45deg, #87E879, #E1A6E3, #BF90E8,#8AC1E3);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;

        font-family: "Cinzel Decorative", serif;
        font-size: 112.5%;
        text-align: center;
        font-weight: 700;


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

        font-family: 'Lato', sans-serif;
        font-weight: 300;
        text-align: center;
        font-size: 18px;
        color: #676767;
    }
    input[type=text]:focus {
        background-color: white;



    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;

    }




</style>




<body>

<h1>CIPHER DECODER</h1>

<div>
    <form method="get" action="">



        <input class="button1" type ="button" value="Morse code" onclick=""><input type ="button" value="Caesar cipher" onclick=""><input type ="button" value="Affine cipher" onclick=""><br><br>
        <label for="text1">Enter text you want to translate: </label><br>
        <input type="text" name="text" placeholder="Enter text here" pattern="^[a-zA-Z0-9\d\ ?.,\s]+$"><br>


<input type="submit" value="Submit">

    </form>

</div>
</div>

</body>
</html>


<?php
$phrase=$_GET["text"];


if($phrase == "") {

    echo '<script>alert("The input must not be empty!")</script>';

} else

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
        "A" => ".-",
        "B" => "-...",
        "C" => "-.-.",
        "D" => "-..",
        "E" => ".",
        "F" => "..-.",
        "G" => "--.",
        "H" => "....",
        "I" => "..",
        "J" => ".---",
        "K" => "-.-",
        "L" => ".-..",
        "M" => "--",
        "N" => "-.",
        "O" => "---",
        "P" => ".--.",
        "Q" => "--.-",
        "R" => ".-.",
        "S" => "...",
        "T" => "-",
        "U" => "..-",
        "V" => "...-",
        "W" => ".--",
        "X" => "-..-",
        "Y" => "-.--",
        "Z" => "--..",
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

?>
<html>
<input type="text" value="<?php echo array_reduce(str_split("$phrase"), $convert); ?>" />
</html>
