Helpers
=======

A PHP/Jquery template set to help with common tasks mostly using Jquery after ready. The goal is to simply and quickly bypass things that I would normally find hard to control. This code is developed for webkit only and legacy gets left behind. Why? An old browser was new at one time but now it will in some way fail its internet driving lessons which means that it is now 'incompatable software'. It is not the job of a developer to hack the old, it is a developers job to hack the new.
Encoraging people to migrate, saving yourself time by showing that things may be switched off for legacy and providiing an alternative browser solution is the way to develop for the future.

RIM
===

> Over-come strange behavior with screen size and element position. Place everything inside
> the rim. I called this 'rim' because I'm tired of getting f***ed by viewport and bad mobile browsers.
> The four divs inside #rim are to be deleted before each use. Put all elements inside #rim.

- Handles page resizes
- Always fits the screen on mobile (Size is 'as-is' on browsers)
- Makes viewport unnessesary
- rim widht/height px/% is now the correct standard for screen size and element position
- relative and absolute positions behave

TODO: device orientation rim rotation

.inp
====

> Content editable divs that behave!

- Watermarks with no extra elements
- Color text for error or success easy to add
- Paste
- No return and one line only
- CSS styled
