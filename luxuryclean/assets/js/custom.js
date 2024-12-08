var hero = $(".hero_area");
var menu = $(".custom_menu-container");
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    var threshold = 25;
    if (scrollTop > threshold) {
        menu.addClass("menu_fixed-position");
        //$(".custom_menu-container + section").addClass("mt-5");
    } else {
        menu.removeClass("menu_fixed-position");
        //$(".custom_menu-container + section").removeClass("mt-5");
    }
});
$(document).ready(function() {
    if($(window).width() <= 991) {
        $('#navbarSupportedContent .menu-item-has-children').click(function() {
            console.log('buuu');
            $(this).parent().find('ul').slideToggle();
            // slideToggle() or fadeToggle instead of toggle()
        });
    }
});


var myCircle = Circles.create({
    id: "circles-1",
    radius: 65,
    value: 85,
    maxValue: 100,
    width: 5,
    text: function (value) {
        return value + "%";
    },
    colors: ["transparent", "#ffffff"],
    duration: 400,
    wrpClass: "circles-wrp",
    textClass: "progress_text",
    valueStrokeClass: "circles-valueStroke",
    maxValueStrokeClass: "circles-maxValueStroke",
    styleWrapper: true,
    styleText: true
});
var myCircle = Circles.create({
    id: "circles-2",
    radius: 65,
    value: 55,
    maxValue: 100,
    width: 5,
    text: function (value) {
        return value + "%";
    },
    colors: ["transparent", "#ffffff"],
    duration: 400,
    wrpClass: "circles-wrp",
    textClass: "progress_text",
    valueStrokeClass: "circles-valueStroke",
    maxValueStrokeClass: "circles-maxValueStroke",
    styleWrapper: true,
    styleText: true
});
var myCircle = Circles.create({
    id: "circles-3",
    radius: 65,
    value: 65,
    maxValue: 100,
    width: 5,
    text: function (value) {
        return value + "%";
    },
    colors: ["transparent", "#ffffff"],
    duration: 400,
    wrpClass: "circles-wrp",
    textClass: "progress_text",
    valueStrokeClass: "circles-valueStroke",
    maxValueStrokeClass: "circles-maxValueStroke",
    styleWrapper: true,
    styleText: true
});
var myCircle = Circles.create({
    id: "circles-4",
    radius: 65,
    value: 85,
    maxValue: 100,
    width: 5,
    text: function (value) {
        return value + "%";
    },
    colors: ["transparent", "#ffffff"],
    duration: 400,
    wrpClass: "circles-wrp",
    textClass: "progress_text",
    valueStrokeClass: "circles-valueStroke",
    maxValueStrokeClass: "circles-maxValueStroke",
    styleWrapper: true,
    styleText: true
});

