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

let highlightImage = (img) => {
    if (img.width == 150) {
        img.width = 100;
    } else {
        img.width = 150;
    }
}