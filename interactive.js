function vanish(name, flag)
{
	myObj = new getObj(name);
	myObj.style.visibility = (flag) ? 'hidden' : 'visible';
}

function footerTop(amount)
{
	myObj = new getObj('footer');
	myObj.style.top = amount;
}		


function getObj(name)
{
	if(document.getElementById)
	{
		this.obj = document.getElementById(name);
		this.style = document.getElementById(name).style;
	}
	else
	{
		return;
	}
}