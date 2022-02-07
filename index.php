<!DOCTYPE html>
<html>
<head>
	<title>WebApp</title>
	<script type="text/javascript">
		function validateForm() {
		  let operation = document.forms["operation_form"]["operation"].value;
		  if (operation == "") {
		    alert("Operation must be required");
		    return false;
		  }else if(!operation.match(/^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$/)){
		  	alert("Only letters, numbers and spaces are allowed");
		    return false;
		  }
		}
	</script>
</head>
<body>
<form method="post" action="process.php" onsubmit="return validateForm()" name="operation_form">
	<label for="operation">Enter Operation</label>
	<input type="text" name="operation" id="operation" required>
	<button type="submit">SUBMIT</button>
</form>
</body>
</html>
