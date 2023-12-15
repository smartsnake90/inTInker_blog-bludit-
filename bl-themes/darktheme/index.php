<!doctype html>
<html lang="<?php echo Theme::lang() ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include (THEME_DIR_PHP . 'head.php'); ?>
    <style>
        /* width */
        ::-webkit-scrollbar {
        width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey; 
        border-radius: 10px;
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: grey; 
        border-radius: 10px;
        }

    </style>
  </head>
  <body class=" text-secondary" style="border-top:20px solid #f57421;">
    <div class="container-fluid" style="padding-top:110px;">
    <?php Theme::plugins('siteBodyBegin'); ?>
    <?php include (THEME_DIR_PHP . 'topbar.php'); ?>

    <?php
        if ($WHERE_AM_I == 'page') {
            if ($page->slug() == 'error') {
                include (THEME_DIR_PHP . 'error.php');
            } else {
                include (THEME_DIR_PHP . 'page.php');
            }
        } else {
            include (THEME_DIR_PHP . 'home.php');
        }
    ?>
    <?php include (THEME_DIR_PHP . 'footer.php'); ?>
    <!-- Javascript -->
	<?php
        echo Theme::jquery();
        echo Theme::js('js/bootstrap.bundle.min.js');
    ?>
    <?php Theme::plugins('siteBodyEnd'); ?>
    </div>
</html>