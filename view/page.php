<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Articles</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>/css/style.css" />
    </head>
    <body>
        <div id="page">
            <main>
                <nav>
                     <?php Template::_includeModule('menus', '', ''); ?>
                </nav>
                <?php Template::_includeModule(Bootstrap::get_page(), Bootstrap::get_action(), Bootstrap::get_router()); ?>
            </main>
            <footer>
                <?php Template::_includeModule('menus', 'social', ''); ?>
            </footer>
        </div>
    </body>
</html>