<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4podstrona</title>
    <link rel="stylesheet" href="style.css" class="">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>
<body>

    <nav class="navbar">
        <div class="navbar__kontener">  
                
                   <a href="index.html" class="navbar__linki">
                     <img src="logo.png" alt="a" class="logo__obrazek">
                    </a>
                    <a href="podstrona1.html" class="navbar__linki">Oferta</a>             
                    <a href="podstrona2.html" class="navbar__linki">Kalkulator kalorii</a>             
                    <a href="podstrona3.html" class="navbar__linki">Sklep</a>            
                    <a href="podstrona4.html" class="navbar__linki">Informacje </a>
        </div>
    </nav>
    <div class="main4">
        <div class="kontenerNaTekstStr4">Dowiedz się więcej na nasz temat</div>
        <div class="kontenerNaPrzyciskiStr4">

            <button id="PrzyciskOdkrywajacyStr4Nr1">Lokalizacja</button>
            <div class="textStrona4PodGuziki" id="tekstPodPrzycisk1">

                <div class="lokalizacjaZawartosc">
                    <div class="a"> <img src="map-regular.svg" alt="a"></div>
                    <div class="b"> <img src="map-regular.svg" alt="a"></div>
                    <div class="c"> <img src="map-regular.svg" alt="a"></div>
                    <div class="d">  <img src="map-regular.svg" alt="a"></div>
                        <div class="t1">Opole</div>
                        <div class="t2">Kraków</div>
                        <div class="t3">Katowice</div>
                        <div class="t4">Wrocław</div>
                </div>
            </div>

            <button id="PrzyciskOdkrywajacyStr4Nr2">Sposoby Kontaktu</button>
            <div class="textStrona4PodGuziki" id="tekstPodPrzycisk2">
                <div class="trescPodSposobyKontaku">
                    
                        <div class="t11">
                            <div class="podTzdjecia" ><img src="phone.svg" alt="a"></div>
                            <div class="podTTekst"><P>111222333</P></div>
                        </div>
                        
                        <div class="t12">
                            <div class="podTzdjecia" ><img src="mail.svg" alt="a"></div>
                            <div class="podTTekst"><P>AAA.DDD@gmail.com</P></div>
                        </div>
                        <div class="t13">
                            <div class="podTzdjecia" ><img src="insta.svg" alt="a"></div>
                            <div class="podTTekst"><P>Sil/\ka</P></div>
                        </div>
                  
                </div>

            </div>

            <button id="PrzyciskOdkrywajacyStr4Nr3">Kadra Trenerska</button>
            <div class="textStrona4PodGuziki" id="tekstPodPrzycisk3">
                <div class="karaTrenerskaZawartosc">
                    <div class="pierwszyKadraTrenerska">
                        <div class="div1podkadratrenerska">
                            <img src="Trenerzy/1.jpg" alt="a">
                        </div>
                        <div class="div2podkardatrenerska">
                            <p><b>Jan Chabadzibadło</b></p>
                        </div>
                    </div>
                    
                    <div class="drugiKadraTrenerska">
                        <div class="div1podkadratrenerska">
                            <img src="Trenerzy/2.jpg" alt="a">
                        </div>
                        <div class="div2podkardatrenerska">
                            <p><b>Błażej Lipa</b></p>
                        </div>
                    </div>

                    <div class="trzeciKadraTrenerska">
                        <div class="div1podkadratrenerska">
                            <img src="Trenerzy/3.jpg" alt="a">
                        </div>
                        <div class="div2podkardatrenerska">
                            <p><b>Adam Bieńko</b></p>
                        </div>
                    </div>


                    <div class="czwartyKadraTrenerska">
                        <div class="div1podkadratrenerska">
                            <img src="Trenerzy/4.jpg" alt="a">
                        </div>
                        <div class="div2podkardatrenerska">
                            <p><b>Jesica Chmiel</b></p>
                        </div>
                    </div>
                    <div class="piatyKadraTrenerska">
                        <div class="div1podkadratrenerska">
                            <img src="Trenerzy/5.jpg" alt="a">
                        </div>
                        <div class="div2podkardatrenerska">
                            <p><b>Marta Lohrengel</b></p>
                        </div>
                    </div>

                </div>
            </div>

            
            <button id="PrzyciskOdkrywajacyStr4Nr4">Formularz Kontaktowy</button>
            <div class="textStrona4PodGuziki" id="tekstPodPrzycisk4">
            <div class="zawartoscFormularzaKontaktowego">
                <div class="kontener1i2">

                    <div class="pierwszyPodZawartosciaFormularzaKontaktowego">  


                        <div class="powiadomienieDoImputuDoFromularza"><p>Podaj Swoje Imie</p></div>
                        <input class="inputyDoFormularza" type="text" placeholder="Imie" />



                         </div>

                <div class="drugiPodZawartosciaFormularzaKontaktowego">   
                    
                
                    <div class="powiadomienieDoImputuDoFromularza"><p>Podaj Swoje Nazwisko</p></div>
                    <input class="inputyDoFormularza" type="text" placeholder="Nazwisko" />

                
                
                </div>



                <div class="trzeciPodZawartosciaFormularzaKontaktowego">


                    <div class="powiadomienieDoImputuDoFromularza"><p>Podaj Swój Email</p></div>
                    <input class="inputyDoFormularza" type="text" placeholder="Email" />




                </div>
                </div>
                
                <div class="czwartyPodZawartosciaFormularzaKontaktowego">

                    <textarea  class="imputDoWiadomości" name="pierwszyTextArea" id="pierwszyTextArea" cols="30" rows="10" placeholder="Twoja Wiadomość"></textarea>



                </div>
                <div class="gozikpod4" id="goToStr4"><button>Submit</button></div>
                

            </div>


            </div>



            <button id="PrzyciskOdkrywajacyStr4Nr5">Godziny Otwarcia</button>
            <div class="textStrona4PodGuziki" id="tekstPodPrzycisk5"></div>

            
    
        </div>
    </div>
    
    

        
    

