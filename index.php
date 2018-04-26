<?php
/**
 * The First Theme
 * 
 * @package The First Theme
 * @author Taolinxs
 * @version 1.0.0
 * @link http://taolinxs.com
 */
$this->need('header.php');
?>
<?php while($this->next()): ?>
    <div class="post">
		<span>[<?php $this->date('m-d'); ?>] </span> 
		<a class="wztit" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
		<br>
    </div>
    <br>
<?php endwhile; ?>
<center class="pagelist">
 <?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
 </center>
<?php $this->need('footer.php'); ?>