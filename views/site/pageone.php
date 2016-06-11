<?=  $this->render('toparea',[
            'model' => $model,
        ]); 
         use yii\helpers\Html;?>
    <div class="container">
        <div class="row">
           <!--  <div class="col-md-3">
                <ul class="nav nav-tabs nav-stacked nav-coupon-category">
                    <li class="active"><a href="#"><i class="icon-ticket"></i>All</a>
                    </li>
                    <li><a href="#"><i class="icon-food"></i>Food & Drink</a>
                    </li>
                    <li><a href="#"><i class="icon-calendar"></i>Events</a>
                    </li>
                    <li><a href="#"><i class="icon-female"></i>Beauty</a>
                    </li>
                    <li><a href="#"><i class="icon-bolt"></i>Fitness</a>
                    </li>
                    <li><a href="#"><i class="icon-headphones"></i>Electronics</a>
                    </li>
                    <li><a href="#"><i class="icon-picture"></i>Furniture</a>
                    </li>
                    <li><a href="#"><i class="icon-umbrella"></i>Fashion</a>
                    </li>
                    <li><a href="#"><i class="icon-shopping-cart"></i>Shopping</a>
                    </li>
                    <li><a href="#"><i class="icon-home"></i>Home & Garden</a>
                    </li>
                    <li><a href="#"><i class="icon-plane"></i>Travel</a>
                    </li>
                </ul>
            </div> -->
            <div class="col-md-12">
                <div class="row row-wrap">
                    <?php foreach ($dislpayDoctors as $key => $doctor): ?>
                        <div class="col-md-3">
                            <a href="index.php?r=site/pagethree&id=<?=$doctor['id']; ?>" class="coupon-thumb">
                                <img src="img/f_<?= rand(1,4) ?>.png" alt="Image Alternative text" title="Gamer Chick" />
                                <div class="coupon-inner">
                                    <h5 class="coupon-title"><?php echo Html::a($doctor['dr_name'], ['site/pagethree','id' => $doctor['id']], ['class' => '']) ?></h5>
                                    <p class="coupon-desciption"><?= $doctor['spec'] ?></p>
                                   <!--  <div class="coupon-meta"><span class="coupon-time">5 days 46 h remaining</span><span class="coupon-save">Save 60%</span>
                                        <div class="coupon-price"><span class="coupon-old-price">376$</span><span class="coupon-new-price">150$</span>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                   <?php endforeach ?>
                </div>
                <!-- <div class="pagination">
                    <ul>
                        <li class="prev disabled">
                            <a href="#"></a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li class="next">
                            <a href="#"></a>
                        </li>
                    </ul>
                </div> -->
                <div class="gap"></div>
            </div>
        </div>
    </div>