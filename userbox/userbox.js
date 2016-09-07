function toggle(obj) {
	var el = document.getElementById(obj);
	el.style.display = (el.style.display != 'none' ? 'none' : '' );
}

function setClassName(objId, className) {
    	document.getElementById(objId).className = className;
}

function addColorScheme(name, borderc, idback, infoback, idcolor, infocolor) {
	document.write("<div class=\"colorScheme\" onclick=\"setColors('"+borderc+"','"+idback+"','"+infoback+"','"+idcolor+"','"+infocolor+"');\">");
	document.write("\n<table class=\"userbox\" style=\"border:1px solid "+borderc+"\">\n");
	document.write("<tr>\n");
	document.write("<td class=\"id\" style=\"background:"+idback+"; color:"+idcolor+"; border:1px solid "+borderc+"\">ID</td>\n");
	document.write("<td class=\"info\" style=\"background:"+infoback+"; color:"+infocolor+"; border:1px solid "+borderc+"\">"+name+"</td>");
	document.write("\n</tr></table></div>\n")
}

function switchTab(tabname) {
	document.getElementById('formbasic').style.display = 'none';
	document.getElementById('formcolors').style.display = 'none';
	document.getElementById('formadvanced').style.display = 'none';
	setClassName('tabbasic', 'unselected')
	setClassName('tabcolors', 'unselected')
	setClassName('tabadvanced', 'unselected')
	
	document.getElementById('form'+tabname).style.display = 'block';
	setClassName('tab'+tabname, 'selected')
}

function switchrTab(tabname) {
	document.getElementById('rightcode').style.display = 'none';
	document.getElementById('rightabout').style.display = 'none';
	setClassName('tabcode', 'unselected')
	setClassName('tababout', 'unselected')
	
	document.getElementById('right'+tabname).style.display = 'block';
	setClassName('tab'+tabname, 'rselected')
}

function setColors (borderc, idback, infoback, idcolor, infocolor) {
	document.getElementById('borderc').value = borderc;
	document.getElementById('idback').value = idback;
	document.getElementById('infoback').value = infoback;
	document.getElementById('idcolor').value = idcolor;
	document.getElementById('infocolor').value = infocolor;
	previewAll();
	generateUserbox();
}

/**
 * generateUserbox()
 * 
 * Main userbox generation function. Gets values from the DOM.
 */
function generateUserbox () {
	//Get variables
	var id = document.getElementById("id").value;	//The left box text
	var info = document.getElementById("info").value;	//The right box text
	
	var borderc = document.getElementById("borderc").value;	//The border color
	
	var idback = document.getElementById("idback").value;	//The background for the left box
	var infoback = document.getElementById("infoback").value;	//The background for the left box
	var idcolor = document.getElementById("idcolor").value;	//The text color for the left box
	var infocolor = document.getElementById("infocolor").value;	//The text color for the right box
	
	var idlineheight = document.getElementById("idlineheight").value;	//The id line height
	var infolineheight = document.getElementById("infolineheight").value;	//The info line height
	var idsize = document.getElementById("idsize").value;	//The id font size
	var infosize = document.getElementById("infosize").value;	//The info font size
	var idcustomcss = document.getElementById("idcustomcss").value;	//The id custom css
	var infocustomcss = document.getElementById("infocustomcss").value;	//The info custom css
	
	//Update the preview table
	var resulttable = document.getElementById("resulttable");	//The table
	var resultid = document.getElementById("resultid") //The left box of the table
	var resultinfo = document.getElementById("resultinfo")	//The right box of the table
	
	resulttable.style.borderColor = borderc;	//Set table border color
	
	resultid.style.border = "1px solid "+borderc;	//Set leftbox border color
	resultid.style.color = idcolor;	//Set rightbox font color
	resultid.style.background = idback;	//Set rightbox background color
	resultid.style.lineHeight = idlineheight;	//Set the lineheight
	resultid.style.fontSize = idsize;	//Set the font size
	resultid.innerHTML = id; //Set rightbox text
	
	resultinfo.style.border = "1px solid "+borderc;	//Set rightbox border color
	resultinfo.style.color = infocolor;	//Set leftbox text color
	resultinfo.style.background = infoback;	//Set leftbox background color
	resultinfo.style.lineHeight = infolineheight;	//Set the lineheight
	resultinfo.style.fontSize = infosize;	//Set the font size
	resultinfo.innerHTML = info; //Set leftbox text
	
	//Code-related variables
	var typeselect = document.getElementById("typeselect").selectedIndex;	//The info custom css
	var resultcode = document.getElementById("resultcode");
	var outputuserbox = document.getElementById("outputuserbox").innerHTML;	//The raw HTML
	
	//Output the code
	if (typeselect == 0) {
		resultcode.innerHTML = "{{Userbox | border-c="+borderc+" "+
		"| border-s=1"+
		"| id-c="+idback+
		"| id-s="+idsize+
		"| id-fc="+idcolor+
		"| id-op="+idcustomcss+
		"| info-c="+infoback+
		"| info-s="+infosize+
		"| info-fc="+infocolor+
		"| info-lh="+infolineheight+
		"| info-op="+infocustomcss+
		"| id="+id+
		"| info="+info+
		"}}";
	}
	else if (typeselect == 1) {
		resultcode.innerHTML = "{{subst:Userbox | border-c="+borderc+" "+
		"| border-s=1"+
		"| id-c="+idback+
		"| id-s="+idsize+
		"| id-fc="+idcolor+
		"| id-op="+idcustomcss+
		"| info-c="+infoback+
		"| info-s="+infosize+
		"| info-fc="+infocolor+
		"| info-lh="+infolineheight+
		"| info-op="+infocustomcss+
		"| id="+id+
		"| info="+info+
		"}}";
	}
	else if (typeselect == 2) {
		resultcode.innerHTML = "<style type=\"text/css\">\n"+
		".userbox { width: 239px; font-family: sans-serif; border: 1px solid; border-collapse: collapse;}\n"+
		".id { height: 45px; width: 45px; text-align: center; font-size:12pt; border: 1px solid; font-weight: bold;}\n"+
		".info { padding: 0 4pt; border: 1px solid; font-size: 8pt;}\n"+
		"</style>"+outputuserbox;
	}
}

function preview(x) {
	var color = document.getElementById(x).value;
	var preview = document.getElementById(x);
	preview.style.border = "1px solid "+color;
	preview.style.borderRight = "15px solid "+color;
}

function previewAll() {
	preview('borderc')
	preview('idback')
	preview('infoback')
	preview('idcolor')
	preview('infocolor')
}