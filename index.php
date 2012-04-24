<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Cost Calculator</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references 
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">-->


  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>

<SCRIPT LANGUAGE="JavaScript">
<!--
function checkForZero(field)
{
    if (field.value == 0 || field.value.length == 0) {
        alert ("This field can't be 0!");
        field.focus(); }
    else
        calculatePayment(field.form);
}

function cmdCalc_Click(form)
{
    if (form.T1NumberOfHours.value == 0 || form.T1NumberOfHours.value.length == 0) {
        alert ("The number of hours can't be 0!");
        form.T1NumberOfHours.focus(); }
    else if (form.T1HourlyRate.value == 0 || form.T1HourlyRate.value.length == 0) {
        alert ("The Hourly Rate can't be 0!");
        form.T1HourlyRate.focus(); }
    else
        calculatePayment(form);
}

function calculatePayment(form)
{
	form.T1Total.value = form.T1NumberOfHours.value * form.T1HourlyRate.value;
}

function CommaFormatted(amount) {
	var delimiter = ","; // replace comma if desired
	var a = amount.split('.',2)
	var d = a[1];
	var i = parseInt(a[0]);
	if(isNaN(i)) { return ''; }
	var minus = '';
	if(i < 0) { minus = '-'; }
	i = Math.abs(i);
	var n = new String(i);
	var a = [];
	while(n.length > 3) {
		var nn = n.substr(n.length-3);
		a.unshift(nn);
		n = n.substr(0,n.length-3);
	}
	if(n.length > 0) { a.unshift(n); }
	n = a.join(delimiter);
	if(d.length < 1) { amount = n; }
	else { amount = n + '.' + d; }
	amount = minus + amount;
	return amount;
}

//-->
</SCRIPT>
  
  
  
</head>

<body>

  <div id="container">
    <header>
	<h3>Header (Cost Calculator)</h3>
    </header>
    <div id="main" role="main">
	<h2>Cost Calculator</h2>
	
	<h3>Gelman Project Cost Model</h3>
	
	
	<form name="T1Calculator">
	<table class="costtable">
	<tr>
		<td class="boldcell">Project Planning
		</td>
		<td class="boldcell">Metrics
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Hardware Costs (Equipment, Storag, etc)
		</td>
		<td>TBD
		</td>
		<td> 
		</td>
	</tr>
	<tr>
		<td>Software Costs
		</td>
		<td>TBD
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of "Resources"
		</td>
		<td>23
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Number of Hours
		</td>
		<td><!--8,745-->
			<input type="text" name="T1NumberOfHours" value="8745" size="4" onBlur=checkForZero(this) onChange=checkForZero(this)>
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>"Resource" Cost
		</td>
		<td>$309,550.09
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Hours per Month
		</td>
		<td>1,221			
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of Months in Stage
		</td>
		<td>28
		</td>
		<td>Based on Salary Report
		</td>
	</tr>
	<tr>
		<td>Hourly Rate for "Resources"
		</td>
		<td><!--$35.40-->
			<input type="text" name="T1HourlyRate" value="35.40" size="4" onBlur=checkForZero(this) onChange=checkForZero(this)>
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Cost for Project Planning
		</td>
		<td class="boldcell"><!--$309,550.09-->
			<input type="text" name=T1Total value="309,550.09" size="7">
		</td>
		<td>
		</td>
	</tr>		
	</table>
	
		<INPUT 
			TYPE="BUTTON"
			NAME="cmdCalc" 
			VALUE="Calculate"
			onClick=cmdCalc_Click(form)>	
	</form>
	
	<p>&nbsp;</p>
	
	<table class="costtable">
	<tr>
		<td class="boldcell">Scanning
		</td>
		<td class="boldcell">Metrics
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Hardware Costs (Equipment, Storag, etc)
		</td>
		<td>$369,084.11
		</td>
		<td>Based on Grant Budget
		</td>
	</tr>
	<tr>
		<td>Software Costs
		</td>
		<td>
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of "Resources"
		</td>
		<td>3
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Number of Hours
		</td>
		<td>2,400
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>"Resource" Cost
		</td>
		<td>$39,936.00
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Hours per Month
		</td>
		<td>480.00
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of Months in Stage
		</td>
		<td>17
		</td>
		<td>Based on Salary Report
		</td>
	</tr>
	<tr>
		<td>Hourly Rate for "Resources"
		</td>
		<td>$16.64
		</td>
		<td>
		</td>
	</tr>
	
	<tr>
		<td>Number of Hours Scanning per day
		</td>
		<td>8
		</td>
		<td>Based on Scan Production report
		</td>
	</tr>	
	<tr>
		<td>Pages Scanned per Hour per Operator
		</td>
		<td>592.59
		</td>
		<td>Based on Scan Production report
		</td>
	</tr>
	<tr>
		<td>Average Book Size
		</td>
		<td>400
		</td>
		<td>Based on Scan Production report
		</td>
	</tr>
	<tr>
		<td>Books Scanned per Hour per Operator
		</td>
		<td>1.48
		</td>
		<td>
		</td>
	</tr>	
	<tr>
		<td>Books Scanned per Day
		</td>
		<td>35.56
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Cost per Book scanned
		</td>
		<td>72.00
		</td>
		<td>
		</td>
	</tr>
	
	<tr>
		<td class="boldcell">Total Cost of Stage
		</td>
		<td class="boldcell">$409,020.11
		</td>
		<td>
		</td>
	</tr>		
	</table>	
	
	
    </div>
    <footer>
	<h3>Footer (Cost Calculator)</h3>
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->


  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>