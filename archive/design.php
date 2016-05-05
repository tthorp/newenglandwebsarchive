<?php 
//load the configuration file and the templated elements of the page
require('/var/www/providencepixelworks.com/inc/config.php');
define('TITLE', 'Web Design');//what is the name of the page?
define('BODY','home');
head();
echo '<h1>'.TITLE.'</h1>';
?>
<p>If you need a new or revamped website, web design is the solution for whatever your goals are. My assumptions are that my clients want a website that is fast, secure, user friendly (from a variety of devices) and search engine friendly. Beyond that, goals are established via consultation with my clients. </p>
<p>As a demonstration of the variety of goals that I see, consider this small list of examples</p>
<ul>
	<li>To sell products to strangers</li>
	<li>To serve as a contact and referral platform for word-of-mouth marketing</li>
	<li>To spread the word about a social agenda and to collect donations</li>
	<li>To be found by strangers as an expert in a niche market</li>
	<li>To show my work and gain commissioned jobs</li>
	<li>To show the menu, hours and directions to my restaurant</li>
</ul>
<p>As you can see, there are multivarious primary goals and within each, the design will be different depending on the type of business and its associated imagery. In other words, a florist website may have the same goal as an auto mechanic shop, but the sites will look very different.</p>
<p>A lot of web design companies are just handing out templates and calling their service web design. I don't agree with this practice. Templates are not for designers, they are for amateurs and mass-market service providers, such as Microsoft and GoDaddy.</p>
<h2>Mobile Website Development</h2>
<p>With mobile use on the rise and set to surpass desktop web traffic in the coming years, the importance of design choices is paramount. When you are shopping for a web design, you have several choices to make about how the site will perform on a mobile device. The choices can be pretty complicated but I have narrowed it down to three categories.</p>
<h3>Mobile Compliant</h3>
<p>This is just the bare minimum and indicates that the site works on a mobile device. As an example of how this may work, a site built with flash will not be mobile compliant because flash only works an a small percentage of mobile devices. </p>
<h3>Mobile Ready</h3>
<p>This is a great, economical choice which delivers a site that works well on a mobile device without having designed the site for a small screen size and without utilizing any separate mobile-specific code. Users of mobile ready sites can use the site fine but may have to pinch and zoom some of the content.</p>
<h3>Mobile First</h3>
<p>This is a neat concept and is actually a rework of the design process itself. Mobile first web design involves creating web templates for the mobile user and using a flexible framework to layout the same content plus additional content when viewed on a larger screen. Mobile first websites are responsive to the screen size of the device in use.</p>
<?=foot()?>