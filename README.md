# Bettercare

This is currently a testing site for Bettercare content-development workflows only. Do not use this information for medical purposes. Please visit http://bettercare.co.za for up-to-date and complete versions of our books.

## Converting a Bettercare chapter to Markdown

### Before you start

* Have the [Markdown syntax reference](daringfireball.net/projects/markdown/syntax) to hand.
* For more advanced syntax (including for tables), see the [kramdown syntax](http://kramdown.gettalong.org/syntax.html).
* Use a good text editor like Notepad++.
* Set your default character encoding for your documents to 'UTF without BOM'. (We use GitHub Pages with Jekyll to create our HTML, and Jekyll can break if we don't.)
* Refer to earlier chapters already done to see how things were handled there.
* To check how small bits of markdown will convert to HTML, use the [online pandoc tryout](http://johnmacfarlane.net/pandoc/try). If you know how to set up a local Jekyll site or quick pandoc conversion to HTML, do that to see what your Markdown does in HTML as you work.

### Process

1. Open the InDesign file and copy all the text
1. Paste the text with formatting into your text editor.
1. Search and replace (S&R) all line breaks with double line breaks:
	* Tick 'Regular expression' (because you're using the regex \n to mean 'line break', not actually searching for the characters 'slash' and 'lowercase en').
	* Find \n
	* Replace with \n\n
1. Format the Notes as markdown 'definitions'. (They'll become dl/dt/dd HTML elements after conversion.) To do this, tick 'Match case' and S&R double line-break–note–space, and replace with double-line-break–Note–line-break–colon–tab. As with all S&Rs, it's best not to use 'Replace all' unless you're 100 per cent sure your search won't match things you don't intend it to. Always run an S&R manually through whole documents a few times before using 'Replace all'. This has worked well for me before:
	* Find \n\nnote\s
	* Replace with \n\nNote\n:\t
1. Comparing to a laid-out, up-to-date version of the book, mark all headings with hashes (#) according to their heading level:
	* chapter title is h1 = #
	* subunit head is h2 = ##
	* article head (question) is h3 = ###. To S&R here, luckily all article heads start with the chapter number and a hyphen. So if you're working on chapter 3, find \n\n3- and replace with \n\n### 3-. Don't use 'Replace all' in case there is a paragraph that starts with, say, '3-5 times a day...'
1. At the same time, you may want to:
	* manually create Markdown lists using * for bullets and 1. , 2. , 3. etc. for numbered lists.
	* manually marking key concepts as blockquotes by adding > and a space (not a tab) at the start of each line
	* Note that list indents can get complicated, so check previous chapters and test your markdown-to-HTML conversion when you hit a tricky one (e.g. a note inside a bullet list nested inside a numbered list).
1. Add Markdown image references. We use reference-style image syntax. 
	* In the text we put ![Alt text][id]. 
	* After the image reference, include a caption in italics. E.g. *Figure 3-2: Swaddling a newborn baby.**
	* Then at the end of the document, we list all that chapter's images, each one as [id]: url/to/image  "Optional title attribute". This makes it easy to check all image paths and attributes at once. 
	* Image IDs are named like this: fig-2-1 for the first figure in chapter two. Or fig-1-B for the second image in the skills workshop appended to chapter 1.
	* Image files are named similarly, but with the book's standard initials in front, like this: nc-fig-2-3.svg for Newborn Care, Figure 2-3.
	* The path to images is {{ site.baseurl }}/images/nc-fig-1-1.svg (this path ensures our Jekyll server can find the images on local machines or on GitHub Pages)
1. Convert all images to SVG format so that they scale neatly. Ensure bitmap elements in SVG are high-res enough for printing. Save images in the book's images folder.
1. Look out for italic and bold, and manually mark these in markdown with asterisks: *italic* and **bold**. It's best to search the InDesign document for these instances so you don't miss any.
1. Look out for special characters, especially degree symbols (°), superscripts and subscripts. It's best to search the InDesign document (search by style) for these instances so you don't miss any. Most superscripts and subscripts in InDesign and similar are created by formatting normal text (shrink and baseline shift). In text-only, you must use the [unicode character for each superscript or subscript character](http://en.wikipedia.org/wiki/Unicode_subscripts_and_superscripts). E.g. when typing the symbol for oxygen, O₂, the subscript 2 is ₂, unicode character U+2082. To type these characters, you may need special software (e.g. for Windows, Google unicodeinput.exe), or copy-paste from [an online reference](http://scriptsource.org/cms/scripts/page.php?item_id=character_list&key=2070). In Windows, you can also find symbols in Character Map, e.g. search in Character Map for 'Subscript Two'.
1. For tables, create the Markdown layout manually, or use [Senseful's online tool](http://www.sensefulsolutions.com/2010/10/format-text-as-table.html). To do this:
	* Click and drag over some cells in the InDesign table (not the header row). Then Ctrl+A to select the whole table.
	* Ctrl+C to copy, then paste into a blank spreadsheet.
	* Select all the relevant cells in your spreadsheet, and copy. The table text is now on your clipboard, with the cells separated by tabs.
	* Paste into the online Format Text as Table Input field.
	* Click 'Create Table'. (The default settings are usually fine. Play with them only if you need to.)
	* Copy the Output and paste it into your markdown file.
	* The Senseful tool starts some table borders with + where kramdown needs a |. Manually change the starting + in any row with a |.
