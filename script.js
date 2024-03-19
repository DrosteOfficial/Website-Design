
let currentIndex = 0;
function myFunction() {
    var x = document.getElementById("tak");
    
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }



function changeSlide(direction) {
    {
    const slides = document.querySelector('.slider-wrapper');
    const totalSlides = document.querySelectorAll('.slide').length;
    currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
    const translateValue = -currentIndex * 100 + '%';
    slides.style.transform = 'translateX(' + translateValue + ')';
}
}


setInterval(autoSlide,3500)

function autoSlide() {
    var aktualnyURL1 = window.location.href;
    console.log(aktualnyURL1)
    if(aktualnyURL1.includes('http://127.0.0.1:5500/Projekt_cz_pier_Adrian%20Drost/podstrona1.html'))
    {changeSlide(1);}
    
}



function obliczKalorie(){
    var waga = document.querySelector('#inputdokal1').value;
    var wiek = document.querySelector('#inputdokal2').value;
    var wzrost = document.querySelector('#inputdokal3').value;
    var wysilek = document.querySelector('input[name="radio1"]:checked').value;
    var plec = document.querySelector('input[name="radio"]:checked').value;
    var wynik = 0;
    if (plec === "Kobieta") {
      wynik = ((10 * waga) + (6.25 * wzrost) - (5 * wiek) - 161)*wysilek;
    } else {
      wynik = ((10 * waga) + (6.25 * wzrost) - (5 * wiek) + 5)*wysilek;
    }
    document.getElementById('log').textContent = 'Twoje podstawowe dzienne zapotrzebowanie kaloryczne wynosi: ' + wynik.toFixed(2)+'KCAL';
    


}




setInterval(() => {
    var aktualnyURL = window.location.href;
    if(aktualnyURL.includes('http://127.0.0.1:5500/Projekt_cz_pier_Adrian%20Drost/index.html')){
    d = new Date(); //object of date()
    hr = d.getHours();  
    hr = hr % 12;
    min = d.getMinutes();
    sec = d.getSeconds();
    hr_rotation = 30 * hr + (min/2); //converting current time
    min_rotation = 6 * min;
    sec_rotation = 6 * sec;
    console.log("gr"+hr_rotation)
    console.log("min"+min_rotation)
    console.log("sec"+sec_rotation)
    second.style.transform = `rotate(${sec_rotation}deg)`;
    minute.style.transform = `rotate(${min_rotation}deg)`;
    hour.style.transform = `rotate(${hr_rotation}deg)`;
}
}, 1000);






