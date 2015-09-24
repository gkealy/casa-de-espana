<p class="text-uppercase">
<?php /* <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time> &#149; */ ?>
<span class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></span>
</p>
