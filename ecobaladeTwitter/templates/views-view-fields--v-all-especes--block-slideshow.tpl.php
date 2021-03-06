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
<?php global $base_url; ?>

<?php foreach ($fields as $id => $field): ?>
		<?php if ($id == 'title') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $title =  $field->content; ?>
						
				<?php endif; ?>
		<?php endif;?>
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>	
		<?php if ($id == 'path') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $path =  $field->content; ?>
						
				<?php endif; ?>
		<?php endif;?>
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
		<?php if ($id == 'field_photo_resume') : ?>
				<?php if (!empty($field->content)): ?>
						<?php $field_photo_resume =  $field->content; ?>
						
				<?php endif; ?>
		<?php endif;?>
<?php endforeach; ?>

<?php
global $base_url;
if(isset($_GET['balade']) && $_GET['balade'] != '') {

	$isFilterBaladeSlideshow = true;
	$titleBalade = $_GET['balade'];
	$path_url = explode ('/espece/', $path);
	$path_url = $path_url[1];

}else $isFilterBaladeSlideshow = false;
?>

<?php

//On récupère le titre d'espèce du $path
?>

<?php if($isFilterBaladeSlideshow) : ?>
	
	<a title="<?php print $title ;?>" href="<?php echo $base_url.'/espece/'.$path_url.'?balade='.$titleBalade ;?>">
		<img alt="<?php print $title ;?>" src="<?php print $field_photo_resume ;?>">
	</a>

<?php else: ?>

	<a title="<?php print $title ?>" href="<?php print $path ?>">
		<img alt="<?php print $title ;?>" src="<?php print $field_photo_resume ;?>">
	</a>

<?php endif; ?>


