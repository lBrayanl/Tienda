<?
    if($cursos) {
        foreach ($cursos->result() as $curso) { ?>
        <ul>
            <li><a href="<?= $curso->idCurso; ?>"><?= $curso->nombre; ?></a></li>
        </ul>
   <? } 
 }else{
     echo "<p>Error en la aplicación</p>";
 }

?>

<? if($cursos): ?>
    <? foreach($cursos-result() as $cusro): ?>
        <ul></ul>
    <?endforeach;?>
    <?else:?>
        <p>Error en la aplicación</p>
<? endif; ?>

</body>
</html>