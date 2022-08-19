<?php

/** @var array $items */

use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="cart">
    <div class="cart-header">
        <h3>Your Cart Items</h3>
    </div>

    <div class="cart-body p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) : ?>

                    <tr>
                        <td><?php echo $item['name'] ?></td>
                        <td>
                            <img src="<?php echo Product::formatImageUrl($item['image']); ?>" style="width: 50px;" alt="<?php echo $item['name'] ?>">
                        </td>
                        <td><?php echo $item['price'] ?></td>
                        <td><?php echo $item['quantity'] ?></td>
                        <td><?php echo $item['total_price'] ?></td>
                        <td>    
                            <?php echo Html::a('Delete', ['/cart/delete', 'id' => $item['id']], [
                                'class' => 'btn btn-outline-danger btn-sm',
                                'data-method' => 'post',
                                'data-confirm' => 'Are you sure you want to remove this item?'
                            ]) ?>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>

        <div class="card-body text-right">
            <a href="<?php echo Url::to('/cart/checkout') ?>" class="btn btn-primary">
                Checkout
            </a>
        </div>

    </div>
</div>