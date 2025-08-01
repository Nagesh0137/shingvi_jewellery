<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Supplier Paid Payment Slip</title>
	<style type="text/css">
		/*--------------------------------------------------------------
>> TABLE OF CONTENTS:
----------------------------------------------------------------
1. Normalize
2. Typography
3. Invoice General Style
--------------------------------------------------------------*/


/*--------------------------------------------------------------
2. Normalize
----------------------------------------------------------------*/

@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap");
*,
::after,
::before {
    box-sizing: border-box;
}

html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
}


/* Sections
   ========================================================================== */


/**
 * Remove the margin in all browsers.
 */

body {
    margin: 0;
}


/**
 * Render the `main` element consistently in IE.
 */

main {
    display: block;
}


/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
    font-size: 2em;
    margin: 0.67em 0;
}


/* Grouping content
   ========================================================================== */


/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
    box-sizing: content-box;
    /* 1 */
    height: 0;
    /* 1 */
    overflow: visible;
    /* 2 */
}


/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
    font-family: monospace, monospace;
    /* 1 */
    font-size: 1em;
    /* 2 */
}


/* Text-level semantics
   ========================================================================== */


/**
 * Remove the gray background on active links in IE 10.
 */

a {
    background-color: transparent;
}


/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
    border-bottom: none;
    /* 1 */
    text-decoration: underline;
    /* 2 */
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    /* 2 */
}


/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
    font-weight: bolder;
}


/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
    font-family: monospace, monospace;
    /* 1 */
    font-size: 1em;
    /* 2 */
}


/**
 * Add the correct font size in all browsers.
 */

small {
    font-size: 80%;
}


/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sub {
    bottom: -0.25em;
}

sup {
    top: -0.5em;
}


/* Embedded content
   ========================================================================== */


/**
 * Remove the border on images inside links in IE 10.
 */

img {
    border-style: none;
}


/* Forms
   ========================================================================== */


/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    /* 1 */
    font-size: 100%;
    /* 1 */
    line-height: 1.15;
    /* 1 */
    margin: 0;
    /* 2 */
}


/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input {
    /* 1 */
    overflow: visible;
}


/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select {
    /* 1 */
    text-transform: none;
}


/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type=button],
[type=reset],
[type=submit] {
    -webkit-appearance: button;
}


/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner {
    border-style: none;
    padding: 0;
}


/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type=button]:-moz-focusring,
[type=reset]:-moz-focusring,
[type=submit]:-moz-focusring {
    outline: 1px dotted ButtonText;
}


/**
 * Correct the padding in Firefox.
 */

fieldset {
    padding: 0.35em 0.75em 0.625em;
}


/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
    box-sizing: border-box;
    /* 1 */
    color: inherit;
    /* 2 */
    display: table;
    /* 1 */
    max-width: 100%;
    /* 1 */
    padding: 0;
    /* 3 */
    white-space: normal;
    /* 1 */
}


/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
    vertical-align: baseline;
}


/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
    overflow: auto;
}


/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type=checkbox],
[type=radio] {
    box-sizing: border-box;
    /* 1 */
    padding: 0;
    /* 2 */
}


/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type=number]::-webkit-inner-spin-button,
[type=number]::-webkit-outer-spin-button {
    height: auto;
}


/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type=search] {
    -webkit-appearance: textfield;
    /* 1 */
    outline-offset: -2px;
    /* 2 */
}


/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type=search]::-webkit-search-decoration {
    -webkit-appearance: none;
}


/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
    -webkit-appearance: button;
    /* 1 */
    font: inherit;
    /* 2 */
}


/* Interactive
   ========================================================================== */


/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
    display: block;
}


/*
 * Add the correct display in all browsers.
 */

summary {
    display: list-item;
}


/* Misc
   ========================================================================== */


/**
 * Add the correct display in IE 10+.
 */

template {
    display: none;
}


/**
 * Add the correct display in IE 10.
 */

[hidden] {
    display: none;
}


/*--------------------------------------------------------------
2. Typography
----------------------------------------------------------------*/

body,
html {
    color: #777777;
    font-family: "Inter", sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5em;
    overflow-x: hidden;
    background-color: #f5f7ff;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    clear: both;
    color: #111111;
    padding: 0;
    margin: 0 0 20px 0;
    font-weight: 500;
    line-height: 1.2em;
}

h1 {
    font-size: 60px;
}

h2 {
    font-size: 48px;
}

h3 {
    font-size: 30px;
}

