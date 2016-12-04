var canvas = document.getElementById('canvas');
var ctx = canvas.getContext("2d");

ctx.beginPath();
ctx.arc(240, 160, 20, 0, 2*Math.PI);
ctx.fillStyle = 'blue';
ctx.fill();
ctx.closePath();

ctx.beginPath();
ctx.rect(20, 40, 50, 50);

