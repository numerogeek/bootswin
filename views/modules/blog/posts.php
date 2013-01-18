<?php if ( ! empty($blog) ): ?>
	<?php foreach ($blog as $post) : ?>
	<article>
		<h2> <?php echo $post->title ?> <small>About <?php $now = time(); $posted = date($post->created_on); echo timespan($posted, $now); ?> ago.</small></h2>
		<p>
			<?php echo $post->intro; ?>
		</p>
		<p>
			<a href="<?php echo 'blog/'.date('Y/m', $post->created_on).'/'. $post->slug ; ?>" class="btn btn-success btn-large">{{helper:lang line='blog:read_more_label'}}</a>
		</p>
			
		<div class="post_meta">
			<?php if($post->keywords) : ?>
				<span class="tags">
					<?php echo $post->keywords; ?>
				</span>
			<?php endif; ?>
		</div>
	</article>
	<hr>
	<?php endforeach; ?>

	<?php echo $pagination['links']; ?>

<?php else: ?>
	<p><?php echo lang('blog_currently_no_posts');?></p>
<?php endif; ?>
