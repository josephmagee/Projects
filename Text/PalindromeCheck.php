
<!-- Implements a base Palindrome check via html form. -->

<html>
	<body>
		<form method="post" action="PalindromeCheck.php">
			<input type="text" name="word">
			<input type="submit" value="click" name="submit">
		</form>
	
		<?php
			function palindromeCheck() {
				if (strrev($_POST["word"]) === $_POST["word"]) {
					echo $_POST["word"] . " is a palindrome.";
				}

				else {
					echo $_POST["word"] . " is not a palindrome.";
				}
			}

				if(isset($_POST['submit'])) {
					palindromeCheck();
				}
		?> 
	</body>
</html>