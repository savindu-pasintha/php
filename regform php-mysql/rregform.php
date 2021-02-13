<!DOCTYPE html>
<html>
<head>
	<title>Registration_form</title>
</head>
<body>

    <div class="container">
    	<div class="header">
    		<h2>REGISTRATION</h2>
    	</div>
<form action="rregform.php" method="post">
	<div>
	<label for="USERNAME">USER NAME</label>
	<input type="text" name="USERNAME" placeholder="NAME....">
    </div>

    <div>
	<label for="EMAIL">EMAIL</label>
	<input type="text" name="EMAIL" placeholder="EMAIL....">
    </div>

    <div>
	<label for="PASSWORD">PASSWORD</label>
	<input type="text" name="PASSWORD" placeholder="PASSWORD....">
    </div>

    <div>
	<label for="PASSWORD">CONFIRM PASSWORD</label>
	<input type="text" name="PASSWORD" placeholder="PASSWORD....">
    </div>

    <button type="submit">sumbmit</button>
	
</form>
    </div>



</body>
</html>