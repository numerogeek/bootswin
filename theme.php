<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Menuparfait extends Theme
{
    public $name			= 'Bootswin';
    public $author			= 'Geoffrey Monté';
    public $author_website	= 'http://twitter.com/numerogeek';
    public $website			= 'http://twitter.com/numerogeek';
    public $description		= 'A Boostrap based template. Entire responsive. Windows 8 themed.';
    public $version			= '1.0';
	public $options 		= array(
			'show_breadcrumbs' 	=> array(
			'title'         => 'Do you want to show breadcrumbs?',
			'description'   => 'If selected it shows a string of breadcrumbs at the top of the page.',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
	);
}

/* End of file theme.php */