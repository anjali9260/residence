const rent = document.querySelector("#btn1");
const sale = document.querySelector("#btn2");
const invest = document.querySelector("#btn3");
const all = document.querySelector("#all");

const rental = document.querySelectorAll(".rent");
const sales = document.querySelectorAll(".sale");
const invests = document.querySelectorAll(".invest");
const cards = document.querySelectorAll(".card");
const allCards = document.querySelectorAll(".all");
const btns = document.querySelectorAll(".btn");

function removeActiveClass() {
    cards.forEach((card) => {
        card.classList.remove("card-active");
    });
    btns.forEach((btn) => {
        btn.classList.remove("btn-active");
    });
}

all.addEventListener("click", function () {
    removeActiveClass();
    allCards.forEach((allcard) => {
        allcard.classList.add("card-active");
    });
    all.classList.add("btn-active");
});

rent.addEventListener("click", function () {
    removeActiveClass();
    rental.forEach((rents) => {
        rents.classList.add("card-active");
    });
    rent.classList.add("btn-active");
});

sale.addEventListener("click", function () {
    removeActiveClass();
    sales.forEach((salecard) => {
        salecard.classList.add("card-active");
    });
    sale.classList.add("btn-active");
});

invest.addEventListener("click", function () {
    removeActiveClass();
    invests.forEach((investcard) => {
        investcard.classList.add("card-active");
    });
    invest.classList.add("btn-active");
});



///////////////
function myFunction() {
    var input, filter, cards, cardContainer, h2, title, i;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("card-wrapper");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".detail h2.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}


///search button////
// search = document.querySelector('.btn');
// search.addEventListener('click', myFunction);


