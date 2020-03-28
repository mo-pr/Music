var images = [
    '../img/tomorrowland.jpg', 
    '../img/frequency.jpg', 
    '../img/donauinselfest.jpg',
	'../img/ultramusicfestival.jpg'
];
var num = 0;
function next() {
    var slider = document.getElementById('slider');
    num++;
    if(num >= images.length) {
        num = 0;
    }
    slider.src = images[num];
}
/*function prev() {
    var slider = document.getElementById('slider');
    num--;
    if(num < 0) {
        num = images.length-1;
    }
    slider.src = images[num];
}*/
function auto(){
	setInterval(next, 6000);
}
function registerSubmit(){
    
}