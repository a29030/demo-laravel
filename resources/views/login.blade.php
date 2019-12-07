<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
</head>
<body>
	


	<div class="login">
		<form method = "POST" action="{{Route('login')}}" >
		@csrf
		<table>
			<tr>
				<td>Tai Khoan:</td>
				<td><input type="text" name ="taikhoan" placeholder="nhap tai khoan"></td>
			</tr>
			<tr>
				<td>Mat Khau</td>
				<td><input type="password" name="matkhau" placeholder="nhap mat khau"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login"></td>
				<td></td>
			</tr>
			<tr>
				<td><a href="/demo-laravel/public/dangky">dang ky</a></td>
				<td></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>