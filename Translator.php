<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <link rel="stylesheet"
          href=
          "https://unpkg.com/purecss@1.0.0/build/pure-min.css"
          integrity=
          "sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w"
          crossorigin="anonymous" />

<style>

    body {


        background: linear-gradient(-45deg, #bc5090, #ff6361,#003f5c, #b06ab3);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;

        font-family: 'Courier New', monospace;
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
/*
Buttons
 */

    .button1 {

        font-family: 'Courier New', monospace;
        font-weight: bold;
        font-size: 1em;
        letter-spacing: 0.1em;
        text-decoration: none;
        background-color: #393e46;
        color: white;
        display: inline-block;
        padding: 10px 40px 10px 40px;
        position: relative;
        border: 3px solid #ffffff;
        border-radius: 25px;

    }

.button2 {
    font-family: 'Courier New', monospace;
    font-weight: bold;
    font-size: 1em;
    letter-spacing: 0.1em;
    text-decoration: none;
    background-color: #393e46;
    color: white;
    display: inline-block;
    padding: 10px 40px 10px 40px;
    position: relative;
    border: 3px solid #ffffff;
    border-radius: 25px;

}

.button3 {
    font-family: 'Courier New', monospace;
    font-weight: bold;
    font-size: 1em;
    letter-spacing: 0.1em;
    text-decoration: none;
    background-color: #393e46;
    color: white;
    display: inline-block;
    padding: 10px 40px 10px 40px;
    position: relative;
    border: 3px solid #ffffff;
    border-radius: 25px;
}


.button_sub {
    border: 5em;
    cursor: pointer;
    outline: none;
    font-size: 16px;
    -webkit-transform: translate(0);
    transform: translate(0);
    background-image: linear-gradient(45deg, #4568dc, #b06ab3);
    padding: 0.7em 2em;
    border-radius: 65px;
    box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
    -webkit-transition: box-shadow 0.25s;
    transition: box-shadow 0.25s;
    color: white;

}

}
    .button_sub:after {
        content: "";
        border-radius: 18px;
        position: absolute;
        margin: 4px;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -1;
        background: #0e0e10;
    }

    .button_sub:hover {
        background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
        box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
    }



    /*  button download*/

.button_save {
margin-left: 1200px;
}


/*
text areas
 */
     .area1 {
         outline: none;

         font-family: lato,sans-serif;
         font-weight: bold;
         font-size: 1em;
         letter-spacing: 0.1em;
         text-decoration: none;
        background-color: #393e46;
         color: white;
         padding: 60px 80px 60px 80px;
         position: relative;
         border: 3px solid #ffffff;
         border-radius: 25px;
        resize: none;
    }
     .area2 {
         outline: none;

         font-family: lato,sans-serif;
         font-weight: bold;
         font-size: 1em;
         letter-spacing: 0.1em;
         text-decoration: none;
         background-color: #393e46;
         color: white;
         padding: 60px 80px 60px 80px;
         position: relative;
         border: 3px solid #ffffff;
         border-radius: 25px;
         resize: none;
     }
     .label1 {
         margin-right: 1050px;
         color: white;

     }

     .h1 {
         color: white;
     }
</style>
</head>
<body>

<h1 class="h1">CIPHER ENCODER / DECODER</h1><br><br>

<div>
    <form method="get" action="">

        <input class="button1" type ="button" value="Morse code" onclick="">&nbsp&nbsp
        <input class="button2" type ="button" value="Caesar cipher" onclick="">&nbsp&nbsp
        <input class="button3" type ="button" value="Affine cipher" onclick=""><br><br><br><br>

        <label class="label1" for="text1">Enter text you want to encode: </label><br><br>

        <textarea class="area1" name="text1" id="text1" placeholder="Hello World" rows="10" cols="50"></textarea>&nbsp &nbsp &nbsp
        <textarea readonly="readonly" class="area2" name="text2" id="text2" rows="10" cols="50" placeholder=".... . .-.. .-.. --- / .-- --- .-. .-.. -.."></textarea><br>


        <button class="button_save" onclick=saveTextAsFile(text2.value,'download.txt')>Download</button><br><br>

         <input class="button_sub" type="submit" value="Submit">





    </form>

</div>
</div>

</body>
</html>


<?php

if(isset($_GET['text1'])) {

    $phrase = $_GET["text1"];
    /*
        if($phrase == "") {

            echo '<script>alert("The input must not be empty!")</script>';

        } else
    */

    $convert = function ($carry, $item) {
        $table = array(
            "a" => ".- ",
            "b" => "-... ",
            "c" => "-.-. ",
            "d" => "-.. ",
            "e" => ". ",
            "f" => "..-. ",
            "g" => "--. ",
            "h" => ".... ",
            "i" => ".. ",
            "j" => ".--- ",
            "k" => "-.- ",
            "l" => ".-.. ",
            "m" => "-- ",
            "n" => "-. ",
            "o" => "--- ",
            "p" => ".--. ",
            "q" => "--.- ",
            "r" => ".-. ",
            "s" => "... ",
            "t" => "- ",
            "u" => "..- ",
            "v" => "...- ",
            "w" => ".-- ",
            "x" => "-..- ",
            "y" => "-.-- ",
            "z" => "--.. ",
            "A" => ".- ",
            "B" => "-... ",
            "C" => "-.-. ",
            "D" => "-.. ",
            "E" => ". ",
            "F" => "..-. ",
            "G" => "--. ",
            "H" => ".... ",
            "I" => ".. ",
            "J" => ".--- ",
            "K" => "-.- ",
            "L" => ".-.. ",
            "M" => "-- ",
            "N" => "-. ",
            "O" => "--- ",
            "P" => ".--. ",
            "Q" => "--.- ",
            "R" => ".-. ",
            "S" => "... ",
            "T" => "- ",
            "U" => "..- ",
            "V" => "...- ",
            "W" => ".-- ",
            "X" => "-..- ",
            "Y" => "-.-- ",
            "Z" => "--.. ",
            "0" => "----- ",
            "1" => ".---- ",
            "2" => "..--- ",
            "3" => "...-- ",
            "4" => "....- ",
            "5" => "..... ",
            "6" => "-.... ",
            "7" => "--... ",
            "8" => "---.. ",
            "9" => "----. ",
            "." => ".-.-.- ",
            "," => "--..-- ",
            "?" => "..--.. ",
            "/" => "-..-. ",
            " " => "     ");


        $morse = $table[$item];

        return $carry . $morse;
    };
}
?>
<html><script>

    document.getElementById('text2').value ="<?php echo array_reduce(str_split("$phrase"), $convert); ?>";

</script>

</html>
<script>
function saveTextAsFile(textToWrite, fileNameToSaveAs)
       {
        var textFileAsBlob = new Blob([textToWrite], {type:'text/plain'});
        var downloadLink = document.createElement("a");
         downloadLink.download = fileNameToSaveAs;
         downloadLink.innerHTML = "Download File";
            if (window.webkitURL != null)
               {
                   //chrome
                 downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
               } else
                     {
                        // Firefox
                downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
                downloadLink.onclick = destroyClickedElement;
                downloadLink.style.display = "none";
                document.body.appendChild(downloadLink);
                     } downloadLink.click();
        }
</script>
