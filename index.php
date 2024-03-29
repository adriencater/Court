<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Court</title>
	<style type="text/css"></style>
	<script src=""></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<!-- BOOTSTRAP-->
	<link href="lib/bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="lib/bootstrap/docs/assets/js/bootstrap-transition.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-alert.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-modal.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-dropdown.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-scrollspy.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-tab.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-tooltip.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-popover.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-button.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-collapse.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-carousel.js"></script>
	<script src="lib/bootstrap/docs/assets/js/bootstrap-typeahead.js"></script>

	<link rel="stylesheet" href="lib/style.css">
</head>
<body>

	<h1>Court</h1>
	<p><em>a sovereign's formal assembly of councillors and officers</em></p>
	<p><strong>Drop a bunch of HTML, CSS, and Javascript files anywhere to get started</strong>
		<br />(or drop them into the zones below to get started *carefully*)</p>

<div class="row">

	<div ID="input" class="span6">
		<div class="filesArea" id="htmlFiles">
			<h2>HTML</h2>
			<div class="dropZone">drop files here..</div>
			<span class="btn btn-success fileinput-button">
				<i class="icon-plus"></i><span>Add files…</span>
				<!-- <input type="file" name="files[]" multiple=""> -->
			</span>
		</div><!-- end .filesArea #htmlFiles -->
		<div class="filesArea" id="cssFiles">
			<h2>CSS</h2>
			<div class="dropZone">drop files here..</div>
			<span class="btn btn-success fileinput-button">
				<i class="icon-plus"></i><span>Add files…</span>
				<!-- <input type="file" name="files[]" multiple=""> -->
			</span>
		</div><!-- end .filesArea #htmlFiles -->
		<div class="filesArea" id="jsFiles">
			<h2>JS</h2>
			<div class="dropZone">drop files here..</div>
			<span class="btn btn-success fileinput-button">
				<i class="icon-plus"></i><span>Add files…</span>
				<!-- <input type="file" name="files[]" multiple=""> -->
			</span>
		</div><!-- end .filesArea #htmlFiles -->
	</div><!-- end #input -->

	<div ID="control" class="span2">
		<i class="icon--arrow-right"></i>
		<button type="submit" class="btn btn-primary start">
			<i class="icon-refresh"></i><span>Refresh</span>
		</button>
	</div><!-- end #control -->

	<div ID="output" class="span4">
		<p><i class="icon-file"></i></p>
		<p><input type="text" class="span3" placeholder="output.pdf"><span class="help-inline">Give your file a name.</span></p>
		<p><button type="submit" class="btn btn-primary start">
			<i class="icon-file"></i><span>Make PDF</span>
		</button></p>
	</div><!-- end #output -->

</div> <!-- end .row-->

</body>
</html>