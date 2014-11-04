# Bettercare

This repo and [its GitHub Pages](http://electricbookworks.github.io/bettercare/) site is for Bettercare content-development only. Do not use this content for medical purposes. Please visit http://bettercare.co.za for up-to-date and complete versions of our books.

## The workflow

To make Bettercare books, we need a system that is easy for non-technical people to edit, includes great version control, produces books fast (no weeks laying out pages in InDesign), and instantly spits out HTML we can use for the web, ebooks, our apps, and print. By print, we mean high-end books you buy in a store, not just 'save as PDF'.

Essentially:

*	we store our master files as markdown;
*	we create HTML from that, as needed, using Jekyll.

This workflow is powerful enough to produce neat HTML we can use flexibly, and markdown is simple enough that non-technical people can create and edit it.

We keep our master content files in markdown, structured for Jekyll, on GitHub. Bettercare is here:

[https://github.com/electricbookworks/bettercare](https://github.com/electricbookworks/bettercare)

We use the [kramdown syntax](http://kramdown.gettalong.org/) for our markdown, because it's what GitHub uses. (Among other things, kramdown supports classes, so we can get almost everything we need for neat HTML. For complex tables and for figures, we use HTML inside the markdown docs.) 

Then we let GitHub Pages publish the static HTML output, which it does automatically using Jekyll. Bettercare content then appears here:

[http://electricbookworks.github.io/bettercare/](http://electricbookworks.github.io/bettercare/)

So far we've only done a couple of our books this way. We're slowly migrating other books to this system. Publishing with GitHub Pages works for Bettercare because its content is open-licensed (CC-BY-NC-ND). 

In future, we'll make this GitHub Pages site prettier and we'll use it instead of Scribd for online reading ([which we do currently](http://bettercare.co.za/books/newborn-care/)).

When we use this workflow for closed content, we don't use GitHub Pages, but rather local Jekyll instances to generate HTML from markdown as needed. We still use private GitHub repos for version control.

If you click through to a book chapter on our GitHub Pages view, you'll see the HTML we get from kramdown is very simple. For example:

[http://electricbookworks.github.io/bettercare/nc/nc-1.html](http://electricbookworks.github.io/bettercare/nc/nc-1.html)

The key to simple HTML is mapping our books' features to HTML elements, so that we need very few classes. This way we can very easily use the same HTML with simple stylesheets for the web, our app, epub, and output to print PDF using PrinceXML. And our HTML content will remain readable in readers and low-bandwidth browsers that don't support publisher CSS.

### Alternatives

There are similar systems for this that use variants of Jekyll and/or markdown, such as [Gitbook IO](https://www.gitbook.io/) and [Phil Schatz's viewer](http://philschatz.com/2014/07/07/tiny-book-reader). 

We've also tried the OERPub Editor, a web-based editor for non-technical people to create EPUB3 HTML that includes maths. See [the Textbook Editor here](http://oerpub.org/tools/). It's essentially Javascript editor that saves content in EPUB3 structure to a GitHub repo.

## Converting a Bettercare chapter to Markdown

This is for Bettercare team members, but may contain useful tips to others working on similar material.

### Before you start

* Read through all these notes, including the tips at the end. You may not understand it all at first, but you need to plant all these seeds in your brain for when you need them.
* Have the [Markdown syntax reference](http://daringfireball.net/projects/markdown/syntax) to hand.
* For more advanced syntax (including for tables), see the [kramdown syntax](http://kramdown.gettalong.org/syntax.html) and kramdown [quick reference](http://kramdown.gettalong.org/quickref.html).
* Use a good text editor like Notepad++.
* Set your default character encoding for your documents to 'UTF without BOM'. (We use GitHub Pages with Jekyll to create our HTML, and Jekyll can break if we don't.)
* Refer to earlier chapters already done to see how things were handled there.
* To check how small bits of markdown will convert to HTML, use the [online pandoc tryout](http://johnmacfarlane.net/pandoc/try). If you know how to set up a local Jekyll site or quick pandoc conversion to HTML, do that to see what your Markdown does in HTML as you work. Note: GitHub Pages, and possibly your Jekyll install, use kramdown, which parses markdown slightly differently to pandoc's default. So you might get different results in each, especially with tables. Jekyll with kramdown matters most.

### Process

1. Open the InDesign file and copy all the text
1. Paste the text with formatting into your text editor.
1. Search and replace (S&R) all line breaks with double line breaks:
	* Tick 'Regular expression' (because you're using the regex \n to mean 'line break', not actually searching for the characters 'slash' and 'lowercase en').
	* Find `\n`
	* Replace with `\n\n`
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
1. Look out for special characters, especially degree symbols (°), superscripts and subscripts. It's best to search the InDesign document (search by style and basic character formats, e.g. 'Position' for superscript and subscript) for these instances so you don't miss any. Most superscripts and subscripts in InDesign and similar are created by formatting normal text (shrink and baseline shift). In text-only, you must use the [unicode character for each superscript or subscript character](http://en.wikipedia.org/wiki/Unicode_subscripts_and_superscripts). E.g. when typing the symbol for oxygen, O₂, the subscript 2 is ₂, unicode character U+2082. To type these characters, you may need special software (e.g. for Windows, Google unicodeinput.exe), or copy-paste from [an online reference](http://scriptsource.org/cms/scripts/page.php?item_id=character_list&key=2070). In Windows, you can also find symbols in Character Map, e.g. search in Character Map for 'Subscript Two'.
1. For tables, create the Markdown layout manually, or use [Senseful's online tool](http://www.sensefulsolutions.com/2010/10/format-text-as-table.html). To do this:
	* Click and drag over some cells in the InDesign table (not the header row). Then Ctrl+A to select the whole table.
	* Ctrl+C to copy, then paste into a blank spreadsheet.
	* Select all the relevant cells in your spreadsheet, and copy. The table text is now on your clipboard, with the cells separated by tabs.
	* Paste into the online Format Text as Table Input field.
	* Click 'Create Table'. (The default settings are usually fine. Play with them only if you need to.)
	* Copy the Output and paste it into your markdown file.
	* The Senseful tool starts some table borders with + where kramdown needs a |. Manually change the starting + in any row with a |.

### Images

1.	Create .svg versions of all images. A suggested workflow for this:
	*	If the image was created in InDesign (e.g. a flowchart made of InDesign frames): open in InDesign, group the frames that make up the image, copy, and paste into a new Illustrator file. Adjust Illustrator file artboards as necessary, then save as SVG.
	*	If the image was created in Photoshop or other raster format: open the original, copy into Illustrator. Live trace the image. I mostly used the 'Detailed Illustration' preset. Save as SVG.
	*	For filenaming, use the convention pmc-1-2.svg, as in book-chapter-figure.svg. For skills workshops images, that might be pmc-1E-B.svg for PMC, workshop 1E, figure B. All the images go in an images folder inside the folder with the markdown files.
	*	If you save SVG from Adobe Illustrator (and possibly other creators, too), choose to convert type to outlines. Currently, PrinceXML does not support fonts in type in SVG reliably.
2. We do not use markdown to embed images, because kramdown doesn't support enclosing the image and caption in a `<figure>` element. We need the `<figure>` element for our PDF output, mainly so that images and their captions don't break over pages. Use this HTML code for each image:

```html
<figure>
	<img src="../images/nc-fig-1-A.svg" alt="The Apgar scoring sheet" />	
	<figcaption>Figure 1-A: The Apgar scoring sheet</figcaption>
</figure>
```

	That's all, no markdown notation for the image, and no list of images at the end of the doc. We just put this code (with the file name, alt and caption changed of course) for each figure exactly where it's relevant in the text.

### Tips

* You may get different results between a local Jekyll install and GitHub Pages, even if both are using kramdown. Always check (at least spot check) both places.
* Do not use a colon `:` in the title you include in your YAML header (inside the `---`s at the tops of files). (Jekyll will bug out unsure if you're trying to map a second value to the YAML key.)
* In lists, Kramdown lets you use a space or a tab between the list marker (e.g. `*` or `1.` etc.) and the list test. *Use a tab,* if only to solve the following issue: When nesting blockquotes in lists: use a tab between the list marker and the start of the list text, and the same tab at the start of the blockquote line. That is, the indentation (the tab) must be exactly the same for the blockquote to nest correctly in the list. (My local Jekyll correctly parses nested lists even if I use a space after the list marker and a tab before the blockquote `>`. But GitHub Pages is much stricter and requires exactly the same indentation.) E.g. see Newborn Care 12-5.
* Add `{:.table-caption}` in the line immediately after a table caption. Kramdown uses this to apply the class `table-caption` to the paragraph. In our print output, this helps us avoid page breaks between the caption and the table. (Table captions must always appear above tables, not after them.)
* To keep file naming perfectly alphabetical, chapter file names are in the form `pmc-1.md`, `pmc-2.md`, and so on, and skills workshops are then `pmc-1A.md`, `pmc-1B.md`, etc. No other words, e.g. titles, in the file names, because those would mess up alphabetisation. We need alphabetical order mainly to keep PrinceXML PDF-making simple for ourselves.

### Reusing tests for Qurio

We use [Qurio](http://qurio.co) for some of our quizzes. To turn our tests markup into [Qurio-importable quiz text](https://github.com/edgecampus/qurio-text-format), you just need to run a few search-and-replaces. Don't try to keep a copy of Qurio-importable text; that will create version-control issues. Just run these search-and-replaces quickly on the master markdown each time you revise a test on Qurio. You need to use regular expressions, so use a text editor that can do that (like Notepad++ or most code editors).

1.	Remove the YAML header at the top (the part starting and ending with three hyphens), and the heading.
2.	Change the list markers: search for tab-1-dot-tab and replace with tab-hyphen-space. Using regex: search for `\t1.\t` and replace with `\t-" "`
3.	Remove the question numbers, by using a regex to find number-dot-tab and replace with nothing. The search regex is `^[0-9]{1,2}.\t`
4.	Replace `\`correct\`{:.correct-answer}` with `[correct]`

When you create a quiz on Qurio:

*	For what we call 'pre tests' and 'post tests', use a Qurio 'quiz' (marks, results shown immediately). Distribution settings: anyone can answer, but they must be registered. Randomise answer order but not question order.
*	For what we call an 'exam', use a Qurio 'test' (marks, send results manually). Distribution settings: anyone can answer, must be registered, randomise both questions and answers order, and set a time limit of one hour.
