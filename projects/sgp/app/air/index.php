<!DOCTYPE HTML>
<html>
<head>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">


    <style>
      body {
        margin: 0px;
        padding: 0px;
        background:#333;
      }
      canvas {
        border: 1px transparent;
        background:'#333';
        background-image:url("images/8.jpeg");
      }
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../../../js/kinetic.js"></script>

</head>



  <body>
  	<audio id="audOne"  preload="auto">
			<!--<source src="audio/Air - Full Track Mp3.mp3"></source>-->
			<!--<source src="audio/one.ogg"></source>-->
			<source src="audio/one.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>	

	
	<audio id="audTwo"  preload="auto">
			<source src="audio/two.mp3"></source>
			<!--<source src="audio/two.ogg"></source>-->
			<source src="audio/two.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>
	
	<audio id="audThree" preload="auto">
			<source src="audio/three.mp3"></source>
			<!--<source src="audio/three.ogg"></source>-->
			<source src="audio/three.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>

	<audio id="audFour" preload="auto">
			<source src="audio/four.mp3"></source>
			<!--<source src="audio/four.ogg"></source>-->
			<source src="audio/four.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>
	
	<audio id="audFive" preload="auto">
			<source src="audio/five.mp3"></source>
			<!--<source src="audio/five.ogg"></source>-->
			<source src="audio/five.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>
	
	<audio id="audSix" preload="auto">
			<source src="audio/six.mp3"></source>
			<!--<source src="audio/six.ogg"></source>-->
			<source src="audio/six.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>	
	
	<audio id="audSeven" preload="auto">
			<source src="audio/seven.mp3"></source>
			<!--<source src="audio/six.ogg"></source>-->
			<source src="audio/seven.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>		

	<audio id="audEight" preload="auto">
			<source src="audio/seven.mp3"></source>
			<!--<source src="audio/six.ogg"></source>-->
			<source src="audio/seven.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>	

	<audio id="audNine" preload="auto">
			<source src="audio/nine.mp3"></source>
			<!--<source src="audio/six.ogg"></source>-->
			<source src="audio/nine.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>	
	
	<audio id="audTen" preload="auto">
			<source src="audio/ten.mp3"></source>
			<!--<source src="audio/ten.ogg"></source>-->
			<source src="audio/ten.wav"></source>
			Sorry, your browser does not support HTML5 audio!
	</audio>	
    <div id="container"></div>
  <footer>
  	<script>

var dataArray=new Array(11);

for( i=0; i<11; i++ ){
	dataArray[i] = Math.random()*(window.innerHeight);
}

var audio = [audOne, audTwo, audThree, audFour, audFive, audSix, audSeven, audEight, audNine, audTen];


function loadImages(sources, callback) {
	var images = {};
	var loadedImages = 0;
	var numImages = 0;
	// get num of sources
	for(var src in sources) {
    	numImages++;
	}
    for(var src in sources) {
		images[src] = new Image();
        images[src].onload = function() {
            if(++loadedImages >= numImages) {
              callback(images);
            }
          };
       	images[src].src = sources[src];
	}
}
      
