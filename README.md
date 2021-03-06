<img align="right" src="assets/gammafix-logo.png">

# GammaFix for Mac OS X 10.0+

[![GitHub version](https://badge.fury.io/gh/maltewassermann%2Fgammafix.svg)](https://badge.fury.io/gh/maltewassermann%2Fgammafix)

---

__A PNG image optimizer for the web.__

GammaFix is a tool that allows web designers to correct the gAMA information from PNG files to get a consistent result in all browsers.

## The Problem
*Effective in 2009*

When images are used as parts of a designs, consistent color handling is often more important than colorimetric correcness. For a design that combines CSS and images, it’s important that a color with a particular color value is displayed consistently regardless of the source—style sheet or image file—of the color value.

PNG breaks the consistency. When the gAMA of PNG images is disturbed but the CSS colors are left untouched, the colors no longer match.

## Usage
- Drag'n'drop your PNG images into the application icon
- It will clean-up your files automatically and duplicate your file with the suffix 'fix.png'

![Usage](assets/usage.jpg)

## Build Dependencies
- [Platypus](http://sveinbjorn.org/platypus) – Mac OS X developer tool that creates application bundles from scripts
- [PNGCrush](http://pmt.sourceforge.net/pngcrush) – PNGCrush is a free and open source command-line utility for optimizing PNG image files
