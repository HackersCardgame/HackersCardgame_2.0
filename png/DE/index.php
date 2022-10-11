<!doctype html>
<meta charset="utf-8">
<html>
<head>
<script src="./modal.js" charset="UTF-8"></script>
<style>
p { clear: both; }

div.cards {
  text-align: justify;
  padding: 2em;
} 
div.text {
  text-align: justify;
  padding: 2em;
}
a {
color: orange; 
}

font.monospace
{
  font-family: "Lucida Console", Monaco, monospace;
}

.blink {
    animation-duration: 1s;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: ease-in-out;
}
@keyframes blink {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}

/* The Modal (background) */
.modal {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}


/* Modal Content */
.modalContent {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 10px solid #888;
    width: 80%;
    opacity: 0.7;
    font-size:33;
    color: red;
    font-weight: bold;

}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}


</style>
<!-- "thank you" "dear" 1960s paedos for activating CCS Suicide Death Bot against me-->
</head>
<body onhashchange="myFunction();" style="background-color:#222; color: white; font-family: Arial, Helvetica, sans-serif;">
<script>
function myFunction() {
	var allCards = document.getElementsByClassName("card");
	for (i=0; i<allCards.length; i++)
	{
		allCards[i].style = "border: 10px solid #222;float:left;text-align:center;";
		console.log(i);
	}	
	var card = window.location.hash.substr(1);
        console.log(card);	
	document.getElementById(card).style = "border: 10px solid red;float:left;text-align:center;";
}

document.addEventListener("DOMContentLoaded", function(event) {
  myFunction();
});
</script>




<div class="text">
<h1>Hackers Cardgame</h1>
<a href="https://github.com/braindef/HackersCardgame_2.0">SOURCE</a>
<br><br>

please respect the <a href="../../LICENSE">License</a><br>

<br>
<h2>Never Play <font color=red>Red Team</font> help out with <font color="#77f">Blue Team</font> and save the World</h2>
<font class=monospace color=green size=4em><b>If one of the two kids that normally both promise to be true to each other forever breaks the promise, they can easily break your mind but also the mind of the girl or boy you betrayed. If male && female, male && male, female && female or unicorn-pony && spike the baby-dragon would be the decision of both and not the decision of someone else. Choose wisely, once but only once!</b></font> <font class=monospace color=red size=4em>If the parents have pedophile tendencies they would try to separate the equal aged couple.</font>
<br><br>
Maybe i should call my paranoja a good situational awareness like Andy does...
<br>
<br>

<h3>Printing Templates:</h3>
<a href="https://github.com/HackersCardgame/HackersCardgame_2.0/tree/master/pdf/DE/A4">Github (PDF)</a>
<br>
<a href="../../pdf/DE/A4/">local (PDF)</a><br>
Printing the cards gives you a offline copy, cutting them out makes you focus ~1 Min per card that could be useful for your Learning Curve.
<br><br>
<!-- and of course nobody would have the stupid idea to place microdots in such a repository https://en.wikipedia.org/wiki/Microdot-->

<div class="cards">
<p>

-->
<?php

    $csv = array_map('str_getcsv', file('cardNames.csv'));
    array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
    array_shift($csv); # remove column header


//    print_r($csv);
//    for ($i = 0; $i < sizeof($csv); $i++)
//	if ($csv[$i]["card"] == "a2") echo $csv[$i]["english"];    
    
$files = glob("*.*");
natsort ($files);

$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

foreach($files as $file)
{
  $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  if (in_array($ext, $supported_file)) {

    $parts = explode(".", $file);
    echo '<div id="'.$parts[0].'" class="card" style="border: 10px solid black;float:left;text-align:center;">';
    echo "<font size=4em color=yellow><b>" . $parts[0] . "</b></font>" . "<hr style='height:0.01em; visibility:hidden;' />";
    echo '<a href="./'.$file .'" id="'.$parts[0].'"'.' target="_blank"><img width=200 src="'.$file .'" ></a><br>';
    echo  '<font size=1px>';

//    print_r($csv);
    for ($i = 0; $i < sizeof($csv); $i++)
      if ($csv[$i]["card"] == $parts[0]) echo $csv[$i]["english"] . "<br>" . $csv[$i]["german"] ;  
    //
    echo '</font><br><br>';
    echo '</div>
';

} else {
    continue;
 }

}

?>
<br>
<br>
<br>
</p>
</div>
<p>
<div class="text">

<br>
<br>
Marc jr Landolt<br>
eidg. dipl Informatiker HF<br>
Neuenburgerstrasse 6<br>
5004 Aarau<br>
mail@marclandolt.ch<br>
062 822 61 31 (mostly unplugged)<br>
078 674 15 32 (mostly turned off and wrapped in tin foil hat)<br>
</p>
</body>
</html>

