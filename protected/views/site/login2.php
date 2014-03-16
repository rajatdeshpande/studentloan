<?php $this->pageTitle=Yii::app()->name; ?>
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Login</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Login</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <form class="reg-page">
                <div class="reg-header">            
                    <h2>Login to your account</h2>
                </div>
				<ul class="list-inline style-icons text-center">
					<li><a href="index.html"><i class="icon-home icon-round icon-round-sm icon-color-grey"></i></a></li>
					<li><a href="#"><i class="icon-linkedin icon-round icon-round-sm icon-color-grey"></i></a></li>
					<li><a href="#"><i class="icon-facebook icon-round icon-round-sm icon-color-grey"></i></a></li>
					<li><a href="#"><i class="icon-twitter icon-round icon-round-sm icon-color-grey"></i></a></li>
					<li><a href="#"><i class="icon-rss icon-round icon-round-sm icon-color-grey"></i></a></li>
				</ul>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" placeholder="Username" class="form-control">
                </div>                    
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                    <input type="text" placeholder="Password" class="form-control">
                </div>                    

                <div class="row">
                    <div class="col-md-6">
                        <label class="checkbox"><input type="checkbox"> Stay signed in</label>                        
                    </div>
                    <div class="col-md-6">
                        <button class="btn-u pull-right" type="submit">Login</button>                        
                    </div>
                </div>

                <hr>

                <h4>Forgot Password ?</h4>
                <p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>
            </form>            
        </div>
    </div><!--/row-->
</div><!--/container-->		
<!--=== End Content Part ===-->

