// menu
	$(document).ready(function(){
	    $("#button-toggle").click(function(){
	        $("#button-toggle").hide();
	        $("#close-menu").show();
	    });
	    $("#close-menu").click(function(){
	        $("#close-menu").hide();
	        $("#button-toggle").show();
	    });
	});

	//<button type="button" class="navbar-toggle" id="close-menu" data-toggle="collapse" data-target="#myNavbar">
          				//<i class="fa fa-times"></i>
          			//</button>