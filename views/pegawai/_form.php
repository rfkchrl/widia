<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//panggil master model pegawai
use app\models\Divisi;
use app\models\Jabatan;
use yii\helpers\ArrayHelper; //penggunaan array assosiatif
//panggil master data
$listDivisi = ArrayHelper::map(Divisi::find()->asArray()->all(),'id','nama');
$listJabatan = ArrayHelper::map(Jabatan::find()->asArray()->all(),'id','nama');

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'gender')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?> -->
    <?= $form->field($model, 'gender')->radioList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <!-- <?= $form->field($model, 'idjabatan')->textInput() ?> -->


    <?= $form->field($model, 'idjabatan')->dropDownList(
                $listJabatan, 
                ['prompt'=>'-- Pilih Jabatan --']
                ); ?>

    <!-- <?= $form->field($model, 'iddivisi')->textInput() ?> -->

    <?= $form->field($model, 'iddivisi')->dropDownList(
                $listDivisi, 
                ['prompt'=>'-- Pilih Divisi --']
                ); ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
