<!DOCSTYLE html>
<html>
<title>DNS Test</title>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style.css">
<head>

<body>
<div class=c1>
<h3><a href=/>Home</a></h3>
<h2>DNS Test</h2>

<?php
echo "
<form action=index.php method=get>
<input autofocus type=search name=d value=$_GET[d] >
<input type=submit >
</form>
";

if(isset($_GET['d'])){

	$command = "./hostall.sh '$_GET[d]'";

	$output = shell_exec($command);

	echo "<pre>$output</pre>";

}else{
	echo "Type domain or ip address";
}
?>
</div>
</body>
</html>

