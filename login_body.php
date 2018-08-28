<div class="main">
  <form class="form" method="post" action="/admin.php">
    <div class="msg">
      <?php echo "{$login_msg}"; ?>
    </div>
    <input hidden="true" type="text" name="flag" value="login" />
    <input class="username" type="text" name="username" value="username"/> 
    <input class="password" type="password" name="password" value="password" />
    <input class="button" type="submit" name="submit" value="登  陆" />
  </form>
</div>
