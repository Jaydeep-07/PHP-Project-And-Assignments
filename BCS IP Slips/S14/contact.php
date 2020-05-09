<script type="text/javascript">
function show_contacts()
{
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("contact").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getcontacts.php",true);
	xmlhttp.send();
}
</script>
<input type='button' value='Show Contact' onclick='show_contacts()'>
<div id='contact'></div>
