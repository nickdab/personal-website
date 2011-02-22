<!DOCTYPE html><?php include("xml.php");?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel = "stylesheet" type = "text/css" href = "http://www.lifeandtimes.me/main.css" />
	<script src="http://www.lifeandtimes.me/interactive.js" type = "text/javascript"></script>	<noscript> <meta http-equiv="refresh" content="0;http://www.lifeandtimes.me/writing/writing_alt.php"></noscript>
	<title>Life and Times || Writing</title>

	<STYLE TYPE = "text/css">
		
		#footer
		{
			position:absolute;
			top:400px;
			left:400px;
		}

		#poems
		{
			position:absolute;
			top:175px;
			left:700px;
			font-size:1em;
			font-family: Times, Times New Roman;
		}
		
		#sacrifice
			{
				visibility:visible;
				position:absolute;
				left:400px;
				top: 250px;
			}
		#gone_coastal
			{
				visibility:hidden;
				position: absolute;
				left:400px;
				top:250px;
			}
		#tell_me_silence
			{
				visibility:hidden;
				position: absolute;
				left:400px;
				top:250px;
			}
	</STYLE>
</head>

<body>
		<?php
			picture("http://www.lifeandtimes.me/title.xml");?>
	<div id = "main_flow"> </div>

	<DIV ID = "sacrifice">
		<?php>
			body_text("sacrifice.xml");
		?>
	</DIV>
	
	<DIV ID = "gone_coastal">
		<?php>		
			body_text("gone coastal.xml");
		?>
	</DIV>
	
	<DIV ID = "tell_me_silence">
		<?php
			body_text("tell me silence.xml");		?>
		
	</DIV>

	
	<P>
		<DIV ID = "poems">
			<A CLASS = "page" HREF = "javascript:vanish('sacrifice', 0);vanish('gone_coastal', 1);vanish('tell_me_silence', 1);footerTop('400px')">Sacrifice</A><BR />
			<A CLASS = "page" HREF = "javascript:vanish('gone_coastal', 0);vanish('sacrifice', 1);vanish('tell_me_silence', 1);footerTop('300px')">Gone Coastal</A><BR />
			<A CLASS = "page" HREF = "javascript:vanish('tell_me_silence', 0);vanish('sacrifice', 1);vanish('gone_coastal', 1);footerTop('1000px')">Tell Me Silence</A><BR />
		</DIV>
	</P> 


<footer ID = "footer">&#169 Nick Birney 2010</footer>
</div>


</body>
</html>
