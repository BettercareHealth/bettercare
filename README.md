# Bettercare

This repo and [its GitHub Pages](http://electricbookworks.github.io/bettercare/) site is for Bettercare content-development only. Do not use this content for medical purposes. Please visit http://bettercare.co.za for up-to-date and complete versions of our books.

## The workflow

To make Bettercare books, we use the [EBW Book Framework](http://github.com/electricbookworks/book-framework). It's relatively easy for non-technical people to edit, includes great version control, produces books fast (no weeks laying out pages in InDesign), and instantly spits out HTML we can use for the web, ebooks, our apps, and print. By print, we mean high-end books you buy in a store, not just 'save as PDF'.

Essentially:

*	we store our master files as markdown;
*	we create HTML from that, as needed, using Jekyll.

This workflow is powerful enough to produce neat HTML we can use flexibly, and markdown is simple enough that non-technical people can create and edit it.

We keep our master content files in markdown, structured for Jekyll, on GitHub. Bettercare is here:

[https://github.com/electricbookworks/bettercare](https://github.com/electricbookworks/bettercare)

We use the [kramdown syntax](http://kramdown.gettalong.org/) for our markdown, because it's what GitHub uses. (Among other things, kramdown supports classes, so we can get almost everything we need for neat HTML. For complex tables and for figures, we use HTML inside the markdown docs.) 

Then we let GitHub Pages publish the static HTML output, which it does automatically using Jekyll. Bettercare content then appears here:

[http://electricbookworks.github.io/bettercare/](http://electricbookworks.github.io/bettercare/)

Publishing with GitHub Pages works for Bettercare because its content is open-licensed (CC-BY-NC-ND). (In future, we'll make this GitHub Pages site prettier and we may use it instead of or in addition to Scribd for online reading ([which we do currently](http://bettercare.co.za/books/newborn-care/)).)

If you click through to a book chapter on our GitHub Pages view, you'll see the HTML we get from kramdown is very simple. For example:

[http://electricbookworks.github.io/bettercare/nc/nc-1.html](http://electricbookworks.github.io/bettercare/nc/nc-1.html)

The key to simple HTML is mapping our books' features to HTML elements, so that we need very few classes. This way we can very easily use the same HTML with simple stylesheets for the web, our app, epub, and output to print PDF using PrinceXML. And our HTML content will remain readable in readers and low-bandwidth browsers that don't support publisher CSS.

## Converting a Bettercare chapter to Markdown

This is for Bettercare team members, but may contain useful tips to others working on similar material.

### Before you start

* Read the instructions for [EBW Book Framework](http://github.com/electricbookworks/book-framework).
* Read through all these notes, including the tips at the end. You may not understand it all at first, but you need to plant all these seeds in your brain for when you need them.
* Have the [Markdown syntax reference](http://daringfireball.net/projects/markdown/syntax) to hand.
* For more advanced syntax (including for tables), see the [kramdown syntax](http://kramdown.gettalong.org/syntax.html) and kramdown [quick reference](http://kramdown.gettalong.org/quickref.html).
* Use a good text editor like Notepad++.
* Set your default character encoding for your documents to 'UTF without BOM'. (We use GitHub Pages with Jekyll to create our HTML, and Jekyll can break if we don't.)
* Refer to earlier chapters already done to see how things were handled there.
* To check how small bits of markdown will convert to HTML, use the [online pandoc tryout](http://johnmacfarlane.net/pandoc/try). If you know how to set up a local Jekyll site or quick pandoc conversion to HTML, do that to see what your Markdown does in HTML as you work. Note: GitHub Pages, and possibly your Jekyll install, use kramdown, which parses markdown slightly differently to pandoc's default. So you might get different results in each, especially with tables. Jekyll with kramdown matters most.

### Process

1.	Open the InDesign file and copy all the text
1.	Paste the text with formatting into your text editor. (Note: the suggested S&Rs here were tested in Notepad++, and may work differently in other editors.)
1.	Search and replace (S&R) all line breaks with double line breaks:
	* Tick 'Regular expression' (because you're using the regex \n to mean 'line break', not actually searching for the characters 'slash' and 'lowercase en').
	* Find `\n`
	* Replace with `\n\n`
1.	Format the Notes as markdown 'definitions'. (They'll become dl/dt/dd HTML elements after conversion.) To do this, tick 'Match case' and S&R double line-break–note–space, and replace with double-line-break–Note–line-break–colon–tab. As with all S&Rs, it's best not to use 'Replace all' unless you're 100 per cent sure your search won't match things you don't intend it to. Always run an S&R manually through whole documents a few times before using 'Replace all'. This has worked well for me before:
	*	Find `\n\nnote\s`
	*	Replace with `\n\nNote\n:\t`
1.	Comparing to a laid-out, up-to-date version of the book, mark all headings with hashes (#) according to their heading level. Using S&R, start with the h3 (article) heads, so that you can then navigate the doc easily by those numbers.
	*	chapter title is h1 = `#`
	*	subunit head is h2 = `##`
	*	article head (question) is h3 = `###`. To S&R here, luckily all article heads start with the chapter number and a hyphen. So if you're working on chapter 3, find `\n\n3-` and replace with `\n\n### 3-`. Don't use 'Replace all' in case there is a paragraph that starts with, say, '3-5 times a day…' or '2-hourly…' (these are real examples, it does happen!)
1.	At the same time, you may want to:
	*	manually create Markdown lists using * for bullets and 1. , 2. , 3. etc. for numbered lists.
	*	manually marking key concepts as blockquotes by adding > and a space (not a tab) at the start of each line
	*	Note that list indents can get complicated, so check previous chapters and test your markdown-to-HTML conversion when you hit a tricky one (e.g. a note inside a bullet list nested inside a numbered list).
1.	Look out for italic and bold, and manually mark these in markdown with asterisks: *italic* and **bold**. It's best to search the InDesign document for these instances so you don't miss any (in InDesign, you can search for a text style or formatting; if you put no characters in the search field, it'll find every instance of that style or formatting).
1.	Look out for special characters, especially degree symbols (°), superscripts and subscripts. It's best to search the InDesign document (search by style and basic character formats, e.g. 'Position' for superscript and subscript) for these instances so you don't miss any. Most superscripts and subscripts in InDesign and similar are created by formatting normal text (shrink and baseline shift). In text-only, you must use the [unicode character for each superscript or subscript character](http://en.wikipedia.org/wiki/Unicode_subscripts_and_superscripts). E.g. when typing the symbol for oxygen, O₂, the subscript 2 is ₂, unicode character U+2082. To type these characters, you may need special software (e.g. for Windows, Google unicodeinput.exe), or copy-paste from [an online reference](http://scriptsource.org/cms/scripts/page.php?item_id=character_list&key=2070). In Windows, you can also find symbols in Character Map, e.g. search in Character Map for 'Subscript Two'.
1.	At tables, add `{:.table-caption}` in the line immediately after the table caption, which should *always* immediately precede the table. Kramdown uses this to apply the class `table-caption` to the paragraph. In our print output, this helps us avoid page breaks between the caption and the table. Tables can be created in markdown, but if you need any cell merging or other fine formatting control, you must create an HTML table (using `<table>` etc. tags). To easily create tables with markdown (for Kramdown processing):
	*	use [Senseful's online tool](http://www.sensefulsolutions.com/2010/10/format-text-as-table.html). To do this:
	*	Click and drag over some cells in the InDesign table (not the header row). Then Ctrl+A to select the whole table.
	*	Ctrl+C to copy, then paste into a blank spreadsheet.
	*	Select all the relevant cells in your spreadsheet, and copy. The table text is now on your clipboard, with the cells separated by tabs.
	*	Paste into the online Format Text as Table Input field.
	*	Click 'Create Table'. (The default settings are usually fine. Play with them only if you need to.)
	*	Copy the Output and paste it into your markdown file.
	*	The Senseful tool starts some table borders with + where kramdown needs a |. Manually change the starting + in any row with a |.
1.	Add markdown/code for the images, and make sure the image files are in the book's `images` folder. See the images section below for detail on this.

### Images

#### The `<figure>` element

We do not use markdown to embed images, because kramdown doesn't support enclosing the image and caption in a `<figure>` element. We need the `<figure>` element for our PDF output, mainly so that images and their captions don't break over pages. Use this HTML code for each image:

```html
<figure>
	<img src="../images/fig-1-A.svg" alt="The Apgar scoring sheet" />	
	<figcaption>Figure 1-A: The Apgar scoring sheet</figcaption>
</figure>
```

That's all, no markdown notation for the image, and no list of images at the end of the doc. We just put this code (with the file name, alt and caption changed of course) for each figure exactly where it's relevant in the text.

#### Creating images

Wherever possible, Bettercare images should be created with the same sizes, styles and settings. To create images, you must have a working knowledge of the difference between vector and raster (aka bitmap) images. We always favour vector, except where raster is absolutely necessary.

These constraints make our designs consistent, make layout easier (for print, ebook and web on large and small screens), and keep file sizes down for mobile devices.

Sizes:

*	Default width: 115mm (this is just under the 118mm-wide text area in our A5 print format)
*	Alternative width: 55mm (this is a half-page-width image)
*	Aspect ratios: 4:3 (portrait or landscape), a closer ratio, or square. Images at wider ratios (e.g. 16:9) than 4:3 make layout more difficult.

Styles:

*	Default style: Black and white line art, with average 1mm line thickness.
*	Use shades of grey only where needed, and as few shades as possible.
*	Font: Source Sans Pro
*	Font sizes: 10pt
*	Fit artboards to artwork bounds; there must be no white space around the art in an image. (We control space with styling.) Since you're creating images to a specific size, you need to **expand artwork to fit the artboard**, *not* fit artboards to artwork bounds, which would make your whole image smaller.

If you use live trace to create art from a raster source, you must clean up the file to remove unnecessary fills that add to file size but do little for clarity.

Settings:

*	Default file format: SVG
*	Convert type to outlines (the alternative to embed and subset fonts doesn't work reliably in print output currently)
*	Raster elements embedded, not linked
*	Transparent background

Where images *must* be raster (e.g. x-rays, photos of patient conditions), they should follow the sizing constraints above and be saved as jpg (best) or png. Where labels are added to a raster image, the image should be saved as SVG with an embedded raster image. 

If you're creating images from InDesign originals using Illustrator, a suggested workflow:

*	If the image was created in InDesign (e.g. a flowchart made of InDesign frames): open in InDesign, group the frames that make up the image, copy, and paste into a new Illustrator file. Adjust Illustrator file artboards as necessary, then save as SVG.
*	If the image was created in Photoshop or other raster format: open the original, copy into Illustrator. Live trace the image. I mostly used the 'Detailed Illustration' preset. Save as SVG.
*	For filenaming, use the convention 1-2.svg, as in chapter-figure.svg. For skills workshops images, that might be 1E-B.svg for workshop 1E, figure B. All the images go in an images folder inside the folder with the markdown files.
*	If you save SVG from Adobe Illustrator (and possibly other creators, too), choose to convert type to outlines. Currently, PrinceXML does not support fonts in type in SVG reliably.

#### Cover images

Add the front-cover image to the book's `images` folder named cover.jpg. It should be 960px high (using A5 height:width ratio 210:148). In keeping with epub best practice these are just under 1000px on their longest side. Ensure colour settings are RGB and the DPI is set to 72.

#### Image placement

You may need to control how an image is placed on the page, depending on its size and nearby images or other elements. You do this by applying a class to the figure, and you have these options:

*	`wrap-left` puts the image on the left with the text wrapping on its right
*	`wrap-right` puts the image on the right with the text wrapping on its left (this looks better than wrap-left)
*	`full-page` sets the max image size to 15cm high, to fill a page
*	`half-page` sets the max image size to 8cm, about half a page including caption
*	`quarter-page` sets the max image size to 3cm, about a quarter of the page including caption.

You apply these by adding `class="wrap-right"` (or whichever class you want to apply) to the opening `<figure>` tag:

```html
<figure class="wrap-right">
```

Note that the `wrap-` classes make the text that *follows* the `<figure>` element wrap around the figure. So in your markdown, place the `<figure>` element *before* the paragraph that you want to wrap it with.

### General tips

* You may get different results between a local Jekyll install and GitHub Pages, even if both are using kramdown. Always check (at least spot check) both places.
* Do not use a colon `:` in the title you include in your YAML header (inside the `---`s at the tops of files). (Jekyll will bug out unsure if you're trying to map a second value to the YAML key.)
* In lists, Kramdown lets you use a space or a tab between the list marker (e.g. `*` or `1.` etc.) and the list test. *Use a tab,* if only to solve the following issue: When nesting blockquotes in lists: use a tab between the list marker and the start of the list text, and the same tab at the start of the blockquote line. That is, the indentation (the tab) must be exactly the same for the blockquote to nest correctly in the list. (My local Jekyll correctly parses nested lists even if I use a space after the list marker and a tab before the blockquote `>`. But GitHub Pages is much stricter and requires exactly the same indentation.) E.g. see Newborn Care 12-5.
* To keep file naming perfectly alphabetical, chapter file names are in the form `1.md`, `2.md`, and so on, and skills workshops are then `1A.md`, `1B.md`, etc. No other words, e.g. titles, in the file names, because those would mess up alphabetisation. We need alphabetical order mainly to keep PrinceXML PDF-making simple for ourselves.

### Live online tests

We use [Qurio](http://qurio.co) and [Jotform](http://www.jotform.com) for live online quizzes.

#### Creating tests with Qurio

To turn our tests markup into [Qurio-importable quiz text](https://github.com/edgecampus/qurio-text-format), you just need to run a few search-and-replaces. Don't try to keep a copy of Qurio-importable text; that will create version-control issues. Just run these search-and-replaces quickly on the master markdown each time you revise a test on Qurio. You need to use regular expressions, so use a text editor that can do that (like Notepad++ or most code editors).

1.	Remove the YAML header at the top (the part starting and ending with three hyphens), and the heading.
2.	Change the list markers: search for tab-1-dot-tab and replace with tab-hyphen-space. Using regex: search for `\t1.\t` and replace with `\t-" "`
3.	Remove the question numbers, by using a regex to find number-dot-tab and replace with nothing. The search regex is `^[0-9]{1,2}.\t`
4.	Replace `\`correct\`{:.correct-answer}` with `[correct]`

When you create a quiz on Qurio:

*	For what we call 'pre tests' and 'post tests', use a Qurio 'quiz' (marks, results shown immediately). Distribution settings: anyone can answer, but they must be registered. Randomise answer order but not question order.
*	For what we call an 'exam', use a Qurio 'test' (marks, send results manually). Distribution settings: anyone can answer, must be registered, randomise both questions and answers order, and set a time limit of one hour.

#### Creating tests with Jotform

*	Sign in as Bettercare.
*	In our Bettercare account on Jotform, clone the quiz's form template.
*	Paste the questions and answers in.
*	Check that the Thank You page points to [http://ls.bettercare.co.za/testing/results.php](http://ls.bettercare.co.za/testing/results.php)
*	Open [http://quizform.jotform.io](http://quizform.jotform.io)
	*	Authorise the app
	*	Select the relevant form
	*	In 'Options': 
		*	Select send results, and set them to go to learningstation@bettercare.co.za
		*	Select 'include correct answer'
		*	Do *not* tick 'Show Results', since that will simply overwrite the results page URL in Jotform ([http://ls.bettercare.co.za/testing/results.php](http://ls.bettercare.co.za/testing/results.php)) incorrectly with the QuizForm default, and you'll have to resave [http://ls.bettercare.co.za/testing/results.php](http://ls.bettercare.co.za/testing/results.php) there.
	*	Select the correct answers. Be *very careful* to get this right. It will be almost impossible to spot mistakes later.
	*	The Quizform app will tick each MCQ as questions for scoring. In the unlikely event that you add or change questions in the Jotform form later, you may have to tick these new questions manually.

To add the test to the book get the Jotform form ID from its URL (e.g. 43496817304561) and add to the chapter. Use this, changing form ID between the Jotform Liquid (curly braces) tags:

```
Take the chapter test before and after you read this chapter.

{% include jotform-start.html %}43496817304561{% include jotform-end.html %}
```
