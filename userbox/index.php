<?php include("../blocked.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

<title>The Super-Simple Userbox Maker</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link type="text/css" rel="stylesheet" href="style.css" />
<script src="userbox.js" type="text/javascript"></script>

</head>

<body onload="previewAll(); generateUserbox();" onkeyup="generateUserbox();">

<div id="wrapper">
	<div id="header">
		<div id="titletop">THE SUPER SIMPLE</div>
		<span id="titleuserbox">USERBOX</span> <span id="titlemaker">MAKER</span>
		<div id="titletop">BY EN-WIKIPEDIA USER THE USERBOXER</div>
	</div>
	<div id="cwrapper">
		<div id="main">
			<div id="result">
				<ul id="rtabby">
					<li id="tabcode" class="rselected" onclick="switchrTab('code')">Generated Code</li>
					<li id="tababout" onclick="switchrTab('about')">About This Tool</li>
				</ul>
				<div class="rfieldgroup" id="rightcode">
					<div id="outputuserbox">
<table id="resulttable" class="userbox" style="border-collapse: collapse;">
	<tr>
		<td id="resultid" class="id"></td> 
		<td id="resultinfo" class="info"></td>
	</tr>
</table>
					</div>
					<br />Copy and paste this code on <a href="http://en.wikipedia.org">English Wikipedia</a> to get the above 
					box:<br />
					<textarea id="resultcode" rows="7" cols="30"></textarea>
					<br />
					<b>Select Code Output Method</b>
					<select name="typeselect" onchange="generateUserbox()" id="typeselect">
						<option value="0">{{Userbox}} Template</option>
						<option value="1">Substituted {{Userbox}} Template</option>
						<option value="2">Raw HTML (Doesn't work in IE)</option>
					</select>
				</div>
				
				<div class="rfieldgroup" id="rightabout" style="display: none;">
					This is version two of the script used to create userboxes, written by me, the English Wikipedia user
					<a href="http://en.wikipedia.org/wiki/User:The_Userboxer">The Userboxer</a>. All questions, comments,
					complaints and death threats can be directed there.<br />
					<p><b>Limitations:</b> Since I don't have time to make it too fancy, MediaWiki markup will not be
					rendered. You will have to put them in manually. Sorry.</p>
					<p>Also, the generated code will only work if the 
					<code><a href="http://en.wikipedia.org/wiki/Template:Userbox">Userbox</a></code> template exists.</p>
				</div>
			</div>
			
			<div id="create">
				<ul id="tabby">
					<li id="tabbasic" class="selected" onclick="switchTab('basic')">The Basics</li>
					<li id="tabcolors" onclick="switchTab('colors')">Select Color Scheme</li>
					<li id="tabadvanced" onclick="switchTab('advanced')">Advanced Options</li>
				</ul>
				<form id="mainform" name="userbox">
					<div class="fieldgroup" id="formbasic">
						<label for="id">Left Box (ID) Text</label>
						<input type="text" name="id" id="id" class="big" value="ID"/>
						
						<label for="info">Right Box (Info) Text</label>
						<input type="text" name="info" id="info" class="big" value="Info" />
						
						<fieldset style="width: 208px; float: left;">
							<legend>Borders and Backgrounds</legend>
							<label for="borderc">Border Color</label>
							<input type="text" name="borderc" id="borderc" onkeyup="preview('borderc')"  value="#999999" />
							
							<label for="idback">Left-box Color</label>
							<input type="text" name="idback" id="idback" onkeyup="preview('idback')" value="#DDDDDD" />
					
							<label for="infoback">Right-box Color</label>
							<input type="text" name="infoback" id="infoback" onkeyup="preview('infoback')" value="#EEEEEE" />
						</fieldset>
						<fieldset style="width: 208px; float: right;">
							<legend>Text Options</legend>
							<label for="idcolor">Left (ID) Side Text Color (CSS values)</label>
							<input type="text" name="idcolor" id="idcolor" onkeyup="preview('idcolor')" value="#000000" />
							
							<label for="infocolor">Left (Info) Text Color (CSS values)</label>
							<input type="text" name="infocolor" id="infocolor" onkeyup="preview('infocolor')" value="#000000" />
						</fieldset>
						<div class="clear"></div>
						<fieldset class="clear">
							<legend>Premade Schemes</legend>
							For premade color schemes, please <a href="#" onclick="switchTab('colors')">
								go to the "Select Color Scheme" tab</a>.
						</fieldset>
					</div>
					
					<div class="fieldgroup" id="formcolors" style="display: none;">
						
							<div id="colorselect">
<script type="text/javascript">
<!--
addColorScheme("Default", "#999999", "#DDDDDD", "#EEEEEE", "#000000", "#000000"); 
addColorScheme("Default Dark", "#000000", "#666666", "#777777", "#FFFFFF", "#FFFFFF"); 

document.write("<div class=\"clear\"><b>Main Page:</b></div><br />");
addColorScheme("Main Page Green", "#A3BFB1", "#CEF2E0", "#E6FFF2", "#000000", "#000000");
addColorScheme("Main Page Blue", "#A3B0BF", "#CEDFF2", "#E6F1FF", "#000000", "#000000");
addColorScheme("Main Page Purple", "#AFA3BF", "#DDCEF2", "#F0E6FF", "#000000", "#000000");
addColorScheme("Main Page Grey", "#CCCCCC", "#CCCCCC", "#FCFCFC", "#000000", "#000000");

document.write("<div class=\"clear\"><b>Babel:</b></div><br />");
addColorScheme("Babel Grey (level 0)", "#B7B7B7", "#B7B7B7", "#E8E8E8", "#000000", "#000000");
addColorScheme("Babel Blue (level 1)", "#C0C8FF", "#C0C8FF", "#F0F8FF", "#000000", "#000000");
addColorScheme("Babel Cyan (level 2)", "#77E0E8", "#77E0E8", "#D0F8FF", "#000000", "#000000");
addColorScheme("Babel Lime (level 3)", "#00FF00", "#00FF00", "#90FF90", "#000000", "#000000");
addColorScheme("Babel Yellow (level 4)", "#CCCC00", "#FFFF00", "#FFFF99", "#000000", "#000000");
addColorScheme("Babel Red (level 5)", "#F99C99", "#F99C99", "#F9CBC9", "#000000", "#000000");
addColorScheme("Babel Green (native)", "#6EF7A7", "#6EF7A7", "#C5FCDC", "#000000", "#000000");
//-->
</script>
							</div>
					</div>
					
					<div class="fieldgroup" id="formtext" style="display: none;">
						Dummy
					</div>
					
					<div class="fieldgroup" id="formadvanced" style="display: none;">
						<fieldset style="width: 208px; float: left;">
							<legend>Left (ID) Side</legend>
							
							<label for="idsize">Text Size (pts)</label>
							<input type="text" name="idsize" id="idsize" value="12" />
							
							<label for="idlineheight">Line Height</label>
							<input type="text" name="idlineheight" id="idlineheight" value="1.2em" />
							
							<label for="idcustomcss">Custom CSS</label>
							<input type="text" name="idcustomcss" id="idcustomcss" value="" />
						</fieldset>
						<fieldset style="width: 208px; float: right;">
							<legend>Right (Info) Side</legend>
							
							<label for="infosize">Text Size (pts)</label>
							<input type="text" name="infosize" id="infosize" value="8" />
							
							<label for="infolineheight">Line Height</label>
							<input type="text" name="infolineheight" id="infolineheight" value="1.2em" />
							
							<label for="infocustomcss">Custom CSS</label>
							<input type="text" name="infocustomcss" id="infocustomcss" value="" />
						</fieldset>
						<b>Note:</b> Due to technical reasons, custom CSS cannot be displayed here. Preview it in the
						<a href="http://en.wikipedia.org/wiki/Wikipedia:Sandbox">Sandbox</a> instead.
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-405998-3");
pageTracker._initData();
pageTracker._trackPageview();
</script>

</body>

</html>