<nav class="breadcrumb">
	<ul>
		<? $x = 0; foreach($site->breadcrumb() AS $crumb) { ?>
			<li><a<?php echo ($crumb->isActive()) ? ' class="active"' : '' ?> href="<?php echo $crumb->url() ?>"><? if ($x==0) echo 'Home'; else echo $crumb->title(); ?> &rsaquo;</a></li>
		<? $x++; } ?>
	</ul>
</nav>