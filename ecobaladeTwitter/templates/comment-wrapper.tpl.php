<section id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if ($content['comments'] && $node->type != 'forum'): ?>
    <?php print render($title_prefix); ?>
    <h2 class="title"><?php print t('Comments'); ?></h2>
    <?php print render($title_suffix); ?>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

  <?php if ($content['comment_form']): ?>
    <section id="comment-form-wrapper" class="well collapseComment" title='Poster une photo ou un commentaire'>
      <h2 class="title"><?php print t('Poster une photo ou un commentaire'); ?></h2>
      <?php print render($content['comment_form']); ?>
    </section> <!-- /#comment-form-wrapper -->
  <?php endif; ?>
</section> <!-- /#comments -->
