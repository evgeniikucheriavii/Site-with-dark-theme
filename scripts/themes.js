var btn = document.getElementById("theme-button");
var link = document.getElementById("theme-link");

var busy = false;

btn.onclick = ChangeTheme;

function ChangeTheme()
{
	let lightTheme = "styles/light.css";
	let darkTheme = "styles/dark.css";

	var currTheme = link.getAttribute("href");
	var theme = "";

	if(currTheme == lightTheme)
	{
		currTheme = darkTheme;
		theme = "dark";
	}
	else
	{	
		currTheme = lightTheme;
		theme = "light";
	}

	link.setAttribute("href", currTheme);

	Save(theme);
}


function Save(theme)
{
	if(!busy)
	{
		var Request = new XMLHttpRequest();
		Request.open("GET", "./themes.php?theme=" + theme, true);

		Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		
		Request.addEventListener("readystatechange", function (e)
		{
			console.log("aaa");
			busy = false;
		});

		busy = true;
		Request.send();
	}
	
}