h4 {
    font-size: 24px;
}

h5 {
    font-size: 18px;
}

h6 {
    font-size: 16px;
}

p,
div {
    margin-top: 0;
    line-height: 1.5em;
}

p {
    margin-bottom: 15px;
}

ul {
    margin: 0 0 25px 0;
    padding-left: 20px;
    list-style: square outside none;
}

ol {
    padding-left: 20px;
    margin-bottom: 25px;
}

dfn,
cite,
em,
i {
    font-style: italic;
}

blockquote {
    margin: 0 15px;
    font-style: italic;
    font-size: 20px;
    line-height: 1.6em;
    margin: 0;
}

address {
    margin: 0 0 15px;
}

img {
    border: 0;
    max-width: 100%;
    height: auto;
    vertical-align: middle;
}

a {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s ease;
}

a:hover {
    color: #2ad19d;
}

button {
    color: inherit;
    transition: all 0.3s ease;
}

a:hover {
    text-decoration: none;
    color: inherit;
}

table {
    width: 100%;
    caption-side: bottom;
    border-collapse: collapse;
}

th {
    text-align: left;
}

td {
    border-top: 1px solid #eaeaea;
}

td,
th {
    padding: 10px 15px;
    line-height: 1.55em;
}

dl {
    margin-bottom: 25px;
}

dl dt {
    font-weight: 600;
}

b,
strong {
    font-weight: bold;
}

pre {
    color: #777777;
    border: 1px solid #eaeaea;
    font-size: 18px;
    padding: 25px;
    border-radius: 5px;
}

kbd {
    font-size: 100%;
    background-color: #777777;
    border-radius: 5px;
}


/*--------------------------------------------------------------
3. Invoice General Style
----------------------------------------------------------------*/

.cs-f10 {
    font-size: 10px;
}

.cs-f11 {
    font-size: 11px;
}

.cs-f12 {
    font-size: 12px;
}

.cs-f13 {
    font-size: 13px;
}

.cs-f14 {
    font-size: 14px;
}

.cs-f15 {
    font-size: 15px;
}

.cs-f16 {
    font-size: 16px;
}

.cs-f17 {
    font-size: 17px;
}

.cs-f18 {
    font-size: 18px;
}

.cs-f19 {
    font-size: 19px;
}

.cs-f20 {
    font-size: 20px;
}

.cs-f21 {
    font-size: 21px;
}

.cs-f22 {
    font-size: 22px;
}

.cs-f23 {
    font-size: 23px;
}

.cs-f24 {
    font-size: 24px;
}

.cs-f25 {
    font-size: 25px;
}

.cs-f26 {
    font-size: 26px;
}

.cs-f27 {
    font-size: 27px;
}

.cs-f28 {
    font-size: 28px;
}

.cs-f29 {
    font-size: 29px;
}

.cs-light {
    font-weight: 300;
}

.cs-normal {
    font-weight: 400;
}

.cs-medium {
    font-weight: 500;
}

.cs-semi_bold {
    font-weight: 600;
}

.cs-bold {
    font-weight: 700;
}

.cs-m0 {
    margin: 0px !important;
}

.cs-mb0 {
    margin-bottom: 0px;
}

.cs-mb1 {
    margin-bottom: 1px;
}

.cs-mb2 {
    margin-bottom: 2px;
}

.cs-mb3 {
    margin-bottom: 3px;
}

.cs-mb4 {
    margin-bottom: 4px;
}

.cs-mb5 {
    margin-bottom: 5px;
}

.cs-mb6 {
    margin-bottom: 6px;
}

.cs-mb7 {
    margin-bottom: 7px;
}

.cs-mb8 {
    margin-bottom: 8px;
}

.cs-mb9 {
    margin-bottom: 9px;
}

.cs-mb10 {
    margin-bottom: 10px;
}

.cs-mb11 {
    margin-bottom: 11px;
}

.cs-mb12 {
    margin-bottom: 12px;
}

.cs-mb13 {
    margin-bottom: 13px;
}

.cs-mb14 {
    margin-bottom: 14px;
}

.cs-mb15 {
    margin-bottom: 15px;
}

.cs-mb16 {
    margin-bottom: 16px;
}

.cs-mb17 {
    margin-bottom: 17px;
}

.cs-mb18 {
    margin-bottom: 18px;
}

.cs-mb19 {
    margin-bottom: 19px;
}

.cs-mb20 {
    margin-bottom: 20px;
}

