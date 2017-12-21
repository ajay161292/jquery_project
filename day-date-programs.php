<!DOCTYPE html>
<html>
<head>
	<title>Day & Date</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">

</style>

<script type="text/javascript">
$(document).ready(function(){



// ***************************************
//get total days of year
// function days_of_a_year(year) 
// {
   
//   return isLeapYear(year) ? 366 : 365;
// }

// function isLeapYear(year) {
//      return year % 400 === 0 || (year % 100 !== 0 && year % 4 === 0);
// }
// console.log(days_of_a_year(2014));
// console.log(days_of_a_year(2050));
// ***************************************



// ****************************************
// How can I get the total number of days fr a specific month and year
// var year = 2050;
// var month = 1;
// var days = Math.round(((new Date(year, month))-(new Date(year, month-1)))/86400000);
// console.log(days);return false;
// ****************************************
	
// *******************************************
//get sunday & saturday of current month
// var d = new Date();
// var getTot = daysInMonth(d.getMonth(),d.getFullYear());
// console.log(daysInMonth(d.getMonth(),d.getFullYear()))
// var sat = new Array();
// var sun = new Array();

// for(var i=1;i<=getTot;i++){
//     var newDate = new Date(d.getFullYear(),d.getMonth(),i)
   
//     console.log(i+"-"+newDate.getDay());
//     if(newDate.getDay()==0){
//         sat.push(i)
//     }
//     if(newDate.getDay()==6){
//         sun.push(i)
//     }
    
// }
// console.log(sat);
// console.log(sun);
// function daysInMonth(month,year) {
//     return new Date(year, month, 0).getDate();
// }
// **************************************************




//***************************************
//get sundays && saturdays of specific year
// var d = new Date();
// d.setFullYear(2050, 0, 1);

// var getTot = daysInMonth(d.getMonth(),d.getFullYear());
// // console.log(daysInMonth(d.getMonth(),d.getFullYear()));
// var sat = new Array();
// var sun = new Array();

// for(var i=1;i<=getTot;i++){
//     var newDate = new Date(d.getFullYear(),d.getMonth(),i)
   
//     console.log(i+"-"+newDate.getDay());
//     if(newDate.getDay()==0){
//         sat.push(i)
//     }
//     if(newDate.getDay()==6){
//         sun.push(i)
//     }
    
// }
// console.log(sat);
// console.log(sun);
// function daysInMonth(month,year) {
//     return new Date(year, month, 0).getDate();
// }
//****************************************

});
</script>		

</head>

<body>

</body>
</html>

