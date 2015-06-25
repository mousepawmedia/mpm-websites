<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>SIMPLEXpress — MousePaw Games</title>
        <meta name="SIMPLEXpress" content="Regular expressions simplified." />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel=stylesheet href="http://www.mousepawgames.com/style.css">
    </head>
    <body>
		<div class="page">
			<?php include('header.php'); ?>
			<div class="spacer"><p>&nbsp;</p></div>
			<div class="pagemain">
				<table class="tablemain">
					<tr>
						<td class="colWide">
							<p class="txtHead1">SIMPLEXpress: Regular expressions simplified.</p>
							<p class="txtReg">Regular expressions are an incredibly powerful tool, but let's face it: they're not the easiest to write or read, and sometimes they're too powerful for what we need. </p>
							<p class="txtHead2">Simple.</p>
							<p class="txtReg">SIMPLEXpress uses a visible and predictable syntax to make writing expressions easier. By only reserving three characters for special purposes ('\', '^', and ' '), it is easier to remember the syntax, and the space-delimited format makes it easier to read. Not convinced? Decide for yourself which is easier for matching a phone number:</p>
							<p class="txtReg">Regular expression: \(?\d{3}[\)\-]? ?\d{3}-\d{4}</p>
							<p class="txtReg">SIMPLEXpress: ( \? ^D \3 \[ ) - \] ^S \? ^D \3 - ^D \4</p>
							<p class="txtHead2">Expanded.</p>
							<p class="txtReg">In regular expressions, you have to write your own complicated test cases for character sets, and Unicode support is only available through third-party libraries. SIMPLEXpress has full built-in Unicode support via the ICU library, and dozens of pre-programmed character sets, including...</p>
							<ul class="list">
								<li>Latin Extended Uppercase and Lowercase,</li>
								<li>Greek/Coptic Uppercase and Lowercase,</li>
								<li>International Phonetic Alphabet,</li>
								<li>Mathematical operators, and</li>
								<li>more to come!</li>
							</ul>
							<p class="txtHead2">Express.</p>
							<p class="txtReg">SIMPLEXpress was designed specifically for lexing and parsing, a task that regular expressions are infamously ill-suited for. Because of this goal, SIMPLEXpress is fast and efficient.</p>
							<hr/>
							<p class="txtHead2">Can I help with building SIMPLEXpress?</p>
							<p class="txtReg">You can find out how get involved in the project <a href="http://www.mousepawgames.com/getinvolved/opensource">here.</a></p>
							<p class="txtHead2">Is SIMPLEXpress open source? Is it free?</p>
							<p class="txtReg">Yes and yes!! SIMPLEXpress is licensed under LGPL, so you can use it however you like, whether in an open-source or closed-source project. (There are still some important conditions, so read the license.)</p>
							<hr/>
							<p class="txtFooter">*Features and details subject to change.</p>
						</td>
						<td class="colNarrow">
							<img src="http://www.mousepawgames.com/img/simplexpress_weblogo.png" width=300px/>
							<p class="txtHead2">Quick Facts</p>
							<ul>
								<li>Lightweight alternative to regex.</li>
								<li>Easy-to-remember syntax.</li>
								<li>Unicode support via ICU.</li>
								<li>Free and Open Source via LGPL!</li>
							</ul>
							<hr/>
							<a href="https://github.com/mousepawgames/simplexpress" target=_blank>
								<img class="photoCenter" src="http://www.mousepawgames.com/img/github_mark.png" width=100px alt="Github"/>
								<p class="txtHead2">Find SIMPLEXpress on Github</p>
							</a>
						</td>
					</tr>
				</table>
				<hr/>
			</div>
			<?php include('footer.php'); ?>
		</div>
    </body>
</html>