.cs-mb21 {
    margin-bottom: 21px;
}

.cs-mb22 {
    margin-bottom: 22px;
}

.cs-mb23 {
    margin-bottom: 23px;
}

.cs-mb24 {
    margin-bottom: 24px;
}

.cs-mb25 {
    margin-bottom: 25px;
}

.cs-mb26 {
    margin-bottom: 26px;
}

.cs-mb27 {
    margin-bottom: 27px;
}

.cs-mb28 {
    margin-bottom: 28px;
}

.cs-mb29 {
    margin-bottom: 29px;
}

.cs-mb30 {
    margin-bottom: 30px;
}

.cs-mb40 {
    margin-bottom: 40px;
}

.cs-mb50 {
    margin-bottom: 50px;
}

.cs-mb70 {
    margin-bottom: 70px;
}

.cs-mb80 {
    margin-bottom: 100px;
}

.cs-mr5 {
    margin-right: 5px;
}

.cs-mr10 {
    margin-right: 10px;
}

.cs-mr15 {
    margin-right: 15px;
}

.cs-mr20 {
    margin-right: 20px;
}

.cs-mr22 {
    margin-right: 22px;
}

.cs-mr28 {
    margin-right: 28px;
}

.cs-mt30 {
    margin-top: 30px;
}

.cs-mt50 {
    margin-top: 50px;
}

.cs-mr50 {
    margin-right: 50px;
}

.cs-mr60 {
    margin-right: 50px;
}

.cs-mr120 {
    margin-right: 120px;
}

.cs-mr97 {
    margin-right: 97px;
}

.cs-ml10 {
    margin-left: 10px;
}

.cs-mt5 {
    margin-top: 5px;
}

.cs-mt12 {
    margin-top: 12px;
}

.cs-mt20 {
    margin-top: 20px;
}

.cs-mt25 {
    margin-top: 25px;
}

.cs-mt30 {
    margin-top: 30px;
}

.cs-mt100 {
    margin-top: 100px;
}

.cs-pt25 {
    padding-top: 25px;
}

.cs-p0 {
    padding: 0px !important;
}

.cs-p50 {
    padding: 50px !important;
}

.cs-p-t5 {
    padding-top: 5px !important;
}

.cs-p-t10 {
    padding-top: 10px !important;
}

.cs-p-b5 {
    padding-bottom: 5px !important;
}

.cs-p-b10 {
    padding-bottom: 10px !important;
}

.cs-p-25-50 {
    padding: 25px 50px !important;
}

.cs-width_1 {
    width: 8%;
}

.cs-width_2 {
    width: 16.66666667%;
}

.cs-width_3 {
    width: 25%;
}

.cs-width_4 {
    width: 33.33333333%;
}

.cs-width_5 {
    width: 41.66666667%;
}

.cs-width_6 {
    width: 50%;
}

.cs-width_7 {
    width: 58.33333333%;
}

.cs-width_8 {
    width: 66.66666667%;
}

.cs-width_9 {
    width: 75%;
}

.cs-width_10 {
    width: 83.33333333%;
}

.cs-width_11 {
    width: 91.66666667%;
}

.cs-width_12 {
    width: 100%;
}

.cs-accent_color,
.cs-accent_color_hover:hover {
    color: #2ad19d;
}

.cs-accent_bg,
.cs-accent_bg_hover:hover {
    background-color: #2ad19d;
}

.cs-primary_color {
    color: #111111;
}

.cs-secondary_color {
    color: #777777;
}

.cs-ternary_color {
    color: #353535;
}

.cs-dip_green_color {
    color: #2AD19D;
}

.cs-ternary_color {
    border-color: #eaeaea;
}

.cs-focus_bg {
    background: #f6f6f6;
}

.cs-white_bg {
    background: #ffffff;
}

.cs-accent_10_bg {
    background-color: rgba(42, 209, 157, 0.1);
}

.cs-container {
    max-width: 880px;
    padding: 30px 15px;
    margin-left: auto;
    margin-right: auto;
    z-index: 10;
}

.cs-container.style1 {
    max-width: 400px;
}

.cs-text_center {
    text-align: center;
}

.cs-text_right {
    text-align: right;
}

.cs-border_bottom_0 {
    border-bottom: 0;
}

.cs-border_top_0 {
    border-top: 0;
}

.cs-border_bottom {
    border-bottom: 1px solid #eaeaea;
}

.cs-border_top {
    border-top: 1px solid #eaeaea;
}