const slider = document.getElementById('before-after-slider-bf');
const before = document.getElementById('before-image-bf');
if (before) {
const beforeImage = before.getElementsByTagName('img')[0];
const resizer = document.getElementById('resizer-bf');

let active = false;

//Sort overflow out for Overlay Image
document.addEventListener("DOMContentLoaded", function() {
  let width = slider.offsetWidth;
  beforeImage.style.width = width + 'px';
});

//Adjust width of image on resize 
window.addEventListener('resize', function() {
  let width = slider.offsetWidth;
  beforeImage.style.width = width + 'px';
})

resizer.addEventListener('mousedown',function(){
  active = true;
 resizer.classList.add('resize');

});

document.body.addEventListener('mouseup',function(){
  active = false;
 resizer.classList.remove('resize');
});

document.body.addEventListener('mouseleave', function() {
  active = false;
  resizer.classList.remove('resize');
});

document.body.addEventListener('mousemove',function(e){
  if (!active) return;
  let x = e.pageX;
  x -= slider.getBoundingClientRect().left;
  slideIt(x);
  pauseEvent(e);
});

resizer.addEventListener('touchstart',function(){
  active = true;
  resizer.classList.add('resize');
});

document.body.addEventListener('touchend',function(){
  active = false;
  resizer.classList.remove('resize');
});

document.body.addEventListener('touchcancel',function(){
  active = false;
  resizer.classList.remove('resize');
});

//calculation for dragging on touch devices
document.body.addEventListener('touchmove',function(e){
  if (!active) return;
  let x;
  
  let i;
  for (i=0; i < e.changedTouches.length; i++) {
  x = e.changedTouches[i].pageX; 
  }
  
  x -= slider.getBoundingClientRect().left;
  slideIt(x);
  pauseEvent(e);
});
function slideIt(x){
    let transform = Math.max(0,(Math.min(x,slider.offsetWidth)));
    before.style.width = transform+"px";
    resizer.style.left = transform-0+"px";
}
} // end of if (before) {
// slide 2
const slider2 = document.getElementById('before-after-slider-bf-2');
const before2 = document.getElementById('before-image-bf-2');
if(before2) {
const beforeImage2 = before2.getElementsByTagName('img')[0];
const resizer2 = document.getElementById('resizer-bf-2');
let active2 = false;

//Sort overflow out for Overlay Image
document.addEventListener("DOMContentLoaded", function() {
  let width2 = slider2.offsetWidth;
  beforeImage2.style.width = width2 + 'px';
});

//Adjust width of image on resize 
window.addEventListener('resize2', function() {
  let width2 = slider2.offsetWidth;
  beforeImage2.style.width = width2 + 'px';
})

resizer2.addEventListener('mousedown',function(){
  active2 = true;
 resizer2.classList.add('resize2');

});

document.body.addEventListener('mouseup',function(){
  active2 = false;
 resizer2.classList.remove('resize2');
});

document.body.addEventListener('mouseleave', function() {
  active2 = false;
  resizer2.classList.remove('resize2');
});

document.body.addEventListener('mousemove',function(e){
  if (!active2) return;
  let x2 = e.pageX;
  x2 -= slider2.getBoundingClientRect().left;
  slideIt2(x2);
  pauseEvent(e);
});

resizer2.addEventListener('touchstart',function(){
  active2 = true;
  resizer2.classList.add('resize2');
});

document.body.addEventListener('touchend',function(){
  active2 = false;
  resizer2.classList.remove('resize2');
});

document.body.addEventListener('touchcancel',function(){
  active2 = false;
  resizer2.classList.remove('resize2');
});

//calculation for dragging on touch devices
document.body.addEventListener('touchmove',function(e){
  if (!active2) return;
  let x2;
  
  let i;
  for (i=0; i < e.changedTouches.length; i++) {
  x2 = e.changedTouches[i].pageX; 
  }
  
  x2 -= slider.getBoundingClientRect().left;
  slideIt2(x2);
  pauseEvent(e);
});
function slideIt2(x2){
    let transform2 = Math.max(0,(Math.min(x2,slider2.offsetWidth)));
    before2.style.width = transform2+"px";
    resizer2.style.left = transform2-0+"px";
}
} //if(before2) {
// end 2

//stop divs being selected.
function pauseEvent(e){
    if(e.stopPropagation) e.stopPropagation();
    if(e.preventDefault) e.preventDefault();
    e.cancelBubble=true;
    e.returnValue=false;
    return false;
}

//bubbles 
var bubbleOptions = {
	maxBubbles     : 250,   //A bubble ceiling, for high resolution monitors
	timer          : -1,    //The interval time
	tick           : 100,   //The tick speed
	bubbles        : [],    //The array of bubbles
	hue            : 188,   //The hue
	hueRand        : 20,    //The hue variance
	saturation     : 63,    //The saturation
	saturationRand : 10,    //The saturation variance
	light          : 57,    //The lightness
	lightRand      : 10,    //The lightness variance
	opacityFactor  : 3,     //What Math.random() opacity should be divided by
	minOpacity     : 0.1,   //The minimum opacity
	ratio          : 45000, //The bubble:pixel ratio
	update		   : function(tick) { //Function to change the tick timer
		//Since IE8 and below don't support HSLA colors,
		//do nothing for these browsers
		if(!document.addEventListener) return;
		window.clearInterval(this.timer);
		if(!tick) tick = this.tick;
		if(!this.bubbles.length) this.bubbles = instantiateBubbles();
		var bubbles = this.bubbles;
		this.timer = window.setInterval(
			function() {
				for(var i = 0; i < bubbles.length; i++)
					bubbles[i].move();
			},
			tick
		);
	}
};

//Instantiate the bubble on page load
if(window.onload) {
	windowOnLoad = window.onload;
	window.onload = function() {
		windowOnLoad();
		bubbleOptions.update();
	}
} else window.onload = function() { bubbleOptions.update(); };

/**
 * instantiateBubbles creates the array of bubble objects, and adds them to <body>
 * @returns {Array} An array of bubbles
 */
function instantiateBubbles() {
	//The bubbles need a container element
	var bubbleContainer = document.getElementById("bubbleContainer");
	if(!bubbleContainer) {
		bubbleContainer = document.createElement('div');
		bubbleContainer.setAttribute('id', 'bubbleContainer');
		document.body.appendChild(bubbleContainer);
	}
	//Create the bubbles
	var bubbles = [];
	//The default number of bubbles is set to a ratio of 1 bubble to every 45,000 pixels (bubbleOptions.ratio)
	var bubbleLength = Math.floor(window.innerWidth*window.innerHeight/bubbleOptions.ratio);
	for(var i = 0; i < bubbleLength; i++) {
		var bubbleElem = document.createElement('div');
		bubbleElem.setAttribute('id', 'bubble'+i);
		bubbleContainer.appendChild(bubbleElem);
		bubbles.push(new Bubble(bubbleElem));
	}
	//Return the array of bubbles
	return bubbles;
}


