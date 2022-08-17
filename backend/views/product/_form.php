<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
        'options'=>[
            'enctype'=>'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows'=>6],
        'preset'=>'basic'
    ])
    ?>

    <!-- <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
    </div> -->

    <?= $form->field($model, 'imageFile', [
        'template'=>'
                <div class="custom-file">
                    {input}
                    {label}
                    {error}
                </div>
        ',
        'labelOptions' => [
            'class' => 'custom-file-label',
            'label' => 'Choose Image For Product'
        ],
        'inputOptions' => [
            'class' => 'custom-file-input'
        ]
    ])->textInput(['type'=>'file']) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true, 'type'=>'number']) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
