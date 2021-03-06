<?php
include 'header.php';
include 'top.php';
?>

  <style>
    h1{text-align: center;}
    tr:nth-child{background-color: gray;}
    .glyphicon-trash{margin-right: 10px;}
    .glyphicon-trash:hover{color:red;}
    .glyphicon-pencil{color:green;}

  </style>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->


  <title>Datenbankzugriff</title>
  <meta charset="utf-8">
</head>
<body>

<div class="container">

  <canvas id="canvas" width="500" height="500"></canvas>

  <script>
    var colors = ["#ff1a1a", "black", "#ff1a1a", "black",
      "#ff1a1a", "black", "#ff1a1a", "black",
      "#ff1a1a", "black", "#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ,"#ff1a1a", "black" ];

    var startAngle = 0;
    var arc = Math.PI/18;
    var ctx;

   /* function drawRouletteWheel() {
      var canvas = document.getElementById("canvas");
      if (canvas.getContext) {
        var outsideRadius = 220;
        var insideRadius = 115;

        ctx = canvas.getContext("2d");
        ctx.clearRect(0,0,500,500);

        ctx.strokeStyle = "black";
        ctx.lineWidth = 2;

        for(var i = 0; i < 16; i++) {
          var angle = startAngle + i * arc;
          ctx.fillStyle = colors[i];

          ctx.beginPath();
          ctx.arc(550, 550, outsideRadius, angle, angle + arc, false);
          ctx.arc(550, 550, insideRadius, angle + arc, angle, true);
          ctx.stroke();
          ctx.fill();
        }
      }
    }*/
    var restaraunts = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31" ,"32","33","34","35","36"];

    /*function drawRouletteWheel() {
      var canvas = document.getElementById("canvas");
      if (canvas.getContext) {
        var outsideRadius = 200;
        var textRadius = 160;
        var insideRadius = 125;

        ctx = canvas.getContext("2d");
        ctx.clearRect(0,0,500,500);


        ctx.strokeStyle = "black";
        ctx.lineWidth = 2;

        ctx.font = 'bold 12px Helvetica, Arial';

        for(var i = 0; i < 16; i++) {
          var angle = startAngle + i * arc;
          ctx.fillStyle = colors[i];

          ctx.beginPath();
          ctx.arc(550, 550, outsideRadius, angle, angle + arc, false);
          ctx.arc(550, 550, insideRadius, angle + arc, angle, true);
          ctx.stroke();
          ctx.fill();

          ctx.save();
          ctx.shadowOffsetX = -1;
          ctx.shadowOffsetY = -1;
          ctx.shadowBlur    = 0;
          ctx.shadowColor   = "rgb(220,220,220)";
          ctx.fillStyle = "black";
          ctx.translate(550 + Math.cos(angle + arc /23) * textRadius,
                  250 + Math.sin(angle + arc / 2) * textRadius);
          ctx.rotate(angle + arc / 2 + Math.PI / 2);
          var text = restaraunts[i];
          ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
          ctx.restore();
        }

        //Arrow
        ctx.fillStyle = "black";
        ctx.beginPath();
        ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
        ctx.lineTo(250 + 4, 250 - (outsideRadius + 5));
        ctx.lineTo(250 + 4, 250 - (outsideRadius - 5));
        ctx.lineTo(250 + 9, 250 - (outsideRadius - 5));
        ctx.lineTo(250 + 0, 250 - (outsideRadius - 13));
        ctx.lineTo(250 - 9, 250 - (outsideRadius - 5));
        ctx.lineTo(250 - 4, 250 - (outsideRadius - 5));
        ctx.lineTo(250 - 4, 250 - (outsideRadius + 5));
        ctx.fill();
      }
    }
    var colors = ["#ff1a1a", "black", "#ff1a1a", "black",
      "#ff1a1a", "black", "#ff1a1a", "black",
      "#ff1a1a", "black", "#ff1a1a", "black" ];
    var restaraunts = ["1", "2", "3", "4",
      "5", "6", "7", "8" ,"9",
      "10", "11", "12", "13","13","13","13","13"  ];

    var startAngle = 0;
    var arc = Math.PI / 6;
    var spinTimeout = null;

    var spinArcStart = 10;
    var spinTime = 0;
    var spinTimeTotal = 0;
     */
    var ctx;

    function drawRouletteWheel() {
      var canvas = document.getElementById("canvas");
      if (canvas.getContext) {
        var outsideRadius = 250;
        var textRadius = 220;
        var insideRadius = 200;

        ctx = canvas.getContext("2d");
        ctx.clearRect(0,0,500,500);


        ctx.strokeStyle = "black";
        ctx.lineWidth = 1;

        ctx.font = 'bold 12px Helvetica, Arial';

        for(var i = 0; i < 36; i++) {
          var angle = startAngle + i * arc;
          ctx.fillStyle = colors[i];

          ctx.beginPath();
          ctx.arc(250, 250, outsideRadius, angle, angle + arc, false);
          ctx.arc(250, 250, insideRadius, angle + arc, angle, true);
          ctx.stroke();
          ctx.fill();

          ctx.save();
          ctx.shadowOffsetX = -1;
          ctx.shadowOffsetY = -1;
          ctx.shadowBlur    = 0;
          ctx.shadowColor   = "rgb(220,220,220)";
          ctx.fillStyle = "black";
          ctx.translate(250 + Math.cos(angle + arc / 2) * textRadius,
                  250 + Math.sin(angle + arc / 2) * textRadius);
          ctx.rotate(angle + arc / 2 + Math.PI / 2);
          var text = restaraunts[i];
          ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
          ctx.restore();
        }

        //Arrow
        ctx.fillStyle = "black";
        ctx.beginPath();
        ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
        ctx.lineTo(250 + 4, 250 - (outsideRadius + 5));
        ctx.lineTo(250 + 4, 250 - (outsideRadius - 5));
        ctx.lineTo(250 + 9, 250 - (outsideRadius - 5));
        ctx.lineTo(250 + 0, 250 - (outsideRadius - 13));
        ctx.lineTo(250 - 9, 250 - (outsideRadius - 5));
        ctx.lineTo(250 - 4, 250 - (outsideRadius - 5));
        ctx.lineTo(250 - 4, 250 - (outsideRadius + 5));
        ctx.fill();
      }
    }

    function spin() {
      spinAngleStart = Math.random() * 10 + 10;
      spinTime = 0;
      spinTimeTotal = Math.random() * 3 + 4 * 1000;
      rotateWheel();
    }

    function rotateWheel() {
      spinTime += 30;
      if(spinTime >= spinTimeTotal) {
        stopRotateWheel();
        return;
      }
      var spinAngle = spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);
      startAngle += (spinAngle * Math.PI / 180);
      drawRouletteWheel();
      spinTimeout = setTimeout('rotateWheel()', 30);
    }

    function stopRotateWheel() {
      clearTimeout(spinTimeout);
      var degrees = startAngle * 180 / Math.PI + 90;
      var arcd = arc * 180 / Math.PI;
      var index = Math.floor((360 - degrees % 360) / arcd);
      ctx.save();
      ctx.font = 'bold 30px Helvetica, Arial';
      var text = restaraunts[index]
      ctx.fillText(text, 250 - ctx.measureText(text).width / 2, 250 + 10);
      ctx.restore();
    }

    function easeOut(t, b, c, d) {
      var ts = (t/=d)*t;
      var tc = ts*t;
      return b+c*(tc + -3*ts + 3*t);
    }

    drawRouletteWheel();

  </script>

  <input type="button" value="spin" onclick="spin();" style="float:left;" />
</div>

<?php
require "footer.php";
?>
