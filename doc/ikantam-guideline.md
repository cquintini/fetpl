# Ikantam Frontend Guidelines v0.1.0

## HTML

### Syntax and Formatting

* Use two space indents, no tabs.
* Always use double quotes, never single quotes, on attributes. `src=""`
* Don't include a trailing slash in self-closing elements `<img src="">`

### HTML5 doctype 
`<!DOCTYPE html>`

### Language attribute 

`<html lang="en-us">`

[full list of language codes](http://www.sitepoint.com/web-foundations/iso-2-letter-language-codes/) at Sitepoint  

### IE compatibility mode 

`<meta http-equiv="X-UA-Compatible" content="IE=Edge">`

For more information, [read this awesome Stack Overflow article](http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge-e).

### Character encoding 
`<meta charset="UTF-8">`

### CSS and JavaScript includes 

Per HTML5 spec, typically there is no need to specify a `type` when including CSS and JavaScript files as `text/css` and `text/javascript` are their respective defaults.

#### HTML5 spec links
* [Using link](http://www.w3.org/TR/2011/WD-html5-20110525/semantics.html#the-link-element)
* [Using style](http://www.w3.org/TR/2011/WD-html5-20110525/semantics.html#the-style-element)
* [Using script](http://www.w3.org/TR/2011/WD-html5-20110525/scripting-1.html#the-script-element)

### Attribute order
HTML attributes should come in this particular order for easier reading of code.
1.  `class`
2. `id, name`
3. `data-*`
4. `src, for, type, href, value`
5. `title, alt`
6. `aria-*, role`

```html
<a class="..." id="..." data-*="..." href="#">
	... 
</a>

<input class="..." type="text">

<img src="..." alt="...">
```

### Boolean attributes

A boolean attribute is one that needs no declared value. XHTML required you to declare a value, but HTML5 has no such requirement.  In short, don't add a value.

```html
<input type="text" disabled>

<input type="checkbox" value="1" checked>

<select>
  <option value="1" selected>1</option>
</select>
```

### Reducing markup
Whenever possible, avoid superfluous parent elements when writing HTML. Many times this requires iteration and refactoring, but produces less HTML. Take the following example:

```html
<!-- Not so great -->
<span class="avatar">
  <img src="...">
</span>

<!-- Better -->
<img class="avatar" src="...">
```

## CSS

### Syntax and Formatting

* Use two space indents, no tabs.
* When grouping selectors, keep individual selectors to a single line.
* End all declarations with a semi-colon.  `;`
* Comma-separated property values should include a space after each comma (e.g., `box-shadow`). 
```html box-shadow: 0 1px 2px #ccc, inset 0 1px 0 #fff; ```
* Don't include spaces after commas within `rgb()`, `rgba()`, `hsl()`, `hsla()`, or `rect()` values. 
* Don't prefix property values or color parameters with a leading zero (e.g., `.5` instead of `0.5` and `-.5px` instead of `-0.5px`).
* Lowercase all hex values, e.g., `#fff`.
* Use shorthand hex values where available, e.g., `#fff` instead of `#ffffff`.
* Quote attribute values in selectors, e.g., `input[type="text"]`. [They’re only optional in some cases](https://mathiasbynens.be/notes/unquoted-attribute-values#css), and it’s a good practice for consistency.
* Avoid specifying units for zero values, e.g., `margin: 0;` instead of `margin: 0px;`.

### Declaration order

Related property declarations should be grouped together following the order:

1. Positioning
2. Box model
3. Typographic
4. Visual

```html
.declaration-order {
  /* Positioning */
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 100;

  /* Box-model */
  display: block;
  float: right;
  width: 100px;
  height: 100px;

  /* Typography */
  font: normal 13px "Helvetica Neue", sans-serif;
  line-height: 1.5;
  color: #333;
  text-align: center;

  /* Visual */
  background-color: #f5f5f5;
  border: 1px solid #e5e5e5;
  border-radius: 3px;

  /* Misc */
  opacity: 1;
}
```

### Don't use `@import`

Compared to `<link>`s, `@import` is slower, adds extra page requests, and can cause other unforeseen problems. Avoid them and instead opt for an alternate approach:

* Use multiple `<link>` elements
* Compile your CSS with a preprocessor like Sass or Less into a single file

For more information, [read this article by Steve Souders](http://www.stevesouders.com/blog/2009/04/09/dont-use-import/).

### Media query placement

Place media queries as close to their relevant rule sets whenever possible. Don't bundle them all in a separate stylesheet or at the end of the document. Doing so only makes it easier for folks to miss them in the future. Here's a typical setup.

```css
.element { ... }
.element-avatar { ... }
.element-selected { ... }

@media (min-width: 480px) {
  .element { ...}
  .element-avatar { ... }
  .element-selected { ... }
}
```

### Shorthand notation

Strive to limit use of shorthand declarations to instances where you must explicitly set all the available values. Common overused shorthand properties include:

* `padding`
* `margin`
* `font`
* `background`
* `border`
* `border-radius`

Often times we don't need to set all the values a shorthand property represents. For example, HTML headings only set top and bottom margin, so when necessary, only override those two values. Excessive use of shorthand properties often leads to sloppier code with unnecessary overrides and unintended side effects.

The Mozilla Developer Network has a great article on [shorthand properties](https://developer.mozilla.org/en-US/docs/Web/CSS/Shorthand_properties) for those unfamiliar with notation and behavior.


```css
/* Bad example */
.element {
  margin: 0 0 10px;
  background: red;
  background: url("image.jpg");
  border-radius: 3px 3px 0 0;
}

/* Good example */
.element {
  margin-bottom: 10px;
  background-color: red;
  background-image: url("image.jpg");
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
```

### Nesting in Less and Sass

Avoid unnecessary nesting. Just because you can nest, doesn't mean you always should. Consider nesting only if you must scope styles to a parent and if there are multiple elements to be nested.

```css
// Without nesting
.table > thead > tr > th { … }
.table > thead > tr > td { … }

// With nesting
.table > thead > tr {
  > th { … }
  > td { … }
}
```

### Comments

Code is written and maintained by people. Ensure your code is descriptive, well commented, and approachable by others. Great code comments convey context or purpose. Do not simply reiterate a component or class name.

Be sure to write in complete sentences for larger comments and succinct phrases for general notes.

```css
/* Bad example */
/* Modal header */
.modal-header {
  ...
}

/* Good example */
/* Wrapping element for .modal-title and .modal-close */
.modal-header {
  ...
}
```

### Class names
* Keep classes lowercase and use dashes (not underscores or camelCase). Dashes serve as natural breaks in related  class (e.g., `.btn` and `.btn-danger`)
* Avoid excessive and arbitrary shorthand notation. `.btn` is useful for button, but `.s` doesn't mean anything.
* Keep classes as short and succinct as possible.
* Use meaningful names; use structural or purposeful names over presentational.

```css
/* Bad example */
.t { ... }
.red { ... }
.header { ... }

/* Good example */
.tweet { ... }
.important { ... }
.tweet-header { ... }
```

### Selectors
* Use classes over generic element tag for optimum rendering performance.
* Avoid using several attribute selectors (e.g., `[class^="..."]`) on commonly occuring components. Browser performance is known to be impacted by these. 
* Keep selectors short and strive to limit the number of elements in each selector to three.

```css
/* Bad example */
span { ... }
.page-container #stream .stream-item .tweet .tweet-header .username { ... }
.avatar { ... }

/* Good example */
.avatar { ... }
.tweet-header .username { ... }
.tweet .avatar { ... }
```


*Inspired by [Code Guide](http://codeguide.co/), [Idiomatic CSS](https://github.com/necolas/idiomatic-css)  and the [GitHub Styleguide](https://github.com/styleguide/css).*
