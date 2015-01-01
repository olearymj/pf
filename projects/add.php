<?php  ?>
<html>
	<head>
		<title>Add Project</title>
		<link rel="stylesheet" type='text/css' href='http://local.hannah.com/moi/css/normalise.css'>
		<link rel="stylesheet" type='text/css' href='http://local.hannah.com/moi/css/style.css'>
	</head>

	<body>
		<h2>Add Project</h2>
		<form action="add_project.php" class="add_project">
			<label for="project_title">Project Title
				<input type="text" class="project_title" name='project_title' id='project_title'>
			</label>
			<br>
			<label for="project_description">
				Project Description
				<textarea name="project_description" id="project_description" cols="30" rows="10"></textarea>
			</label>
			<label for="project_date">Project Date
				<input type="text" class="project_date" name='project_date' id='project_date'>
			</label>
			<label for="project_image">Project Image
				<input type="text" class='project_image' name='project_image' id='project_image'>
			</label>
		</form>
	</body>


</html>

<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "moi"; 

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	var_dump('BEEP');
}

GLOBAL $projects;
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$projects->project = $row;
        //echo "id: " . $row["id"]. " - Name: " . $row["project_title"]. " " . $row["project_date"]. "<br>";
    }
} else {
    echo "0 results";
}

foreach($projects as $project){

	var_dump($project['id']);
	echo '<br>';
	var_dump($project['project_title']);
	echo '<br>';
	var_dump($project['project_date']);
	echo '<br>';
	var_dump($project['project_description']);
	echo '<br>';
	var_dump($project['project_content']);
	echo '<br>';
	var_dump($project['project_type']);
	echo '<br>';
	var_dump($project['project_image']);

}

?>