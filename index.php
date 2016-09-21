<html>
<head>
<link href="clock.css" rel="stylesheet" type="text/css" />
    <script type = "text/javascript">

          // Clock image array
          var clocks = [];
          clocks[0] = "clock1.png";
          clocks[1] = "clock2.png";
          clocks[2] = "clock3.png";
          clocks[3] = "clock4.png";
          clocks[4] = "clock5.png";
          clocks[5] = "clock6.png";
          clocks[6] = "clock7.png";
          clocks[7] = "clock8.png";
          clocks[8] = "clock9.png";
          clocks[9] = "clock10.png";
          clocks[10] = "clock11.png";
          clocks[11] = "clock12.png";
          clocks[12] = "clock1.png";
 
          // Count variable declaration
          var count = 0;

          // Display next image
          function changeClockImage() {
              
              // End of array reached - clear interval and return
              if (count == clocks.length) {
                  clearInterval(time);
		              return;
              }
              
              var img = document.getElementById("clock");
              img.src = clocks[count]; // Set new clock image
              count++;
              var time = setTimeout("changeClockImage()", 1000); // Every second change image
          }

      </script>
</head>
<body onload="changeClockImage()">
	<div id="contents">
		<h3>Dominick Forlenza JavaScript Clock Animation</h3>
		<p>This is a clock animation created in JavaScript.</p>
                <p>&nbsp;</p>
                <img id="clock" src="./ClockImages/clock1.png">
                <p>&nbsp;</p>
		</div>
                <p style="text-align:center">Original clock image from www.publicdomainvectors.org. Labeled for noncommercial reuse with modification. Edited by Dominick Forlenza using GIMP.</p>
</body>
</html>
