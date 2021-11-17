let canvas = document.querySelector("#canvas")
let context = canvas.getContext('2d')

let score = 0

// Játékos tulajdonságai
let x = 50;
let y = 100;
let speed = 6;
let sideLength = 50;

// flag
let down = false
let up = false
let right = false
let left = false

// Target
let targetX = 0;
let targetY = 0;
let targetLength = 25;

let setscore = document.querySelector("#setscore")
setscore.style.display = "none"

let nev = localStorage.nev
let highscore = localStorage.highscore
if(highscore == undefined){
    highscore = 0
}

document.querySelector("#highscore").innerHTML = "Highscore: " + nev + " - " + highscore + "points"

let countdown = 5
let id = null

//gomblenyomás
canvas.addEventListener('keydown', function(e) {
    e.preventDefault();
    console.log(e.key, e.keyCode)
    if(e.keyCode === 40) { // LE GOMB
        down = true
    }
    if(e.keyCode === 38) { // FEL GOMB
        up = true
    }
    if(e.keyCode === 37) { // BALRA GOMB
        left = true
    }
    if(e.keyCode === 39) { // JOBBRA GOMB
        right = true
    }
})
//gomb felengedése
canvas.addEventListener('keyup', function(e) {
    e.preventDefault();
    if(e.keyCode === 40) { // LE GOMB
        down = false
    }
    if(e.keyCode === 38) { // FEL GOMB
        up = false
    }
    if(e.keyCode === 37) { // BALRA GOMB
        left = false
    }
    if(e.keyCode === 39) { // JOBBRA GOMB
        right = false
    }
})
function menu() {
    canvas.addEventListener("click", startGame)
    erase()
    context.fillStyle = "#000000"
    context.font= "50px Arial";
    context.textAlign = "center"
    context.fillText('Click to Start', canvas.width/2, canvas.height/2)
    context.textAlign = 'left';
}

function startGame(){
    console.log("Elindult a játék...")
    id = setInterval(function(){
        countdown--;
    }, 1000)
    canvas.removeEventListener('click', startGame)
    moveTarget()
    draw()
}

function isWithin(a, b, c){
    return (a > b && a < c)
}
function draw(){
    erase()
    //mozog a kocka?
    if(down){
        y += speed
    }
    if(up){
        y -= speed
    }
    if(left){
        x -= speed
    }
    if(right){
        x += speed
    }

    // Játékos megrajzolás
    context.fillStyle = "#FF0000"
    context.fillRect(x,y,sideLength, sideLength)
    // Target

    // HF: BENT MARADJON A CANVASON BELÜL

    context.fillStyle = "#00FF00"
    context.fillRect(targetX,targetY,targetLength, targetLength)
    context.fillStyle = "#000000"
    context.font = '24px Arial'
    context.textAlign = 'left'
    context.fillText("Score: " + score, 10, 24)
    context.fillText("Time remaining: " + countdown, 10, 50)
    if(isWithin(targetX, x, x + sideLength) || isWithin(targetX + targetLength, x, x+sideLength)) { //X
        if(isWithin(targetY, y, y + sideLength) || isWithin(targetY + targetLength, y, y+sideLength)){
            score++;
            moveTarget()
        }
    }
    if(countdown <= 0){
        endGame();
    } else {
        window.requestAnimationFrame(draw)
    }

}

function endGame(){
    clearInterval(id)
    erase()
    context.fillStyle = "#000000"
    context.font = "24px Arial"
    context.textAlign = "center";
    context.fillText("Final score: " + score, canvas.width / 2, canvas.height / 2)
    setscore.style.display = "block";
}

function savingPoints() {
    nev = document.querySelector("#nev").value
    if(highscore < score){
        localStorage.nev = nev;
        localStorage.highscore = score;
        document.querySelector("#highscore").innerHTML = "Highscore: " +  nev + " - " + score + " points"
    }
}
function moveTarget(){
    targetX = Math.round(Math.random() * canvas.width - targetLength)
    targetY = Math.round(Math.random() * canvas.height - targetLength)
}
function erase(){
    context.fillStyle = "#FFFFFF"
    context.fillRect(0,0,600,400)
}


// kód vége
menu()
canvas.focus()