<?php
/**
 * 一款仿制Ghost博客主题的Typecho主题
 *
 * @package For Ghost Theme
 * @author Axhello
 * @version 1.0
 * @link http://ciyuani.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

 <div class="site-body container">
     <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <?php while($this->next()): ?>
        <article class="post tag-getting-started">
            <header class="post-header">
                <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            </header>
            <section class="post-excerpt">
                <?php $this->excerpt('200', '...') ?>
            </section>
            <footer class="post-meta">
            <a href="#"><?php $this->author(); ?></a>
            <time class="post-date"><?php $this->date('Y年m月d日'); ?></time>
                <?php _e('标签: '); ?><a href="#"><?php $this->tags(',', true, 'none'); ?></a>
            </footer>
        </article>
        <?php endwhile; ?>
        </div>
     </div>
      <div class="page-nav"><?php $this->pageNav('&laquo;', '&raquo;'); ?></div>
 </div>

<?php $this->need('footer.php'); ?>