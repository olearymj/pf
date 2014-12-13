$(document).ready(function(){

var $container = $('.isotope');
// init
$container.isotope({
  itemSelector: '.is-item',
  transitionDuration: 0,
  layoutMode: 'masonry',
  masonry:{
  	gutter: 10
  }
});

$.fn.addTouch = function(){
  this.each(function(i,el){
    $(el).bind('touchstart touchmove touchend touchcancel',function(){
      //we pass the original event object because the jQuery event
      //object is normalized to w3c specs and does not provide the TouchList
      handleTouch(event);
    });
  });
  
  var handleTouch = function(event)
  {
    var touches = event.changedTouches,
            first = touches[0],
            type = '';
  
    switch(event.type)
    {
      case 'touchstart':
        type = 'mousedown';
        break;
  
      case 'touchmove':
        type = 'mousemove';
        event.preventDefault();
        break;
  
      case 'touchend':
        type = 'mouseup';
        break;
  
      default:
        return;
    }
  
    var simulatedEvent = document.createEvent('MouseEvent');
    simulatedEvent.initMouseEvent(type, true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, 0/*left*/, null);
    first.target.dispatchEvent(simulatedEvent);
  };
};

	var width = window.innerWidth;
	var height = window.innerHeight;

	var width1 = $('.container .bottom').width();
	var height1 = $('.container .bottom').height();


	console.log(width);
	console.log(width1);
	console.log(height);
	console.log(height1);

	var area = width*height/700;

	function initBoxes(){
		for(i=0; i< area; i++ ){
			var rand = Math.floor((Math.random()*(100))+150);
			var color = "rgb("+rand+","+rand+","+rand+")";
			$('#bg').append('<span class="hoverspan" style="background-color:'+color+'"></span>')
		}


		$('.hoverspan').hover(function(){
			if( ! $('body').hasClass('stop') ){
				if( $('body').hasClass('greyscale') ){
					var rand = Math.floor(Math.random()*250);
					var color = "rgb("+rand+","+rand+","+rand+")";
					$(this).css('background-color',color);	
				}else{
					var rand1 = Math.floor(Math.random()*255);
					var rand2 = Math.floor(Math.random()*255);
					var rand3 = Math.floor(Math.random()*255);
					var color = "rgb("+rand1+","+rand2+","+rand3+")";
					$(this).css('background-color',color);	
				}
			}
		});

	}

	
	
	initBoxes();
	
	function reInit(){
		$('#bg').empty();
		initBoxes();
	}

	$('a.clear').click(function(){
		$('.hoverspan').css('background-color', 'transparent');
	});

	$('a.stop').click(function(){
		if( $('body').hasClass('stop') ){
			$('body').removeClass('stop');
			$('a.stop').text('Stop');
		}else{
			$('body').addClass('stop');
			$('a.stop').text('Start');
		}
	});

	$('a.greyscale').click(function(){
		if( $('body').hasClass('greyscale') ){
			$('body').removeClass('greyscale');
			$('a.greyscale').text('Greyscale');
		}else{
			$('body').addClass('greyscale');
			$('a.greyscale').text('Color');
		}
	});



	$('a.reload').click(function(){
		reInit();
	});


});