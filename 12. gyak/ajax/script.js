// AJAX
// Asyncron Javascript And XML

function esemeny1() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "ido.php", false);
    xhr.send(null)
    document.querySelector('span').innerHTML = xhr.responseText;
}
function esemeny2() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "ido.php?idokiiras=per", false);
    xhr.send(null)
    document.querySelector('span').innerHTML = xhr.responseText;
}
function esemeny3() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ido.php", true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xhr.addEventListener('readystatechange', ()=>{
        document.querySelector('span').innerHTML = xhr.responseText;
    })
    xhr.send("idokiiras=kotojel")
}

document.querySelector("#b1").addEventListener('click', esemeny1)
document.querySelector("#b2").addEventListener('click', esemeny2)
document.querySelector("#b3").addEventListener('click', esemeny3)
document.querySelector("#b4").addEventListener('click', esemeny4)