function cimvaltozik() {
    let cim = document.getElementById("cim")
    cim.innerHTML = "ASdkasjdkl"
    let input = document.querySelector("#input").value
    cim.innerHTML = input
}

function kepvaltozik() {
    let kep = document.querySelector("#kep")
    let source = document.querySelector("#source").value
    kep.src = source
}

function szoveg(){
    let betumeret = 50
    
    document.querySelectorAll("p.a").forEach(function(e) {
        // fontSize: 30px
        e.style.fontSize = betumeret + "px"
        betumeret -= 10
    });
}
// input mezőből van megadva, hogy melyik szorzótáblát írja ki?
// 1*7 = 7
// 2*7 = 14
// 3*7 = 21

function szorzas(){
    let base = document.querySelector("#base").value
    let table = document.querySelector("#table")

    table.innerHTML = ""
    for(let i = 1; i <= 10; i++){
        table.innerHTML += base + " * " + i + " = " + base*i + "<br>"
    }
}

function add(){
    let newtext1 = document.querySelector("#oszlop1").value
    let newtext2 = document.querySelector("#oszlop2").value
    let newtext3 = document.querySelector("#oszlop3").value
    let table = document.querySelector("#myTable")

    let row = table.insertRow(0)
    let cell1 = row.insertCell(0)
    let cell2 = row.insertCell(1)
    let cell3 = row.insertCell(2)

    cell1.innerHTML = newtext1
    cell2.innerHTML = newtext2
    cell3.innerHTML = newtext3
}

const inputIds = ["oszlop1", "oszlop2", "oszlop3"];

  const table = document.querySelector("#myTable");

  let row = table.insertRow(0);

  inputIds.forEach((id, index) => {

    const newText = document.querySelector(`#${id}`).value;

    let cell1 = row.insertCell(index);

    cell1.innerHTML = newText;

  });

  function add() {

    const table = document.querySelector("#myTable");

    const row = table.insertRow(0);

    for (i = 1; i <= 3; ++i){

        row.innerHTML += `<td>${document.querySelector("#oszlop"+ i ).value}</td>`;

    }

}


let row = document.querySelector("table").insertRow(0);

    Array(3).forEach(x => row.insertCell.innerHTML = document.querySelector("#oszlop" + x + 1))