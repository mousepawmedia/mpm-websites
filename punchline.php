<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Punchline — MousePaw Games</title>
	<meta name="Anari Graphics Engine" content="SVG parsing is no joke." />
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
					<td class="colNarrow">
						<img class="imgFull" src="/img/project_logos/punchline_weblogo.png" alt="Punchline"/>
						<p class="txtHead2">Quick Facts</p>
						<ul>
							<li>Import SVG files with C++.</li>
							<li>Creates data you can use.</li>
							<li>Not tied to one graphics library.</li>
							<li>Cairo-friendly data.</li>
							<li>Open source under MIT.</li>
						</ul>
						<hr/>
						<a href="https://github.com/mousepawgames/punchline" target=_blank>
							<img class="imgIcon" src="/img/social_logos/github_icon.png" alt="GitHub"/>
							<p class="txtHead2">Find Punchline on GitHub</p>
						</a>
						<hr/>
						<p class="txtHead2">You May Also Like...</p>
						<a href="/libraries/anari">
							<img class="imgIconSuggest" src="/img/project_logos/anari_icon.png" alt="Anari"/>
							<p class="txtHead2">Anari</p>
						</a>
						<a href="/software/lightrift">
							<img class="imgIconSuggest" src="/img/project_logos/lightrift_icon.png" alt="Lightrift"/>
							<p class="txtHead2">Lightrift</p>
						</a>
						<hr/>
						<p class="txtHead3"><a href="http://www.synfig.org" target=_blank>Please also support our friends, the Synfig Studio project.</a></p>
					</td>
					<td class="colWide">
						<p class="txtHead1">Punchline: SVG Parsing is No Joke</p>

						<p class="txtReg">
							Let's face it - anyone who has worked
							with parsing SVG files in C++ will tell you
							that it's no laughing matter. Punchline
							hopes to make it much easier.
						</p>

						<p class="txtHead2">Aren't there other SVG parsers for C++?</p>

						<p class="txtReg">
							Certainly! Unfortunately, many of them
							are designed to work with a specific
							graphics library, but if you're wanting
							to handle the parsed data yourself,
							you're on your own.
						</p>

						<p class="txtReg">
							Punchline works by converting SVGs into
							data that can be interpreted and used
							by <i>your</i> code, <i>your</i> way.
						</p>

						<p class="txtHead2">The Data You Need.</p>

						<p class="txtReg">
							SVG is really just a way of representing
							drawing instructions, and that is the
							idea that we based Punchline's data
							format on as well. Instead of dealing
							with random numbers and unpredictable
							strings, the data you get from Punchline
							is the same data you'd need to recreate
							the graphics. What you do with that data
							is entirely up to you.
						</p>

						<p class="txtHead2">Import Once, Use Again.</p>

						<p class="txtReg">
							The raw data that Punchline generates
							is ultimately in binary form, meaning
							that you can easily store it in memory
							or in file form until you're ready
							to use it.
						</p>

						<hr/>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Why are you building Punchline
							</b></p>
							<div class="hiddenDiv"><p class="txtReg">
								Punchline is the SVG importer for
								<a href="/libraries/anari" target=_blank>
									Anari
								</a> and
								<a href="/software/lightrift" target=_blank>
									Lightrift.</a>
							</p></div>
						</div>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Can I help with building Punchline?
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
								Punchline is licensed under
								<a href="http://www.opensource.org/licenses/mit" target=_blank>
									The MIT License,
								</a> so it is completely open-source,
								and free for any project, commercial
								or otherwise.
							</p></div>
						</div>

						<div class="expander" tabindex=-1>
							<p class="txtReg"><b>
								Where can I download Punchline?
							</b></p>
							<div class="hiddenDiv"><p class="txtReg">
								Punchline is in active development.
								You can check out the code on the
								<a href="https://github.com/mousepawgames/ratscript" target=_blank>
									GitHub mirror,
								</a> and subscribe to
								<a href="http://ratbox:81/out/enews/pawnews" target=_blank>
									Pawnews
								</a> to be notified via email as soon
								as Punchline is released.
							</p></div>
						</div>

						<hr/>

						<p class="txtFooter">*Features and details subject to change.</p>
					</td>
				</tr>
			</table>
			<hr/>
		</div>
		<?php include('footer.php'); ?>
	</div>
</body>
</html>
