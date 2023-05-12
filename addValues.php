<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addValuesconfig.php" method="post">
    <label for="table_name">Table Name:</label>
    <input type="text" name="table_name" id="table_name">

    <label for="column1_name">Column 1 Name:</label>
    <input type="text" name="column1_name" id="column1_name">

    <label for="column1_value">Column 1 Value:</label>
    <input type="text" name="column1_value" id="column1_value">

    <label for="column2_name">Column 2 Name:</label>
    <input type="text" name="column2_name" id="column2_name">

    <label for="column2_value">Column 2 Value:</label>
    <input type="text" name="column2_value" id="column2_value">

    <input type="submit" value="Insert">

    </form>
</body>
</html>