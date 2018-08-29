<div class="manager">
  <div class="menus">
    <div id="weclome" onselectstart="javascript:return false;">
      <?php echo "Weclome back:  {$username}"; ?>
    </div>
    <div id="home" onselectstart="javascript:return false;">
      Home
    </div>
    <div id="logout" onselectstart="javascript:return false;">
      Logout
    </div>
  </div>
</div>
<script>
  var weclome = document.getElementById("weclome");
  weclome.onclick = function (e) {
  this.hidden = "true";
  }
  var home = document.getElementById("home");
  home.onclick = function (e) {
  self.location="/login.php";
  }
  var logout = document.getElementById("logout");
  logout.onclick = function (e) {
  self.location="/logout.php";
  }
</script>
