<!--  Write a JavaScript program to find 1st January is being a Sunday between 2014 and 2050. -->


<!DOCTYPE html>
<html>
<head>
	<title>Day & Date</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">

</style>

<script type="text/javascript">
$(document).ready(function(){

// var weekday = new Array(7);
// 		weekday[0] =  "Sunday";
// 		weekday[1] = "Monday";
// 		weekday[2] = "Tuesday";
// 		weekday[3] = "Wednesday";
// 		weekday[4] = "Thursday";
// 		weekday[5] = "Friday";
// 		weekday[6] = "Saturday";
// var months = new Array(7);
// 		months[0] =  "January";
// 		months[1] = "February";
// 		months[2] = "March";
// 		months[3] = "April";
// 		months[4] = "May";
// 		months[5] = "June";
// 		months[6] = "July";
// 		months[7] = "August";
// 		months[8] = "September";
// 		months[9] = "October";
// 		months[10] = "November";
// 		months[11] = "December";

for (var year = 2014; year <= 2050; year++)
    {
    	//From ---> new Date(year, month, day, hours, minutes, seconds, milliseconds)
    var d = new Date(year, 0, 1);
    // console.log(d);return false;
    if ( d.getDay() === 0 )
        console.log("on 1st January there is a Sunday on "+year);
    }

});
</script>		

</head>

<body>

</body>
</html>


