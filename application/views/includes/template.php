<?php $this->load->view('includes/header'); ?>

<?php 
	// content stores name of the view to be loaded
	$this->load->view($main_content);
?>

<?php $this->load->view('includes/footer.php'); ?>