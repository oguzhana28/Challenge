<div class="container">
  
    <h1>Welkom bij het php-framework.</h1>
    <p>Je bent nu in home/index.</p>
         <?php if ($_SESSION['loggedIn'] == 0){ ?><li><a href="<?= URL ?>Login/loginIndex">login</a></br></li>
         <?php }else if ($_SESSION['loggedIn'] == 1){ ?><li><a href="<?= URL ?>Login/logout">logout</a></li><?php } ?>
</div>