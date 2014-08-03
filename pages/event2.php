<?php
$subNav = array(
	"Event1 ; event1.php ; #509601;",
	"Event2 ; event2.php ; #509601;",
	"Event3 ; event3.php ; #509601;",
	"Event4 ; event4.php ; #509601;",
	"Event5 ; event5.php ; #509601;",
	"Event6 ; event6.php ; #509601;",
);


set_include_path("../");
include_once("inc/essentials.php");

/*Include a sidebar */
include_once("inc/sidebar2.php");
showSidebar("some_info");
?>

<script>
$mainNav.set("Events")
</script>


<h1 class="margin-t-0">Sidebars</h1>
<hr>
<p>This page will have a sidebar on the left.
<p>Did you know we can have a sidebar in a sidepanel? Click <a href="panels/example.php">here</a> to see the example.
<p>By the way, you can link to any metro page using the method like this (check source): <a <?php metroLink("welcome.php")?>>Link to welcome page</a>.
<p>If you prefer to open it in a new tab, you can do that this way: <a <?php metroLink("newtab:welcome.php")?>>Link to new tab</a>.
<p>Easy, isn't it?