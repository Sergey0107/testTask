<?php

/** @var yii\web\View $this */
/** @var TextReverse $textReverseModel */

use app\models\TextReverse;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Тестовое ADV.CAKE';
?>
<div class="site-index">
    <?php
    $form = ActiveForm::begin([
        'id' => 'reverse-form',
        'enableAjaxValidation' => true,
        'options' => ['class' => 'form-horizontal'],
    ]) ?>
    <?= $form->field($textReverseModel, 'text')->label('Слово') ?>
    <div id="result" style="display:none; margin: 15px 0; padding: 10px; background: #f8f9fa; border-radius: 5px;"></div>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Перевернуть', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end() ?>
</div>