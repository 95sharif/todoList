<!DOCTYPE>
<html>
<head>
	<title>To-Do List</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
		
<body>	
	<h1>My To-Do List</h1>
	<h2><u> View List </u></h2>
			
<?php
				
	require 'database.php';
	$db = new Db();
	$query = "SELECT * FROM todo ORDER BY id asc";
	$results = $db->mysql->query($query);
				
	if($results->num_rows) {
		while($row = $results->fetch_object()) {
			$id = $row->id;
			$title = $row->title;
			$description = $row->description;
							
				echo '<div class="tasks">';
				
				$data = <<<EOD
<span><b>Title:</b> $title <b>Description:</b> $description</span>
<input type="hidden" name="id" id="id" value="$id" />

<a class="deleteEntryAnchor" href="delete.php?id=$id">Delete</a>

EOD;
						echo $data;
						echo '</div>';
					} // end while
				}
				else {
					echo "<p>There are zero items. Add one now! </p>";
				}	
				?>
			
			
			
				
				<h2><u>Add New Entry<u></h2>
				<form action="add.php" method="post">
					<p>
						<label for="title"> Title</label>
						<input type="text" name="title" id="title" class="input"/>
					</p>
				
					<p>
						<label for="description"> Description</label>
						<textarea name="description" id="description" rows="2" cols="20"></textarea>
					</p>	
					
					<p>
						<input type="submit" name="addEntry" id="addEntry" value="Add New Task" />
					</p>
				</form>
			
			
		
	


	</body>
</html>
