<?php
$base = Mapper::base();
$usuario = Session::read('Usuario');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->element('shared/header'); ?>
        <title><?php echo $page_title; ?></title>
    </head>
    <body>
        <div id="content">
            <div id="header">
                <h1 style="float:left">
                    <?php echo $page_title; ?>
                </h1>
                <div id="settings" style="float:right; margin-right: 20px">
                    <span id="user"><?php if ($usuario) { echo $usuario["nome"]; } // endif; ?></span>
                    <a href="<?php echo $base; ?>/"><?php echo $html->image("home.png"); ?></a>
                    <?php echo $html->image("setting.png", array("id" => "setting", "style" => "")); ?>
                </div>
                <br clear="all" />
                <script type="text/javascript">
                    $(document).ready( function () {
                        $("#setting").click( function () {
                            $("#header-config").slideToggle("slow");
                        }).hover( function () {
                            $(this).css({cursor: "pointer"});
                        });;
                    });
                </script>
                
                <div id="header-config">
                    <?php echo $html->image("refresh.png", array("onclick" => "window.location.reload(true)", "style" => "cursor: pointer")); ?>
                    <a class="pirobox_gall1" rel="content-400-350" href="<?php echo $base; ?>/home/player">
                        <?php echo $html->image("group.png", array("alt" => "Trocar jogador")); ?>
                    </a>
                    <?php if ($usuario) { ?>
                        <a class="pirobox_gall1" rel="content-400-350" href="<?php echo $base; ?>/home/theme">
                            <?php echo $html->image("theme.png", array("alt" => "Trocar tema")); ?>
                        </a>
                    <?php } // endif; ?>
                </div>
            </div>
            <div id="main">
                <?php echo $this->contentForLayout; ?>
                <?php echo $this->element('shared/footer'); ?>
            </div>
            <br clear="all" />
        </div>
        <?php echo $this->element('shared/signature'); ?>
        <a id="name" href="<?php echo $base; ?>/home/name" rel="content-320-125" class="pirobox_gall1"></a>
    </body>
</html>