<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\jui\AutoComplete;
use yii\jui\DatePicker;
use yii\web\JsExpression;
use frontend\models\Scope;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use sjaakp\taggable\TagEditor;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vacancy */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
    $this->registerJs(
    '$("document").ready(function(){
        $("#new_vacancy").on("pjax:end", function() {
            $.pjax.reload({container:"#vacancy"});  //Reload GridView
        });
        
        $.ui.autocomplete.filter = function (array, term) {
            var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(term), "i");
            return $.grep(array, function (value) {
                return matcher.test(value.label || value.value || value);
            });}; //поиск сначала
    });
    '
        );
?>

<div class="vacancy-form">
<?php Pjax::begin(['id' => 'new_vacancy']) ?>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($vacancy, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($vacancy, 'text')->textarea(['rows' => 6]) ?>
    <?= $form->field($vacancy, 'date')->hiddenInput(['value' => date('Y-m-d')])->label(false, ['style'=>'display:none']) ?>
    <?= $form->field($vacancy, 'minprice')->textInput() ?>
    <?= $form->field($vacancy, 'maxprice')->textInput() ?>
    <?= $form->field($vacancy, 'employer_id')->textInput() ?>
    <?= $form->field($vacancy, 'scope_id')->radioList($scopeItems);?>


    <?= $form->field($vacancy, 'editorTags')->widget(TagEditor::className(), [
        'tagEditorOptions' => [
            'autocomplete' => [
                'source' => Url::toRoute(['tag/suggest'])
            ],
        ]
    ]) ?>


    <?= $form->field($vacancy, 'jobtime_id')->dropDownList(
        [
        '1' => 'Полная занятость',
        '2' => 'Частичная занятость'
        ]
    ) ?> 
    <?= $form->field($city, 'city')->widget(AutoComplete::className(), [
    'clientOptions' => [
    'source' => $locationItems,
    'minLength'=>'3', 
    'options' => ['class' => 'form-control'],
    'select' => new JsExpression("function( event, ui ) {
                    $('#vacancy-city_id').val(ui.item.id);}"),
    ]]) ?>
    <?= $form->field($vacancy, 'city_id')->hiddenInput()->label(false, ['style'=>'display:none']) ?>
    <?= $form->field($vacancy, 'mtop')->hiddenInput(['value' => 0])->label(false, ['style'=>'display:none']) ?>
    <div class="form-group">
        <?= Html::submitButton($vacancy->isNewRecord ? 'Create' : 'Update', ['class' => $vacancy->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>

</div>
