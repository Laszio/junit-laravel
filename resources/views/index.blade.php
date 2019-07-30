<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		namespace: <input type="text" name="namespace"><br/>
		class: <input type="text" name="className"><br/>
		action: <input type="text" name="action"><br/>
		param: <input type="text" name="param"><br/>
		<button>提交</button>
	</form>
</body>
</html>