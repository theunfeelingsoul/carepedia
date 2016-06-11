 <?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 ?>
 <div class="gap"></div>
  <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- START NIVO SLIDER -->
                <div class="slider-wrapper theme-default">
                    <div id="nivo-slider" class="nivoSlider">
                        <img src="img/ss1.png" alt="Image Alternative text" title="doctor" data-thumb="422" />
                        <img src="img/ss2.png" alt="Image Alternative text" title="doctor" data-thumb="423" />
                        <img src="img/ss3.png" alt="Image Alternative text" title="doctor" data-thumb="424" />
                    </div>
                </div>
                <!-- END NIVO SLIDER -->
            </div>
            <div class="col-md-4">
                <h1><?= $doctorModel['dr_name'] ?></h1>
                <h3>Qualifications and Experience</h3>

                <p>Nam libero nostra nec gravida habitasse metus malesuada ridiculus praesent fames laoreet placerat metus nascetur commodo lectus eleifend inceptos praesent tellus semper imperdiet ac felis pulvinar nunc dictumst odio vitae primis vestibulum curae volutpat rhoncus nec proin quam gravida proin potenti primis morbi parturient ultricies torquent viverra aptent pretium posuere proin curabitur vehicula
                <hr> curabitur inceptos phasellus vehicula placerat at sociosqu nam etiam fringilla hac convallis integer facilisi libero massa adipiscing montes sodales aenean non dapibus purus mollis convallis risus tempus id arcu leo lobortis integer hac rutrum egestas vel malesuada tellus himenaeos suspendisse ligula faucibus nulla luc
                <hr>tus platea dis dolor ornare dapibus consectetur sit praesent hendrerit dapibus potenti metus enim varius neque ipsum eu mollis parturient eleifend leo montes orci feugiat dis aptent ridiculus molestie mattis penatibus quisque dis suscipit lorem sit dapibus dignissim at placerat rutrum vulputate mollis mus</p>
            </div>
        </div>
        <div class="gap"></div>
        <div class="row">
            <div class="col-md-4">
                <h4>Story</h4>
                <p>Tincidunt elementum maecenas curae sit imperdiet a potenti lectus interdum phasellus varius bibendum rhoncus nostra aptent neque lectus inceptos risus facilisi torquent consequat fermentum arcu blandit imperdiet ipsum egestas massa eu et nullam condimentum integer</p>
            </div>
            <div class="col-md-4">
                <h4>Mission</h4>
                <p>Non non hac sociosqu parturient adipiscing elementum dignissim congue donec dui montes donec ac elementum malesuada penatibus rhoncus sed cum porta feugiat suspendisse blandit adipiscing aliquet tincidunt integer taciti proin sollicitudin platea varius rhoncus dui</p>
            </div>
            <div class="col-md-4">
                <h4>Vision</h4>
                <p>Aptent litora vivamus vel augue curae potenti molestie suscipit elementum sem ultrices vivamus lacus nostra nibh morbi vehicula vitae massa curae massa eget cubilia tortor fringilla egestas litora hac cubilia fames ut orci cum faucibus</p>
            </div>
        </div>
        <div class="gap"></div>
        <div class="row">
            <div class="col-md-3">
                <h4>Book an appointment</h4>
                <p>Molestie fusce augue netus pretium molestie cum viverra lorem sociis auctor sociosqu erat feugiat auctor volutpat aliquam nisl taciti sapien etiam rhoncus pharetra blandit velit integer duis dui mollis nisl potenti ad vulputate vitae tempor</p>
            </div>
            <div class="col-md-9">
                <div id='calendar'></div>
            </div>
        </div>
        <div class="gap"></div>
        <div class="row">
            <h4>Leave a Comment</h4>
            <?php $form = ActiveForm::begin(['action' => 'index.php?r=comments/createcomment','options' => ['class' => '']]); ?>

                <div class="row-fluid">
                    <div class="form-group">
                        <!-- <label>Name</label> -->
                        <!-- <input type="text" name="" value="" placeholder="Type Your Name" class="form-control"> -->
                        <?= $form->field($commentsModel, 'name',['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <!-- <label>E-mail</label> -->
                        <!-- <input type="text" name="" value="" placeholder="Your E-mail Address" class="form-control"> -->
                        <?= $form->field($commentsModel, 'email',['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <!-- <label>Comment</label> -->
                <div class="form-group">
                    <!-- <textarea name="" class="form-control" placeholder="Your Comment Here"></textarea> -->
                    <?= $form->field($commentsModel, 'comment',['inputOptions' => ['class' => 'form-control']])->textArea(['rows' => '6']) ?>

                      <?= $form->field($commentsModel, 'user_id')->hiddenInput(['value'=>rand()])->label(false); ?>

                      <?= $form->field($commentsModel, 'docs_id')->hiddenInput(['value'=>rand()])->label(false); ?>

                      <?= $form->field($commentsModel, 'time')->hiddenInput(['value'=>time()])->label(false); ?>
                </div>
                <div class="form-group">
                    <!-- <input type="submit" name="" value="Post a Comment" class="form-control btn btn-primary"> -->
                    <?= Html::submitButton($commentsModel->isNewRecord ? 'Comment' : 'Update', ['class' => $commentsModel->isNewRecord ? 'form-control btn btn-success' : 'form-control btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>
            <div class="gap gap-small"></div>
            <!-- START COMMENTS -->
            <div class="comments-list">
                <ul>
                    <?php foreach ($Comments as $key => $comment): ?>
                        
                    <li>
                        <!-- COMMENT -->
                        <article class="comment">
                            <div class="comment-author">
                                <img src="img/avatar_50x50.png" alt="Image Alternative text" title="Gamer Chick" />
                            </div>
                            <div class="comment-inner"><span class="comment-author-name"><?= $comment['name'] ?></span>
                                <p class="comment-content"><?= $comment['comment'] ?></p>
                                <span class="comment-time">
                                    <?php 
                                        $diff = time()-$comment['time'];
                                        // echo $date('',$diff);

                                        $d = round(abs($diff) / 60,0);

                                        if ($d <= 0) {
                                            echo "Just now";
                                        }elseif($d == 0){
                                            echo $d." minute ago.";
                                        }else{
                                            echo $d." minutes ago.";
                                        }
                                     ?>

                                </span>
                               <!--  <a class="comment-reply" href="#">
                                    <i class="icon-reply"></i> Reply
                                </a><a class="comment-like" href="#">
                                    <i class="icon-heart"></i> 48
                                </a> -->
                            </div>
                        </article>

                    </li>
                    <?php endforeach ?>    
                            
                           
                          
                            
                </ul>
            </div>
            <!-- END COMMENTS -->
            <div class="gap"></div>
        </div> <!-- /.row -->
    </div>
