const bagSelect = document.querySelector('#bag')
const countInput = document.querySelector('#count')
const resultSpan = document.querySelector('#error')
const removeButton = document.querySelector('#remove')
const placeButton = document.querySelector('#place')

async function update(action){
    const bagId = bagSelect.value
    const count = countInput.value
    let resp = await fetch(`ajax.php?action=${action}&bag=${bagId}&count=${count}`)
    let data = await resp.json()
    console.log(data)
    resultSpan.innerText = data['error']
    if (data['error'] === ''){
        for (const key in data){
            if (key != 'error'){
                const span = document.querySelector('#' + key)
                span.innerText = data[key]
                span.style.color = (data[key] > 150 && key.substring(0, 3) == 'bag') ? 'red' : ''
            }
        }
    }
}

removeButton.addEventListener('click', () => update('remove'))
placeButton.addEventListener('click',  () => update('place'))
update('load')
