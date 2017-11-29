<?
	session_start();
	unset($_SESSION['num']);
	unset($_SESSION['email']);
	unset($_SESSION['nickname']);

	echo("
		<script>
		location.href='./index.php';
		</script>
		");
?>