 <?php 
 // namespace app\widgets;
 use yii\widgets\LinkPager;
 use yii\helpers\Html;
 ?>
 <div class="gap"></div>
  <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="coupon-search-title">
                    Search results
                </p>
                <ul class="list coupon-search-results">
                    <ul class="list coupon-search-results">
                        <?php foreach ($resultsModel as $key => $value):?>
                        <li>
                            <div class="coupon-search-thumb">
                                <!-- HOVER IMAGE -->
                                <a class="hover-img" href="#">
                                    <img src="img/d<?= rand(1,4) ?>.png"  alt="Image Alternative text" title="drifting days" /><i class="icon-link hover-icon"></i>
                                </a>
                            </div>
                            <div class="coupon-inner">
                                <p class="coupon-price">
                                    <?php echo Html::a($value['dr_name'], ['site/pagethree','id' => $value['id']], ['class' => '']) ?>
                            </div>
                                </p>
                                <h5 class="coupon-title"><a href="#"><?= $value['spec']; ?></a></h5>
                                <!-- <span class="coupon-time">4 days 9 h remaining</span>
                                <ul class="list coupon-meta">
                                    <li>List Price <b>598$</b>
                                    </li>
                                    <li>Discount <b>80%</b>
                                    </li>
                                    <li>You Save <b>478$</b>
                                    </li>
                                </ul> -->
                                <p class="coupon-desciption"><?= $value['desc']; ?></p>
                            <!-- </div> -->
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </ul>
               

				<nav>
                    <?php 
                    // display pagination
                    echo LinkPager::widget([
                        'pagination'=>$dataProvider->pagination,
                    ]);
                     ?>
					<!-- <ul class="pagination ">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
							</li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
							<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul> -->
				</nav>
            </div>
        </div>
    </div>
