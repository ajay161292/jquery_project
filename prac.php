#HTML Script Tags<br/>
<script type="php">
	echo"ajskdhgajksgdkjg";
</script>
<br/><br/>
#Short open Tags<br/>
<?
echo "asdasdasd";
?>
<br/><br/>
#ASP Style Tags<br/>
<%
echo 'aslkjdhaskjh';
%>
<br/><br/>

# Default Syntax<br/>
<?php  
echo "Default Syntax";  
?>  
<br/><br/>
#PHP Case sensitivity<br/>
<?php  
echo("We are learning PHP case sensitivity <br />");   
ECHO("We are learning PHP case sensitivity <br />");  
EcHo("We are learning PHP case sensitivity <br />");  
?>  

<?php  
function student_info($student_name, $class, $roll_no)  
{  
echo "The Name of student is : $student_name <br />";  
echo "His Class is : $class and Roll No. is $roll_no";   
}  
student_info("David Rayy", "V", 12)  
?>   
<br/><br/>
#Single line comment<br/>
<?php  
echo "How to make single line comment.";  
# This is a single line comment.  
//This is another way of single line comment.  
?>  
<br/><br/>

#PHP variables : Assigning by Reference <br/><br/>
<?php   
$foo='bob';  
$bar=&$foo;  
$bar="my $bar";  
echo $bar;  
echo '<br />';  
echo $foo;  
?>  

<br/>
#PHP variable variables<br/><br/>
<?php  
$v='var1';  
echo $v; // prints var1  
$$v = 'var2';   
echo $$v; // prints var2  
echo $var1; // prints var2  
?>  

#PHP Variables Scope<br/><br/>

#The global keyword<br/><br/>
To declare a variable to use as global inside a function "global" keyword used
#The static keyword<br/>
Normally when a function terminates, all of its variables loose its values. <br/>Sometimes we want  to  hold these values for the further job.<br/>Generally, those variables which hold the values are called static variables inside a function.<br/><br/>

#>Compile-time constants<br/>
__CLASS__<br/>	_DIR__ (as of PHP 5.3)<br/>	_FILE_<br/>	__LINE__<br/>	__FUNCTION__<br/>
__METHOD__<br/>	__NAMESPACE__ (as of PHP 5.3)<br/><br/>

#Language constructs<br/>
die()<br/>	echo()---not a function<br/>	empty()<br/>	exit()<br/>	eval()<br/>
include()<br/>	include_once()<br/>	isset()<br/>	list()<br/>	require()<br/>
require_once()<br/>	return()<br/>	print()<br/>	unset()

<br/><br/>
#Variable inside echo statement<br/>
<?php  
// Variables inside an echo statement.  
$abc='We are learning PHP';  
$xyz='w3resource.com';  
echo "$abc at $xyz <br />";  
// Simple variable display  
echo $abc;  
echo "<br />"; // creating a new line  
echo $xyz;  
echo "<br />"; // creating a new line  
// Displaying arrays  
$fruits=array('fruit1'=>'Apple','fruit2'=>'Banana');  
echo "Fruits are : {$fruits['fruit1']} and   
{$fruits['fruit2']}" ;  
?> 

<br/><br/>
#PHP $GLOBALS (super global) variable<br/><br/>
$GLOBAL is a php super global variable which can be used instead of 'global' keyword to access variables from global scope<br/>
$_SERVER----$_SERVER is an array which holds information of headers, paths, script locations.<br/>
$_REQUEST,<br/> $_POST,<br/> $_GET<br/>
$_FILES,<br/> $_ENV----$_ENV is used to return the environment variables from the web server.<br/> $_COOKIE---Cookies are small text files loaded from a server to a client computer<br/> $_SESSION---Sessions are wonderful ways to pass variables. <bt/>All you need to do is start a session by session_start();<br/>Then all the variables you store within a $_SESSION, you can access it from anywhere on the server. 

<br/>
<?php
// echo"<pre>";print_r($_SERVER);echo"</pre>";
?>
<br/>
<?php  
print_r($_ENV);
?>  
<br/>
<?php  
// setrawcookie('ajay'); 
// print_r($_COOKIE);
?>  
<br/>
<?php  
// print_r($_SESSION);
?>  

<br/>
#Constants<br/>
Constants are defined by using the define() function
<br/>
#Object<br/>
The fundamental idea behind an object-oriented language is to enclose a bundle of variables and functions into a single unit and keep both variables and functions safe from outside interference and misuse. Such a unit is called "object"<br/> 
#encapsulation<br/>
The mechanism that binds together data and functions are called encapsulation.<br/>
#class<br/>
a class is a construct or prototype from which objects are created.It contains member variables(properties) & member fuctions(methods) <br/>
#instance<br/>
An instance is an object that has been created from an existing class.<br/>
#instantiating the object<br/>
Creating an object from an existing class is called instantiating the object.<br/>
<br/>Classes should be defined prior to instantiation.<br/>
# Class Constants<br/>
->"const" is used to define constant in class.Constant names are not preceded by a dollar sign ($)<br/>
#inheritance <br/>
the subclass inherits all of the public and protected methods from the parent class.<br/>
#Constructor methods<br/>
Constructors allow to initializing object properties ( i.e. the values of properties) when an object is created.<br/>
Classes which have a constructor method execute automatically when an object is created.<br/>
The 'construct' method starts with two underscores (__).<br/>
The constructor is not required if you don't want to pass any property values or perform any actions when the object is created.<br/>
#Destructors methods<br/>
The destructor is the counterpart of constructor.<br/>
A destructor function is called when the object is destroyed<br/>
A destructor function cleans up any resources allocated to an object after the object is destroyed.<br/>
A destructor function is commonly called in two ways: When a script ends or manually delete an object with the unset() function<br/>
#spl_autoload_register()<br/>
#Inheritance<br/>
"extends" is keyword used<br/>
Superclass is the parent class.<br/>
A subclass can add properties and methods.<br/>
Inheritance allows reusing code.<br/>
#Interfaces<br/>
Provides methods to implement.<br/>
classes may implement more than one interface using "implements" keyword.<br/>


#Magic methods<br/>
__construct(),<br/> __destruct(),<br/> __call(),<br/> __callStatic(),<br/> __get(),<br/> __set(),<br/> __isset(),<br/> __unset(),<br/> __sleep(),<br/> __wakeup(),<br/> __toString(),<br/> __invoke(),<br/> __set_state() and<br/> __clone()<br/>

#Object Cloning<br/>
Cloning is used to create a copy of an object.<br/>
An object copy is created by using the "clone" keyword.<br/>
use "__clone" to copy an object.<br/>




#################### points###################<br/>
<1>"nowdocs" ( as of PHP 5.3.0) can be used in any static data context, including property declarations.<br/>
<2>Scope Resolution Operator (::)<br/>
The double colon (::), is a token which allows access to static, constant, and overridden properties or methods of a class.<br/>
<3>





<br/>
<?php
function is_Power_of_two($n)
{
   if(($n & ($n - 1)) == 0)
    {
		return "$n is power of 2";
    }
   else
    {
		return "$n is notes_body(server, mailbox, msg_number)t power of 2";
    }
}
print_r(is_Power_of_two(4)."\n");
print_r(is_Power_of_two(36)."\n");
print_r(is_Power_of_two(16)."\n");
?>


