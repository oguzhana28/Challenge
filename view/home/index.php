<div class="container">
           <?php var_dump($_SESSION); ?>
    <?php if ($_SESSION['loggedIn'] == 0){ ?>
    <h1>Welkom bij het php-framework.</h1>
    <p>Je bent nu in home/index.</p>
    <ul>
        <li>
            <a href="<?= URL ?>Login/loginIndex">login</a></br>
        </li>
    </ul>
       <?php }else if ($_SESSION['loggedIn'] == 1){ ?>
        <li>
            <a href="<?= URL ?>Login/logout">logout</a>
        </li>
<?php } ?>
</div>