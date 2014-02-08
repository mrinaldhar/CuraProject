<!doctype html>
<html>
<head>
<title>Events</title>
<script src="jquerymin.js"></script>
<script src="jquery.onepage-scroll.js"></script>
<link href="onepage-scroll.css" type="spreadsheet" />
</head>
<body>
<div class="main">
<section class="page1">
SECTION 1
</section>
<section class="page2">
SECTION 1
</section>
<section class="page3">
SECTION 1
</section>
<section class="page4">
SECTION 1
</section>

</body>
<script>
$(document).ready(function(){
	$(".main").onepage_scroll({
	sectionContainer: "section"
	});

});
</script>