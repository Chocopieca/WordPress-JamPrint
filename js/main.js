// owlCarousel
$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
});


$(".first-carousel").owlCarousel({
    loop: true,
    navText: "",
    items: 1,
    margin: 10,
    nav: false
});

$(".second-carousel").owlCarousel({
    loop: true,
    navText: "",
    items: 1,
    margin: 10,
    autoplay: false,
    dots: false,
    nav: true,
});

$(".third-carousel").owlCarousel({
    loop: true,
    navText: "",
    items: 1,
    margin: 10,
    dots: true,
    responsive: {
        768:{
            dots: false,
            nav: true
        }
    }
});

$('.catalog-carousel').owlCarousel({
    navText: "",
    loop:false,
    margin:5,
    nav:true,
    dots: false,
    items: 1,
    responsive:{
        768:{
            items:3
        }
    }
});

$('.inst-carousel').owlCarousel({
    loop: true,
    navText: "",
    items: 1,
    margin:50,
    nav:false,
    dots: true,
    autoplay: true,
    responsive:{
        768:{
            items:3,
            dots: false,
            nav: true
        }
    }
});

$('.advantages-carousel').owlCarousel({
    loop: true,
    navText: "",
    items: 1,
    margin:50,
    dots: true,
    autoplay: true,
    responsive:{
        768:{
            items:2
        },
        992:{
            items:4,
            autoplay:false
        }
    }
});

// code
// burger
let burger = document.querySelector('.navbar-toggler'),
    closeBurger = document.querySelector('.close-burger'),
    openBurger = document.querySelector('.open-burger'),
    shadowButton = document.querySelector(".shadow");

function taggleNavbar() {
    if (openBurger.style.display === "") {
        openBurger.style.display = "none";
        closeBurger.style.display = "block";
        document.body.classList.toggle("hidden");
        return
    } else if (openBurger.style.display === "none") {
        openBurger.style.display = "";
        closeBurger.style.display = "";
        document.body.classList.toggle("hidden");
    }
};

burger.onclick = taggleNavbar;
shadowButton.onclick = taggleNavbar;

// faq
document.onclick = function(event) {
    let target = event.target,
        data_target = target.dataset.target;
    if (target.dataset.toggle != "collapse") return;

    let answer = document.getElementById(data_target);

    if (answer.style.display === "") {
        answer.style.display = "block";
        target.classList.remove("faq-open");
        target.classList.add("faq-close");
        return;
    } else if (answer.style.display === "block") {
        answer.style.display = "";
        target.classList.remove("faq-close");
        target.classList.add("faq-open");
    }
};


// showAnswer.onclick = function() {

// }


// function taggleFaqCard() {
    
// }

// map
// var map;
// function initMap() {
//   map = new google.maps.Map(document.getElementById("map"), {
//     center: { lat: -34.397, lng: 150.644 },
//     zoom: 8
//   });
// }

    // if (openBurger.style.display === "none") {

    // }


    // openBurger.style.display === "" 
    // ? () => {
    //     openBurger.style.display = "none"
    //     closeBurger.style.display = "block"
    //     return
    // } 
    // : () => {
    //     openBurger.style.display = ""
    //     closeBurger.style.display = ""
    // }

// function closeBurger() {
//     burger.classList.toggle("close");
//     document.body.classList.toggle("hidden");
// }


// burger.onclick = closeBurger;
// shadow.onclick = closeBurger;