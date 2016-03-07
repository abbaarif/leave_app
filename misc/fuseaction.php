<?php
if(isset($_GET['fuseaction'])){
	switch ($_GET['fuseaction']) {
	case 'request':
		$file[1] = 'display/dsp_request.php';
		break;
	case 'history':
		$file[1] = 'display/dsp_history.php';
		break;
	case 'approval':
		$file[1] = 'display/dsp_approval.php';
		break;
		
	  default:
		$file[1] = 'display/dsp_request.php';
	} 	
}
else
	$file[1] = 'display/dsp_request.php';
?>