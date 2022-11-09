<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator</title>
</head>
<body>
    <form name="frm" action="process.php" method="post">
    <label>First number</label>
    <input type="text" name="txtf">
    <label>Second Number</label>
    <input type="text" name="txts">
    <label>Operators</label>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
</select>
<input type="submit" value="calculate">
<input type="reset">
</form>
</body>
</html>