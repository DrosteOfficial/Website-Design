<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2podstrona</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <nav class="navbar">
        <div class="navbar__kontener">  
          
                   <a href="index.html" class="navbar__linki">
                     <img src="logo.png" alt="" class="logo__obrazek">
                    </a>
                    <a href="podstrona1.html" class="navbar__linki">Oferta</a>             
                    <a href="podstrona2.html" class="navbar__linki">Kalkulator kalorii</a>             
                    <a href="podstrona3.html" class="navbar__linki">Sklep</a>            
                    <a href="podstrona4.html" class="navbar__linki">Informacje </a>
        </div>
    </nav>
    
    
    <div class="tlo1_srodkowy"></div>
    <div class="main1">
        
    
        
        <div class="slider-container">
            <div class="slider-wrapper">
                <div class="slide">
                    <img src="1dokaruzeli.png" alt="Slide 1">
                </div>
                <div class="slide">
                    <img src="2dokaruzeli.jpg" alt="Slide 2">
                </div>
                <div class="slide">
                    <img src="obrazekdoslajder.jpg" alt="Slide 3">
                </div>
                <div class="slide">
                    <img src="sauna.webp" alt="Slide 4">
                </div>
                <div class="slide">
                    <img src="12345.jpg" alt="Slide 5">
                </div>
            </div>
            <button class="prev" onclick="changeSlide(-1)">Poprzedni</button>
            <button class="next" onclick="changeSlide(1)">Kolejny</button>
        </div>

        <div id="textpod1doanimacji" class="textpod1"><h1>Nasza oferta zajęć</h1><br>
            Siłownia & Wellness Center oferuje różnorodne zajęcia, takie jak joga (Hatha, Vinyasa, Yin, Ashtanga), 
            pilates (Mat, Reformer, dla początkujących), trening siłowy, cardio oraz funkcjonalny trening, zapewniając 
            profesjonalną obsługę i przyjazną atmosferę <br/><br/><br/>
        
            1. Podstawowa karta członkowska:
Dostęp do podstawowych udogodnień: Umożliwia korzystanie z podstawowego wyposażenia siłowni, np. sprzętu do treningu siłowego i cardio, strefy wolnych ciężarów, basenu, sauny, itp.
<br/><br/>2. Karta członkowska Premium lub VIP:
Pełny dostęp do wszystkich udogodnień: Oferuje dostęp do wszystkich możliwych udogodnień, włączając w to sale grupowe, jacuzzi, saunę, dodatkowe zajęcia i masaże.
<br/><br/>3. Karta członkowska z trenerem personalnym:
Indywidualne treningi: Zawiera sesje z trenerem personalnym, konsultacje żywieniowe i programy treningowe dostosowane do potrzeb klienta.
<br/><br/>4. Karta członkowska z dostępem do zajęć grupowych:
Zajęcia grupowe: Oferuje dostęp do różnorodnych zajęć grupowych takich jak aerobik, pilates, joga, spinning, trening interwałowy itp.
<br/><br/>5. Karta członkowska dla studentów lub seniorów:
Zniżki dla studentów/seniorów: Specjalna cena lub udogodnienia dostępne dla osób studiujących lub starszych.
<br/><br/>6. Karta członkowska rodzinna:
Członkostwo dla rodzin: Możliwość zapisania kilku członków rodziny na jednej karcie z odpowiednimi korzyściami.
<br/><br/>7. Karta członkowska na określony okres czasu:
Członkostwo na miesiąc, kwartał, rok: Elastyczne opcje umożliwiające wybór okresu członkostwa z możliwością odnowienia.
<br/><br/>8. Karta członkowska oferująca usługi dodatkowe:
Programy wellness: Dodatkowe usługi, takie jak porady żywieniowe, masaże, konsultacje zdrowotne.
Rodzaje kart członkowskich mogą się różnić w zależności od konkretnych siłowni i ich oferty. Czasami karty mogą być spersonalizowane, oferując kombinację
        </div>

    
       <h2 class="guzikikpodstrona1"> <button id="scrollButton" >powrót do strony głównej </button></h2>





    </div>

    <script>
        $(document).ready(function() {
            $("#scrollButton").click(function() {
               
                window.location.href = 'http://127.0.0.1:5500/Projekt_cz_pier_Adrian%20Drost/index.html'; 
                
            });
        });
    </script>   
    
    
</body>
</html>


    