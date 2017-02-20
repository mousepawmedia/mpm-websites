<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>SIMPLEXpress — MousePaw Games</title>
	<meta name="SIMPLEXpress" content="Regular expressions simplified." />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link type="text/css" rel=stylesheet href="/style.css">
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
						<p class="txtReg">
							Regular expressions are an incredibly
							powerful tool, but let's face it: they're
							not the easiest to write or read, and
							sometimes they're <i>too</i> powerful for what
							we need.
						</p>
						<p class="txtHead2">Simple.</p>
						<p class="txtReg">
							SIMPLEXpress uses a visible and predictable
							syntax to make writing expressions easier.
							Nearly everything is literal, except within
							a "unit". Units always begin with a <b>'^'</b>,
							and end with an <b>'/'</b>. Only two symbols
							are always reserved: '^' and '~'.
						</p>
						<p class="txtReg">

						</p>
						<p class="txtReg">
							Not convinced? Decide for yourself which is
							easier to remember. We want to match "GREETING,
							NAME. How are you?", where NAME is any English name,
							GREETING is one of four options, and where
							we end the first sentences with either a
							period or an exclaimation point. Sounds
							tricky, right?
						</p>
						<p class="txtReg">
							Regular expression: <mark>/(Hello|Hi)(there )?, [A-Z][a-z]+[.!] How are you\?/</mark>
						</p>
						<p class="txtReg">
							SIMPLEXpress: <mark><font color="purple">^<font color="blue">[(<font color="black">Hello</font>)(<font color="black">Hi</font>)]</font>/</font><font color="purple">^<font color="blue">(<font color="black">there </font>)?</font>/</font>, <font color="purple">^<font color="blue"><font color="green">lu</font></font>/</font><font color="purple">^<font color="blue"><font color="green">ll</font>+</font>/</font><font color="purple">^<font color="blue">[<font color="black">.!</font>]</font>/</font> How are you?</mark>
						</p>
						<p class="txtHead2">Expanded.</p>
						<p class="txtReg">
							In regular expressions, you have to write
							your own complicated test cases for
							character sets, and Unicode support is
							only available through third-party
							libraries.
						</p>
						<p class="txtReg">
							On the other hand, SIMPLEXpress
							has dozens of character classes,
							called "specifiers". Most also have
							sub-classes for more fine-grained matching.
							All of these specifiers automatically kick
							in within a unit. For example, you could use
							<b>'m'</b> to match all common math symbols,
							<b>'lu'</b> to match all uppercase letters,
							and <b>'aU'</b> to match any alphanumeric
							character that <i>isn't</i> uppercase.
							(Yup, you guessed it - any character class
							or subclass can be inverted by capitalizing
							its letter.)
						</p>
						<p class="txtReg">
							You can even match a range of Unicode
							characters with the specifier <b>'u123-456'</b>!
						</p>
						<p class="txtHead2">Express.</p>
						<p class="txtReg">
							SIMPLEXpress was designed specifically for
							lexing and parsing, a task that regular
							expressions are infamously ill-suited for.
							Because of this goal, SIMPLEXpress is fast
							and efficient.
						</p>
						<p class="txtReg">
							That second reserved symbol, <b>'~'</b>,
							is used to "snag" units and arbitrary
							literal segments, which can then be
							returned on demand. This, paired with
							efficiency, makes SIMPLEXpress
							ideal for language parsing.
						</p>
						<hr/>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Why are you building SIMPLEXpress?
							</b></p>
							<div class="hiddenDiv"><p class="txtReg">
								SIMPLEXpress was created to serve to
								aid in writing the language parser
								for
								<a href="/libraries/ratscript" target=_blank>
									Ratscript,
								</a>
								as well as to aid in controlling
								content loading in
								<a href="/libraries/trailcrest" target=_blank>
									Trailcrest.
								</a>
							</p></div>
						</div>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Can I help with building SIMPLEXpress?
							</b></p>
							<div class="hiddenDiv"><p class="txtReg">
								Absolutely! You can find out how you
								can get involved in the project on our
								<a href="/participate/opensource">
									Open Source information page.
								</a>
							</p></div>
						</div>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								What's the license?
							</b></p>
							<div class="hiddenDiv"><p class="txtReg">
								SIMPLEXpress is licensed under
								<a href="http://www.opensource.org/licenses/mit" target=_blank>
									The MIT License</a>,
								so it is completely open-source,
								and free for any project, commercial
								or otherwise.
							</p></div>
						</div>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Where can I download SIMPLEXpress?
							</b></p>
							<div class="hiddenDiv"><p class="txtReg">
								SIMPLEXpress is in active development.
								You can check out the code on the
								<a href="https://github.com/mousepawmedia/simplexpress" target=_blank>
									GitHub mirror,
								</a> and subscribe to
								<a href="http://ratbox:81/out/enews/pawnews" target=_blank>
									Pawnews
								</a> to be notified via email as soon
								as SIMPLEXpress is released.
							</p></div>
						</div>

						<hr/>
						<p class="txtFooter">*Features and details subject to change.</p>
					</td>
					<td class="colNarrow">
						<img class="imgFull" src="/img/project_logos/simplexpress_weblogo.png" alt="SIMPLEXpress"/>
						<p class="txtHead2">Quick Facts</p>
						<ul>
							<li>Lightweight alternative to regex.</li>
							<li>Easy-to-remember syntax.</li>
							<li>Full Unicode support.</li>
							<li>Free and Open Source.</li>
						</ul>
						<hr/>
						<a href="https://github.com/mousepawmedia/simplexpress" target=_blank>
							<img class="imgIcon" src="/img/social_logos/github_icon.png" alt="GitHub"/>
							<p class="txtHead2">Find SIMPLEXpress on GitHub</p>
						</a>
						<hr/>
						<p class="txtHead2">You May Also Like...</p>
						<a href="/libraries/pawlib">
							<img class="imgIconSuggest" src="/img/project_logos/pawlib_icon.png" alt="PawLIB"/>
							<p class="txtHead2">PawLIB</p>
						</a>
						<a href="/libraries/Ratscript">
							<img class="imgIconSuggest" src="/img/project_logos/ratscript_icon.png" alt="Ratscript"/>
							<p class="txtHead2">Ratscript</p>
						</a>
						<hr/>
					</td>
				</tr>
			</table>
			<hr/>
		</div>
		<?php include('footer.php'); ?>
	</div>
</body>
</html>
