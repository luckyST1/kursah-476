<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Парсим';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'url')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'img')->textInput() ?>

            <?= $form->field($model, 'text')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Го', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