<script>

    $(document).ready(function() {
        $("#goToStr4").click(function(){
            window.location.href = 'http://127.0.0.1:5500/1/podstrona4.html'; 
            })});
    
        $(document).ready(function() {
            $("#tekstchowany").mouseenter(function() {
                $(this).hide();
                
            });
    
            $("#tekstchowany").mouseleave(function() {
                $(this).show();
            });
        });
    
        var zmienna = 0;
        $(document).ready(function(){
            $("#PrzyciskOdkrywajacyStr4Nr1").click(function(){
                zmienna = zmienna +1;
                console.log(zmienna)
                var decyzja = zmienna % 2;
                if(decyzja === 1){
                    $(".textStrona4PodGuziki").slideUp(500);
                    $("#tekstPodPrzycisk1").slideDown(500);
                }
                else{
                    $("#tekstPodPrzycisk1").slideUp(500);
                };
            })
        });
    
        var zmienna1 = 0;
        $(document).ready(function(){
            $("#PrzyciskOdkrywajacyStr4Nr2").click(function(){
                zmienna = zmienna +1;
                console.log(zmienna)
                var decyzja = zmienna % 2;
                if(decyzja === 1){
                    $(".textStrona4PodGuziki").slideUp(500);
                    $("#tekstPodPrzycisk2").slideDown(500);
                }
                else{
                    $("#tekstPodPrzycisk2").slideUp(500);
                    };
            })
        });
    
        var zmienna2 = 0;
        $(document).ready(function(){
            $("#PrzyciskOdkrywajacyStr4Nr3").click(function(){
                zmienna = zmienna +1;
                console.log(zmienna)
                var decyzja = zmienna % 2;
                if(decyzja === 1){
                    $(".textStrona4PodGuziki").slideUp(500);
                    $("#tekstPodPrzycisk3").slideDown(500);
                }
                else{
                    $("#tekstPodPrzycisk3").slideUp(500);
                };
            })
        });
    
        var zmienna3 = 0;
        $(document).ready(function(){
            $("#PrzyciskOdkrywajacyStr4Nr4").click(function(){
                zmienna = zmienna +1;
                console.log(zmienna)
                var decyzja = zmienna % 2;
                if(decyzja === 1){
                    $(".textStrona4PodGuziki").slideUp(500);
                    $("#tekstPodPrzycisk4").slideDown(500);
                }
                else{
                    $("#tekstPodPrzycisk4").slideUp(500);
                };
            })
        });
    
        var zmienna4 = 0;
        $(document).ready(function(){
            $("#PrzyciskOdkrywajacyStr4Nr5").click(function(){
    
                zmienna = zmienna +1;
                console.log(zmienna)
                var decyzja = zmienna % 2;
                
                if(decyzja === 1){
                   
                    $(".textStrona4PodGuziki").slideUp(500);
                    $("#tekstPodPrzycisk5").slideDown(500);
                }
                else{
                    $("#tekstPodPrzycisk5").slideUp(500);
                };
            })
        });
    
    
    
    </script>


</body>
</html>





