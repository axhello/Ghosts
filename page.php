<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="site-body container">
     <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
		    <article class="post tag-getting-started">
                <header class="post-header">
                    <h1 class="post-title"><?php $this->title() ?></h1>
                    <section class="post-meta">
                        <time class="post-date"><?php $this->date('Y年m月d日'); ?></time><?php _e('标签: '); ?><a href="#"><?php $this->tags(',', true, 'none'); ?></a>
                    </section>
                </header>
                <section class="post-content">
                    <?php $this->content(); ?>
                </section>
            </article>
		    <?php $this->need('comments.php'); ?>
        </div>
     </div>
 </div>

</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
