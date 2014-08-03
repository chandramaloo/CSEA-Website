<?php
	


$sidebar["some_info"] = array("pos"=>"left","size"=>2,"full_height"=>false/*<- this sets wether the sidebar should be the full page height or not*/,
	
	"tiles"=>array( /* Open the array of sidebar tiles */
		
		
	array("type"=>"scrollText","group"=>0,"x"=>0.2,"y"=>0.1,'width'=>3.4,'height'=>2.2,"background"=>"#00BFFF",
	"text"=>"<h3>fart</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up" // can be up, down, left or right
	)
	
	), /* Close the array of sidebar tiles */
	
	"load_plugins"=>array("tileflip","tileslide") /* Load plugins from the plugin folder so you can use tileplugins */
);