.cs-border_left {
    border-left: 1px solid #eaeaea;
}

.cs-border_right {
    border-right: 1px solid #eaeaea;
}

.cs-table_baseline {
    vertical-align: baseline;
}

.cs-round_border {
    border: 1px solid #eaeaea;
    overflow: hidden;
    border-radius: 6px;
}

.cs-border_none {
    border: none;
}

.cs-border_left_none {
    border-left-width: 0;
}

.cs-border_right_none {
    border-right-width: 0;
}

.cs-invoice.cs-style1 {
    background: #fff;
    border-radius: 10px;
    padding: 50px;
}

.cs-invoice.cs-style1.padding_40 {
    padding: 40px;
}

.cs-invoice.cs-style1 .cs-invoice_head {
    display: flex;
    justify-content: space-between;
}

.cs-invoice.cs-style1 .cs-invoice_head.cs-type1 {
    align-items: flex-end;
    padding-bottom: 25px;
    border-bottom: 1px solid #eaeaea;
}

.cs-invoice.cs-style1 .cs-invoice_head.cs-type1.border-bottom-none {
    border-bottom: none;
}

.cs-invoice.cs-style1 .cs-invoice_footer {
    display: flex;
}

.cs-invoice.cs-style1 .cs-invoice_footer table {
    margin-top: -1px;
}

.cs-invoice.cs-style1 .cs-left_footer {
    width: 55%;
    padding: 10px 15px;
}

.cs-invoice.cs-style1 .cs-right_footer {
    width: 46%;
}

.cs-invoice.cs-style1 .cs-note {
    display: flex;
    align-items: flex-start;
    margin-top: 40px;
}

.cs-invoice.cs-style1 .cs-note_left {
    margin-right: 10px;
    margin-top: 6px;
    margin-left: -5px;
    display: flex;
}

.cs-invoice.cs-style1 .cs-note_left svg {
    width: 32px;
}

.cs-invoice.cs-style1 .cs-invoice_left {
    max-width: 55%;
}

.cs-invoice.cs-style1 .cs-invoice_left.w-60 {
    max-width: 60%;
}

.cs-invoice.cs-style1 .cs-invoice_left.w-65 {
    max-width: 65%;
}

.cs-invoice.cs-style1 .cs-invoice_left.w-70 {
    max-width: 70%;
}

.cs-invoice.cs-style1 .cs-invoice_left.w-75 {
    max-width: 75%;
}

.cs-invoice.cs-style1 .cs-invoice_left.w-80 {
    max-width: 80%;
}

