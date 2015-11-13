<?php
/**
 * Created by PhpStorm.
 * User: harish
 * Date: 13/11/15
 * Time: 4:00 PM
 */

use yii\helpers\Html;
?>

<h1>Your status Update </strong></h1>
<p><label>Text</label>:</p>
<?= Html::encode($model->text) ?>
<br><br>
<p><label>Permissions</label>:</p>
<?php
echo $model->getPermissionsLabel($model->permissions);
?>
