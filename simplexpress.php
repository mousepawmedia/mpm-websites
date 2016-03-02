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
							By only reserving three characters for
							special purposes ('\', '^', and ' '), it is
							easier to remember the syntax, and the
							space-delimited format makes it easier to
							read. Not convinced? Decide for yourself
							which is easier for matching a phone
							number:
						</p>
						<p class="txtReg">
							Regular expression: \(?\d{3}[\)\-]? ?\d{3}-\d{4}
						</p>
						<p class="txtReg">
							SIMPLEXpress: ( \? ^D \3 \[ ) - \] ^S \? ^D \3 - ^D \4
						</p>
						<p class="txtHead2">Expanded.</p>
						<p class="txtReg">
							In regular expressions, you have to write
							your own complicated test cases for
							character sets, and Unicode support is
							only available through third-party
							libraries. SIMPLEXpress has full built-in
							Unicode support via PawLIB library, and
							dozens of pre-programmed character sets,
							including...
						</p>
						<ul class="list">
							<li>Latin Extended Uppercase and Lowercase,</li>
							<li>Greek/Coptic Uppercase and Lowercase,</li>
							<li>International Phonetic Alphabet,</li>
							<li>Mathematical operators, and</li>
							<li>More to come!</li>
						</ul>
						<p class="txtHead2">Express.</p>
						<p class="txtReg">
							SIMPLEXpress was designed specifically for
							lexing and parsing, a task that regular
							expressions are infamously ill-suited for.
							Because of this goal, SIMPLEXpress is fast
							and efficient.
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
								<a href="https://github.com/mousepawgames/simplexpress" target=_blank>
									Github mirror,
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
						<a href="https://github.com/mousepawgames/simplexpress" target=_blank>
							<img class="imgIcon" src="/img/social_logos/github_icon.png" alt="Github"/>
							<p class="txtHead2">Find SIMPLEXpress on Github</p>
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
