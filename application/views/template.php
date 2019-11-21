<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
	<head>
		<?php require_once('includes/head.php'); ?>
        <style>
            .dataTables_filter input{
                width: 450px !important;
            }
        </style>
	</head>
	<body>
		<header id="topnav">
			<div class="topbar-main">
				<div class="container-fluid">
					<div class="logo">
						<a href="" class="logo">
							<img src="<?= $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/images/logo_sm.png" alt="" height="26" class="logo-small">
							<img src="<?= $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/images/logo.png" alt="" height="35" class="logo-large">
						</a>
					</div>
					
					<div class="menu-extras topbar-custom">
						<ul class="list-unstyled topbar-right-menu float-right mb-0">
							<li class="menu-item">
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <ul class="navigation-menu">
                            <li class="has-submenu <?= ($active_menu_root == 'home' ? 'active' : ''); ?>">
                                <a href=""><i class="icon-home"></i>Home</a>
                            </li>

                            <li class="has-submenu <?= ($active_menu_root == 'complaint_problem' ? 'active' : ''); ?>">
                                <a href="javascript:void(0)"><i class="icon-layers"></i>Complaint Problem <i class="fa fa-caret-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="complaint_input" class="<?= ($active_menu_child == 'complaint_input' ? 'text-custom' : ''); ?>">Complaint Input</a></li>
                                    <li><a href="complaint_list" class="<?= ($active_menu_child == 'complaint_list' ? 'text-custom' : ''); ?>">Complaint Monitoring</a></li>
                                </ul>
                            </li>
							
							<li class="has-submenu <?= ($active_menu_root == 'monitoring_uar' ? 'active' : ''); ?>">
                                <a href="monitoring_uar"><i class="icon-screen-desktop"></i>Monitoring UAR</a>
                            </li>
							
							<li class="has-submenu <?= ($active_menu_root == 'calendar_event' ? 'active' : ''); ?>">
                                <a href="calendar_event"><i class="icon-calender"></i>Calendar Event</a>
                            </li>

                            <li class="has-submenu <?= ($active_menu_root == 'instruksi_kerja' ? 'active' : ''); ?>">
                                <a href="instruksi_kerja"><i class="icon-book-open"></i>Instruksi Kerja Program</a>
                            </li>

                            <li class="has-submenu <?= ($active_menu_root == 'problem_solving' ? 'active' : ''); ?>">
                                <a href="problem_solving"><i class="icon-tag"></i>Problem Solving </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
		</header>
		
		<div class="wrapper">
            <div class="container-fluid">
				<div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <?= $breadcrumb; ?>
                                </ol>
                            </div>
                            <h4 class="page-title"><?= $page_title; ?></h4>
                        </div>
                    </div>
                </div>
				
				<?= $_content; ?>
			</div>
		</div>
		
		<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2018 © <a href="http://www.dwa.co.id" target="_blank">PT. Dasa Windu Agung (DWA)</a>
                    </div>
                </div>
            </div>
        </footer>
	
        <?php require_once('includes/script.php'); ?>

        <!-- BEGIN PAGE LEVEL JS-->
        <?= $custom_scripts; ?>
        <!-- END PAGE LEVEL JS-->
	</body>
</html>
