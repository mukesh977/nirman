<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<div>
		<p>
			<strong>
				Hello,
			</strong>
			<strong> {{ucfirst($data['name'])}} </strong> has left us some message:
		</p>
		<p>
			<table border="1">
				<tr>
					<td>
						"{{$data['message']}}"
					</td>

				</tr>
			</table>
		</p>

		<small>
			Email: {{ $data['email'] }} <br>
			Phone Number: {{ $data['phone'] }} <br>
		</small>

		Thank You!
	</div>
</body>

</html>