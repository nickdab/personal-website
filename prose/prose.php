<!DOCTYPE html><?php include("xml.php");?>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "http://www.lifeandtimes.me/main.css" /><script src ="http://www.lifeandtimes.me/interactive.js" type = "text/javascript"></script><noscript> <meta http-equiv="refresh" content="0;http://www.lifeandtimes.me/prose/prose_alt.php" /> </noscript>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Life and Times || Blog</title><style type="text/css">				#footer		{			position:absolute;			top:100px;			left:0px;		}		#prose		{			position:absolute;			top:10px;			left:400px;			font-size:1em;			font-family: Times, Times New Roman;			white-space:nowrap;		}		#it_was_raining			{				visibility:visible;				position:absolute;				left:0px;				top: 0px;			}				#good_evening			{				visibility:hidden;				position: absolute;				left:0px;				top:0px;			}		#dallas_march_21_2010			{				visibility:hidden;				position: absolute;				left:0px;				top:0px;			}	</style>
</head>
<body>
<?php picture("http://www.lifeandtimes.me/title.xml");?>
<div id = "main_flow">
<div id="good_evening"><?php body_text("good_evening.xml");?></div>
<div id="it_was_raining"><?php body_text("it_was_raining.xml");?></div>
<div id="dallas_march_21_2010"><?php body_text("dallas_march_21_2010.xml");?></div><p>	<div id="prose">		<a class = "page" href = "javascript:vanish('it_was_raining', 0);vanish('good_evening', 1);vanish('dallas_march_21_2010', 1);footerTop('100px')">Hope</a><br />		<a class = "page" href = "javascript:vanish('good_evening', 0);vanish('it_was_raining', 1);vanish('dallas_march_21_2010', 1);footerTop('1140px')">The Little Man</a><br />		<a class = "page" href = "javascript:vanish('dallas_march_21_2010', 0);vanish('it_was_raining', 1);vanish('good_evening', 1);footerTop('300px')">Dallas</a><br />	</div></p>

<footer id="footer">&#169 Nick Birney 2010</footer>
</div>
</body>
</html>
