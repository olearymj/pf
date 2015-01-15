<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<audio id="audOne"  preload="auto">
			<source src="audio/one.mp3"></source>
			<!--<source src="audio/one.ogg"></source>-->
			<source src="audio/one.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>	

	
	<audio id="audTwo"  preload="auto">
			<source src="audio/two.mp3"></source>
			<!--<source src="audio/two.ogg"></source>-->
			<source src="audio/two.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>
	
	<audio id="audThree" preload="auto">
			<source src="audio/three.mp3"></source>
			<!--<source src="audio/three.ogg"></source>-->
			<source src="audio/three.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>

	<audio id="audFour" preload="auto">
			<source src="audio/four.mp3"></source>
			<!--<source src="audio/four.ogg"></source>-->
			<source src="audio/four.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>
	
	<audio id="audFive" preload="auto">
			<source src="audio/five.mp3"></source>
			<!--<source src="audio/five.ogg"></source>-->
			<source src="audio/five.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>
	
	<audio id="audSix" preload="auto">
			<source src="audio/six.mp3"></source>
			<!--<source src="audio/six.ogg"></source>-->
			<source src="audio/six.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>	


	<audio id="audSeven" preload="auto">
			<source src="audio/seven.mp3"></source>
			<!--<source src="audio/seven.ogg"></source>-->
			<source src="audio/seven.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>
	
	<audio id="audEight" preload="auto">
			<source src="audio/eight.mp3"></source>
			<!--<source src="audio/eight.ogg"></source>-->
			<source src="audio/eight.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>	
	
		<audio id="audNine" preload="auto">
			<source src="audio/nine.mp3"></source>
			<!--<source src="audio/nine.ogg"></source>-->
			<source src="audio/nine.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>
	
	<audio id="audTen" preload="auto">
			<source src="audio/ten.mp3"></source>
			<!--<source src="audio/ten.ogg"></source>-->
			<source src="audio/ten.wav"></source>
			Your browser isn't invited for super fun time.
	</audio>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
<script type="text/javascript">
var percentageArray = new Array();   
var audioArray = ['#audOne','#audTwo', '#audThree','#audFour','#audFive', '#audSix','#audSeven','#audEight','#audNine','#audTen'];
var idArray = ['#first', '#second', '#third', '#fourth', '#fifth', '#sixth', '#seventh', '#eight', '#ninth', '#tenth'];
var imgArray = ['firstSound', 'secondSound', 'thirdSound', 'fourthSound', 'fifthSound', 'sixthSound', 'seventhSound', 'eightSound', 'ninthSound', 'tenthSound'];

for( i=0; i<11; i++ ){
  percentageArray[i] = Math.random()*100;
}


function makeX(sensorValue){
    var y;  
    y = Math.floor(sensorValue/10);
    return y;
}

function chooseSound(sensorValue){

  var y;
  y = Math.floor(sensorValue/10);
  var sound = $(audioArray[y])[0];
  sound.play();
  
}

function isEven(number){
  if(number%2 == 0){
    return true;
  }else{
    return false;
  }
}

function makeElements(sensorValue,valueNumber){

  var targetId = idArray[valueNumber];
  var imgId = imgArray[valueNumber];
  var src = 'images/lightDrops.png';
  if(isEven(valueNumber)){
    src = 'images/darkDrops.png';
  }


  if(makeX(sensorValue)==0){
    $(targetId).after('<img id= "'+imgId+'" src="'+src+'" alt="Water Droplets" />');
    $("#"+imgId+"").on('mouseover touchstart', function(){
      chooseSound(sensorValue);
    });
  }else {
    for(var i=1; i<=(makeX(sensorValue)); i++){
      $(targetId).after('<img id= "'+imgId+'" src="'+src+'" alt="Water Droplets" />');
      $("#"+imgId+"").on('mouseover touchstart', function(){
        chooseSound(sensorValue);
      });
    }
  }

}

$(document).ready(function(){ 
  for( i=0; i<10; i++ ){
    makeElements(percentageArray[i], i);
  }
});
</script>

<style type="text/css">
#container {
width: 100%
height: 100%
margin: 0 auto; /* the auto value on the 
sides, coupled with the width, centres the 
layout */}

body{
background-image:url('images/grey8.jpeg');
}

img { 
width:68%;
height:10%;
margin:5px;

}
#leftside { width: 50%; float: left; } 
#rightside { width: 50%; float: right; } 
.leftsideleft {width: 60%; float: left; }
.leftsideright {width: 40%; float: right; }

.leftcolumn {width: 66.65%; float: left; }
#thirdcolumn {width: 33.33%; float: right; }
#eighthcolumn {width: 33.33%; float: right; }

#firstcolumn {width: 50%; float: left; }
#secondcolumn {width: 50%; float: right; }
#fourthcolumn {width: 50%; float: left; }
#fifthcolumn {width: 50%; float: right; }

#sixthcolumn {width: 50%; float: left; }
#seventhcolumn {width: 50%; float: right; }
#ninthcolumn {width: 50%; float: left; }
#tenthcolumn {width: 50%; float: right; }


</style>
</head>
<body>
<div id="container">
<div id="leftside"> 
<div class="leftsideleft">
<div class="leftcolumn">
<div id="firstcolumn"><img id= "first" src="images/darkDrops.png" alt="Water Droplets"  /></div>
<div id="secondcolumn"><img id= "second" src="images/lightDrops.png" alt="Water Droplets" /></div>
</div>
<div id="thirdcolumn"><img id= "third" src="images/darkDrops.png" alt="Water Droplets" /></div>
</div>
<div class="leftsideright">
<div id="fourthcolumn"><img id= "fourth" src="images/lightDrops.png" alt="Water Droplets" /></div>
<div id="fifthcolumn"><img id= "fifth" src="images/darkDrops.png" alt="Water Droplets"  /></div>
</div>
</div>
<div id="rightside">
<div class="leftsideleft">
<div class="leftcolumn">
<div id="sixthcolumn"><img id= "sixth" src="images/lightDrops.png" alt="Water Droplets" /></div>
<div id="seventhcolumn"><img id= "seventh" src="images/darkDrops.png" alt="Water Droplets"  /></div>
</div>
<div id="eighthcolumn"><img id= "eighth" src="images/lightDrops.png" alt="Water Droplets" /></div>
</div>
<div class="leftsideright">
<div id="ninthcolumn"><img id= "ninth" src="images/darkDrops.png" alt="Water Droplets"  /></div>
<div id="tenthcolumn"><img id= "tenth" src="images/lightDrops.png" alt="Water Droplets" /></div>
</div>
</div>


  
  
</div>
</div>

</body>
</html>
