<title> TriviaCast! </title>

	<head>
		<link rel="stylesheet" type="text/css" href="TriviaCastCanvas.css" media="screen" />

		<script src="jquery-1.11.1.js"></script>
		<script language="javascript" type="text/javascript" src="Trivia.js"></script>
		<script language="javascript" type="text/javascript" src="TriviaGraphicsControl.js"></script>
		<script language="javascript" type="text/javascript" src="Cast.js"></script>
		<script type="text/javascript" src="//www.gstatic.com/cast/sdk/libs/receiver/2.0.0/cast_receiver.js"></script>
		<script type="text/javascript" src="Cast.js"></script>

	</head>

	<body onload="init()">
		<div align="center">
			<canvas id="background_canvas" style="background-color: #000000; z-index: 1">
				HTML5 canvas not supported.
			</canvas>
			<canvas id="foreground_canvas" style="z-index: 2"></canvas>
			<canvas id="debug_canvas" style="background-color:#333333; opacity: 0.0; z-index: 3"></canvas>
		</div>
	</body>
