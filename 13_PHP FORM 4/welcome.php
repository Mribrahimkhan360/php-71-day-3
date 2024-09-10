<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<table>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Paasword</th>
  </tr>
  <tr>
    <td>1</td>
    <td><?php echo " ". $_REQUEST['username'] ;?></td>
    <td><?php echo $_REQUEST['password'] ;?></td>
  </tr>
</table>
</body>
</html>