<?php 
//load the configuration file and the templated elements of the page
require('/var/www/providencepixelworks.com/inc/config.php');
define('TITLE', 'About Providence Pixelworks');//what is the name of the page?
define('BODY','about');
head();
echo '<h1>'.TITLE.'</h1>';
?>
<div class="captioned-photo-right">
	<img src="img/tim2.jpg" />
	<p class="caption">Tim</p>
</div>
<p class="proud">Providence Pixelworks is owned and operated by me, Tim Thorp. This page describes my origin as a web developer and a little info on my brand identity.</p>
<p>I went to college to be an elementary school art teacher. Upon graduating, I did not get a job as a teacher and started doing random work that matched my skills. During that time (the mid 1990s), I got pretty good at using a computer and particularly good at Microsoft Office. I wanted to use my aptitude for teaching and got a job doing computer training.  One day, my training manager called me into his office and explained that the instructor who was scheduled to teach the HTML class for the next day had fallen ill and he needed me to teach the class. At that time, I had never done any programming, but with the help of <a href="http://www.webmonkey.com/">webmonkey</a> and <a href="http://geocities.yahoo.com/index.php">geocities</a>, I made my first web page that night and successfully taught the class the next day. That was close to twenty years ago. Over the years, I have become proficient in several systems and languages including Linux, Apache, MySQL, PHP, CSS, Javascript and WordPress - knowing all of these things is called being a "full stack developer".</p>
<p>Since then, I have made around 50 websites. A lot of them are really simple sites and some of them are fairly complex. Along the way, I have been constantly learning about the <strong>web design</strong> industry...learning about <strong>technology</strong>...learning about <strong>customer service</strong>...learning about <strong>organizations</strong> and what they need. Paying attention to each layer is what makes my web services unique.</p>
<h2>About Pixelworks as a Brand</h2>
<div class="captioned-photo-right">
	<img src="img/donkey-kong.png" alt="donkey kong" />
	<p class="caption">Donkey Kong screen capture</p>
</div>
<p>As you may know, pixels are the small squares that make up your computer screens. Sometimes people in my profession have been called "pixel pushers" because we use code to position objects and make web layouts. I grew up in an age when computer gaming was insanely well conceived, but its graphics were highly pixelated, so I see pixels as fun objects that we can play with. </p>
<p>Calling my business "pixelworks" is a shout-out to the "ironworks" foundries of America's industrial era. I chose the name because I am attached to the idea that the web production is not entirely about newness and technology expertise. Sure, the internet is just a few decades old and being a web designer involves learning a lot of technical things, but being really good at making websites takes more than knowing how to do things. I also love to work with fellow technologists and was inspired by the <a href="http://unitedpixelworkers.com/">fake web designers union at United Pixelworks</a></p>
<p>Companies that thrived during America's industrial era knew that valuing hard work, integrity, quality control and cost management is critical to success. I believe that web design and web production is an industrial process and my goal is to synthesize these values in the new medium of the web.</p>
<?=foot()?>