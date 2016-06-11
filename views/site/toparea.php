  <?php 

  use yii\helpers\Html;
use yii\widgets\ActiveForm;

 ?>
  <!-- TOP AREA -->
    <div class="top-area">
        <!-- START BOOTSTRAP CAROUSEL -->
        <div id="my-carousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="active item">
                    <img src="<?= Yii::$app->request->BaseUrl ?>/img/asian_doc.png" alt="Image Alternative text" title="Old No7" />
                    <div class="container">  

                        <div class="carousel-search-area">
                            <div id="carousel-search-area-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Search by Date</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Search by Area</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Search by Map</a>
                                    </li>
                                </ul>
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">

                                        <?php $form = ActiveForm::begin(['action' => 'index.php?r=site/sr','method'=>'get','options' => ['class' => 'form-inline']]); ?>

                                            <div class="form-group">
                                                <label class="sr-only" for="">Date</label>
                                                 <?= $form->field($model, 'available',['inputOptions' => ['id' => 'datepicker1','class'=>'form-control']])->textInput(['maxlength' => true]) ?>
                                            </div>
                                            
                                            <?= Html::submitButton($model->isNewRecord ? 'Search' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                        <?php ActiveForm::end(); ?>

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        
                                        <?php $form = ActiveForm::begin(['action' => 'index.php?r=site/sr','method'=>'get','options' => ['class' => 'form-inline']]); ?>

                                            <div class="form-group">
                                                <label class="sr-only" for="">Choose Area</label>
                                               <!--  <select class="form-control">
                                                    <option>Choose Area</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>   -->
                                                <?php echo $form->field($model, 'area[]')->dropDownList(['kyoto' => 'kyoto', 'hokkaido' => 'hokkaido', 'kobe' => 'kobe', 'Tokyo' => 'Tokyo']); ?>                                    
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="">Choose date</label>
                                              <!--   <input type="text" class="form-control" id="datepicker2" placeholder="date"> -->
                                                <?= $form->field($model, 'available',['inputOptions' => ['id' => 'datepicker2','class'=>'form-control']])->textInput(['maxlength' => true]) ?>

                                            </div>
                                            <div class="form-group">
                                                <?= Html::submitButton($model->isNewRecord ? 'Search' : 'Update', ['class' => $model->isNewRecord ? 'form-control btn btn-success' : 'form-control btn btn-primary']) ?>
                                            </div>
                                        <?php ActiveForm::end(); ?>

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">...</div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control left" href="#my-carousel" data-slide="prev"></a>
            <a class="carousel-control right" href="#my-carousel" data-slide="next"></a>
        </div>
        <!-- END BOOTSTRAP CAROUSEL -->
    </div>

    <!-- GREEN BANNER -->
    <div class="green-banner"></div>
    <!-- END GREEN BANNER -->
    <!-- END TOP AREA -->

     <div class="gap"></div>