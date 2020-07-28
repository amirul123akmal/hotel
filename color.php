<?php  
	require 'color2.php';
?>
<body>
	<center>
		<!-- BUTTON FOR COLOR CHANGE -->
		<button id="color">Change Color</button>
	</center>
	<script >
		document.getElementById('color').onclick = changeColor;
		// CHNAGE HERE
		var currentColor(){
			if (currentColor == 'red') {
				document.body.style.color = "blue";
				currentColor = "blue";
			}
			else{
				document.body.style.color = "red";
				currentColor = "red";
			}
		}
	</script>
</body>