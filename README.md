# Bettercare

This repo and [its GitHub Pages](http://electricbookworks.github.io/bettercare/) site is for Bettercare content-development only. Do not use this content for medical purposes. Please visit http://bettercare.co.za for up-to-date and complete versions of our books, or see the [live version of this site](http://ls.bettercare.co.za).

*	[Updates](#updates)
*   [Our workflow](#our-workflow)
*   [Creating a Bettercare chapter in markdown](#creting-a-bettercare-chapter-in-markdown)
	*   [Before you start](#before-you-start)
	*   [Process](#process)
		*	[Adding tables of contents](#adding-tables-of-contents)
		*   [Useful search-and-replaces](#useful-search-and-replaces)
	*   [YAML headers](#yaml-headers)
	*   [Print typography](#print-typography)
	*   [Images](#images)
		*   [Images in markdown](#images-in-markdown)
		*   [Image placement](#image-placement)
		*   [Creating images](#creating-images)
			*   [Sizes](#sizes)
			*   [Resolution](#resolution)
			*   [Styles](#styles)
			*   [File sizes](#file-sizes)
		*   [Cover images](#cover-images)
	*   [Embedding video](#embedding-video)
*   [General tips](#general-tips)
*   [Live online tests](#live-online-tests)
	*   [Creating tests with](#creating-tests-with-jotformhttpjotformcom) [Jotform](http://jotform.com)
	*   [Adding tests from Betterquiz](#adding-tests-from-betterquiz)
*   [Epub output](#epub-output)
	*   [Add the files](#add-the-files)
	*   [Search-and-replace](#search-and-replace)
	*   [Add metadata, semantics and TOC](#add-metadata-semantics-and-toc)
	*   [Validate](#validate)
	*	[Convert for Amazon Kindle](#convert-for-amazon-kindle)
*   [Saving in Word format](#saving-in-word-format)

## Updates

When we make a *significant* update to the content of a book, we list its date here. This way you can tell whether your PDF or physical copy of the book is up to date. Significant updates include any change to medical information, even if it's a one-word correction. We do not consider significant any small corrections to non-medical information (such as corrections to punctuation or grammar in non-essential notes) or tweaks to design or online functionality.

You can drill down for more detail on corrections by looking through the commit history of a book's files on GitHub.

| Title | Last update | Note
| -- | -- |
| Adult HIV | 28 July 2015 |
| Breast Care | 12 January 2015 |
| Birth Defects | 27 May 2010 |
| Child Healthcare | 23 August 2007 |
| Childhood HIV | 3 August 2011 |
| Childhood TB | 11 May 2011 |
| Ebola Prevention and Control | in 2015 |
| Facilitators Guide | 16 April 2015 |
| Infection Prevention and Control | 2014 |
| Intrapartum Care | 16 February 2011 |
| Mother and Baby Friendly Care | 1 April 2009 |
| Maternal Care | 11 August 2014 |
| Maternal Mental Health | 2015 |
| Newborn Care | 10 August 2014 |
| Perinatal HIV | 31 March 2014 |
| Primary Maternal Care | 31 August 2014 |
| Primary Newborn Care | 7 July 2014 |
| Saving Mothers and Babies | September 2008 |
| Well Women | 2011 |

## Our workflow

To make Bettercare books, we use the [EBW Book Framework](http://github.com/electricbookworks/book-framework). It's relatively easy for non-technical people to edit, includes great version control, produces books fast (no weeks laying out pages in InDesign), and instantly spits out HTML we can use for the web, ebooks, our apps, and print. By print, we mean high-end books you buy in a store, not just 'save as PDF'.

Essentially:

*	we store our master files as markdown;
*	we create HTML from that, as needed, using Jekyll.

This workflow is powerful enough to produce neat HTML we can use flexibly, and markdown is simple enough that non-technical people can create and edit it.

We keep our master content files in markdown, structured for Jekyll, on GitHub. Bettercare is here:

[https://github.com/electricbookworks/bettercare](https://github.com/electricbookworks/bettercare)

We use the [kramdown syntax](http://kramdown.gettalong.org/) for our markdown, because kramdown supports classes, so we can get almost everything we need for neat HTML. (For complex tables and for figures, we use HTML inside the markdown docs.) Also, it's what GitHub uses for GitHub Pages, which turns the markdown into a static HTML website using Jekyll. The GitHub Pages version of our content serves as our staging site:

[http://electricbookworks.github.io/bettercare/](http://electricbookworks.github.io/bettercare/)

Publishing with GitHub Pages works for Bettercare because [its content is open-licensed (CC-BY-NC-ND)](http://bettercare.co.za/buy/licensing). 

## Creating a Bettercare chapter in markdown

This is for Bettercare team members, but may contain useful tips to others working on similar material.

### Before you start

* Read the instructions for the [EBW Book Framework](http://github.com/electricbookworks/book-framework).
* Read through all these notes, including the tips at the end. You may not understand it all at first, but you need to plant all these seeds in your brain for when you need them.
* Have the [Markdown syntax reference](http://daringfireball.net/projects/markdown/syntax) handy.
* For more advanced syntax (including for tables), you may need the [kramdown syntax](http://kramdown.gettalong.org/syntax.html) and kramdown [quick reference](http://kramdown.gettalong.org/quickref.html).
* Use a good text editor. On Windows, Notepad++ is a good option.
* Set your default character encoding for your documents to 'UTF without BOM'. (Jekyll will break if you don't.)
* Refer to existing chapters to see how things were handled there.
* To check how small bits of markdown will convert to HTML, use the [this online kramdown converter](http://kramdown.herokuapp.com/). For best results, paste [`screen.css`](https://raw.githubusercontent.com/electricbookworks/bettercare/gh-pages/css/screen.css) into the converter's custom styles (Settings > Custom styles).

### Process

Always remember how important your work is here: these books literally save lives. And mistakes in them could have real consequences, even if they only mean a nurse doesn't learn something important when she should have. So be meticulous. If you're converting or updating a book, this is also an opportunity to look out for errors and glitches in the previous edition.

1.	Open your source, e.g. Word or InDesign file, and copy all the text. Then paste the text with formatting into your text editor. 
1.	Do as much prep as possible using search-and-replace. (Note: the suggested search-and-replaces here were tested in Notepad++, and may work differently in other editors.) As with all S&Rs, it's best not to use 'Replace all' unless you're 100 per cent sure your search won't match things you don't intend it to. Always run an S&R manually through whole documents a few times before using 'Replace all'.
1.	Mark all headings with hashes (#) according to their heading level. Using S&R, start with the h3 (article) heads, so that you can then navigate the doc easily by those numbers.
	*	chapter title is h1 = `#`
	*	subunit head is h2 = `##`
	*	article head (question) is h3 = `###`. 
1.	Create Markdown lists using * for bullets and 1. , 2. , 3. etc. for numbered lists. Note that list indents can get complicated, so check previous chapters and test your markdown-to-HTML conversion when you hit a tricky one (e.g. a note inside a bullet list nested inside a numbered list).
1.	Mark key concepts as blockquotes by adding > and a space (not a tab) at the start of each line
1.	Format Notes as markdown 'definitions'. (They'll become dl/dt/dd HTML elements after conversion.)
1.	Look out for italic and bold, and manually mark these in markdown with asterisks: *italic* and **bold**. It's best to search the InDesign document for these instances so you don't miss any. (In InDesign, use the Find dialog. Click on the box below 'Find Format'. That brings up the 'Find Format Settings' dialog. In the 'Basic Character Formats' menu, select the formatting you're searching for. E.g. bold or italic, or superscript and subscript at the 'Position' dropdown. Click OK. Now the search will find any instances of superscript text.)
1.	Look out for special characters, especially degree symbols (°), superscripts and subscripts. Searching for special characters is tricky because you have to guess what to search for. In this case, you can search for things you spotted an instance of while doing markdown, and think might appear in other places. The likely candidates are things created with special fonts like Wingdings. If you're in InDesign, go to Type > Find Font... and see what fonts are listed. Any icon fonts (Wingdings, Dingbats, etc.) suggest that they've been used to create special characters. Click on the font there, then 'Find First' to jump to each instance. Then you can check whether the special character has come through okay in your markdown, or needs to replaced with a Unicode equivalent. In text-only markdown, you must use the [unicode character for each superscript or subscript character](http://en.wikipedia.org/wiki/Unicode_subscripts_and_superscripts). E.g. when typing the symbol for oxygen, O₂, the subscript 2 is ₂, unicode character U+2082. Other examples are check mark ✓ and ballot box ☐. To type these characters, [search online](https://www.google.co.za/?#q=unicode+check+mark) and copy-paste from [an online reference](http://www.fileformat.info/info/unicode/char/2713/browsertest.htm).
1.	Make URLs into (clickable) links. To make text into a link, surround it with square brackets, followed immediately (i.e. no space) by the full URL in round brackets: `[This will be clickable text](http://the.full.url.here)`.
1.	At tables, add `{:.table-caption}` in the line immediately after the table caption, which should *always* immediately precede the table. Kramdown uses this to apply the class `table-caption` to the paragraph. In our print output, this helps us avoid page breaks between the caption and the table. Very simple tables can be created in markdown, with no merged cells. If you need any cell merging or other fine formatting control, you must create an HTML table (using `<table>` etc. tags). To easily create simple tables in markdown, you can use [Senseful's online tool](http://www.sensefulsolutions.com/2010/10/format-text-as-table.html). To get a clean paste into Senseful:
	*	Copy the original table and paste into a blank spreadsheet.
	*	Select all the relevant cells in your spreadsheet, and copy. The table text is now on your clipboard, with the cells separated by tabs.
	*	Paste into the online Format Text as Table Input field.
	*	Click 'Create Table'. (The default settings are usually fine. Play with them only if you need to.)
	*	Copy the Output and paste it into your markdown file.
	*	The Senseful tool starts some table borders with + where kramdown needs a |. Manually change the starting + in any row with a |.
	
	If you create an HTML table, make sure it validates as the very strict XHTML 1.1 – this is needed for EPUB2 validation. (E.g. if you have a `<thead>` element you must include a `<tbody>` element.)
	
1.	Add markdown/code for the images, and make sure the image files are in the book's `images` folder. See the images section below for detail on this.

#### Adding tables of contents

Contents lists (tables of contents) behave differently in our print and screen versions:

*	In the print versions of our books, the main contents page includes chapter subheadings (`h2` level headings). These are hidden in the screen version.
*	In the screen version, each chapter begins with a chapter-contents list of its subheadings. This is hidden in the print version.

In the book's main contents list (usually `0-3-contents.md`), add chapter subheadings to the table of contents as indented list items. (Our `screen.css` will hide these on screen, so that the main contents list on screen is easy to scan quickly.) E.g.

~~~
*	[1. HIV infection](1.html)
	*   [Introduction to HIV infection](1.html#introduction-to-hiv-infection)
	*   [The spread of HIV](1.html#the-spread-of-hiv)
~~~

Then in each chapter, add the list of subheadings after an `## Contents` heading. Be sure to add `{:.non-printing}` to the heading, and `{:.chapter-toc}` to the list to get the right appearance and behaviour:

~~~
## Contents
{:.non-printing}

*   [Introduction to HIV infection](1.html#introduction-to-hiv-infection)
*   [The spread of HIV](1.html#the-spread-of-hiv)
{:.chapter-toc}
~~~

Finally, certain items in the book's main table of contents need to be in special classes. The list of prelims needs to be in the `.prelims` class:

~~~
*	[Acknowledgements](0-4-acknowledgements.html)
*	[Introduction](0-5-introduction.html)
{:.prelims}
~~~

Then any chapter that does not include a chapter test (like skills chapters, resources chapters, photos sections and addendums) needs to be in the `.auxiliary` class. To put a specific list item in a class, add the kramdown attribute tag at the start of the list item:

~~~
*	{:.auxiliary}[6a. Skills: Screening tests for HIV](6a.html)
~~~

**Tip:** to create contents lists quickly:

*	Paste the markdown of an entire chapter into [this online kramdown converter](http://kramdown.herokuapp.com/).
*	Use kramdown's `{:toc}` function to create a list, by adding this to the top of the markdown:

	~~~
	* foo
	{:toc}
	~~~
	
*	When the contents list appears as HTML in the converter, right-click it and 'Inspect element'.
*	Find the starting `ul` tag, right-click, and 'Edit as HTML`.
*	Copy the entire HTML list.
*	Paste the HTML list into [this HTML-to-markdown converter](https://domchristie.github.io/to-markdown/).
*	Copy the converted markdown list, and paste it into a text editor.
*	Delete everything you don't need, un-indent, and paste into the appropriate place in your main contents list and chapters.

#### Useful search-and-replaces

1.	To search and replace (S&R) all line breaks with double line breaks:
	* Tick 'Regular expression' (because you're using the regex \n to mean 'line break', not actually searching for the characters 'slash' and 'lowercase en').
	* Find `\n`
	* Replace with `\n\n`
1.	To S&R for `###` headings, all article heads in our books start with the chapter number and a hyphen. So if you're working on chapter 3, find `\n\n3-` and replace with `\n\n### 3-`. Don't use 'Replace all' in case there is a paragraph that starts with, say, '3-5 times a day…' or '2-hourly…' (these are real examples, it does happen!)

### YAML headers

[YAML](http://en.wikipedia.org/wiki/YAML) headers are the information at the top of a markdown file between the `---` s. Jekyll uses those to get important info about each file. You will need to change the YAML headers for each file.

Here is YAML for the contents page of *Maternal Care*:

~~~
---
book: Maternal Care
title: Contents
layout: toc
---
~~~

And for a chapter in *Newborn Care*:

~~~
---
book: Newborn Care
title: 3. The routine care of normal infants
layout: chapter
---
~~~

And here is YAML for a test in *Ebola Prevention and Control*:

~~~
---
book: Ebola Prevention and Control
title: Test 5. Communication and Community engagement 
layout: test
---
~~~

Do not use a colon `:` in your YAML values. (See how in the example above we've used `Test 5.` not `Test 5:`.) Colons break Jekyll, because it can't tell if you're trying to map a second value to the YAML key.

For the `layout` header, you have these options for Bettercare books:

*	`frontmatter` (first few informational pages in a book; the printed version won't have page numbers on these pages)
*	`titlepage` (a special kind of frontmatter)
*	`toc` (only for the table of contents)
*	`chapter` (the most common, used for all chapters and appendices)
*	`test` (for the multiple-choice questions)
*	`answers` (for the test answers)
*	`cover` (only for the book's `cover.md` file)
*	`index` (only for a book's `index.md` file)
*	`default` (almost never used, it's just a fallback for Jekyll)
*	`exam` (only for end-of-course exams, which are stored in each book's `exam` folder)

### Print typography

For fine control of print typography, our styles include some useful classes. 

* `tight` very slightly reduces the letter-spacing and wordspacing almost invisibly, useful for bringing back an orphan word or two.
* `x-tight` is extra-tight; use with caution because the reduced letter-spacing is visible to trained eyes.
* `loose` is the opposite of `tight`
* `x-loose` is extra-loose
* `shrink` completely changes the font to a condensed font at a small font size. This is useful for very wide tables, but should be avoided wherever possible.

Apply these classes to paragraphs (or block-level elements like tables) in markdown by putting a `{:.classname}` tag in the line immediately after the element:

~~~
This paragraph is set extra-tight.
{:.x-tight}
~~~

### Images

#### Images in markdown

We use markdown to embed images.

```
![The image alt text](pth/to/image.svg)
```

Most of our images are figures. A 'figure' is an image plus a caption. We put these in a blockquote to control their layout and appearance.

Technical note
:	The challenge is keeping images and their captions together when we can't wrap them in a `<figure>` element (which won't validate in EPUB2). So we use a `<blockquote>` element with a `.figure` class instead. We can then control placement by floating the `<blockquote>`.

Use this markdown for each figure:

```
> ![Figure 2-A: The Ballard scoring method](images/fig-2-A.svg)
> 
> Figure 2-A: The Ballard scoring method
{:.figure}
```

Every line (except the `{:.figure}` class tag at the end) starts with a `>` and a space. These wrap the figure (image and caption) in a `blockquote` element. 

The first line is the image reference. It consists of:

*	an exclamation mark telling markdown that we're placing an image
*	the `alt` attribute in square brackets
*	the path to the image file.

The third line is the figure caption, followed by the kramdown tag `{:.figure}`, which lets our stylesheets format the `blockquote` as a figure. (For instance, preventing a page break between the image and the caption in print.)

If your image has no caption, just skip the empty line and caption line:

```
> ![Figure 2-A: The Ballard scoring method](images/fig-2-A.svg)
{:.figure}
```

If it's important that it doesn't have a border (isn't in a blockquote), you could use:

```
![Figure 2-A: The Ballard scoring method](images/fig-2-A.svg)
{:.figure}
```

Always check print output (putting the HTML Jekyll creates through Prince with `print.css`) to be sure you're getting what you intend.

#### Image placement

You may need to control how an image is sized and placed on the page, depending on its detail or aspect ratio and nearby images or other elements. You do this by adding the class tag to the line after the `>` lines. (This applies a class to the blockquote in HTML.) You have these options:

* `.x-small` limits the image height. In print, to 30mm.
* `.small` limits the image height. In print, to 45mm.
* `.medium` limits the image height. In print, to 80mm, which allows two figures with shortish captions to fit on a page.
* `.large` fills the width and most of a printed page. Try to put these images at the end of a section, because they cause a page break.
* `.fixed` keeps the figure in its place in the text flow, and will not float it to the top or bottom of a page. For instance, when an image must appear in a step-by-step list of instructions.

You add these classes to the `{:.figure} tag like this:

`{:.figure .small}`

`{:.figure .fixed}`

and so on. You can combine size and placement classes like this, too:

`{:.figure .fixed .small}`

#### Creating images

Wherever possible, Bettercare images should be created with the same sizes, styles and settings. To create images, you must have a working knowledge of the difference between vector and raster images. We always favour vector, except where raster is absolutely necessary.

These constraints make our designs consistent, make layout easier (for print, ebook and web on large and small screens), and keep file sizes down for mobile devices.

##### Sizes

*	Default width: 115mm (this is just under the 118mm-wide text area in our A5 print format)
*	Aspect ratios: 4:3 (portrait or landscape), a closer ratio, or square. Images at wider ratios (e.g. 16:9) than 4:3 make layout more difficult.
*	Therefore, maximum height is 150mm. (That's very slightly less than a 4:3 height:width ratio.)

Using Illustrator? Different SVG editors treat image size differently. For instance, a 2-inch-wide image in Illustrator will appear 1.6 inches wide in Prince and Inkscape. Why? Because when creating the SVG's XML, Illustrator includes its dimensions in pixels, and *assumes a 72dpi resolution*, where Prince and Inkscape follow the W3C SVG spec and assume 90dpi. As a result, images coming out of Illustrator always appear 80% of their intended size. So, if you're creating images in Illustrator, set your image sizes to 125% of what you intend to appear in the book. That means:

*	default width 115mm × 125% = 143.75mm
*	max height (at 4:3) = 190mm

Check out [Adobe's guidance on saving SVGs](https://helpx.adobe.com/illustrator/using/saving-artwork.html#save_in_svg_format).

##### Resolution

*	For SVG images, the editor you use will determine underlying resolution. Illustrator uses 72dpi, and Inkscape 90dpi. We favour and assume 90dpi, but can rescale SVG images with  our stylesheets just in case.
*	For JPGs, our default resolution should be 200dpi and image quality of 80 ('very high' in Adobe presets). This allows for reasonable print quality while keeping file sizes sensible for web delivery. The higher resolution also allows ebook users to zoom in for more detail.
*	To get a 200dpi JPG that is 115 mm wide, the image must be 906 pixels wide. (115mm is 4.53 inches, which contains 906 pixels at 200 pixels per inch, aka 200 dpi.)
*	Try to keep JPG file sizes below 127KB: [Amazon Kindle may automatically downsample images above that](http://authoradventures.blogspot.com/2014/02/image-size-limit-increased-in-kindle.html), and it's better if we control the downsampling for quality than let their servers do it. However, for raster-only images (e.g. x-rays or photos) if a larger size is required for acceptable print quality then larger is fine.

##### Styles

*	Default style: Black and white line art, with average 1mm line thickness.
*	Use shades of grey only where needed, and as few shades as possible.
*	Font: [Source Sans Pro](https://www.google.com/fonts/specimen/Source+Sans+Pro)
*	Font sizes: 10pt on 115mm-wide images, 11pt on 145mm-wide images (see note above on using Illustrator)
*	Fit artboards to artwork bounds; there must be no white space around the art in an image. (We control space with styling.) Since you're creating images to a specific size, you need to **expand artwork to fit the artboard**, *not* fit artboards to artwork bounds, which would make your whole image smaller.

If you use live trace to create art from a raster source, you must clean up the file to remove unnecessary fills that add to file size but do little for clarity.

Settings:

*	Default file format: SVG
*	Convert type to outlines (the alternative to embed and subset fonts doesn't work reliably in print output currently)
*	Raster elements embedded, not linked
*	Transparent background

Where images *must* be raster (e.g. x-rays, photos of patient conditions), they should follow the sizing constraints above and be saved as jpg (since Amazon Kindle only uses JPG or GIF, we shouldn't use PNG or other formats). Save as RGB.

Where labels are added to a raster image, the image should be saved as SVG with an embedded raster image. Labels and other text must *not* be rasterised.

If you're creating images from InDesign originals using Illustrator, a suggested workflow:

*	If the image was created in InDesign (e.g. a flowchart made of InDesign frames): open in InDesign, group the frames that make up the image, copy, and paste into a new Illustrator file. Adjust Illustrator file artboards as necessary, then save as SVG.
*	If the image was created in Photoshop or other raster format: open the original, copy into Illustrator. Live trace the image. I mostly used the 'Detailed Illustration' preset. Save as SVG.
*	For filenaming, use the convention 1-2.svg, as in chapter-figure.svg. For skills-chapter images, that might be 1E-B.svg for chapter 1E, figure B. All the images go in an images folder inside the folder with the markdown files.
*	If you save SVG from Adobe Illustrator (and possibly other creators, too), choose to convert type to outlines. Currently, PrinceXML does not support fonts in type in SVG reliably.
*	To save a little more on file size, also convert all strokes to fills.

##### File sizes

If you SVGs seem big, [read up on optimising SVGs](http://stackoverflow.com/a/7068651/1781075), and/or (if you're comfortable using Python scripts) run your SVGs through [Scour](http://codedread.com/scour/).

#### Cover images

Add the front-cover image to the book's `images` folder. Ensure colour settings are RGB and the DPI is set to 72. We need three sizes:

*	`cover.jpg`: 960px high (using A5 height:width ratio 210:148). In keeping with epub best practice these are just under 1000px on their longest side. 
*	`cover-thumb.jpg`: 300px wide (usually 425px high)
*	`cover-large.jpg`: 2000px high (usually 1410px wide).

### Embedding video

We can include any iframe in markdown to embed a video, and our preferred method is this:

*	Find the video's YouTube ID: a code in the URL that looks like this: `RRV-9Jf0eI0`
*	In the markdown, put the code between these two tags: `{% include youtube-start.html %}` and `{% include youtube-end.html %}`. Those tags will insert the iframe HTML that works best for the Learning Station.
*	The default iframe code gives the ifram a `.non-printing` class, so that the video won't appear in the printed or PDF book.
*	If you need a heading, caption or any other text related to the video, remember to add `{:.non-printing}` to them, so that they also do not appear in the book.

Here's a full example:

~~~
## Video
{:.non-printing}

### Jaundice
{:.non-printing}

{% include youtube-start.html %}RRV-9Jf0eI0{% include youtube-end.html %}

Video by the [Global Health Media Project](http://globalhealthmedia.org/) made available under a [Creative Commons Attribution-NonCommercial-NoDerivativess License](creativecommons.org/licenses/by-nc-nd/4.0/)
{:.non-printing}
~~~

Note that this only works with YouTube. If you're embedding from any other service, instead of using our `{% include %}` tags:

*	use their standard embed iframe
*	try to select a width of around 850 px
*	add `style="max-width: 100%;"` and `class="non-printing"` to the iframe tag.

Also, add the video section to the table of contents. The link should be nested as a bullet below the chapter heading, and after any skills chapters: 

~~~
	*	[Video](3.html#video){:.non-printing}
~~~

## General tips

* You may get different results between a local Jekyll install and GitHub Pages, even if both are using kramdown. Always check (at least spot check) both places.
* In lists, kramdown lets you use a space or a tab between the list marker (e.g. `*` or `1.` etc.) and the list test. *Use a tab,* if only to solve the following issue: When nesting blockquotes in lists: use a tab between the list marker and the start of the list text, and the same tab at the start of the blockquote line. That is, the indentation (the tab) must be exactly the same for the blockquote to nest correctly in the list. (My local Jekyll correctly parses nested lists even if I use a space after the list marker and a tab before the blockquote `>`. But GitHub Pages is much stricter and requires exactly the same indentation.) E.g. see Newborn Care 12-5.
* To keep file naming perfectly alphabetical, chapter file names are in the form `1.md`, `2.md`, and so on, and skills chapter are then `1a.md`, `1b.md`, etc. No other words, e.g. titles, in the file names, because those would mess up alphabetisation. We need alphabetical order mainly to keep PrinceXML PDF-making simple for ourselves.
* Remember you're not in a word-processor any more: but you still need spell check! Make sure you have and know how to use a good spell checker in your text editor. (I use the DSpellCheck plugin in Notepad++.)

## Live online tests

### Creating tests with [Jotform](http://jotform.com)

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

### Adding tests from Betterquiz

We're moving all testing from Jotform to [Betterquiz](https://github.com/electricbookworks/betterquiz), our own multiple-choice testing engine. Bettercare's Betterquiz instance is at [quiz.bettercare.co.za](http://quiz.bettercare.co.za), managed from [quiz.bettercare.co.za/admin](http://quiz.bettercare.co.za/admin). 

Once you've created a chapter test (quiz) in Betterquiz, you can add it to a chapter like this. Note that, currently, you can only add one test per chapter (this is a limitation of the Javascript that shows and hides the test's iframe).

*	In the chapter's YAML header, add the quiz's ID this this: `quiz-id: 1`, where the number is the ID of the quiz on Betterquiz.
*	Where you want the test to appear in the chapter, insert this on its own line: `{% include quiz.html %}`

## Epub output

We assemble our epubs in [Sigil](https://github.com/user-none/Sigil/). If we're not tweaking, it takes five minutes. (For general guidance on creating epubs with Sigil, check out [our training material](http://electricbookworks.github.io/ebw-training/) and/or the [Sigil manual online](http://web.sigil.googlecode.com/git/files/OEBPS/Text/introduction.html).)

### Add the files

*	Open a blank epub in Sigil.
*	Add the HTML files (except index.html) from the book's `_site` folder to your `Text` folder.
*	Add JPG versions of all images to the `Images` folder. Sigil should have automatically detected (from the links in the HTML) and added the book's images to the `Images` folder. 
*	Remove all SVG images (many of them will break strict EPUB2 validation because of inconsistencies in SVG editors' implementations). You should have a JPG to replace each SVG you remove.
*	Add `epub.css` to your `Styles` folder.

### Search-and-replace

For the removals listed here, search-and-replace with the 'Replace' box empty.

*	Search for `.svg` in image references and replace with `.jpg`.

*	Replace the paths to `screen.css` to a path to `epub.css` in all `<head>` elements (`/css/screen.css` becomes `../Styles/epub.css`) using search-and-replace. You only want a `<link>` to `epub.css` there.

*	Remove the favicon links and meta from the `<head>` element. (From `<!--Links and meta for favicons` to `End favicon links and meta-->`.)

*	Remove all scripts from the `<head>` and, at the end of each HTML document, from just before the `</body>` closing tag. We don't need them and Javascript isn't allowed in EPUB2.

*	Remove the Open Graph metadata (because EPUB2 doesn't allow the `property` attribute):

	`(?s).<!--Open Graph metadata -->(.*)<!-- End of Open Graph metadata -->`

*	Remove the `nav-bar` div. To search for the nav-bar div in all HTML files, use this DotAll Regex (tick DotAll and select Regex mode): 

	`(?s).<div class="non-printing" id="nav-bar">(.*)<!--#nav-bar-->`
	
*	Remove the `footer` div. DotAll Regex:

	`(?s).<div class="non-printing" id="footer">(.*)</div><!--#footer-->`
	
*	Remove the Help section:

	`(?s).<div class="non-printing" id="help">(.*)</div><!--#help .non-printing-->`

*	Remove the `live-test` divs. DotAll Regex: 

	`(?s).<div class="live-test non-printing" id="live-test">(.*)</div><!--#live-test .live-test .non-printing-->`
	
*	Replace the button that once opened the `live-test` with a link to the online Learning Station. That is, using a *normal* search-and-replace, replace 

	`<p><a class="button non-printing" href="#live-test" id="live-test-show">Open chapter test</a></p>`
	
	with 
	
	`<p><a class="button non-printing" href="http://ls.bettercare.co.za">Online tests</a></p>`

*	Replace videos with a link to the Learning Station. (The main reason is that iframes are invalid in EPUB2 XHTML 1.1.) This must be done manually.
	*	Search for `videowrapper` to find instances of embedded videos.
	*	Replace all references to specific videos with `<p>To watch the videos, visit <a href="http://ls.bettercare.co.za">the online version of this book</a>.</p>`.

### Add metadata, semantics and TOC
	
*	Add basic metadata to your epub using Sigil's Metadata Editor. Include at least:
	*	title: subtitle
	*	author
	*	date of creation
	*	publisher (Bettercare)
	*	ISBN
	*	Relation ISBN (we use the print ISBN as a parent ISBN)
*	Add semantics (right click the file name in Sigil for the semantics context menu) to:
	*	key HTML files
	*	the cover JPG.
*	Generate the epub's table of contents (Tools > Table Of Contents…).

### Validate

Validate the epub in Sigil and fix any validation errors. Sigil won't catch everything though, so also validate with the [IDPF's online version of EpubCheck](http://validator.idpf.org/).

To avoid having to upload, you can run EpubCheck locally, too. Options:

*	Install [epubcheck](https://github.com/IDPF/epubcheck/wiki/Running) and run it from the command line
*	Use [pagina EPUB-Checker](http://www.pagina-online.de/produkte/epub-checker/). 

### Convert for Amazon Kindle

Use Calibre to convert EPUB to MOBI for upload to Kindle. While Kindle will convert automatically, by converting yourself you can preview the MOBI file before uploading. Use Calibre's default settings for conversion to Kindle.

## Saving in Word format

Sometimes our authors need to make updates in Word. To save a Bettercare book as Word:

1.	Get the plain HTML version of each chapter. If you run Jekyll locally, it's in your _site folder; otherwise:
	*	open the chapter online
	*	Right-click and 'Save as'
	*	Save as 'Web Page, HTML Only' (not 'Web Page, Complete').
2.	Open the file in LibreOffice in this way (this process is probably different in Word or other software):
	*	Have another document open in LibreOffice Writer already. (Can be a a blank doc.)
	*	Use File > Open
	*	Make sure you're still in 'Writer' and not 'Writer/Web'. 'LibreOffice Writer/Web' is a variant of Writer that will *only* let you save as HTML or .txt, not as a Word document.
3.	Delete all comments (in LibreOffice, click the dropdown on any comment and select 'Delete all comments')
4.	At the start of each chapter, delete the Help section (everything up to the chapter number)
5.	At the start of each chapter, delete the chapter-test links and frame between the chapter head and objectives heading.
6.	Select All (Ctrl+A) and change the font to Times New Roman. (Most others you send this to should have that font, which is better than their computer not having your font, and guessing which font to use instead.)
7.	Change the formatting of the key-concept boxes. To do this in LibreOffice:
	*	Click on a key-concept. It is formatted as 'Quotations'.
	*	Open the Styles and Formatting palette (F11). 
	*	'Quotations' should be selected because your cursor is on a quotation/key-concept box.
	*	Right-click 'Quotations' in the palette and select 'Modify'. The Paragraph Styles dialog will open.
	*	In the Font tab, under Style, select Bold.
	*	In the Borders tab, under default, click the button that puts a solid border all around the paragraph.
	*	At the bottom of the Paragraph Style dialog, click Apply. Your bold and border styling should take effect on all the key-concept paragraphs.
	*	Note that this styling will also affect all figures with captions, because they are also 'Quotations' in the underlying HTML. This is fine. But:
	*	Separate key-concepts from figures with a paragraph of Default Style text, where they follow each other and appear joined. (Search for 'Figure' to scan through the document for this quickly.)
8.	Change the formatting of the Note text in the same way, in the Styles and Formatting palette: modify 'List Contents' to be grey.
8.	At the end of each chapter, delete the navigation text and links ('Library...').
9.	Save as .docx.

Here is the short checklist version of that process, for quick reference while working:

1.	Delete comments
2.	Delete help (start), test links, and nav (end) sections
3.	Change font to TNR
4.	Change formatting of 'Quotations' and 'List Contents' styles
5.	Check for key-concepts appearing merged with figures.
6.	Save as .docx.

Notes
:	1.	The save-as process adds a couple of new comments at the top of the file. You can ignore them.
	2.	Pandoc would be great, but it doesn't support some key table features, so tables convert to normal text.
	3.	It would be great to import/load styles rather than change styles manually in every file. But we have not been able to get LibreOffice to load styles from another document in this context.

