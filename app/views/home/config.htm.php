<?php $base = Mapper::base(); ?>
<div id="config">
    <h2>Modo de jogo</h2>
    <div id="buttons">
        <ul>
            <li onclick="window.location='<?php echo $base; ?>/start/campaign'" title="Campanha">Campanha</li>
            <li onclick="window.location='<?php echo $base; ?>/start/traditional'" title="Tradicional">Tradicional</li>
        </ul>
    </div>
</div>