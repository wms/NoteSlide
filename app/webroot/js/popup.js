var loginStatus = 0;
var noteboxStatus = 0;
var editProfileStatus = 0;
$(function() {
	var loadLogin = function loadLogin(){
		if(loginStatus==0){
			$("#overlay").css({
				"opacity": "0.7"
			});
			$("#overlay").fadeIn("slow");
			$("#loginbox").fadeIn("slow");
			loginStatus = 1;
		}
	}

	var loadnotebox = function loadnotebox(){
		if(noteboxStatus==0){
			$("#overlay").css({
				"opacity": "0.7"
			});
			$("#overlay").fadeIn("slow");
			$("#notebox").fadeIn("slow");
			noteboxStatus = 1;
		}
	}

	var loadEditProfile = function loadEditProfile(){
		if(editProfileStatus==0){
			$("#overlay").css({
				"opacity": "0.7"
			});
			$("#overlay").fadeIn("slow");
			$("#editprofile").fadeIn("slow");
			editProfileStatus = 1;
		}
	}
function disableLogin(){

if(loginStatus==1){
$("#overlay").fadeOut("slow");
$("#loginbox").fadeOut("slow");
loginStatus = 0;
}
}

function disableNotebox(){

if(noteboxStatus==1){
$("#overlay").fadeOut("slow");
$("#notebox").fadeOut("slow");
noteboxStatus = 0;
}
}

function disableEditProfile(){

if(editProfileStatus==1){
$("#overlay").fadeOut("slow");
$("#editprofile").fadeOut("slow");
editProfileStatus = 0;
}
}


function centerLogin(){

var windowWidth = document.documentElement.clientWidth;
var windowHeight = document.documentElement.clientHeight;
var loginHeight = $("#loginbox").height();
var loginWidth = $("#loginbox").width();

$("#loginbox").css({
"position": "absolute",
"top": windowHeight/2-loginHeight/2,
"left": windowWidth/2-loginWidth/2
});


$("#overlay").css({
"height": windowHeight
});

}

function centerNotebox(){

var windowWidth = document.documentElement.clientWidth;
var windowHeight = document.documentElement.clientHeight;
var noteboxHeight = $("#notebox").height();
var noteboxWidth = $("#notebox").width();

$("#notebox").css({
"position": "absolute",
"top": windowHeight/2-noteboxHeight/2,
"left": windowWidth/2-noteboxWidth/2
});


$("#overlay").css({
"height": windowHeight
});
console.debug('foo');
}


function centerEditProfile(){

var windowWidth = document.documentElement.clientWidth;
var windowHeight = document.documentElement.clientHeight;
var editprofileHeight = $("#editprofile").height();
var editprofileWidth = $("#editprofile").width();

$("#editprofile").css({
"position": "absolute",
"top": windowHeight/2-editprofileHeight/2,
"left": windowWidth/2-editprofileWidth/2
});


$("#overlay").css({
"height": windowHeight
});
console.debug('foo');
}


$(document).ready(function(){

});


$("#loginlink").click(function(){

centerLogin();

loadLogin();
});

$("#noteboxlink").click(function(){

centerNotebox();

loadnotebox();
});

$("#editprofilelink").click(function(){

centerEditProfile();

loadEditProfile();
});


$("#loginboxClose").click(function(){
disableLogin();
});

$("#noteboxClose").click(function(){
disableNotebox();
});

$("#editprofileClose").click(function(){
disableEditProfile();
});


$("#overlay").click(function(){
disableLogin();
disableNotebox();
disableEditProfile();
});



})

