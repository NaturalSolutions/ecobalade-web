<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($fields as $id => $field): ?>
		<?php if ($id == 'nothing') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $thumb =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>


		<?php if ($id == 'nothing_1') : ?>
				<?php if (!empty($field->content) && $field->content != ''): ?>
						<?php $image =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>

		<?php if ($id == 'picture') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $picture =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>

		<?php if ($id == 'comment_body') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $comment_body =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>

		<?php if ($id == 'name') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $name =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>

		<?php if ($id == 'created') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $created =  $field->content; ?>
				<?php endif; ?>
		<?php endif;?>
<?php endforeach; ?>



<div class="row-fluid contentOfOneComment">
	

	<div class="span2 leftZoneOfComment">
		<?php echo $picture; ?>
	</div>
	<div class="span10 rightZoneOfComment">
		<div class="arrow-left"></div>
		<p class='name'><?php echo $name; ?><i class='created'><?php echo $created; ?></i></p>
		<p class='comment_body'><?php echo $comment_body; ?></p>

		<?php echo $image; ?>
		
	</div>
</div>