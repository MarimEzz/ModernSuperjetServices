<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="../Home/jpg.3.png">

    <!--cdn of animated popup-->
    <link href="/css/main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <div class="fixprog">
        <div class="myprogress">
            <div class="mybar">

            </div>
        </div>
        <div class="bartitle">
            <div class="barone"><p>1</p></div>
            <div class="bartwo"><p>2</p></div>
            <div class="barthree"><p>3</p></div>
            <div class="barfour"><p>4</p></div>
        </div>
    </div>
    <h1 class="title">FILL OUT THE APPLICATION TO GET TICKET</h1>
    <p class="numofticket">TICKET 1</p>
    <img src="./img/Forms-amico.png" alt="image" class="img">
    <!--maybe it takes two form because the ticket will increase but the payment part only appear one time!-->
    
    <form action="add" method="post" name="application" onsubmit="create(); return false"  enctype="multipart/form-data">
    @csrf            <!--action="location php file"-->
        <!--js use input name-->
        <label for="fullname"> <b class="ystar">*</b>FULL NAME :</label>
        <input class="inputstyle" size="40px" type="text" name=fullname id="name" placeholder="PLEASE ENTER YOUR NAME" pattern="([A-z\s]){8,}" title="Must enter your full name" required>
        
        <label for="email"> <b class="ystar">*</b>EMAIL :</label>
        <input class="inputstyle" size="40px" type="email" name="email" id="email" placeholder="PLEASE ENTER YOUR EMAIL" title="Must Have '@' and end with '.com'" required>

        <!--js use input phone number-->
        <label for="phonenum"> <b class="ystar">*</b>PHONE NUMBER :</label>
        <input class="inputstyle" size="40px" type="tel" name="phonenum" id="phone" placeholder="PLEASE ENTER YOUR NUMBER" pattern="[0-9]{11}" title="Take only 11 number" required>
        
        <label for="uploadpic" class="custom-file-upload"><b class="ystar">*</b>UPLOAD YOUR PICTURE</label>
        <input type="file" name="uploadpic" id="uploadpic" accept="image/*" required>

        

  

        <hr>
        <br>
        <!--
        <label for="cards">SELECT PAYMENT TYPE</label>
        <div class="allcard">
            <input type="radio" id="card1" name="creditcard">
            <label class="cardlist" for="card1">
                <img class="card" src="./img/express.png">
            </label>


            <input type="radio" id="card2"  name="creditcard">
            <label class="cardlist" for="card2">
                <img class="card" src="./img/Discover.png">
            </label>


            <input type="radio" id="card3" name="creditcard">
            <label class="cardlist" for="card3">        
                <img class="card" src="./img/jpg.37.png">
            </label>


            <input type="radio" id="card4" name="creditcard">
            <label class="cardlist" for="card4">
                <img class="card" src="./img/jpg.38.png">
            </label>
        </div>
        -->
        <div>
            <label for="cardnum"><b class="ystar">*</b>CARD NUMBER :</label>
            <input class="inputstyle" size="40px" type="tel" name="cardnum" id="cardnum" placeholder="XXXX-XXXX-XXXX-XXXX" pattern="^[3-6].*-[0-9]{4}-[0-9]{4}-[0-9]{4}" title="Must Take Only 16 Numbers And Between Every 4 Numbers ' - ', Also Required One Of These Cards (Visa, Discover, Mastar And American Express)" onclick='card()' required>
            <div id="visa">YOU ARE USING VISA CARD !</div>
            <img class="card" id="cardvisa" src="./img/jpg.38.png">
            <div id="mastar">YOU ARE USING MASTAR CARD !</div>
            <img class="card" id="cardmatar" src="./img/jpg.37.png">
            <div id="express">YOU ARE USING AMERICAN EXPRESS CARD !</div>
            <img class="card" id="cardexpress" src="./img/express.png">
            <div id="discover">YOU ARE USING DISCOVER CARD !</div>
                <img class="card" id="carddiscover" src="./img/Discover.png">
            <div id="invalid">YOU ARE NOT ENTER A CARD NUMBER !!!</div>


        </div>
        <div class="inline">
            <label for="md"><b class="ystar">*</b>M/D :</label>
            <input class="inputstyle" size="20px" type="tel" name="md" id="md" placeholder="MM/DD" pattern="[0-9]{2}/[0-9]{2}" title="take only number" required>
        </div>
        <div class="inline">
            <label for="ccv"><b class="ystar">*</b>CCV :</label>
            <input class="inputstyle" size="20px" type="tel" name="ccv" id="ccv" placeholder="XXX" pattern="[0-9]{3}" title="take only 3 number" required>
        </div>

        <label for="promocode">DO YOU HAVE PROMOTIONAL CODE :</label>
        <input class="inputstyle" size="40px" type="tel" name="promocode" id="promocode" placeholder="PROMO CODE" pattern="[A-Z a-z 0-9]{6}" title="take 6 of number and character">
        
        

        <div class="total"><h1>TOTAL  $</h1><h1 id="total"></h1></div>
        
        <input type="submit" value="SUBMIT" class="buttstyle" id="butt" onclick="passdata()" >
    
        <!--js library-->
        <div id="qr" ></div>    

    </form>

                                <!--popup message start from here-->
    <div class="container">
        <div class="popup animate__animated animate__fadeInDownBig" >
            <img class="popimg" src="./img/Confirmed-amico.png" alt="succeed">
            <h1 class="title2">SUBMISSTION SUCCEDDED!</h1>
            <p class="message">Your Form Have Been Confirmed</p>
            <button id="view"><a class="view" href="../view ticket/tick.html">VIEW TICKET</a></button>
        </div>
    </div>
    <!--cdn of qr code library -->
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>