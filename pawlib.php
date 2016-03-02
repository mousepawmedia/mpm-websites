<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>PawLIB</title>
	<meta name="PawLIB" content="High-performance C++ data structures." />
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
						<p class="txtHead1">PawLIB - Performance meets elegance.</p>
						<p class="txtReg">
							In today's world of computers, less and less thought is
							given to matters of performance and memory management.
							It is assumed that "modern" libraries magically
							handle everything flawlessly in the background, yet in
							many cases, this is not so. Simply put, dynamic allocation
							is used without much thought to its effects on performance.
							(<a href="http://www.indeliblebluepen.com/?p=817" target=_blank>Read more.</a>)
						</p>
						<p class="txtReg">
							Until now, your only options for many common data structures
							in C++ programming were to use a dynamic-allocation-heavy
							solution, or write your own. Now you have a third choice:
							<i>PawLIB</i>!
						</p>


						<p class="txtHead2">Another Approach</p>
						<p class="txtReg">
							<i>PawLIB</i> provides alternatives to most of the common data
							structures found in C++'s standard library. These versions are
							designed to minimize the amount of dynamic allocation that
							occurs in the background, giving you control over when and how
							these allocations take place.
						</p>
						<p class="txtReg">
							Yet, this advantage does NOT require the significant tradeoff that
							one might expect. First, <i>PawLIB</i>'s data structures have a largely
							equivalent API to those found in the C++ standard library. This means
							that you can switch to PawLIB without having to make signficant changes
							to your already working code. Second, <i>PawLIB</i> does not require
							the strict sizing that is demanded by traditional C solutions.
						</p>

						<p class="txtHead2">Full Unicode Support</p>
						<p class="txtReg">
							<i>PawLIB</i> offers PawString, one of the only C++ string classes with full
							Unicode support! Unlike std::string, every function and operator in PawString
							treats every Unicode character as a single unit.
						</p>
						<p class="txtReg">
							Even so, PawString remains fully compatible with chars and char arrays (C-strings),
							as well as std::string. Everything <i>just works</i>, without requiring any
							tricks or hacks from the programmer.
						</p>
						<p class="txtReg">
							Third, PawString is capable of handling non-text inputs, meaning that
							the clunky std::stringstream is a thing of the past!
						</p>

						<hr/>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Why are you building PawLIB?
							</b></p>
							<div class="hiddenDiv"><p class="txtReg">
								We want to make sure our software
								and libraries achieve the maximum
								possible performance, while still
								making our developers' lives easier.
								PawLIB is our base collection of
								libraries and tools for C++ development.
							</p></div>
						</div>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Can I help with building PawLIB?
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
								PawLIB is licensed under
								<a href="http://www.opensource.org/licenses/mit" target=_blank>
									The MIT License,
								</a> so it is completely open-source,
								and free for any project, commercial
								or otherwise.
							</p></div>
						</div>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Where can I download PawLIB?
							</b></p>
							<div class="hiddenDiv"><p class="txtReg">
								PawLIB is in active development.
								You can check out the code on the
								<a href="https://github.com/mousepawgames/pawlib" target=_blank>
									Github mirror,
								</a> and subscribe to
								<a href="http://ratbox:81/out/enews/pawnews" target=_blank>
									Pawnews
								</a> to be notified via email as soon
								as PawLIB is released.
							</p></div>
						</div>

						<hr/>
						<p class="txtFooter">*Features and details subject to change.</p>
					</td>
					<td class="colNarrow">
						<img class="imgFull" src="/img/project_logos/pawlib_weblogo.png"/>
						<p class="txtHead2">Quick Facts</p>
						<ul>
							<li>Minimizes dynamic allocation.</li>
							<li>Flexible and feature-rich.</li>
							<li>Full Unicode support.</li>
							<li>Resource-friendly data structures.</li>
						</ul>
						<hr/>
						<a href="https://github.com/mousepawgames/pawlib" target=_blank>
							<img class="imgIcon" src="/img/social_logos/github_icon.png" alt="Github"/>
							<p class="txtHead2">Find PawLIB on Github</p>
						</a>
						<hr/>
						<p class="txtHead2">You May Also Like...</p>
						<a href="/libraries/simplexpress">
							<img class="imgIconSuggest" src="/img/project_logos/simplexpress_icon.png" alt="SIMPLEXpress"/>
							<p class="txtHead2">SIMPLEXpress</p>
						</a>
						<a href="/libraries/ratscript">
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
