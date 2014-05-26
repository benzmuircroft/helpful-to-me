replacement
===========

A PHP/Jquery template set to help with common tasks mostly using Jquery after ready attempting to simply and quickly bypass things that are normally hard to control and to taim new methods that currently have fuzzy implimentation. This code is developed for webkit only. Legacy gets left behind in this case as an old browser was new at one time but now it will in some way fail its internet driving lessons which means that it is now in fact 'incompatable software'. 

It is not the job of a developer to hack the old, it is a developers job to hack the new.

By encoraging people to migrate, saving time in development by showing that things may be switched off for legacy while providiing an alternative browser solution you succeed in developing for the future and people move over because they are otherwize missing the internet.

The goal of this project is to hack the new. While personally depreciating most standard html elements in favor of divs as a div can be made to look and act however and behaves as expected when used as a base element;

Redundant:
- button
- radio
- input
- viewport
 

JHTML
=====

A object for loading when fuction comlpete shows page
- load stages
- objectobserve
- splash & progress
- talks to REWIRE.io's build var when reload is neaded


♯rim
====

> **viewport replacement**. Over-come strange behavior with screen size and element position.
> The four divs inside #rim are to be deleted before each use. Put all elements inside #rim.

- Handles page resizes
- Always fits the screen on mobile (Size is 'as-is' on browsers)
- Makes viewport unnessesary
- rim widht/height px/% is now the correct standard for screen size and element position
- relative and absolute positions behave

TODO: device orientation rim rotation

.inp
====

> **input replacement**. Content editable divs that behave!

- Watermarks with no extra elements
- Color text for error or success easy to add
- Paste
- No return and one line only
- CSS styled

TODO: Get pasted text start-end text position

.btn
====

**button replacement**

.rdo
====

**radio replacement**

.sel
====

**select replacement**

.lst
====

**list replacement**

.tbl
====

**list replacement**

.bgi
====

**css background-image replacement** 

Classes: 

- **.cenw**
- **.cenh**
- **.cenb**
- **.xywh** Absolute x, y, width, height. mesurments can be px or %; 

```html
    <div class="bgi whxy" src="image.png" whxy="0px,0px,100%,100%"></div>
```

.tre
====

**list tree**
- .ct
- .lt
- .rt
- .bt
 

n
=

**paragraph/span replacement**

document.createElement('n') registers <n> as a vaild tag with the browser

- css font-weight: normal

```html
    <b>Bold <n>Normal</n></b>
```

b .tytl and .hylt
=================

- .tytl css text-size 22px
- .hylt css color #FFF



font-weight: normal



