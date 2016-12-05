var canvas = document.getElementById('canvas');
var ctx = canvas.getContext("2d");

ctx.beginPath();
ctx.arc(240, 160, 20, 0, 2*Math.PI);
ctx.fillStyle = "FFFF00";
ctx.fill();
ctx.closePath();