function draw(images) {
        
	var stage = new Kinetic.Stage({
		container: "container",
		width: window.innerWidth,
		height: window.innerHeight,
	});
    
    var layer = new Kinetic.Layer();

	var Xposition = new Array();
	var Yposition = new Array();
      
	Xposition[0]=stage.getWidth()/10-(stage.getWidth()/20);
	Xposition[1]=stage.getWidth()/5-(stage.getWidth()/20);		
	Xposition[2]=stage.getWidth()/10*3-(stage.getWidth()/20);
	Xposition[3]=stage.getWidth()/5*2-(stage.getWidth()/20);
	Xposition[4]=stage.getWidth()/2-(stage.getWidth()/20);
	Xposition[5]=stage.getWidth()/5*3-(stage.getWidth()/20);
	Xposition[6]=stage.getWidth()/10*7-(stage.getWidth()/20);
	Xposition[7]=stage.getWidth()/5*4-(stage.getWidth()/2-700);
	Xposition[8]=stage.getWidth()/10*9-(stage.getWidth()/20);		
	Xposition[9]=stage.getWidth()-(stage.getWidth()/20);		
		
	Yposition[0]=stage.getHeight()/10-70;
	Yposition[1]=stage.getHeight()/5-70;		
	Yposition[2]=stage.getHeight()/10*3-70;
	Yposition[3]=stage.getHeight()/5*2-70;
	Yposition[4]=stage.getHeight()/2-70;
	Yposition[5]=stage.getHeight()/5*3-70;
	Yposition[6]=stage.getHeight()/10*7-70;
	Yposition[7]=stage.getHeight()/5*4-70;
	Yposition[8]=stage.getHeight()/10*9-70;		
	Yposition[9]=stage.getHeight()-70;						 

	Kinetic.Circle.prototype.reactions = function(){

		var self = this;
		var ring = self.ring;
		if(ring != undefined ){
			var size = 10;
	    	var periodOut = 2000;
			
			var animOut = new Kinetic.Animation(function(frame) {           
				var scale=Math.sin(frame.time*2/periodOut)*size;
				ring.scale({x:scale,y:scale});  
			},layer );

			var period = 2000;

	      	var anim = new Kinetic.Animation(function(frame) {
		        var scale = Math.sin(frame.time * 2 / period) + 0.1;
		        self.scale({x:scale,y:scale});
	      	}, layer);


			self.on('mouseover touchstart', function(){
				animOut.start();
			});

			self.on('mouseout touchstart', function(){
				animOut.stop();
			});
			
		}else{
			console.log('ring is undefined');
		}
		

	}	 
		 
	Kinetic.Circle.prototype.playAudio = function(){

		this.on("mouseover", function(){
			this.audio.play();
		});

	}

	var images = ['images/1.jpeg','images/2.jpeg','images/3.jpeg','images/4.jpeg','images/5.jpeg','images/6.jpeg','images/7.jpeg','images/8.jpeg','images/9.jpeg','images/10.jpeg','images/19.jpeg'];

	function createCloud(x,y,radius,image,ring){
    	var circle = new Kinetic.Circle({
        	x: x,
			y: y,
			radius: radius,
          	opacity:0.5,
			stroke: "transparent",
			strokeWidth: 4,
        });
        var imageFill = new Image();
    	imageFill.src = image;
    	circle.ring = ring;
    	circle.setFillPatternImage(imageFill);
        return circle;
    }
        
    function createRing(x,y,radius,audio){
    	var circle = new Kinetic.Circle({
          x: x,
          y: y,
          radius: radius,
          fill: "transparent",
          stroke: "white",
          strokeWidth: 2
        });
        circle.audio = audio;
        circle.playAudio();
        return circle;
        }
        
        
        var cloud = new Array();
        var ring = new Array();
        
        
        for(i=0; i<10; i++){
    		var posY=Math.floor(Math.random()*9);    		
            ring[i]=createRing(Xposition[i], dataArray[i], 40, audio[i]);
            cloud[i]=createCloud(Xposition[i], dataArray[i], 35,images[i],ring[i]);
            }
            
            
        for(i=0; i<cloud.length; i++){
        	layer.add(ring[i]);
            layer.add(cloud[i]);
        	cloud[i].reactions();
			}
			

		var animOut=new Array;

		
		
		for(k=0; k<cloud.length; k++){
			var rad=Math.random()*3+5;			
		}
		
		 
        	
    stage.add(layer);
        

        
        stage.add(layer);
      }
 if (window.addEventListener) // W3C standard
{
  window.addEventListener('load', window.scrollTo(1,5), false); // NB **not** 'onload'
}
      window.onload = function() {
        var sources = {
          one: "images/1.jpeg",
          two: "images/2.jpeg",
          three: "images/3.jpeg",
          four: "images/4.jpeg",
          five: "images/5.jpeg",
          six: "images/6.jpeg",
          seven: "images/7.jpeg",
          eight: "images/8.jpeg",
          nine: "images/9.jpeg",
          ten: "images/10.jpeg",          
          eleven: "images/19.jpeg",
        };
		
		
		
        loadImages(sources, function(images) {
          draw(images);
        });
      }
    </script>
  </footer>
  </body>
</html>