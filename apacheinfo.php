<?php
/**
 * FileName: apacheinfo.php
 *
 * Purpose: A Very useful script to find the list of modules loaded / enabled on apache
 *
 * This would be quite handy for folks who are hosting the websites on shared hosting,
 *
 * when you don't get ssh access to find the loaded modules this becomes quite easy.
 *
 * Version: 1.0
 *
 * ChangeLog:
 * 1. Get Apache Version info.
 * 2. list of apache modules loaded.
 *
 * Todo:
 *
 * I would try and add anything that i find useful as and when i find it.
 *
 */

$ver = apache_get_version();
$modules_arr = apache_get_modules() ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Apacheinfo - inspired by phpinfo()</title>
</head>
<body>
	<h1>Apache info - list of useful apache information for php developers</h1>

	<table border='1'>
		<thead>
			<tr>
				<th colspan='2'>Apache Version</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Version:</td>
				<td><?php echo apache_get_version(); ?></td>
			</tr>
		</tbody>
	</table>
	<br>
	<br>
	<table border='1'>
		<thead>
			<tr>
				<th>List of Modules loaded into apache</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $modules_arr as $k => $v ) { ?>
			<tr>
				<td><?php echo $v;?></td>
			</tr>
			<?php } ?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
</body>
</html>