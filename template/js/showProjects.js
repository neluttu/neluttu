let loadButton = document.querySelector('#load-more');
let currentItem = 0; // iteration index
let itemStep = 4; // how many boxes to show in one click

loadButton.onclick = () => {
    let boxes = [...document.querySelectorAll('#projects .moreBox')];
    let totalBoxes = boxes.length;

    if(currentItem + itemStep > totalBoxes) var showMore = currentItem + (totalBoxes - currentItem); // show only remaining boxes.
    else var showMore = currentItem + itemStep; // show next boxes

    for (var i = currentItem; i < showMore; i++) {// iterate boxes and display them
            //boxes[i].style.display = 'block';
            boxes[i].classList.toggle('moreBoxShow');
            boxes[i].classList.toggle('moreBox');
    }
    
    if(currentItem + itemStep >= totalBoxes) {
        currentItem = currentItem + (totalBoxes - currentItem); // calculate remaining boxes
        loadButton.style.display = 'none'; // hide show more button
    }
    else currentItem += itemStep; // show next boxes

}