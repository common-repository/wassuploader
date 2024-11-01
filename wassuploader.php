<?php

/*
Plugin Name: WassupLoader
Plugin URI: http://www.doc4design.com/plugins/wassuploader
Description: Add a dashboard shortcut to the Upload Screen
Version: 0.12
Author: Doc4 / Ozh
Author URI: http://www.doc4design.com
*/

/******************************************************************************

Copyright 2009  Doc4 : info@doc4design.com

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
The license is also available at http://www.gnu.org/copyleft/gpl.html

*********************************************************************************/
add_action('admin_init', create_function('', "wp_enqueue_script('thickbox');"));
add_action('admin_head', 'wassup_head');
add_action('dashmenu', 'wassup_addlink');

function wassup_head() {
	echo '<link href="'.get_bloginfo('siteurl').'/wp-includes/js/thickbox/thickbox.css" rel="stylesheet" type="text/css" />'."\n";
	echo '<link href="'.get_bloginfo('siteurl').'/wp-content/plugins/wassuploader/css/UpStyle.css" rel="stylesheet" type="text/css" />'."\n";
}

function wassup_addlink() {
	echo '<li><a class="thickbox" href="media-upload.php?TB_iframe=true&amp;type=quickupload" target="_blank">Upload</a></li>';
}
		
?>