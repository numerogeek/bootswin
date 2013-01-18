<article class="single_post">	
	<h1><?php echo $post->title; ?> <small>About <?php $now = time(); $posted = date($post->created_on); echo timespan($posted, $now); ?> ago.</small></h1>

	<p>
		<?php echo $post->intro; ?>
	</p>
	<hr>	
	<div class="post_body">
		<?php echo $post->body; ?>
	</div>
			
	<div class="post_meta">
		<?php if($post->keywords) : ?>
			<span class="tags">
				<?php echo $post->keywords; ?>
			</span>
		<?php endif; ?>
	</div>			
</article>
	
	<?php if (Settings::get('enable_comments')): ?>

	<div id="comments">

		<div id="existing-comments">
			<h3><?php echo lang('comments:title') ?></h3>
			<?php echo $this->comments->display() ?>
		</div>

		<?php if ($form_display): ?>
			<?php echo $this->comments->form() ?>
		<?php else: ?>
		<?php echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post->comments_enabled)))) ?>
		<?php endif ?>
	</div>

	<?php endif ?>
