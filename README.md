# fetpl


Front-end Template Starter



## Packed with
- Compatible With [Bootstrap 3.1.1](http://getbootstrap.com/)
- [bootstrap-fileupload.min.js](http://jasny.github.io/bootstrap/javascript/#fileinput)
- [jQuery](http://jquery.com/) via [CDN](http://code.jquery.com/jquery.min.js), with a local fallback.
- [jQueryui](http://jqueryui.com/) via [CDN](http://code.jquery.com/ui/1.10.4/jquery-ui.min.js), with a local fallback.
- jQuery UI Themes *(jqueryui.scss)* comlied to *(jqueryui.css)*
- [jQuery UI Touch Punch](http://touchpunch.furf.com/) *(small hack that enables the use of touch events)*
- Preprocessor (SCSS & Compass)


## Getting Started

Download from one of the following options:

1. HTTPS clone URL ──  `git clone https://github.com/ikantam/fetpl.git`.
2. SSH clone URL  ──   `git@github.com:ikantam/fetpl.git`.
3. [Download](https://github.com/ikantam/fetpl/archive/master.zip) as .zip


## Installing Grunt

```
npm install
```
Watch
```
grunt
```


## Snippets:

* Bootstrap [grid examples](http://jsfiddle.net/ElmahdiMahmoud/k7n5E/2/embedded/result/)
* [Helper classes](#helper-classes)
  * [Text helper classes](#text-helper-classes)
  * [Blocks](#blocks)
* [SCSS snippets](#scss-snippets)
  * [Breakpoint](#breakpoint)
  * [Alpha variant](#alpha-variant)
  * [Positions](#positions)
  * [CSS3 Transition and Transform](#css3-transition-and-transform)
  * [Background](#background)
* [Js snippets](#js-snippets)
#### Helper classes

Text helper classes

```html
<tag class="text-uc"> <!-- uppercase -->
<tag class="text-ul"> <!-- underline -->
<tag class="text-lt"> <!-- line through -->
```
Alignment

```html
<!-- floats -->
<tag class="text-center">
<tag class="text-center">

<!-- text-alignment -->
<tag class="text-center">
<tag class="text-right">
<tag class="text-left">
```

#### Blocks
```html
<tag class="block-center">
```

#### SCSS snippets

##### Breakpoint

```css
@include breakpoint(mid-devices)  {} /* 998px */
@include breakpoint(range-screen) {} /* 1150px */
@include breakpoint(tablet)       {} /* 768px */
@include breakpoint(sm-devices)   {} /* 660px */
```

##### Alpha variant
Alpha variant is opacity `color` or `background` with fallback for old browsers.
```css
/* Background opacity */
@include alpha-variant(bg, #fff, .5);
@include alpha-variant(background, #fff, .5);
/* Color opacity */
@include alpha-variant(color, #fff, .5);
```
> compass: `@include opaque` `@include transform` `@include opacity(.5)`

##### Positions
```css
@include fixed($offset);
@include relative($offset);
@include absolute($offset);
```

##### CSS3 Transition and Transform
```css
@include transition-property(width);
@include transition-delay(1s);
@include transition-duration(1s);
@include transition-timing-function(ease-in);
/* Or transition shorthand */
@include single-transition(all, .6s, ease);

/* Transform shorthand */
@include transform($transform);
@include transform-origin(50%, 50%);

/* Miscellaneous */
@include backface-visibility(visibility);
```

##### Background
```css
/* background size */
@include background-size(cover);
/* gradient background */
@include background-image(linear-gradient(rgba(250,250,250,.8), rgba(204, 204, 204,.7)));
```


##### Js snippets

###### [Toggle](http://jsfiddle.net/ElmahdiMahmoud/gkXVF/2/)
```html
<tag class="set-togg" data-getter="any">Toggle</tag>
<tag data-setter="any" class="is-hidden"></tag>
```
```js
$('.set-togg').on('click', function () {
    var $this = $(this),
        _dGet = $this.attr('data-getter'),
        _dSet = $('[data-setter=' + _dGet + ']');

    _dSet.toggleClass('is-hidden');

    return false;
});
```

---

## Contributors

- [@ElmahdiMahmoud](https://twitter.com/ElmahdiMahmoud)
- [@IkantamCorp](http://www.ikantam.com/)


