<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">My Framework</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

<?
    foreach($data["navigation"] as $key=>$link){
        if($data["pagename"] == $key){
?>
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?=$link?>"><?=strtoupper($key)?></a>
            </li>
<?
        }else{
?>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="<?=$link?>"><?=strtoupper($key)?></a>
            </li>
<?
        }
    }
?>
          
        </ul>
        <span style="color: red"><?=@$_REQUEST["msg"]?@$_REQUEST["msg"]:'';?></span>
        <?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){?>
        <form class="navbar-form navbar-right">
          <a href="/profile">Profile</a>
          <a href="/auth/logout">Logout</a>
        </form>

  <?}else{?>
    <div class="container mt-1">
      <form class="form-inline" method="post" action="/auth/login">
        <div class="form-group">
          <input type="email" class="form-control mr-1" id="email" name="username" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default text-secondary">LOGIN</button>
      </form>
    </div>  
  <?}?>
    </div>
  </div>
</nav>