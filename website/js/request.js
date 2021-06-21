let items = [];

// MAAK een nieuw request object aan
let xmlhttp = new XMLHttpRequest();

// STATUS bijhouden
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // this.responseText is het teruggekomen JSON resultaat.
        let jsonText = this.responseText;
        console.log(jsonText);
        items = JSON.parse(jsonText);
        console.log(items); 
        for (let index = 0; index < items.length; index++) {
            const element = items[index];
             addElement(element)
        }          
    }
};

// OPEN en verstuur
xmlhttp.open("GET", "functions.php", true);
xmlhttp.send();


function addElement (item) {
    const newDiv = document.createElement("div")
    newDiv.className = 'product-card'
    const newImg = document.createElement("img")
    newImg.src = item.item_image
    const newProductDiv = document.createElement("div")
    newProductDiv.className = 'product-details'
    const newH1 = document.createElement("h2")
    newH1.innerHTML = item.item_name
    const newP = document.createElement("p")
    newP.className = 'price'
    newP.innerHTML = item.item_price
    const newA = document.createElement("a")
    newA.innerHTML = 'Add to cart'
    newA.href="#"
    const currentDiv = document.getElementById("slider")

    newProductDiv.appendChild(newH1);
    newProductDiv.appendChild(newP); 
    newProductDiv.appendChild(newA);
    newDiv.appendChild(newImg);
    newDiv.appendChild(newProductDiv);
    currentDiv.appendChild(newDiv);
}




