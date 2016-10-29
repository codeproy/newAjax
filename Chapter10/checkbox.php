<html>
    <head>
        <title>
           The response page is 
        </title>
    </head>

    <body>
		<center>
        <h1>
            Here you go with the name
        </h1>
			Your selected
        <?php
			
			if (isset($_REQUEST["check1"]))
				echo $_REQUEST["check1"];
			if (isset($_REQUEST["check2"]))
				echo $_REQUEST["check2"];
		?>
		</center>
    </body>
</html>