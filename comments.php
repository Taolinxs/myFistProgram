<center>
<br><br><br>
<div class="comments_div">
<ul id="comment_list">
    <?php $this->comments()->to($comments); ?>
        <?php while($comments->next()): ?>
	<li id="<?php $comments->theId(); ?>">
	    <div class="comment_data">
                <!-- <?php echo $comments->sequence(); ?>. -->
                <span class="word">
                <strong class="sto"><?php $comments->author(); ?></strong>
                on <?php $comments->date('Y-d-m-h:i-a'); ?> 
                </span> 
            </div>
	    <div class="comment_body"><?php $comments->content(); ?></div>
	</li>
	<?php endwhile; ?>
</ul>
</div>

<!-- 判断设置是否允许对当前文章进行评论 -->
<?php if($this->allow('comment')): ?>
 
<!--     <h4 id="response">Leave a Reply</h4> -->
 
    <!-- 输入表单开始 -->

    <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
 
        <!-- 如果当前用户已经登录 -->
        <?php if($this->user->hasLogin()): ?>
            <!-- 显示当前登录用户的用户名以及登出连接 -->
            <p class="loginout">你好 <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>，是否要  
            <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">退出 &raquo;</a></p>
 
        <!-- 若当前用户未登录 -->
        <?php else: ?>
            <!-- 要求输入名字、邮箱、网址 -->
        <p><input placeholder="您的姓名" type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" />
        <input placeholder="您的邮箱" type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" />
        <input placeholder="博客地址" type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" /></p>
        <?php endif; ?>
 
        <!-- 输入要回复的内容 -->
     <p><textarea rows="5" class="textarea" cols="50" name="bigtext" placeholder="评论来一发?"><?php $this->remember('text'); ?></textarea></p>
     <p><input type="submit" value="-----点击吐槽我-----" class="submit" /></p>
    </form>
<?php endif; ?>
</center>