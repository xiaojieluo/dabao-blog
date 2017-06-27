<?php if ($this->session->user):?>
欢迎你，<?php echo $this->session->user['username']?>
<a href="logout">logout</a>
<?php else:?>
    <a href="user/login">登陆</a>
    <a href="user/register">注册</a>
<?php endif;?>
