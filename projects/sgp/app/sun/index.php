<!DOCTYPE HTML>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <style>
      body {
        margin: 0px;
        padding: 0px;
        background:#F5D04C;
      }
      canvas {
        border: 1px solid #9C9898;

      }
    </style>
    </head>  
  
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
<script src="http://jackolearymcneice.com/js/kinetic.js"></script>
<script>

function writeMessage(messageLayer, message) {
  var context = messageLayer.getContext();
  messageLayer.clear();
  context.font = "30pt Calibri";
  context.fillStyle = "black";
  context.fillText(message, 40, 25);
}
  

var size=new Array(11);
var addition = 25;

for( i=0; i<11; i++ ){
  size[i] = Math.random()*50+addition;
  addition = addition+75;
}

var under=new Array(11);
    
for(i=0; i<size.length; i++){
  under[i]=size[i]+5;
}

function loadImages(sources, callback) {
  console.log('loadImages');
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
    console.log(sources[src]);
  }
}

function draw(images) {
  console.log('draw');
  var stage = new Kinetic.Stage({
    container: "container",
    width: window.innerWidth,
    height: window.innerHeight,
    fill: "blue"
  });
  
  var layer = new Kinetic.Layer();
  
  var messageLayer = new Kinetic.Layer();
     
  /*var infoCircle = new Kinetic.Circle({
    x: stage.getWidth()-100,
    y: stage.getHeight()-100,
    radius: 20,
    fill:'gray',
    alpha: 0.5
   });*/

     
  var circle = new Array(11);


  Kinetic.Circle.prototype.reactions = function(){
    
    this.on('mouseover vmouseover touchstart', function(){
      this.opacity(0.5);
      layer.draw();
      this.audio.play();
    });

    this.on('mouseout vmouseout touchend', function(){
      this.opacity(1);
      layer.draw();
      console.log('mouseout');
    });
  }

  Kinetic.Circle.prototype.tweens = function(){

    this.tweenIn = new Kinetic.Tween({
      node:this, 
      scaleX:1.05,
      scaleY:1.05,
      duration:0.1,
      easing:Kinetic.Easings.EaseIn
    });

    this.on('mouseover touchstart', function(){
      this.tweenIn.play();
    });

    this.on('mouseout touchend', function(){
      this.tweenIn.reverse();
    });

  }


  var aud = [audOne, audTwo, audThree, audFour, audFive, audSix, audSeven, audEight, audNine, audTen, audOne ];
  var images = ['images/1.jpeg','images/2.jpeg','images/3.jpeg','images/4.jpeg','images/5.jpeg','images/6.jpeg','images/7.jpeg','images/8.jpeg','images/9.jpeg','images/10.jpeg','images/11.jpeg']

  aud.reverse;
  images.reverse;

  for( i=0; i<circle.length; i++ ){
    circle[i] = new Kinetic.Circle({
      x: 0,
      y: stage.getHeight() / 2,
      radius: size[i],
      alpha: 0.5,
      stroke: "white",
      strokeWidth: 4  
    });
    var image = new Image();
    image.src = images[i];
    circle[i].setFillPatternImage(image)
    circle[i].audio = aud[i];
    circle[i].reactions();
  }

  circle.reverse(); 


  /*infoCircle.on("click mousedown", function() {
    this.opacity(1);
    layer.draw();
  });   

  
  infoCircle.on("mouseover vmouseover", function() {
    writeMessage(messageLayer, "mouseover vmouseover circle");
    messageLayer.draw();
  });*/
   
  for( i=0; i<11; i++ ){
    layer.add(circle[i]);
    circle[i].tweens();
  }


  //layer.add(infoCircle);

  stage.add(messageLayer);
  stage.add(layer);
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
          eleven: "images/11.jpeg",
          info: "images/info.png",
        };
    
    
    
        loadImages(sources, function(images) {
          draw(images);
        });
      }
    </script>

  <body>
    <div id="container"></div>
  </body>
</html>