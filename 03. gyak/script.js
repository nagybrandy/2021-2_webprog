const ul = document.querySelector('ul.lista')
ul.addEventListener('click', kattintas)

function kattintas(e){
    console.log(e)
    console.log(this)
    if(e.target.matches('li')){
        e.target.classList.toggle("kesz")
    }   
}

const table = document.querySelector('#myTable')
table.addEventListener('click', katttablara)

function katttablara(e) {
    if(e.target.matches('td')){
        e.target.classList.toggle('jelolt')
    }
}

const kep = document.querySelector('#kep')
kep.addEventListener('mouseenter', function(e) {
    if(e.target.matches('img')){
        e.target.classList.toggle('szines')
    }
})

function delegal(szulo, gyerek, mikor, mit){
    function esemenyKezelo(esemeny){
        let esemenyCelja    = esemeny.target;
        let esemenyKezeloje = this;
        let legkozelebbiKeresettElem = esemenyCelja.closest(gyerek);

        if(esemenyKezeloje.contains(legkozelebbiKeresettElem)){
            mit(esemeny, legkozelebbiKeresettElem);
        }
    }
    szulo.addEventListener(mikor, esemenyKezelo);
}

function szinezes(esemeny, elem){
    elem.target.classList.add('egeszsor')
}

delegal(document.querySelector('#myTable'),"table tr td","mouseover",(e,c)=>{
    c.parentElement.classList.add('egeszsor')
})

delegal(document.querySelector('#myTable'),"table tr td","mouseout",(e,c)=>{
    c.parentElement.classList.remove('egeszsor')
})

// LOTTÓSZÁMOK - 