<html>
<head>
<title>Add New Record in MySQL Database</title>
</head>
<body>
<?php
if(isset($_POST['add']))
{
$servername = "localhost";
$username = "root";
$password = "root";
//$dbname = "moi"; 

$conn = new mysqli($servername, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$project_title = $_POST['project_title'];
$project_date = $_POST['project_date'];
$project_description = $_POST['project_description'];
$project_content = $_POST['project_content'];
$project_url = $_POST['project_url'];
$project_image = $_POST['project_image'];
$project_type = $_POST['project_type'];

$sql = "INSERT INTO projects ".
       "(project_title,project_date,project_description,project_content,project_url,project_image,project_type) ".
       "VALUES('$project_title','$project_date','$project_description','$project_content','$project_url','$project_image','$project_type')";

mysql_select_db('moi');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Project Title</td>
<td><input name="project_title" type="text" id="project_title"></td>
</tr>
<tr>
<td width="100">Project Date</td>
<td><input name="project_date" type="text" id="project_date"></td>
</tr>
<tr>
<td width="100">Project Description</td>
<td><textarea name="project_description" type="text" id="project_description"></textarea></td>
</tr>
<tr>
<td width="100">Project Content</td>
<td><textarea name="project_content" type="text" id="project_content"></textarea></td>
</tr>
<tr>
<td width="100">Project URL</td>
<td><textarea name="project_url" type="text" id="project_url"></textarea></td>
</tr>
<tr>
<td width="100">Project Image</td>
<td><textarea name="project_url" type="text" id="project_url"></textarea></td>
</tr>
<tr>
<td width="100">Project Type</td>
<td><textarea name="project_type" type="text" id="project_type"></textarea></td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="add" type="submit" id="add" value="Add Project">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>