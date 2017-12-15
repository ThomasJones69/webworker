<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Count Numbers: <output id="result"></output></p>
        <button onclick="Start()">Start</button>
        <button onclick="Stop()">Stop</button>
        <br>
        <br>
           <canvas id="canvas" width="400" height="200"></canvas>
        <script>


            var w;
            function Start() {
                w = new Worker("worker.js");
                w.onmessage = function (jojo) { //jojo komt van de worker.js. Afkomstig van myJSON 
                    
                    var myOj = JSON.parse(jojo.data);
                    document.getElementById("result").innerHTML = myOj.city;
                };
            }

            function Stop() {
                w.terminate();
                w = undefined;
            }
            var c = document.getElementById("canvas");
            var ctx = c.getContext("2d");

            var grd = ctx.createLinearGradient(0, 0, 400, 0);
            grd.addColorStop(0, "blue");
            grd.addColorStop(0.5, "red");
            grd.addColorStop(1, "yellow");

            ctx.fillStyle = grd;
            ctx.fillRect(0, 0, 400, 200);
        </script>
    </body>
</html>
