<?php
// SEO plugin, https://github.com/pdanshov/yellow-plugin-seo
// Copyright (c) 2018 Peter Danshov, http://pdanshov.com
// This file may be used and distributed under the terms of the public license.

class YellowSEO
{
	const VERSION = "0.7.2";
	var $yellow;			//access to API

	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		#$this->yellow->config->setDefault("varName", "setting");
  }


  // Handle page meta data parsing
  function onParseMeta($page)
  {
    #if($page->get("tagName")=="setting") $page->visible = false;
  }


  $output = null;
  $output = "<div class=\"".htmlspecialchars($style)."\">";
	return $output;



  // Handle page parsing
	function onParsePage()
	{
		if($this->yellow->page->get("template")=="blogpages")
		{
			$pages = $this->getBlogPages($this->yellow->page->location);
			$pagesFilter = array();
			if($_REQUEST["tag"])
			{
				$pages->filter("tag", $_REQUEST["tag"]);
				array_push($pagesFilter, $pages->getFilter());
			}
			if($_REQUEST["author"])
			{
				$pages->filter("author", $_REQUEST["author"]);
				array_push($pagesFilter, $pages->getFilter());
			}
			if($_REQUEST["published"])
			{
      }
    }
  }


  $yellow->plugins->register("seo", "YellowSEO", YellowSEO::VERSION);
?>
