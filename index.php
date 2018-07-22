<!--
MIT License

Copyright (c) 2018 BingHomepage

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->
<html>
<head>
	<title>Bing Homepage</title>
	<meta charset="utf-8">
	<?php 
		$themecode = "#" . substr(uniqid(rand()), -6);
		echo '<meta name="theme-color" content="'. $themecode . '" />';
		echo '<!-- http://git.muzzammil.xyz/randomTheme/ -->';
		$lang = $_GET["lang"];
	?>
	<link rel="stylesheet" type="text/css" href="main.php">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href=<?php echo "//cdn.muzzammil.xyz/OctoCSS/octo.css?" . rand(); ?>>
</head>
<body>
	<a href="http://github.com/BingHomepage/BingHomepageAPI" target="_blank"><github class="octo-right"><img src="//cdn.muzzammil.xyz/OctoCSS/github.svg"></github></a>
	<div id="black"></div>
	<div class="main">
		<center>
			<h1 id="title">Bing Homepage API</h1>
			<?php if(!isset($lang)) { ?>
			<h2>Select your language to get started:</h2>
			<br><br><br>	
			<a class="btn" href="?lang=php">php</a>
			<a class="btn" href="https://binghomepage.github.io/BingHomepage.CSharp" target="_blank">C#</a>
			<a class="btn" href="https://binghomepage.github.io/BingHomepage.Go" target="_blank">Go</a>
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
			<a class="btn" href="https://binghomepage.github.io/BingHomepage.CSharp" target="_blank">C#</a>
			<a class="btn" href="https://binghomepage.github.io/BingHomepage.Go" target="_blank">Go</a>
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
