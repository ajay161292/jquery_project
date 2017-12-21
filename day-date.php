
<!-- Write a JavaScript program to display the current day and time in the following format.
Sample Output : Today is : Friday.
Current time is : 4 PM : 50 : 22
 -->

<!DOCTYPE html>
<html>
<head>
	<title>Day & Date</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">

</style>

<script type="text/javascript">
$(document).ready(function(){

	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	var hr = today.getHours();
	var min = today.getMinutes();
	var sec = today.getSeconds();


	datetext = today.toTimeString();
	datetext = datetext.split(' ')[0];
	console.log(datetext);
	var timeString = datetext;
	var hourEnd = timeString.indexOf(":");
	var H = +timeString.substr(0, hourEnd);
	var h = H % 12 || 12;
	var ampm = H < 12 ? "AM" : "PM";
	timeString = h + timeString.substr(hourEnd, 3) + ampm;

	var weekday = new Array(7);
		weekday[0] =  "Sunday";
		weekday[1] = "Monday";
		weekday[2] = "Tuesday";
		weekday[3] = "Wednesday";
		weekday[4] = "Thursday";
		weekday[5] = "Friday";
		weekday[6] = "Saturday";

	var n = weekday[today.getDay()];
	// var d = today.toDateString();
	// console.log(datetext);
	document.write("Today is : "+n+"<br>Current Time is :"+hourEnd+" "+ ampm+" :" +min+ ":" +sec );

});



</script>		

</head>

<body>

</body>
</html>
