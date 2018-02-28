SEO plugin 0.7.2
=================
Add Advanced Search Engine Optimization Features to Datenstrom Yellow CMS Platform.

<p align="center"><img src="seo-screenshot.png?raw=true" alt="Screenshot"></p>

## How do I install this?

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/pdanshov/yellow-plugin-seo/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the SEO plugin?

The plugin adds 2 markdown tags for you to use in the edit setup section on each page individually. The code goes into the header `<head></head>` of that page, in between the included `<script></script>` tags.

## How to configure a blog?

You can type the markup tags into the page edit/setup section on any and/or every page:

`googleStructData` allows the addition of Structured Markup Language.
`customHeaderScript` allows the addition of custom java script code.

## Example

Adding Google SML:

    --
    Title: ...
    TitleHeader: ...
    Description: ...
    Keywords: ...
    googleStructData: {  "@context": "http://schema.org",  "@type": "Organization",  "url": "http://www.example.com",  "name": "Org. Inc.",  "logo": "http://www.example.com/media/images/logo.jpg", "contactPoint": {    "@type": "ContactPoint",    "telephone": "+1-222-333-4444",    "contactType": "Customer service"  }}
    Tagline: ...
    --


Adding Custom Javascript:

    --
    Title: ...
    TitleHeader: ...
    Description: ...
    Keywords: ...
    customHeaderScript: alert("Hello World!");
    Tagline: ...
    --


## Developer
---------
Peter Danshov for Datenstrom Yellow.
