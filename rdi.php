<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Countdown to Payload Builder">
    <meta name="description" content="Countdown to Payload Builder by TRHACKNON">
    <title>Countdown to Payload Builder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background-color: black;
            color: limegreen;
            font-family: 'Courier New', monospace;
            text-align: center;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        h1 {
            color: #FF4500;
            background-image: linear-gradient(45deg, violet, indigo, blue, green, yellow, orange, red);
            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 2em;
            font-weight: bold;
        }

      h1::before {
          content: '';
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          z-index: -1;
          border: 3px solid deepskyblue;
          border-radius: 10px; /* Ajustez selon votre préférence */
          transform: rotate(-3deg); /* Ajustez l'angle selon votre préférence */
      }
      
        #countdown {
            font-size: 4em;
            margin: 20px;
            font-family: 'Impact', sans-serif;
            color: red;
        }

        #redirect-message {
            font-size: 1.5em;
            margin-top: 20px;
        }

        #info-message {
            font-size: 1.2em;
            margin-top: 20px;
        }
        .countdown-container {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 80vh;
          border: 20px solid #FFFF00; /* Jaune fluo */
          background-image: url('https://e.top4top.io/p_2918g19vk1.jpg'); /* Image de fond */
          background-size: 100% 100%; /* Ajuste la taille de l'image au conteneur */
          background-position: center; /* Ajustez selon votre prÃ©fÃ©rence */
          border-radius: 10px; /* Ajustez selon votre prÃ©fÃ©rence */
        }
    </style>
</head>
<body>

            <h1 class="animate__animated animate__pulse">Hacker Countdown to Payload Builder</h1>    <div class="countdown-container">
        <div>
            <div id="countdown"></div>
            <div id="info-message">Unlock access to the ultimate payload builder when the countdown hits zero!</div>
            <div id="redirect-message"></div>
        </div>
    </div>

    <script>
        var countDownDate = new Date("Jan 1, 2024 00:00:00").getTime();

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
                document.getElementById("info-message").style.display = "none";
                document.getElementById("redirect-message").innerHTML = "Redirecting to Payload Builder...";
                setTimeout(function() {
                    window.location.href = "redir.php";
                }, 3000);
            }
        }, 1000);
    </script>
</body>
</html>