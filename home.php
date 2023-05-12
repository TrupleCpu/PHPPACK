<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="homeConfig.php" method="post">
    <form action="create_table.php" method="post">
		<label for="table_name">Table Name:</label>
		<input type="text" id="table_name" name="table_name"><br><br>

		<label for="column_name_1">Column Name:</label>
		<input type="text" id="column_name_1" name="column_name_1">

		<label for="column_type_1">Column Type:</label>
		<input type="text" id="column_type_1" name="column_type_1">

		<label for="column_length_1">Column Length:</label>
		<input type="text" id="column_length_1" name="column_length_1"><br><br>

		<label for="column_name_2">Column Name:</label>
		<input type="text" id="column_name_2" name="column_name_2">

		<label for="column_type_2">Column Type:</label>
		<input type="text" id="column_type_2" name="column_type_2">

		<label for="column_length_2">Column Length:</label>
		<input type="text" id="column_length_2" name="column_length_2"><br><br>

		<input type="submit" value="Create Table">
    </form>
</body>
</html>