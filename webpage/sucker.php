<?php 
   $issetAll= (empty($_REQUEST["credit_Card"]))or empty($_REQUEST["type"]) or empty($_REQUEST["name"] or empty($_REQUEST["section"]));
   ?>
  
   <html xmlns="http://www.w3.org/1999/xhtml">
   <head>
   	<title>BUY Your Wau to a better education</title>
   	<link rel="stylesheet" type="text/css" href="buyagrade.css" >
   </head>
   <body>
   	<?php
   	if(!$issetAll)
   	{
   		?>
   		<h1>Thanks,sucker!</h1>
   		<p>Your information has been recorded</p>
   		<dl>
   			<dt>name</dt>
   			<dd><?=$_REQUEST["name"]?></dd>
   			<dt>Section</dt>
   			<dd><?=$_REQUEST[section]?></dd>
   			<dd><?=$_REQUEST[credit_Card]."(".($_REQUEST["type"]=="Visa"?"mastercard":"visa").")"?></dd>
   			<?php 
   			$file='sucker.txt';
   			$new_content = $_REQUEST["name"].";".$_REQUEST["section"].";".$_REQUEST["credit_card"].";".$_REQUEST["type"]."\n";
					file_put_contents($file, $new_content, FILE_APPEND);
					?>

   		</dl>
   		<p>Here are all the suckers that have submitted here:</p>
			<pre>
				<?php
					echo file_get_contents($file);
				?>
   	}
   
   </body>
   </html>