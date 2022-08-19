<?php

/** @var \common\models\Order $order */

use yii\bootstrap4\ActiveForm;

/** @var \common\models\OrderAddress $orderAddress*/
/** @var array $cartItems  */
/** @var int $productQuantity*/
/** @var float $totalPrice */

?>

<?php $form = ActiveForm::begin([
    'action' => [''],
]); ?>

<div class="row">

    <div class="col">

        <div class="card mb-3">
            <div class="card-header">
                Account Information
            </div>
            <div class="card-body">
                <?php if (isset($success) && $success) : ?>
                    <div class="alert alert-success">
                        Your account was successfully updated
                    </div>
                <?php endif ?>



                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($order, 'firstname')->textInput(['autofocus' => true]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($order, 'lastname')->textInput(['autofocus' => true]) ?>
                    </div>
                </div>
                <?= $form->field($order, 'email')->textInput(['autofocus' => true]) ?>



            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Address Information
            </div>
            <div class="card-body">

                <?= $form->field($orderAddress, 'address') ?>
                <?= $form->field($orderAddress, 'city') ?>
                <?= $form->field($orderAddress, 'state') ?>
                <?= $form->field($orderAddress, 'country') ?>
                <?= $form->field($orderAddress, 'zipcode') ?>

            </div>
        </div>

    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4>Order Summary</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td><?php echo $productQuantity; ?> Products</td>
                    </tr>
                    <tr>
                        <td>Total Price</td>
                        <td class="text-right"><?php echo Yii::$app->formatter->asCurrency($totalPrice, 'KZT') ?></td>
                    </tr>
                </table>

                <p class="text-right mt-4">
                    <button class="btn btn-success">
                        Continue
                    </button>
                </p>

            </div>
        </div>
    </div>

</div>



<?php ActiveForm::end(); ?>