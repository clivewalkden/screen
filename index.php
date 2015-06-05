<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Screenshot</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
	<form target="shot" action="shot.php" method="post" class="form-horizontal">
		<fieldset>
			<legend>Take a screenshot</legend>
			<div class="form-group">
				<label for="url" class="col-sm-2 control-label">URL for screenshot</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="url" placeholder="Enter URL">
				</div>
			</div>
			<div class="form-group">
				<label for="size" class="col-sm-2 control-label">Screenshot size</label>
				<div class="col-sm-10">
					<select name="size" class="form-control">
						<option value="1024x768">1024x768</option>
						<option value="1920x1080">1920x1080</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
	      			<div class="checkbox">
						<label for="download">
							<input type="checkbox" name="download" value="1">
							Download
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</fieldset>
	</form>
</div>

<iframe src="shot.php" name="shot" id="shot" width="100%" height="1000" frameborder="0"></iframe>

</body>
</html>
