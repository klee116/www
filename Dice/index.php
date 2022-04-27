<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kev's Dice</title>
        <meta name="viewport" content="width=device-width, initial-scale=10">
        <link href="css/bootstrapSketchy.css" rel="stylesheet" id="stylesheet">
    </head>
    <body>
        <div class="container py-5 h-100">
            <button class="btn btn-lg btn-primary" onclick="addDie(2)">D2</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(3)">D3</button>
            <button class="btn btn-lg btn-secondary" onclick="addDie(4)">D4</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(5)">D5</button>
            <button class="btn btn-lg btn-info" onclick="addDie(6)" style="font-size:70px;">D6</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(7)">D7</button>
            <button class="btn btn-lg btn-secondary" onclick="addDie(8)">D8</button>
            <button class="btn btn-lg btn-secondary" onclick="addDie(10)">D10</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(11)">D11</button>
            <button class="btn btn-lg btn-secondary" onclick="addDie(12)">D12</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(13)">D13</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(14)">D14</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(15)">D15</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(16)">D16</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(17)">D17</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(18)">D18</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(19)">D19</button>
            <button class="btn btn-lg btn-warning" onclick="addDie(20)" style="font-size:80px;">D20</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(22)">D22</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(24)">D24</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(26)">D26</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(28)">D28</button>
            <button class="btn btn-lg btn-primary" onclick="addDie(30)">D30</button>&nbsp
            <button class="btn btn-lg" onclick="Undo()" style="font-size:55px; color:darkorange;"><b><i><u>Undo</u></i></b></button>
            <br><br>
            <button class="btn btn-success" onclick="diceRoll()" style="font-size:100px;">ROLL</button>
            <button class="btn btn-danger" onclick="clearDice()" style="font-size:80px;">CLEAR</button>
            <br><br>
            <p id="dices"></p>
            <p id="result" style="font-size:100px; color:teal;"></p>
        </div>
    </body>
</html>
<script src="js/jquery-3.6.0.min.js"></script>
<script type="text/Javascript">
    dicePool=[]; results=[]; diceImages=[]; tot=0;
    diceImages[2] = "assets/d2.png";diceImages[3] = "assets/d3.png";diceImages[4] = "assets/d4.png";diceImages[5] = "assets/d5.png";diceImages[6] = "assets/d6.png";diceImages[7] = "assets/d7.png";diceImages[8] = "assets/d8.png";diceImages[10] = "assets/d10.png";diceImages[11] = "assets/d11.png";diceImages[12] = "assets/d12.png";diceImages[13] = "assets/d13.png";diceImages[14] = "assets/d14.png";diceImages[15] = "assets/d15.png";diceImages[16] = "assets/d16.png";diceImages[17] = "assets/d17.png";diceImages[18] = "assets/d18.png";diceImages[19] = "assets/d19.png";diceImages[20] = "assets/d20.png";diceImages[22] = "assets/d22.png";diceImages[24] = "assets/d24.png";diceImages[26] = "assets/d26.png";diceImages[28] = "assets/d28.png";diceImages[30] = "assets/d30.png";
    function addDie(x) {
        dicePool.push(x);
        var img = document.createElement('img');
        img.src=diceImages[x];
        document.getElementById('dices').appendChild(img);
    }

    function diceRoll() {
        for (i=0;i<dicePool.length;i++) {
            res=getRandomInt(1,dicePool[i]+1);
            results.push(res);
            tot+=res;
        }
        outputRolls="";
        for (i=0;i<results.length;i++){
            if(i%10!=9){
                outputRolls+=results[i] + "&nbsp&nbsp&nbsp";
            }
            else outputRolls+=results[i] + "<br>";
        }
        outputRolls+="<br>Total: " + tot;
        document.getElementById("result").innerHTML = outputRolls;
        results=[];
        tot=0;
    }

    function clearDice() {
        dicePool=[];
        document.getElementById("dices").innerHTML = "";
        document.getElementById("result").innerHTML = "";
    }

    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min)) + min;
    }

    function Undo() {
        dicePool.pop();
        select=document.getElementById('dices');
        select.removeChild(select.lastChild);
    }
</script>
