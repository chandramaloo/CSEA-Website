<?php
/* All tiles on the homepage are configured here, be sure to check the tutorials/docs on http://metro-webdesign.info */

/* GROUP 1 */

$tile[] = array("type"=>"simple","group"=>0,"x"=>0,"y"=>0,'width'=>5.5,'height'=>0.7,"background"=>"#509601","url"=>"#",
"title"=>"Welcome","text"=>"This is the official website of Computer Science & Engineering Association");

$tile[] = array("type"=>"scrollText","group"=>0,"x"=>0,"y"=>0.7,"width"=>2.75,"height"=>2,"background"=>"#FF8000","url"=>"#",
"title"=>"Achievements","text"=>array(
"Welcome to the new CSEA Website",
"New CSEA Council Formed",
"Autumn Semester 2014 started",
"Department trek coming soon"
),"scrollSpeed"=>2500);

$tile[] = array("type"=>"scrollText","group"=>0,"x"=>2.75,"y"=>0.7,"width"=>2.75,"height"=>2,"background"=>"#FF8000","url"=>"#",
"title"=>"Updates","text"=>array(
"Welcome to the new CSEA Website",
"New CSEA Council Formed",
"Autumn Semester 2014 started",
"Department trek coming soon"
),"scrollSpeed"=>2500);

/* GROUP 2*/
$tile[] = array("type"=>"slide","group"=>1,"x"=>0,"y"=>0,'width'=>1.833,'height'=>1.35,"background"=>"#FE2E64","url"=>"event1.php?x=1",
	"text"=>"<h3>No click</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.50,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Other direction slide","labelColor"=>"#CC1A46","labelPosition"=>"top",
	);

$tile[] = array("type"=>"slide","group"=>1,"x"=>1.833,"y"=>0,'width'=>1.833,'height'=>1.35,"background"=>"#FE2E64","url"=>"event2.php",
	"text"=>"<h3>No click</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.50,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Other direction slide","labelColor"=>"#CC1A46","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>1,"x"=>3.666,"y"=>0,'width'=>1.833,'height'=>1.35,"background"=>"#FE2E64","url"=>"event3.php",
	"text"=>"<h3>No click</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.50,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Other direction slide","labelColor"=>"#CC1A46","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>1,"x"=>0,"y"=>1.35,'width'=>1.833,'height'=>1.35,"background"=>"#FE2E64","url"=>"event4.php",
	"text"=>"<h3>No click</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.50,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Other direction slide","labelColor"=>"#CC1A46","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>1,"x"=>1.833,"y"=>1.35,'width'=>1.833,'height'=>1.35,"background"=>"#FE2E64","url"=>"event5.php",
	"text"=>"<h3>No click</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.50,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Other direction slide","labelColor"=>"#CC1A46","labelPosition"=>"top"
);

$tile[] = array("type"=>"slide","group"=>1,"x"=>3.666,"y"=>1.35,'width'=>1.833,'height'=>1.35,"background"=>"#FE2E64","url"=>"event6.php",
	"text"=>"<h3>No click</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.50,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Other direction slide","labelColor"=>"#CC1A46","labelPosition"=>"top",
);

/* GROUP 3 */

$tile[] = array("type"=>"scrollText","group"=>2,"x"=>0,"y"=>0,"width"=>5.5,"height"=>2.7,"background"=>"#6950ab","url"=>"#",
	"text"=>array("<img src='img/img1.png'/>","<img src='img/img2.jpg'/>","<img src='img/img3.jpg'/>"),
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,"scrollSpeed"=>2500);

/*  Group 4 */

$tile[] = array("type"=>"simple","group"=>3,"x"=>0,"y"=>0,'width'=>5.5,'height'=>2.7,"background"=>"#509601",
"title"=>"<span style='text-align:center'>Your feedback is valuable to us!</span>","text"=>'<div id="footer"></div><script type = "text/javascript" language = "JavaScript">
      $("#footer").load("pages/form.html");
    </script>','classes'=>'noClick');

/*  GROUP 5 */	
$tile[] = array("type"=>"slide","group"=>4,"x"=>1,"y"=>0,'width'=>1.5,'height'=>2,"background"=>"#FE2E64","url"=>"",
	"text"=>"<h8>Chandra Maloo<br>H7/19<br>M:+919028313958<br>maloochandra@gmail.com</h8>","img"=>"img/1.jpg","imgSize"=>1,
	"slidePercent"=>0.30,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Web secy","labelColor"=>"#CC1A46","labelPosition"=>"top",
	"classes"=>"noClick"
);

$tile[] = array("type"=>"slide","group"=>4,"x"=>3,"y"=>0,'width'=>1.5,'height'=>2,"background"=>"#FE2E64","url"=>"",
	"text"=>"<h8>Chandra Maloo<br>H7/19<br>M:+919028313958<br>maloochandra@gmail.com</h8>","img"=>"img/1.jpg","imgSize"=>1,
	"slidePercent"=>0.30,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Web secy","labelColor"=>"#CC1A46","labelPosition"=>"top",
	"classes"=>"noClick"
);

$tile[] = array("type"=>"slide","group"=>4,"x"=>1,"y"=>3,'width'=>1.5,'height'=>2,"background"=>"#FE2E64","url"=>"",
	"text"=>"<h8>Chandra Maloo<br>H7/19<br>M:+919028313958<br>maloochandra@gmail.com</h8>","img"=>"img/1.jpg","imgSize"=>1,
	"slidePercent"=>0.30,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Web secy","labelColor"=>"#CC1A46","labelPosition"=>"top",
	"classes"=>"noClick"
);

$tile[] = array("type"=>"slide","group"=>4,"x"=>3,"y"=>3,'width'=>1.5,'height'=>2,"background"=>"#FE2E64","url"=>"",
	"text"=>"<h8>Chandra Maloo<br>H7/19<br>M:+919028313958<br>maloochandra@gmail.com</h8>","img"=>"img/1.jpg","imgSize"=>1,
	"slidePercent"=>0.30,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Web secy","labelColor"=>"#CC1A46","labelPosition"=>"top",
	"classes"=>"noClick"
);

?> 