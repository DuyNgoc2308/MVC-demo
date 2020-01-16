<?php
require "../model/user.php";
session_start();
$user = null;
if (isset($_SESSION["isLogin"])) {
	if ($_SESSION["isLogin"] == true) {
		$user = new User();
		$user->fullname = $_SESSION["fullname"];
		$user->role = $_SESSION["role"];
	}
}
?>
<body>
	<?php
		if ($user == null) {
	?>
		<button>Login</button>
	<?php
		}else{
	?>
		<h1>Hello <?php echo $user->fullname;?></h1>
	<?php
		}
	?>
</body>