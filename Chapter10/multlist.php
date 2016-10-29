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
		</ul>
			<?php
			
				foreach($REQUEST["fruit"] as $fruit)
				echo "<li> $fruit </li> <br>"
				
			?>
		</center>
		</ul>
    </body>
</html>