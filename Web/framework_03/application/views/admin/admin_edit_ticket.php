<h1><?php url(lang('title_admin'), 'admin/admin_category'); ?> <i class="icon-arrow-right2"></i> <?php url(lang('title_ticket'), 'admin/admin_ticket'); ?></h1>
<h2><?php echo $ticket->title; ?></h2>
<div class="post">
	<?php echo $ticket->message; ?>
	<div class="post_login"><?php echo $ticket->login; ?></div>
</div>
<?php
foreach ($chat as $comment)
{
	echo "<div class='comment'>";
	echo $comment->message;
	echo "<div class='post_login_comment'>";
	echo $comment->login;
	echo "</div></div>";
}
?>
<form method="post" action="<?php echo site_url('admin/admin_edit_ticket/'.$ticket->id); ?>">
	<div class="field">
		<textarea class="fullarea_comment" type="text" placeholder="<?php echo lang('form_message'); ?>" name="message"></textarea>
	</div>
	<div class="field">
		<input type="submit" value="<?php echo lang('btn_comment'); ?>" class="btn" name="submit">
	</div>
</form>
<hr>
<form method="post" action="<?php echo site_url('admin/admin_edit_status/'.$ticket->id); ?>">
	<div class="field">
	<select name="status" class="btn">
		<option value="OPEN" <?php if ($ticket->status == "OPEN") echo "selected"; ?>><?php echo lang('ticket_open'); ?></option>
		<option value="INPROGRESS" <?php if ($ticket->status == "INPROGRESS") echo "selected"; ?>><?php echo lang('ticket_inprogress'); ?></option>
		<option value="CLOSE" <?php if ($ticket->status == "CLOSE") echo "selected"; ?>><?php echo lang('ticket_close'); ?></option>
	</select>
		<input type="submit" value="<?php echo lang('btn_update'); ?>" class="btn" name="submit">
	</div>
</form>