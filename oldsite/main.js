/*function startType(){
	caption = $('#rawcode_bg').html();
	$('#rawcode_bg').html("");
	char = 0;

	this.type = function() {
		self = this;
		$('#rawcode_bg').html(caption.substr(0, char+=20));
		if(char < caption.length+20)
			setTimeout("self.type()", 1);
		else {
			char = 0;
			caption = "";
		}
	}

	this.type();
}*/

to = new Array;

function startSplash(){
	$("#navlist").fadeIn(1000);
	$("#zend_logo").fadeIn(1000);
	$("#splash_1").fadeIn(1000);
	to[0] = setTimeout('$("#splash_2").fadeIn(1000)', 1000);
	to[1] = setTimeout('$("#splash_3").fadeIn(1000)', 3000);
	to[2] = setTimeout('$("#splash_4").fadeIn(1000)', 4000);
	to[3] = setTimeout('$("#splash_5").fadeIn(1000)', 7000);
	to[4] = setTimeout('$("#splash_skip").fadeOut(1000)', 7000);
	to[5] = setTimeout('fadeMainElements()', 8500);
}

function skipSplash(){
	for(i=0; i<6; i++) clearTimeout(to[i]);
	$("#splash div").stop(true, true);
	$("#splash_replay").stop(true, true);

	$("#splash_5").fadeIn(1000);
	fadeMainElements();
}

function replaySplash(){
	for(i=0; i<6; i++) clearTimeout(to[i]);
	$("#splash div").stop(true, true);
	$("#splash_replay").stop(true, true);
	$("#splash div").hide();
	for(i=1; i<6; i++) $("#splash_"+i).hide();
	$("#splash_replay").hide();
	setTimeout('startSplash()', 500);
}

function fadeMainElements(){
	$("#splash_skip").hide();
	$("#main").fadeIn(1000);
	$("#footer").fadeIn(1000);
	$("#splash_replay").fadeIn(1000);
}

$(document).ready(function(){
	if($("body").hasClass("splash")) {
		$("#splash_5").hide();
		$("#main").hide();
		$("#splash_replay").hide();
		$("#footer").hide();
		$("#splash_skip").show();
		$("#loading").fadeOut(500);
		setTimeout('startSplash()', 500);
	}
});