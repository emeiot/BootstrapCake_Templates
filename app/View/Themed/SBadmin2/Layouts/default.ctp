<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'SBadmin2 Template');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?>

		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php 
			echo $this->Html->meta('icon');
			echo $this->Html->meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no']);
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min.css');
			echo $this->Html->css('font-awesome/css/font-awesome.min');
			echo $this->Html->css('metisMenu/metisMenu.min');
			echo $this->Html->css('sb-admin-2');
			
			echo $this->fetch('css');

			
			//echo $this->Html->script('libs/jquery-1.10.2.min');
			//echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->fetch('script');
		?>
	</head>

<body>
    <div id="wrapper">

		<?php echo $this->element('menu/top_menu'); ?>
		<?php echo $this->element('menu/left_sidebar'); ?>
			   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Page Header </h1>
							<!-- Your Page Content Here -->
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>	
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
</div><!-- ./wrapper -->		
		
		<?php
			echo $this->Html->script('jquery/jquery.min');
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('metisMenu/metisMenu.min');
			echo $this->Html->script('sb-admin-2');
			echo $this->fetch('script');
		?>
		
	</body>

</html>