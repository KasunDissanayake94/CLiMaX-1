/*
$(document).ready(function(){
	$("#content").load("profile.php");
});
*/

function loadTransport() {
    $('.Social').hide("");
    $('.Transport').show("");
    $('.Education').hide("");
    $('.Technology').hide("");
    $('.Other').hide("");
}

function loadEducation(){
    $('.Social').hide("");
    $('.Education').show("");
    $('.Transport').hide("");
    $('.Technology').hide("");
    $('.Other').hide("");
}

function loadTechnology(){
    $('.Social').hide("");
    $('.Technology').show("");
    $('.Education').hide("");
    $('.Transport').hide("");
    $('.Other').hide("");
}

function loadSocial(){
    $('.Social').show("");
    $('.Transport').hide("");
    $('.Education').hide("");
    $('.Technology').hide("");
    $('.Other').hide("");
}

function loadOther(){
    $('.Other').show("");
    $('.Social').remove("");
    $('.Education').remove("");
    $('.Technology').remove("");
    $('.Transport').remove("");
}


$("li a").filter(".my-sidebar-menu-item").click(function(){
	var page = $(this).attr('href');
	$("#content").load(page);

	// to disable the default functionality of href in html, which ignores the href and  let jquery to do its thing
	return false;
});

$("ul li ul li a").filter(".my-sidebar-submenu-item").click(function(){
	var page = $(this).attr('href');
	$("#content").load(page);

	// to disable the default functionality of href in html, which ignores the href and  let jquery to do its thing
	return false;
});


$("a").filter(".add-link").click(function(){
    var page = $(this).attr('href');
    $("#content").load(page);

    // to disable the default functionality of href in html, which ignores the href and  let jquery to do its thing
    return false;
});

$("ul li a").filter(".add-link").click(function(){
    var page = $(this).attr('href');
    $("#my-tab-content").load(page);

    // to disable the default functionality of href in html, which ignores the href and  let jquery to do its thing
    return false;
});