/**
 * The Bubble class holds a div that should be located inside div#bubbleContainer
 * A Bubble has its own random hsla background color, box shadow, size, & position
 * It also moved by velocity with the move() function
 * Whenever the bubble moves outside of the page boundaries, it gets reset
 * @constructor
 * @this {Bubble}
 * @param {[object HTMLDivElement]} element The bubble <div> element
 */
function Bubble(element) {
	this.x = 0;			// X position
	this.y = 0;			// Y position
	this.xVel = 0;		// Velocity in the X direction
	this.yVel = 0;		// Velocity in the Y direction
	this.time = 0;		// The amount of ticks that has occured since the Bubble was created
	this.e = element;	// Store the element
	this.diam = 0;		// The size of the bubble

	//Set up the element
	this.create();
}

/**
 * create() sets the position and velocity of the bubble element.
 * It then sets a semi-random visual styling of a bubble
 * The styling being set is the size, background, box shadow, and opacity
 * @this {Bubble}
 */
Bubble.prototype.create = function() {
	//Reset counter
	this.time = 0;

	//Position
	this.x = Math.random() * window.innerWidth;
	this.y = Math.random() * window.innerHeight;

	//Random velocity
	this.xVel = (Math.random() * 4) - 2;
	this.yVel = (Math.random() * 4) - 2;

	//Set the size
	this.diam = Math.floor(Math.random() * 160) + 40;
	this.e.style.width=this.diam + "px";
	this.e.style.height=this.diam + "px";

	//Set the color, with default bubbleOptions it is a bluish color
	var hue = Math.floor(Math.random()*bubbleOptions.hueRand)
	          +bubbleOptions.hue;
	var saturation = Math.floor(Math.random() * bubbleOptions.saturationRand)
	                 + bubbleOptions.saturation;
	var light = Math.floor(Math.random()*bubbleOptions.lightRand)
	            + bubbleOptions.light;
	var opacity = Math.min( //The opacity must be <= 1
	                  Math.max( //The random opacity must be >= minOpacity
	                      Math.random()/bubbleOptions.opacityFactor,
	                      bubbleOptions.minOpacity
	                  ),
	                  1
	              );
	var hsla="hsla("+hue+","+saturation+"%,"+light+"%,"+opacity+")";
	this.e.style.backgroundColor = hsla;

	//Set the glow
	this.e.style.boxShadow= "0 0 "+ (Math.floor(Math.random()*10)+5)
	                        + "px "+hsla;

	//Start at 0 opacity for the bubble to fade in
	this.e.style.opacity = "0";
}

/**
 * move() moves the bubble based on its velocity
 * If it has been fewer than 10 ticks it needs to increase its opacity to 1
 * If the bubble has moved out of bounds it recreates the bubble
 * @this {Bubble}
 */
Bubble.prototype.move = function() {
	//If out of the window bounds recreate the bubble
	if(this.x + this.diam < 0 || this.x > window.innerWidth ||
	   this.y + this.diam < 0 || this.y - this.diam > window.innerHeight) {
		this.create();
	} else {
		//Set opacity
		if(this.time < 11) this.e.style.opacity = (this.time / 10);

		//Change position
		this.x += this.xVel;
		this.y += this.yVel;

		//Set the position via CSS
		this.e.style.left = Math.floor(this.x) + "px";
		this.e.style.top = Math.floor(this.y) + "px";

		//Increment counter
		this.time++;
	}
}
// end bubles
//mobile menu fix
$(document).ready(function() {
    $('#aboutmore').click(function() {
        $('#aboutinvisible').css("display","block");
        $('#aboutless').css("display","block");
        $('#aboutmore').css("display","none");
    });
    $('#aboutless').click(function() {
        $('#aboutinvisible').css("display","none");
        $('#aboutless').css("display","none");
        $('#aboutmore').css("display","block");
    });   
});
$('table tr:nth-child(n+1):nth-child(-n+8)').addClass('active');

$('#songs-load').on('click', function(e) {
  e.preventDefault();  
  var $rows = $('.songs-table tr');
  var lastActiveIndex = $rows.filter('.active:last').index();
  $rows.filter(':lt(' + (lastActiveIndex + 10) + ')').addClass('active');
});

const sliderservi = document.querySelector('.slider-servicii');

function activate(e) {
  const itemsservi = document.querySelectorAll('.item-slider-servicii');
  e.target.matches('.nextsl') && sliderservi.append(itemsservi[0])
  e.target.matches('.prevsl') && sliderservi.prepend(itemsservi[itemsservi.length-1]);
}

document.addEventListener('click',activate,false);
