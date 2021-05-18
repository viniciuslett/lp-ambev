<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambev Em Casa</title>
</head>
<body>

<!-- Carregando o banner da página-->
<div class=>
    <?php $image = get_field('banner_topo'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="imagem-do-banner-topo" />
</div>

<?php
        //Carregando o header com o menu
        require_once 'header.php';
 ?>

<!-- Loop que busca as 2buy pages pela hash de cada uma -->
<?php if( have_rows('2bay_page_hash') ): ?>
   
    <?php while( have_rows('2bay_page_hash') ): the_row(); 

// Armazenadno em variaveis
        $campanha1 = get_sub_field('link_1');
        $campanha2 = get_sub_field('link_2');
        $campanha3 = get_sub_field('link_3');
        $campanha4 = get_sub_field('link_4');

        ?>
        
    <?php endwhile; ?>

    <!-- Usando o valor das variaveis apenas se existir a hash -->
    <div class="lett-2buy-inline" data-hash="<?php echo "$campanha1"; ?>"> </div>
    <div class="lett-2buy-inline" data-hash="<?php echo "$campanha2"; ?>"> </div>
    <div class="lett-2buy-inline" data-hash="<?php echo "$campanha3"; ?>"> </div>
    <div class="lett-2buy-inline" data-hash="<?php echo "$campanha4"; ?>"> </div>
    
<?php endif; ?>

<!-- Pegando o campo destinado ao banner de footer -->
<div class= >
    <?php $image = get_field('banner_footer'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="imagem-do-banner-footer"/>
</div>
<!-- Chamando o footer -->
<?php
    require_once 'footer.php';
 ?>