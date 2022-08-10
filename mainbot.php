<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion en temps réel</title>
    <link rel="stylesheet" href="Css/bot.css">
    <link rel="stylesheet" href="bt.css">
</head>
<body>
    <div id="container">
        <div id="dot1"></div>
        <div id="dot2"></div>
        <div id="screen">
            <div id="header">INFORMATIONS</div>
            <div id="messageDisplaySection">
                <!-- bot messages -->
                <!--div class="chat botMessages">Salut ici! Puis-je vous aider?</div>
                <div class="chat botMessages"><p>Je suis votre assistant clientèle.Je suis là pour palier à vos inquiétudes.
                Voici quelques informations sur les crédits.
                <br>1- Crédit scolaire
                <br>2- Crédit consommation sans intérêt avec marge arrière
                <br>3- Découvert automatique
                <br>4-Crédit début carrière
                <br>5-Crédit Immobilier
                <br>6-Avance sur salaire
                <br>7-Ora'Conso
            </p>
                 </div-->

                <!-- usersMessages -->
                <div id="messagesContainer">
                <!--div class="chat usersMessages">I need your help to build a website.</div-->
            </div>
        </div>
            <!-- messages input field -->
            <div id="userInput">
                <input type="text" name="messages" id="messages" autocomplete="off" placeholder="Taper votre message ici...." required>
                <input type="submit" value="Envoyer" id="send" name="send">

            </div>
        
    </div> 

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Jquery Start -->
    <script>
        $(document).ready(function(){
            $("#messages").on("keyup",function(){

                if($("#messages").val()){
                    $("#send").css("display","block");
                }else{
                    $("#send").css("display","none");
                }
            });
        });
        // when send button clicked
        $("#send").on("click",function(e){
            $userMessage = $("#messages").val();
            $appendUserMessage = '<div class="chat usersMessages">'+ $userMessage +'</div>';
            $("#messageDisplaySection").append($appendUserMessage);

            // ajax start
            $.ajax({
                //url: "bt.php",
                url: "bot.php",
                type: "POST",
                // sending data
                data: {messageValue: $userMessage},
                // response text
                success: function(data){
                    // show response
                    $appendBotResponse = '<div id="messagesContainer"><div class="chat botMessages">'+data+'</div></div>';
                    $("#messageDisplaySection").append($appendBotResponse);
                }
            });
            $("#messages").val("");
            $("#send").css("display","none");
        });
    </script>
</body>
</html>