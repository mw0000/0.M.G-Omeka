<?php

// custom number of pages on items/browse
// https://omeka.readthedocs.io/en/latest/Reference/filters/%3Cmodel%3Es_browse_per_page.html

class CustomItemsBrowsePlugin extends Omeka_Plugin_AbstractPlugin
{

    protected $_filters = array(
    
		'items_browse_per_page'
    
    );
    
    public function filterItemsBrowsePerPage()
    {
        return 6;
    }
}