.cs-invoice_btns {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.cs-invoice_btns .cs-invoice_btn:first-child {
    border-radius: 5px 0 0 5px;
}

.cs-invoice_btns .cs-invoice_btn:last-child {
    border-radius: 0 5px 5px 0;
}

.cs-invoice_btn {
    display: inline-flex;
    align-items: center;
    border: none;
    font-weight: 600;
    padding: 8px 20px;
    cursor: pointer;
}

.cs-invoice_btn svg {
    width: 24px;
    margin-right: 5px;
}

.cs-invoice_btn.cs-color1 {
    color: #111111;
    background: rgba(42, 209, 157, 0.15);
}

.cs-invoice_btn.cs-color1:hover {
    background-color: rgba(42, 209, 157, 0.3);
}

.cs-invoice_btn.cs-color2 {
    color: #fff;
    background: #2ad19d;
}

.cs-invoice_btn.cs-color2:hover {
    background-color: rgba(42, 209, 157, 0.8);
}

.cs-table_responsive {
    overflow-x: auto;
}

.cs-table_responsive>table {
    min-width: 600px;
}

.cs-50_col>* {
    width: 50%;
    flex: none;
}

.cs-bar_list {
    margin: 0;
    padding: 0;
    list-style: none;
    position: relative;
}

.cs-bar_list::before {
    content: "";
    height: 75%;
    width: 2px;
    position: absolute;
    left: 4px;
    top: 50%;
    transform: translateY(-50%);
    background-color: #eaeaea;
}

.cs-bar_list li {
    position: relative;
    padding-left: 25px;
}

.cs-bar_list li:before {
    content: "";
    height: 10px;
    width: 10px;
    border-radius: 50%;
    background-color: #eaeaea;
    position: absolute;
    left: 0;
    top: 6px;
}

.cs-bar_list li:not(:last-child) {
    margin-bottom: 10px;
}

.cs-table.cs-style1.cs-type1 {
    padding: 10px 30px;
}

.cs-table.cs-style1.cs-type1 tr:first-child td {
    border-top: none;
}

.cs-table.cs-style1.cs-type1 tr td:first-child {
    padding-left: 0;
}

.cs-table.cs-style1.cs-type1 tr td:last-child {
    padding-right: 0;
}

.cs-table.cs-style1.cs-type2>* {
    padding: 0 10px;
}

.cs-table.cs-style1.cs-type2 .cs-table_title {
    padding: 20px 0 0 15px;
    margin-bottom: -5px;
}

.cs-table.cs-style2 td {
    border: none;
}

.cs-table.cs-style2 td,
.cs-table.cs-style2 th {
    padding: 12px 15px;
    line-height: 1.55em;
}

.cs-table.cs-style2 tr:not(:first-child) {
    border-top: 1px dashed #eaeaea;
}

.cs-list.cs-style1 {
    list-style: none;
    padding: 0;
    margin: 0;
}

.cs-list.cs-style1 li {
    display: flex;
}

.cs-list.cs-style1 li:not(:last-child) {
    border-bottom: 1px dashed #eaeaea;
}

.cs-list.cs-style1 li>* {
    flex: none;
    width: 50%;
    padding: 7px 0px;
}

.cs-list.cs-style2 {
    list-style: none;
    margin: 0 0 30px 0;
    padding: 12px 0;
    border: 1px solid #eaeaea;
    border-radius: 5px;
}

.cs-list.cs-style2 li {
    display: flex;
}

.cs-list.cs-style2 li>* {
    flex: 1;
    padding: 5px 25px;
}

.cs-heading.cs-style1 {
    line-height: 1.5em;
    border-top: 1px solid #eaeaea;
    border-bottom: 1px solid #eaeaea;
    padding: 10px 0;
}

.cs-no_border {
    border: none !important;
}

.cs-grid_row {
    display: grid;
    grid-gap: 20px;
    list-style: none;
    padding: 0;
}

.cs-col_2 {
    grid-template-columns: repeat(2, 1fr);
}

.cs-col_3 {
    grid-template-columns: repeat(3, 1fr);
}

.cs-col_4 {
    grid-template-columns: repeat(4, 1fr);
}

.cs-border_less td {
    border-color: transparent;
}

.cs-special_item {
    position: relative;
}

.cs-special_item:after {
    content: "";
    height: 52px;
    width: 1px;
    background-color: #eaeaea;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 0;
}

.cs-table.cs-style1 .cs-table.cs-style1 tr:not(:first-child) td {
    border-color: #eaeaea;
}

.cs-table.cs-style1 .cs-table.cs-style2 td {
    padding: 12px 0px;
}

.cs-ticket_wrap {
    display: flex;
}

.cs-ticket_left {
    flex: 1;
}

.cs-ticket_right {
    flex: none;
    width: 215px;
}

.cs-box.cs-style1 {
    border: 2px solid #eaeaea;
    border-radius: 5px;
    padding: 20px 10px;
    min-width: 150px;
}

.cs-box.cs-style1.cs-type1 {
    padding: 12px 10px 10px;
}

.cs-max_w_150 {
    max-width: 150px;
}

.cs-left_auto {
    margin-left: auto;
}

.cs-title_1 {
    display: inline-block;
    border-bottom: 1px solid #eaeaea;
    min-width: 60%;
    padding-bottom: 5px;
    margin-bottom: 10px;
}

.cs-box2_wrap {
    display: grid;
    grid-gap: 30px;
    list-style: none;
    padding: 0;
    grid-template-columns: repeat(2, 1fr);
}

.cs-box.cs-style2 {
    border: 1px solid #eaeaea;
    padding: 25px 30px;
    border-radius: 5px;
}

.cs-box.cs-style2 .cs-table.cs-style2 td {
    padding: 12px 0;
}


/* Sifat */

.tm-align-item-center {
    display: flex;
    align-items: center;
}

.tm-bg-gray {
    background-color: #f7f7f7;
}

.tm-border-radious-12 {
    border-radius: 12px;
}

.tm-padding-outside {
    padding: 12px 15px;
}

.tm-button-gray {
    background-color: #f7f7f7;
    border-radius: 12px;
    padding: 12px 26px 12px 26px;
}

.tm-button-gray a {
    color: #111111;
    font-size: 16px;
    font-weight: 500;
}

.tm-button-dark {
    background-color: #111111;
    border-radius: 8px;
    padding: 12px 26px 12px 26px;
}

.tm-button-dark a {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
}

.tm-button-primary {
    background-color: #2ad19d;
    border-radius: 8px;
    padding: 12px 26px 12px 26px !important;
}

.tm-button-primary span {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
}

.tm-button-primary svg {
    color: #fff;
}

.cs-invoice_btn .tm-button-primary :last-child {
    border-radius: 50px !important;
}

.tm-border {
    border: 1px solid #eaeaea;
}

.tm-bg-none {
    background: none !important;
}

.tm-p-16 p {
    font-size: 14px;
}

.tm-p-16 td {
    line-height: 10px !important;
}

.tm-consulting .tm-custom-td-padding {
    padding: 10px 0px;
}

.tm-consulting .tm-custom-td-padding td {
    line-height: 10px;
}

.tm-consulting .tm-consult-thead {
    margin: 20px;
    padding: 20px;
}

.tm-caption-txt {
    background-color: rgba(42, 209, 157, 0.1);
    border-radius: 5px;
    padding: 5px 10px;
}

.tm-border-1px {
    height: 1px;
    background-color: #ececef;
}

.tm-border-none tr:not(:first-child) {
    border-top: none !important;
}

.top {
    top: 0px;
}


/* Position */

.position-relative {
    position: relative;
}

.position-absolute {
    position: absolute;
}

.text-transform-uppercase {
    text-transform: uppercase;
}

.cs-table.cs-style2.padding-rignt-left td {
    padding: 12px 0px;
}

.cs-table.cs-style2.padding-rignt-left th {
    padding: 12px 0px;
}


/* Header style */

.top-header-section {
    position: relative;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    background-position: center;
    height: 130px;
    background-repeat: no-repeat;
    /* background-image: url(./img/Subtract.png); */
    background-image: url(../img/Subtract.png);
}

.top-header-section .header-text {
    position: relative;
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.top-bottom-section {
    position: relative;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    background-position: center;
    height: 130px;
    background-repeat: no-repeat;
    /*    background-image: url(/assets/img/bg-bottom.png); */
    background-image: url(../img/bg-bottom.png);
}

.flex-horizontal-center {
    width: 100%;
    display: flex;
    justify-content: center;
}

.cs-signature .signature-img {
    width: 155.956px;
    padding-bottom: 20px;
    border-bottom: 1px solid #000;
}

.cs-signature P {
    padding-top: 10px;
}


/* Border Start */

.cs-border-1 {
    content: "";
    height: 1px;
    width: 100%;
    margin-top: 9px;
    border: 0.5px dashed rgba(73, 73, 73, 0.768627451);
}

.cs-border {
    content: "";
    height: 1px;
    width: 100%;
    border: 1px dashed rgba(73, 73, 73, 0.768627451);
}

.cs-border.border-none {
    border: 0px dashed rgba(73, 73, 73, 0.768627451);
}

.cs-border_bottom.style_1 {
    border-bottom: 1px dashed rgba(73, 73, 73, 0.768627451);
}


/* flex Satrt */

.display-flex {
    display: flex;
}

.space-between {
    justify-content: space-between;
}

.align-items-flex-end {
    align-items: flex-end;
}

.justify-content-flex-end {
    justify-content: flex-end;
}

.justify-content-flex-start {
    justify-content: flex-start;
}

.justify-content-space-between {
    justify-content: space-between;
}

.justify-content-center {
    justify-content: center;
}

.flex-wrap {
    flex-wrap: wrap;
}

.gap-30 {
    gap: 30px;
}

.gap-40 {
    gap: 40px;
}

.gap-50 {
    gap: 50px;
}

.gap-60 {
    gap: 60px;
}

.gap-135 {
    gap: 135px;
}


/* Sifat */

.cs-ml30 {
    margin-left: 30px;
}

.cs-border-50percent {
    height: 1px;
    background-color: #777777;
    width: 100%;
}

.cs-mt15 {
    margin-top: 10px;
}

.align-item-center {
    align-items: center;
}

.justify-content {
    justify-content: center;
}

.cs-padding-outside {
    border: 1px dashed #ececef;
    border-radius: 5px;
}

.space-between {
    justify-content: space-between;
}

.cs-uppercase {
    text-transform: uppercase;
}

.cs-mt70 {
    margin-top: 70px;
}

.max-width120 {
    max-width: 120px;
}

.max-width90 {
    max-width: 90px;
}

.cs-top-bg {
    background-image: url(../img/top-bg.png);
    background-position: center top;
    background-repeat: no-repeat;
}

.cs-bottom-bg {
    background-image: url(../img/bottom-bg.png);
    background-position: center bottom;
    background-repeat: no-repeat;
}

.cs-top-bg2 {
    background-image: url(../img/bg-top-2.png);
    background-position: center top;
    background-repeat: no-repeat;
}

.cs-bottom-bg2 {
    background-image: url(../img/bg-bottom-2.png);
    background-position: center bottom;
    background-repeat: no-repeat;
}

.cs-bg-none {
    background: none !important;
}

.cs-bg-white {
    background: #fff;
}

.cs-border-radious25 {
    border-radius: 25px !important;
}

.btn-blanck {
    background: none;
}

.border-bottom-1 {
    border-bottom: 1px solid #ececef;
}

.cs-fuss {
    width: 1px;
    height: 20px;
    background-color: #ececef;
    margin: 0px 20px;
}

.cs-text-cap {
    border-bottom: 1px solid #2ad19d;
    margin-top: 20px;
}

.copybtn {
    cursor: pointer;
}

@media (max-width: 767px) {
    .cs-mobile_hide {
        display: none;
    }
    .cs-invoice.cs-style1 {
        padding: 30px 20px;
    }
    .cs-invoice.cs-style1 .cs-right_footer {
        width: 100%;
    }
}
.cs-logo{
	width: 120px;
	height: 60px;
}
@media (max-width: 500px) {
    .cs-invoice.cs-style1 .cs-logo {
        margin-bottom: 10px;
    }
    .cs-invoice.cs-style1 .cs-invoice_head {
        flex-direction: column;
    }
    .cs-invoice.cs-style1 .cs-invoice_head.cs-type1 {
        flex-direction: column-reverse;
        align-items: center;
        text-align: center;
    }
    .cs-invoice.cs-style1 .cs-invoice_head.cs-type1.column {
        flex-direction: column;
        gap: 15px;
    }
    .cs-invoice.cs-style1 .cs-invoice_head .cs-text_right {
        text-align: left;
    }
    .cs-list.cs-style2 li {
        flex-direction: column;
    }
    .cs-list.cs-style2 li>* {
        padding: 5px 20px;
    }
    .cs-grid_row {
        grid-gap: 0px;
    }
    .cs-col_2,
    .cs-col_3,
    .cs-col_4 {
        grid-template-columns: repeat(1, 1fr);
    }
    .cs-table.cs-style1.cs-type1 {
        padding: 0px 20px;
    }
    .cs-box2_wrap {
        grid-template-columns: repeat(1, 1fr);
    }
    .cs-box.cs-style1.cs-type1 {
        max-width: 100%;
        width: 100%;
    }
    .cs-invoice.cs-style1 .cs-invoice_left {
        max-width: 100%;
        flex-wrap: wrap;
        justify-content: center;
    }
    .cs-invoice.cs-style1 .cs-invoice_left.w-60 {
        max-width: 100%;
    }
    .cs-invoice.cs-style1 .cs-invoice_left.w-65 {
        max-width: 100%;
    }
    .cs-invoice.cs-style1 .cs-invoice_left.w-70 {
        max-width: 100%;
    }
    .cs-invoice.cs-style1 .cs-invoice_left.w-75 {
        max-width: 100%;
    }
    .cs-invoice.cs-style1 .cs-invoice_left.w-80 {
        max-width: 100%;
    }
    .cs-ml22 {
        margin-left: 0px;
    }
    .cs-mr15 {
        margin: 0px;
    }
    .cs-mt100 {
        margin-top: 50px;
    }
    .gap-135 {
        gap: 30px;
    }
    .mq-align-items {
        align-items: flex-end;
    }
}

@media print {
    .cs-hide_print {
        display: none !important;
    }
    
    body {
        background-color: #ffffff;
        height: 100%;
        overflow: hidden;
    }
}


/*# sourceMappingURL=style.css.map */
	@page
   {
/*      margin: 10px;*/
      margin-top: 0px;
   }
   body{
    background:white;
}
	</style>
</head>
<body>
	<?php 
		$sno='SP-'.$pay_det[0]['supplier_paid_payment_id'].''.str_replace('-','',$pay_det[0]['payment_date']);
	?>
        <div class="cs-invoice cs-style1">
            <div class="cs-invoice_in" id="download_section">
                <div class="display-flex space-between cs-type1 column border-bottom-none cs-mb10 tm-align-item-center">
                    <div class="cs-invoice_left display-flex">
                        <div><img class="cs-logo"  src="<?=base_url()?>assest/virtual_logo.png" alt="Logo"></div>
                    </div>
                    <div class="cs-invoice_right cs-text_right">
                        <div class="cs-invoice_number cs-primary_color cs-mb0 cs-f10  display-flex 
                            ">
                            <p class="cs-primary_color cs-mb0" style="font-size: 11px;"><b>Supplier Paid No:</b></p>
                            <p class="cs-mb0" style="font-size: 11px;"><?=$sno?></p>
                        </div>
                        <div class="cs-invoice_number cs-primary_color cs-mb0 cs-f10 display-flex">
                            <p style="font-size: 11px;" class="cs-primary_color cs-mb0"><b>Date:</b></p>
                            <p style="font-size: 11px;" class="cs-mb0"><?=date('d M Y',strtotime($pay_det[0]['payment_date']))?></p>
                        </div>
                    </div>
                </div>
                <div class="tm-border-1px" style="margin-bottom: 10px;"></div>
                <div class="cs-invoice_head">
                    <div class="cs-invoice_left cs-mr97">
                        <b class="cs-primary_color">Paid To:</b>
                        <p class="cs-mb8"><?=$supplier_det[0]['supplier_name']?> <br> <?=$supplier_det[0]['supplier_address']?> <br>+91 <?=$supplier_det[0]['supplier_mobile_no']?>
                        </p>
                    </div>
                    <div class="cs-invoice_right cs-text_right">
                        <b style="font-size: 18px;" class="cs-primary_color">Payment Slip</b>
                        <!-- <p>
                            237 Roanoke Road, North York,<br />Ontario, Canada<br />demo@email.com <br />+1-613-555-0141
                        </p> --> 
                    </div>
                </div>
                <div class="cs-table cs-style2">
                    <div>
                        <div class="cs-table_responsive">
                            <table>
                                <thead>
                                    <tr class="cs-focus_bg">
                                        <th style="width:20%;font-size: 13px;" class="cs-semi_bold cs-primary_color">Transaction no</th>
                                        <th style="width:20%;font-size: 13px;" class="cs-semi_bold cs-primary_color">Payment By</th>
                                        <th style="width:20%;font-size: 13px;" class="cs-semi_bold cs-primary_color">Payment Date</th>
                                        <th style="width:20%;font-size: 13px;" class="cs-semi_bold cs-primary_color cs-text_center">Pending Amount</th>
                                        <th style="width:20%;font-size: 13px;" class="cs-semi_bold cs-primary_color cs-text_right">Paid Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?=$pay_det[0]['transaction_no']?></td>
                                        <td>NEFT</td>
                                        <td><?=$pay_det[0]['payment_date']?></td>
                                        <td class="cs-text_center"><?=$pay_det[0]['total_pending']?></td>
                                        <td class="cs-text_right cs-primary_color"><?=$pay_det[0]['paid_amount']?></td>
                                    </tr>
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cs-table cs-style2">
                    <div class="cs-table_responsive">
                        <table>
                            <tbody>
                                <tr class="cs-table_baseline">
                                    <td class="cs-width_7 cs-primary_color">
                                        <b class="cs-primary_color">Note:</b>
                                        <?=$pay_det[0]['payment_note']?>
                                    </td>
                                    <td class="cs-width_3 cs-text_right">
                                        <p class="cs-primary_color cs-bold cs-f16">Paid:</p>
                                        <p class="cs-f16 ">Balance Due:</p>
                                    </td>
                                    <td class="cs-width_2 cs-text_rightcs-f16">
                                        <p class="cs-primary_color cs-bold cs-f16 cs-text_right"><?=$pay_det[0]['paid_amount']?></p>
                                        <p class="cs-f16 cs-text_right"><?=$pay_det[0]['pending_amount']?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="cs-text_center cs-padding-outside">
                    <p class="cs-primary_color cs-bold cs-mb5 cs-f16">Thank you for trusting us!</p>
                    <p class="cs-primary_color cs-m0">"We truly appreciate your business and look forward to continuing our partnership.<br> Your support is invaluable to us. Best regards, Virtual White Flame"
                    </p>
                </div>
                
            </div>
        </div>
<script>
window.onload = function() {
        window.print();
        }
      </script>
</body>
</html>