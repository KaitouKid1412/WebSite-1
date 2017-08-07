<?php 
include 'connect.inc.php';
include 'project.php'; 
$last_id = mysql_insert_id();

?>


function load()
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttlRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}

	xmlhttp.onreadstatechange = function()
	{
		if(xmlhttp.readystate = 4 && xmlhttp.status = 200)
		{
			document.getElementbyId().innerHTMl = xml.responseText;
		}
		xmlhttp.open('GET', '', true);
		xmlhttp.send();
	}
}