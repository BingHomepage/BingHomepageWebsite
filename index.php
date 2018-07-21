<?php include("head.php"); ?>
	<div class="main">
		<center>
			<h1 id="title">Bing Homepage API</h1>
			<?php if(!isset($lang)) { ?>
			<h2>Select your language to get started:</h2>
			<br><br><br>	
			<a class="btn" href="?lang=php">php</a>
			<a class="btn" href="https://github.com/BingHomepage/BingHomepage.CSharp" target="_blank">C#</a>
			<a class="btn" href="https://github.com/BingHomepage/BingHomepage.Go" target="_blank">Go</a>
			<a class="btn" href="?lang=api">Raw API</a>
			<br><br><br><br>
			<a class="btn" href="https://github.com/BingHomepage/BingHomepageAPI#binghomepageapi" target="_blank">About</a>
			<?php } else if(isset($lang)) { if($lang == "php"){ ?>
			<h1>Using with php</h1>
			<br>
			<div id="lang">php</div>
			<div class="code">
				<span id="keyword">&lt?php</span><br>
				<tab></tab>
				<span id="var">$cc</span>=<span id="quote">"US"</span>; 
				<span id="comment">//Your contry code</span><br>
				<tab></tab>
				<span id="var">$bing</span>=<span id="func">simplexml_load_file</span>(<span id="quote">"https://cdn.muzzammil.xyz/bing/bing.php?format=xml&cc=</span><span id="var">$cc</span>"</span>);<br>
				<tab></tab>
				<span id="var">$bingHP</span>=<span id="var">$bing</span>-&gt<span id="keyword">url</span>; <span id="comment">//$bingHP now contains the url of image.</span><br>
				<tab></tab>
				<span id="var">$bingCopyright</span>=<span id="var">$bing</span>-&gt<span id="keyword">copyright</span>; <span id="comment">//Don't forget the copyright!</span><br>
				<tab></tab>
				<span id="var">$bingCopyrightLink</span>=<span id="var">$bing</span>-&gt<span id="keyword">copyrightlink</span>;<br>
				<span id="keyword">?&gt</span><br>
			</div>
			<br><br>
			<a class="btn" href="https://github.com/BingHomepage/BingHomepage.CSharp" target="_blank">C#</a>
			<a class="btn" href="https://github.com/BingHomepage/BingHomepage.Go" target="_blank">Go</a>
			<a class="btn" href="?lang=api">Raw API</a>
			<?php } else if($lang == "api") { ?>
			<h1>If you want to add a language, please contribute on our GitHub page.</h1>
			<h1>Raw API link</h1>
			<div id="lang">XML</div>
			<div class="code">
				<span id="quote">https://cdn.muzzammil.xyz/bing/bing.php?format=xml&cc=US</span><br>
				<span id="comment">//Use your Country Code (cc=YourCC)</span>
			</div>
			<br><br>
			<div id="lang">JSON</div>
			<div class="code">
				<span id="quote">https://cdn.muzzammil.xyz/bing/bing.php?format=json&cc=US</span><br>
				<span id="comment">//Use your Country Code (cc=YourCC)</span>
			</div>
			<br><br>
			<br><br>
			<div id="lang">Plain Text</div>
			<div class="code">
				<span id="quote">https://cdn.muzzammil.xyz/bing/bing.php?format=text&cc=US</span><br>
				<span id="comment">//Use your Country Code (cc=YourCC)</span>
			</div>
			<br><br>
			<a class="btn" href="?lang=php">See code for php</a>
			<?php } } ?>
		</center>
	</div>
</body>
</html>
