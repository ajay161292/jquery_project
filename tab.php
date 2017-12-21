<!DOCTYPE html>
<html>
<head>
	<title>Tabs</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">
.tabs {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}
/*.tabs {
    width:100%;
    display:inline-block;
}*/
.tab-links:after {
        display:block;
        clear:both;
        content:'';
    } 
.tab-links li {
    margin:0px 5px;
    float:left;
    list-style:none;
}
.tab-links a {
    padding:9px 15px;
    display:inline-block;
    border-radius:3px 3px 0px 0px;
    /*background:#7FB5DA;*/
    font-size:16px;
    font-weight:600;
    /*color:#4c4c4c;*/
    transition:all linear 0.15s;
}
.tab-links a:hover {
    background:#a7cce5;
    text-decoration:none;
}
/*li.active a, li.active a:hover {
        background:#fff;
        color:#4c4c4c;
    }*/
.tabcontent {
        padding:15px;
        border-radius:3px;
        box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
        background:#fff;
        width: 500px;
    }
.active {
    color: green;
    background: red;
    display: block;
    /*width: 50;
    height: 20;*/
}
.inactive {
  	color: blue;
    background: white;
}
</style>

<script type="text/javascript">
$(document).ready(function(){

	// $("#home").click(function(){
	//     var currentAttrValue = $(this).attr('href');
	// 	$(".tablinks").removeClass("active");
	// 	$(this).addClass("active");
	// 	$(".tabs").hide();
	// 	$(currentAttrValue).show();
		
	// });
	// $("#about").click(function(){
	//     var currentAttrValue = $(this).attr('href');
	//     $(".tablinks").removeClass("active");
	// 	$(this).addClass("active");
	// 	$(".tabs").hide();
	// 	$(currentAttrValue).show();
	 
	// });
	// $("#contact").click(function(){
	//     var currentAttrValue = $(this).attr('href');
	//     $(".tablinks").removeClass("active");
	// 	$(this).addClass("active");
	// 	$(".tabs").hide();
	// 	$(currentAttrValue).show();
	 
	// });
	$(".tablinks").click(function(){
	    var currentAttrValue = $(this).attr('href');
	    // alert(currentAttrValue);
		$(".tablinks").removeClass("active");
		$(this).addClass("active");
		$(".tabs").hide();
		$(currentAttrValue).show();
		
	});

});
	
</script>		
</head>

<body>
<div id="tab" class="tab">
	<ul class="tab-links">
		<li><a href="#homecontent" id="home" class="tablinks">Home</a></li>
		<li><a href="#aboutcontent" id="about" class="tablinks">About Us</a></li>
		<li><a href="#contactcontent" id="contact" class="tablinks">Contact Us</a></li>
	</ul>
</div>	

	<div id="tabcontent" class="tabcontent">
		<div id="homecontent" class="tabs" style="display:none;">
			<p>This is home page</p>
			<p>This is home This is home This is home This is home This is homeThis is homeThis is Home This is home This is home</p>
		</div>
		<div id="aboutcontent" class="tabs" style="display:none;">
			<p>This is about page</p>
			<p>This is about page This is about page This is about page This is about page This is about page This is about page</p>
		</div>
		<div id="contactcontent" class="tabs" style="display:none;">
			<p>This is contact page</p>
			<p>This is contact page This is contact page This is contact page This is contact page This is contact page This is contact page</p>
		</div>
	</div>	

</body>
</html>


