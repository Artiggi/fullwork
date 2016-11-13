<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация фрилансера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <p class="text-center">Необходимо заполнить поля:</p>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 free-course">
                <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class' => 'text-left']); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'password')->passwordInput() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'email') ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'compname') ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'comptextInfo') ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'compavatarUrl') ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'firstName') ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'lastName') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'basicSpec') ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'addSpec') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'skills') ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'avatarUrl') ?>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                    </div>
                    <div class="col-md-3"></div>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        <div class="col-md-2"></div>    
        </div>
    </div>

</div>
