var canvas = document.getElementById('canvas');
var ctx = canvas.getContext("2d");

function draw() {
    ctx.beginPath();
    ctx.arc(240, 160, 20, 0, 2 * Math.PI);
    ctx.fillStyle = 'blue';
    ctx.fill();
    ctx.closePath();
}
setInterval(draw, 10);
