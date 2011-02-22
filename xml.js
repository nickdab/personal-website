function body_text(xml_name)
{
	if (window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest(); //for IE7+, Firefox, Chrome
	}
	else
	{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP"); //IE6-
	}

	xhttp.open("GET",xml_name,false); //get the xml file
	xhttp.send("");	//complete connection
	xmlDoc=xhttp.responseXML;

	text=xmlDoc.getElementsByTagName("text"); //opening tag
	
	paragraph = text[0].getElementsByTagName("paragraph"); //gets each "paragraph" tag, starting with the first
		
	for (n = 0; n<paragraph.length; n++)
	{
		type = paragraph[n].getElementsByTagName("type");
		
		if (type[0].firstChild.nodeValue == "primary") 
		{
			document.write("<p class = \"primary\">"); //for primary text
		}	
		else
		{
			document.write("<p class = \"secondary\">"); //for secondary text
		}
				
		body = paragraph[n].getElementsByTagName("body");
				
		for (c = 0; c<body.length; c++) //get each "body" tag
		{
			document.write(body[c].firstChild.nodeValue); //gets the text located in the "body" tag
			document.write("<br />"); //breaks after each "body" tag
		}
				
				
		document.write("</p>");
			
	}

}

function picture(picture_name)
{
	if (window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest(); //for IE7+, Firefox, Chrome
	}
	else
	{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP"); //IE6-
	}

	xhttp.open("GET",picture_name,false); //get the xml file
	xhttp.send("");	//complete connection
	xmlDoc=xhttp.responseXML;
	
	picture = xmlDoc.getElementsByTagName("picture");	
	
	src = picture[0].getElementsByTagName("location")[0].firstChild.nodeValue;
	id = picture[0].getElementsByTagName("id")[0].firstChild.nodeValue;
	map = picture[0].getElementsByTagName("map");	
	
	html = "<img src=\""+src+"\" ";

	
	if (id.length>0)
	{
		html = html + "id=\"" +id +"\" ";
	}	
	
	if (map.length>0)
	{	
		map_name = map[0].getElementsByTagName("name")[0].firstChild.nodeValue;
		map_id = map[0].getElementsByTagName("id")[0].firstChild.nodeValue;
		map_html = "<map name=\"" + map_name + "\" id =\"" + map_id + "\">";
		document.write(map_html);
		
		area = map[0].getElementsByTagName("area");
		
		for (i = 0; i<area.length; i++)
		{
			shape = area[i].getElementsByTagName("shape")[0].firstChild.nodeValue;
			coords = area[i].getElementsByTagName("coords")[0].firstChild.nodeValue;
			href = area[i].getElementsByTagName("link")[0].firstChild.nodeValue;
			alt = area[i].getElementsByTagName("alt")[0].firstChild.nodeValue;
			area_html = "<area shape=\"" + shape + "\" coords=\"" + coords + "\" href =\""+ href + "\" alt=\"" + alt +"\"></area>";
			document.write(area_html);
		}
			
		map_html = "</map>";
		document.write(map_html);

		html = html +"usemap=\"#" + map_name + "\" ";	
	}
	
	html = html + " />";

	document.write(html);

	
}
	
