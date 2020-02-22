<?= form_open("/cursojuan/recibirdatos") ?>
<?
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe tu nombre'
    );
    $videos = array(
        'name' => 'videos',
        'placeholder' => 'Cantidad vídeos del curso'
    );
?>
<?= form_label('Nombre: ', 'nombre') ?>
    <?= form_input($nombre) ?>
<br>
<?= form_label('Número vídeos: ', 'videos') ?>
    <?= form_input($videos) ?>
<br>
<?= form_submit('','subir curso') ?>
<?= form_close() ?>
</body>
</html>