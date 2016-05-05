<?php 
//load the configuration file and the templated elements of the page
require('/var/www/providencepixelworks.com/inc/config.php');
define('TITLE', 'Web Hosting with Providence Pixelworks');//what is the name of the page?
define('BODY','hosting');
head();
echo '<h1>'.TITLE.'</h1>';
?>
<p>A web host is the computer that serves up web pages upon request and includes the bandwidth to do it. It doesn't take an entire computer to host a website, so a lot of cheap hosts are saving costs by running thousands of sites on the same server. This would be fine except for two things:</p>
<ol>
	<li>If one of the sites on a given server gets a lot of traffic to the point the the server is taxed, all websites on that server will be affected</li>
	<li>In practice, shared hosting is more vulnerable to back end attacks from sister sites. This is a little complicated, but shared hosting is a little like a shared office space. If someone leaves the door open, everyone's valuables are at risk.</li>
</ol>
<h2>Web Hosting Should be Evaluated in Two Dimensions</h2>
<h3>Speed</h3>
<p>Your website is going to be viewed by people and indexed by search engines such as Google. Neither will tolerate a slow website. My goal is to have load times under 1 second and I am continually tuning the server and the sites that I host to meet that goal.</p>
<h3>Security</h3>
<p>After <?php echo date('Y') - 1998;?> years of hosting websites, I have been hacked several times. It sucks. Recovering from a hack requires significant expertise. Learning from the experience is imperative.</p>
<p>Web security experts report that the majority of hacking is from automated attacks. This means that there are computers all over the world that are programmed to continually attempt common exploits on every website in the world. These hacks are like robots that are programmed to try opening every car door in a parking lot and just steal the change from the ashtray if it exists. Their hack strategy is simple, but it works frequently.</p>
<p>Some hosts leave the security of your website up to you. These DIY hosts are cheap up front, but they leave your site insecure and when you get hacked, they give you an invoice for fixing it.</p>
<p>This business model is seriously deficient and is not congruent to the needs of a small business owner. My hosting is secure by design so that a hack is less likely. In the event that a hack occurs, I will fix it at no extra cost to the client and I will analyze the exploit to see how I can increase the security of my system. </p>

<h2>So...you have a web server in your basement?</h2>
<p>No. I am not actually running the data center. I have a contract with a premium web host who provides me with an expensive and fast dedicated server on which to host my sites. I obsess about the performance of that server and find that it is at least 30% faster than any other host that I have tried. Since I am personally managing the server, I can review system performance and tune the system to the needs of my client websites.</p>
<p>Hosting with me is not "DIY Hosting". I run updates to websites on an ongoing basis to eliminate bugs and improve functionality. I am available to make site edits and regularly consult about emerging needs with my clients. This level of support is considered "Out of Scope" at all cheap web hosts.</p>

<h2>Email Hosting</h2>
<p>If my clients request email addresses at their domain name, I offer configuration and support of two services. Microsoft Live Mail and Google Apps. Each cost approximately $50 per address, per year.</p>

<h2>Domain Registration</h2>
<p>The Domain Name is frequently associated with hosting but they are actually separate. Clients are free to lookup and register domain names at any provider. If you would like to have me manage your domain registration, I can do that and will renew it for you annually. I provide this service because it simplifies things for small businesses and prevents domain registration lapses and lost passwords.</p>
<p>If the client elects to terminate hosting services with Providence Pixelworks, I will participate in the client's domain transfer by releasing the domain and supplying the transfer code.</p>

<?=foot()?>