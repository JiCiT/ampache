<?php
/*

 Copyright (c) 2001 - 2007 Ampache.org
 All rights reserved.

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License v2
 as published by the Free Software Foundation. 

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/
$ajax_url = Config::get('ajax_url'); 

// Get the count of the number of items in their playlist
?>
<div>
	<a href="#" onclick="ajaxPut('<?php echo $ajax_url; ?>?action=basket&amp;type=clear_all');return true;"><?php echo get_user_icon('delete'); ?></a>
	<a href="<?php echo Config::get('web_path'); ?>/stream.php?action=basket"><?php echo get_user_icon('all'); ?></a>
	<?php echo __('There are currently %count% items in your playlist','%count%',$GLOBALS['user']->playlist->count_items()); ?>
</div>