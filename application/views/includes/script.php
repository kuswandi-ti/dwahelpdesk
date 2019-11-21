<!-- jQuery -->
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/js/jquery.core.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/js/jquery.app.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/js/bootstrap.min.js"></script>

<!-- Custom -->
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/js/waves.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/jquery-knob/jquery.knob.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>assets/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/switchery/switchery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>

<!-- Data Tables -->
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/buttons.print.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/dataTables.keyTable.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/datatables/dataTables.select.min.js"></script>

<!-- Select2 -->
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_TEMPLATE'); ?>plugins/select2/js/select2.min.js"></script>
<!-- Vendor -->
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_VENDOR'); ?>moment/min/moment.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_VENDOR'); ?>mloading/jquery.mloading.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('PATH_ASSET_VENDOR'); ?>highcharts-6.1.1/code/highcharts.js"></script>
<script>
	$('#fndTable').DataTable();
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});
</script>