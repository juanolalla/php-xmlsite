<div class="node node-type-story node-promoted node-teaser clearfix">
  <div class="node-inner">
    <h2 class="title"><?php print_data($article->title); ?></h2>
    <div class="content">
      <?php print_data($article->teaser); ?>
      <p><a href="<?php print base_path(); ?><?php print_data($article->id); ?>" title="Read more from <?php print_data($article->title); ?>.">Read more</a></p>
    </div>
  </div>
</div>
