function showCategory(category) {
    let elements = document.getElementsByClassName('block-product');
    for (var i = 0; i < elements.length; i++) {
        if (category == elements[i].id) {
            elements[i].style = "display:block";
        } else {
            elements[i].style = "display:none";
        }
    }
}

let showAll = () => {
    let elements = document.getElementsByClassName('block-product');
    for (var i = 0; i < elements.length; i++) {elements[i].style = "display:block";}
}

function noPageExists(alert) {
    alert('A pagina ainda não existe...');
}

function colorChangeOver(x) {
x.style.backgroundColor = "#e7566e";
x.style.color = "white";
}

function colorChangeOut(x) {
x.style.backgroundColor = "white";
x.style.color = "black";
}

function changeIconeColor(product) {
    product.style.color = "black";
}

function backIconeColor(product) {
    product.style.color = "white";
}