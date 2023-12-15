<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<!-- Cover image -->
<?php if ($page->coverImage()): ?>
<img class="mb-3 cover" alt="Cover Image" src="<?php echo $page->coverImage(); ?>" />
<?php endif ?>

<!-- Title -->
<h1 class="title text-primary h3">
	<?php echo $page->title(); ?>
	<?php include(THEME_DIR_PHP . 'indicators.php'); ?>
</h1>

<?php if (!$page->isStatic() && !$url->notFound()): ?>
<!-- Creation date -->
<h6 class="text-muted">
	<?php echo $page->date(); ?> ~
	<?php echo $page->relativeTime(); ?>
</h6>
<?php endif ?>

<!-- Full content -->
<div class="mt-3">
	<?php echo $page->content(); ?>
</div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

<!-- Run syntax highlighting -->
<script>hljs.highlightAll();</script>