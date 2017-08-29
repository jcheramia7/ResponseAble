<?php
use common\models\Vehicle;
use common\models\Volunteer;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="form-group">
        <?php
        if($model->supply == 1 || $model->supply == 2 || $model->supply == 3 || $model->supply == 4){
            echo Html::submitButton($model->isNewRecord ? 'Reply' : 'Reply', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
        }else if($model->supply == 5){
            echo Html::button('Text', [
                'value' => Url::to(['request/sendSms']),
                'class'=>'button btn-sm btn-primary loader',]);
        }?>

    </div>


    <?php
        if($model->supply == 1){
            echo "PLATE NUMBER: POI-526<br>
                  Model: U-Haul<br>
                  Vehicle Type: Truck<br>
                  Vehicle Category: Land <br>
                  Owner: Barangay 1, Philippines<br>
                  Number: <br>
                  Vehicle Size: X Large Truck<br>
                  Location: Barangay 1, Philippines<br>
                  Length: 27 ft.<br>
                  Width: 8 ft.<br>
                  Height: 8 ft.<br>
                  Maximum Capacity: 3356 kg.<br>
                  Maximum distance in full tank: 917 miles";
        }else if($model->supply == 2){
            echo "PLATE NUMBER: APC-143<br>
                  Model: <br>
                  Vehicle Type: Truck<br>
                  Vehicle Category: Land <br>
                  Owner: Barangay 1, Philippines<br>
                  Number: <br>
                  Vehicle Size: Medium Truck<br>
                  Location: Barangay 1, Philippines<br>
                  Length: 15 ft.<br>
                  Width: 8 ft.<br>
                  Height: 7 ft.<br>
                  Maximum Capacity: 2896 kg.<br>
                  Maximum distance in full tank: 643 miles";
        }else if($model->supply == 3 || $model->supply == 4){
            echo "PLATE NUMBER: ABC-123<br>
                  Model: U-Haul<br>
                  Vehicle Type: Truck<br>
                  Vehicle Category: Land <br>
                  Owner: Barangay 1, Philippines<br>
                  Number: <br>
                  Vehicle Size: Small Truck<br>
                  Location: Barangay 1, Philippines<br>
                  Length: 10 ft.<br>
                  Width: 6 ft.<br>
                  Height: 6 ft.<br>
                  Maximum Capacity: 1274 kg.<br>
                  Maximum distance in full tank: 498 miles";
        }else if($model->supply == 5){
            echo "<b style='color: red'>System cannot find available vehicle. Click 'Text' to text the volunteers who lend their vehicles.</b>";
        }
    ?>

    <?php ActiveForm::end(); ?>

</div>
