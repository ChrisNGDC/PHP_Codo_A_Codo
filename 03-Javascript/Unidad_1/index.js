categoryDiscount = {
    'student' : 80,
    'trainee' : 50,
    'junior' : 15
}

const price = 200;
const select = document.getElementById('category');

function resetCards() {
    var cards = document.getElementById('cards-category');
    var cardsList = cards.getElementsByClassName('card');
    for (let i = 0; i < cardsList.length; i++) {
        cardsList[i].style.border = '0.05rem #0040ff solid';
    }
}

function selectCategory(category) {
    var card = document.getElementById(category);
    resetCards();
    card.style.border = "0.05rem #dde011 solid";
}

function calculatePrice() {
    var category = select.options[select.selectedIndex].value;
    var discount = categoryDiscount[category];
    var result = Math.ceil(price * (1 - discount / 100));
    var finalPrice = document.getElementById('finalPrice');
    finalPrice.innerText = result;
    selectCategory(category);
}

function resetPrice() {
    var finalPrice = document.getElementById('finalPrice');
    finalPrice.innerText = '';
}