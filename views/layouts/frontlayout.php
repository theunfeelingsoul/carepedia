<?php 
use yii\helpers\Html;
use app\assets\FrontAsset;
use app\models\Category;
use yii\helpers\Url;


FrontAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- polymer elements -->
    <script src="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/webcomponentsjs/webcomponents-lite.js"></script>
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/iron-demo-helpers/demo-snippet.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/iron-demo-helpers/demo-pages-shared-styles.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-button/paper-button.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-checkbox/paper-checkbox.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-dropdown-menu/paper-dropdown-menu.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-input/paper-input.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-item/paper-item.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-menu/paper-menu.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-spinner/paper-spinner.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-styles/color.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-styles/typography.html">

    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-tabs/paper-tab.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-tabs/paper-tabs.html">
    <link rel="import" href="<?= Yii::$app->request->BaseUrl ?>/vendor/bower/paper-behaviors/paper-inky-focus-behavior.html">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
	<header class="main">
	    <div class="container">
			<div class="row">
                <div class="col-md-2">
                    <a href="index-2.html">
                    <?php echo Html::a('<img src="img/logo2-small.png" alt="logo" title="logo" class="logo">', ['site/index']) ?>
                    </a>
                </div>
                <div class="col-md-7">
                    <!-- MAIN NAVIGATION -->
                    <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                    <nav>
                        <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                            <li class="active">
                                <?php echo Html::a('Home', ['site/pageone']) ?>
                            </li>
                            <!-- <li>
                                < echo Html::a('Results', ['site/pagetwo']) ?>
                            </li> -->
                           <!--  <li><php echo Html::a('Doctor', ['site/pagethree']) ?>
                            </li> -->
                            <!-- <li><a href="">Pages</a>
                            </li>
                            <li><a href="">Blog</a>
                            </li>
                            <li><a href="">Contact</a>
                            </li> -->
                        </ul>
                    </nav>
                    <!-- END MAIN NAVIGATION -->
                </div>
                <div class="col-md-3">
                    <!-- LOGIN REGISTER LINKS -->
                    <ul class="login-reg">
                        <li class="col-mds-6"><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="glyphicon glyphicon-log-in"></i>Sign in</a>
                        </li>
                       <!--  <li class="col-mds-6"><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="glyphicon glyphicon-edit"></i>Sign up</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- LOGIN REGISTER LINKS CONTENT -->
	<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
		<i class="icon-signin dialog-icon"></i>
        <h3>Member Login</h3>
        <h5>Welcome back, friend. Login to get started</h5>
        <div class="row-fluid">
            <form class="dialog-form" id="ff">
                <div class="form-group">
                    <label>E-mail</label>
                    <!-- <input type="text" name="dcsc" placeholder="email@domain.com" class="form-control"> -->
                    <paper-input label="text input" name="d"></paper-input>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <paper-input label="text input" name="f"></paper-input>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
                <!-- <input type="submit" value="Sign in" class="btn btn-primary"> -->
                <paper-button raised name="c" id="g">
                  sign in

                </paper-button>

            </form>
        </div>
        <!-- <ul class="dialog-alt-links">
            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
            </li>
            <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
            </li>
        </ul> -->
    </div>
    <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="icon-edit dialog-icon"></i>
        <h3>Member Register</h3>
        <h5>Ready to get best offers? Let's get started!</h5>
        <div class="row-fluid">
            <form class="dialog-form">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Type your password again" class="form-control">
                </div>

                <div class="row-fluid">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Your Area</label>
                            <input type="text" placeholder="Kobe" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal/Zip</label>
                            <input type="password" placeholder="12345" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Get hot offers via e-mail
                    </label>
                </div>
                <input type="submit" value="Sign up" class="btn btn-primary">
            </form>
        </div>
        <ul class="dialog-alt-links">
            <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
            </li>
        </ul>
    </div>


    <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="icon-retweet dialog-icon"></i>
        <h3>Password Recovery</h3>
        <h5>Fortgot your password? Don't worry we can deal with it</h5>
        <div class="row-fluid">
            <form class="dialog-form">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="col-md-12">
                <input type="submit" value="Request new password" class="btn btn-primary">
            </form>
        </div>
    </div>
    <!-- END LOGIN REGISTER LINKS CONTENT -->
    
	<?= $content ?>

	<!-- Start footer -->
	<footer class="main">
	    <div class="footer-top-area">
	        <div class="container">
	            <div class="row row-wrap">
	                <div class="col-md-3">
	                    <a href="index-2.html">
	                        <img src="img/logo2.png" alt="logo" title="logo" class="logo">
	                    </a>
	                </div>
	                
	            </div>
	        </div>
	    </div>
	    <div class="container">
	        <div class="row row-wrap">
	            <div class="col-md-3">
	                <h5>footer area 1</h5>
	                <ul class="list ">
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                </ul>
	            </div>
	            <div class="col-md-3">
	                <h5>footer area 2</h5>
	                <ul class="list ">
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                    <li>
	                        <a href="">link</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <br/>
	    <br/>
	</footer>
	<!-- End footer -->



 <?php $this->endBody() ?>
	<script>
        $(function() {
            $( "#datepicker1" ).datepicker();
            $( "#datepicker2" ).datepicker();
        });
    </script>

    <script type="text/javascript">
		// $( "#g" ).click(function() {
		//   $( "#ff" ).submit();
		// });
	</script>
		
</body>
</html>
 <?php $this->endPage() ?>