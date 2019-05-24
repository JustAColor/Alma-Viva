<?php
    use yii\helpers\url;
    use yii\helpers\html;

?>

<h1>Formulario</h1>
<h3><?= $mensaje ?></h3>
<?= html::beginForm(
        url::toRoute("site/request"),//action
        "formulario",//mehtod
        ['class'=>'form-inline']//option
 ) ;

?>
    <div class="form-group">
        <?= html::label("introduce tu nombre","nombre");?>
        <?= html::textInput("nombre",null,["class"=>"form-control"]);?>
    </div>

    <?= html::submitInput("Enviar nombre",["class"=>"btn btn-primary"]);?>
<?= html::endForm() ?>