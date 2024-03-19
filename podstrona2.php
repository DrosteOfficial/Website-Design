<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2podstrona</title>
    <link rel="stylesheet" href="style.css" class="">
    <script src="script.js"></script>
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
    
    <div class="tlo3_srodkowy"></div>
    <div class="main2" style="color: rgb(63, 54, 1)" id="123">
        <div class="wraperstr2">
       
        <div class="textpod3" style="margin-top: 7.5%;"> <h1>Oblicz swoje zapotrzebowanie kaloryczne </h1></div>
        

        <table class="tabela"  >    
            <tr>
                <td  style="text-align: center; font-weight: bold;">WYPEŁNIJ DANE WEJSCIOWE! :) </td>
            </tr>

            <tr>
                <td class="disf"> <h3>Podaj Swój wysiłek fizyczny </h3></td>
            </tr>

            <tr>
                <td>                    
                    <input type="radio" id="wybor3" name="radio1" value=1.2 checked>
                    <label for="wybor3">Niski wysiłek fizyczny</label>
                    <input type="radio" id="wybor4" name="radio1" value=1.55 >
                    <label for="wybor4">umiarkowany wysiłek fizyczny</label>
                    <input type="radio" id="wybor5" name="radio1" value=1.75 >
                    <label for="wybor5">Duży wysiłek fizyczny</label>
                </td>
            </tr>

            <!-- waga -->

            <tr>
                <td class="disf"> <h3>Podaj Swoją wagę </h3></td>
            </tr>

            <tr>
                <td>
                    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">                   
                        <input id="inputdokal1" type="number" style="max-width: 40%;">
                    </div>
                </td>
            </tr>

            <!-- Wiek -->
            <tr>
                <td class="disf"> <h3>Podaj Swój Wiek </h3></td>
            </tr>

            <tr>
                <td>
                    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">                       
                        <input style="max-width: 40%;" id="inputdokal2" type="number"> 
                    </div>
                </td>
            </tr>

            <!-- wzrost -->
            <tr>
                <td class="disf"> <h3>Podaj Swój Wzrost </h3></td>
            </tr>

            <tr>
                <td>
                    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">                       
                        <input style="max-width: 40%;" id="inputdokal3" type="number">
                    </div>
                </td>
            </tr>

            <!-- Płeć -->
            <tr>
                <td class="disf"> <h3>Podaj Swój Płeć </h3></td>
            </tr>
            
            <tr>
                <td>
                    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                        <div>
                            <input type="radio" id="wybor1" name="radio" value="Mezczyzna" checked>
                            <label for="wybor1">Mężczyzna</label>
                            <input type="radio" id="wybor2" name="radio" value="Kobieta" >
                            <label for="wybor2">Kobieta</label>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="display: flex; justify-content: center; flex-direction: column; align-items: center;"> 
                    <button style="width: 20%;
                                    height: 40px;
                                    border-radius: 10%;
                                    background-image: url(pxfuel1.jpg);
                                    background-position: center;
                                    background-size: cover;
                                    color: #f1cb8d;
                                    cursor: pointer;" 
                                    id="guzikkal" onclick="obliczKalorie()">Oblicz</button>
                </td>
            </tr>

            <tr>
                <td class="disf"> <h3>TWOJE ZAPOTRZEBOWANIE KALORYCZNE! </h3></td>
            </tr>

            <tr>
                <td>
                    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                        <div>
                            <div id="log"></div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    </div>
</body>
</html>
