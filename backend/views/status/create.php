<?php
/**
 * Created by PhpStorm.
 * User: harish
 * Date: 13/11/15
 * Time: 4:20 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Status;
?>
<?php $form = ActiveForm::begin()?>

<?= $form->field($model,'text')->textarea(['rows'=>'4'])/*->textInput(array('placeholder'=>'Write your Status','rows'=>'4'))*/->label('Status Update');?>

<?= $form->field($model,'permissions')->dropDownList($model->getPermissions(),
    ['prompt' => '-Choose your permissions-']
    );
?>

<div class='form-group'>
    <?= Html::submitButton('submit',['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end();?>
