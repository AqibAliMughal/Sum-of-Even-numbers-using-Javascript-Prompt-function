<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prompt - Even numbers</title>
</head>
<body>
<script type="text/javascript" lang="JavaScript">
	document.write("<center>");
	document.write("<h1><u> Sum of given Even numbers </u></h1>");		
	var evenNumber = prompt('Enter an even number');
	var sumOfEvenNumbers = 0;
	while(evenNumber % 2 == 0)
	{
	// Using ParseInt() to convert type String into Integer.
	sumOfEvenNumbers = sumOfEvenNumbers + parseInt(evenNumber);
	evenNumber = prompt('Enter an even number');			
	}
	console.log("The sum of given Even numbers is: " + sumOfEvenNumbers);
	document.write("<h3>The sum of given Even numbers is: " + sumOfEvenNumbers + "</h3>");
	document.write("</center>");
	</script>
</body>
</html>