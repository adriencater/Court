<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Court</title>
	<link rel="stylesheet" href="">
	<style type="text/css"></style>
	<script src=""></script>
</head>
<body>

	<h1>Court</h1>
	
	<div ID="input">
		<div class="filesArea" id="htmlFiles">
			<h2>HTML</h2>
			<span class="btn btn-success fileinput-button">
				<i class="icon-plus"></i><span>Add files…</span>
				<input type="file" name="files[]" multiple="">
			</span>
		</div><!-- end .filesArea #htmlFiles -->
		<div class="filesArea" id="cssFiles">
			<h2>CSS</h2>
			<span class="btn btn-success fileinput-button">
				<i class="icon-plus"></i><span>Add files…</span>
				<input type="file" name="files[]" multiple="">
			</span>
		</div><!-- end .filesArea #htmlFiles -->
		<div class="filesArea" id="jsFiles">
			<h2>JS</h2>
			<span class="btn btn-success fileinput-button">
				<i class="icon-plus"></i><span>Add files…</span>
				<input type="file" name="files[]" multiple="">
			</span>
		</div><!-- end .filesArea #htmlFiles -->
	</div><!-- end #input -->

	<div ID="control">
		<button type="submit" class="btn btn-primary start">
			<i class="icon-refresh"></i><span>Refresh</span>
		</button>
	</div><!-- end #control -->

	<div ID="output">
		<i class="icon-file"></i>
		<input type="text" class="span3" placeholder="output.pdf">
		<span class="help-inline">Give your file a name.</span>
		<button type="submit" class="btn btn-primary start">
			<i class="icon-file"></i><span>Make PDF</span>
		</button>
	</div><!-- end #output -->

</body>
</html>