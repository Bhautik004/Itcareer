$(document).ready(function(){

	var is_checked_flag = '0';
	checkForAll(is_checked_flag);
	

	// $('.selectAllController').on('change', function () {

	// 	var checkbox_txt = $(this).data('text');
		
	// 	if ($(this).is(':checked')) {

	// 		if(checkbox_txt == 'master_module'){
	// 			$('.selectChildAllMaster').prop('checked', true);
	// 			$('.childInputMaster').prop('checked', true);

	// 		}else if(checkbox_txt == 'user_module'){

	// 			$('.selectChildAllUser').prop('checked', true);
	// 			$('.childInputUser').prop('checked', true);

	// 		}else {

	// 			$('.selectChildAll').prop('checked', true);
	// 			$('.childInput').prop('checked', true);
	// 		}

	// 	} else {

	// 		if(checkbox_txt == 'master_module'){
	// 			$('.selectChildAllMaster').prop('checked', false);
	// 			$('.childInputMaster').prop('checked', false);

	// 		}else if(checkbox_txt == 'user_module'){

	// 			$('.selectChildAllUser').prop('checked', false);
	// 			$('.childInputUser').prop('checked', false);

	// 		}else {

	// 			$('.selectChildAll').prop('checked', false);
	// 			$('.childInput').prop('checked', false);
	// 		}
	// 	}
	// });


	$('.selectAllController').on('change', function () {

		if ($(this).is(':checked')) {
			$('.selectChildAll').prop('checked', true);
			$('.childInput').prop('checked', true);
		} else {
			$('.selectChildAll').prop('checked', false);
			$('.childInput').prop('checked', false);
		}
	});

	$('.selectAllMasterController').on('change', function () {
		if ($(this).is(':checked')) {
			$('.selectChildAllMaster').prop('checked', true);
			$('.selectChildAllMaster').each(function(){
				var getId = $(this).data('id');
				$('.childCheckBox'+getId).prop('checked', true);
			});	
		} else {
			$('.selectChildAllMaster').prop('checked', false);
			$('.selectChildAllMaster').each(function(){
				var getId = $(this).data('id');
				$('.childCheckBox'+getId).prop('checked', false);
			});			
		}
	});

	$('.selectAllUserController').on('change', function () {		
		if ($(this).is(':checked')) {
			$('.selectChildAllUser').prop('checked', true);
			$('.selectChildAllUser').each(function(){
				var getId = $(this).data('id');
				$('.childCheckBox'+getId).prop('checked', true);
			});			
		} else {
			$('.selectChildAllUser').prop('checked', false);
			$('.selectChildAllUser').each(function(){
				var getId = $(this).data('id');
				$('.childCheckBox'+getId).prop('checked', false);
			});				
		}
	});
	$('.selectAllWebUpdationController').on('change', function () {
		
		if ($(this).is(':checked')) {
			$('.selectChildAllWebUpdation').prop('checked', true);		
			$('.selectChildAllWebUpdation').each(function(){
				var getId = $(this).data('id');
				$('.childCheckBox'+getId).prop('checked', true);
			});		
			
		} else {
			$('.selectChildAllWebUpdation').prop('checked', false);			
			$('.selectChildAllWebUpdation').each(function(){
				var getId = $(this).data('id');
				$('.childCheckBox'+getId).prop('checked', false);
			});
		}
	});

	$('.selectChildAll').on('change', function () {
		var getId = $(this).data('id');
		var countTotal = $('.childCheckBox'+ getId).length;
		if ($(this).is(':checked')) {
			$('.childCheckBox'+ getId).prop('checked', true);
		} else {
			$('.childCheckBox'+ getId).prop('checked', false);
		}
		checkForAll(is_checked_flag);
	});

	$('.childInput').on('change', function () {
		var getId = $(this).data('id');
		var isAll = $(this).data('chkall');
		var txt = $(this).data('txt');
		
		var countTotal = $('.childCheckBox'+ getId).length;
		var count = $('.childCheckBox'+getId).filter(':checked').length;

		if (countTotal == count) {
			if(txt == 'master_module'){
				$(this).closest('.card').find('.selectChildAllMaster').prop('checked', true);
			}else if(txt == 'user_module'){
				$(this).closest('.card').find('.selectChildAllUser').prop('checked', true);
			}else if(txt == 'wed_updation_module'){
				$(this).closest('.card').find('.selectChildAllWebUpdation').prop('checked', true);
			}else {
				$(this).closest('.card').find('.selectChildAll').prop('checked', true);
			}
			is_checked_flag = '1';

		} else {
			if(txt == 'master_module'){
				$(this).closest('.card').find('.selectChildAllMaster').prop('checked', false);
			}else if(txt == 'user_module'){
				$(this).closest('.card').find('.selectChildAllUser').prop('checked', false);
				
			}else if(txt == 'wed_updation_module'){
				$(this).closest('.card').find('.selectChildAllWebUpdation').prop('checked', false);
			}else {
				$(this).closest('.card').find('.selectChildAll').prop('checked', false);
			}
			is_checked_flag = '0';
		}

		if(isAll == 1){
			if ($(this).is(':checked')) {
				$('.childCheckBox'+ getId).prop('checked', true);
				$(this).closest('.card').find('.selectChildAll').prop('checked', true);
			} else {
				$('.childCheckBox'+ getId).prop('checked', false);
				$(this).closest('.card').find('.selectChildAll').prop('checked', false);
			}
		}
		checkForAll(is_checked_flag);
	});
});

function checkForAll(is_checked_flag) {
	
	var countTotalMasterController = $('.selectChildAllMaster').length;
	var countMasterController = $('.selectChildAllMaster').filter(':checked').length;

	var countTotalUserController = $('.selectChildAllUser').length;
	var countUserController = $('.selectChildAllUser').filter(':checked').length;

	var selectChildAllWebUpdation = $('.selectChildAllWebUpdation').length;
	var countWebUpdationController = $('.selectChildAllWebUpdation').filter(':checked').length;

	/*check all master module length from checkbox check uncheck*/
	if(countTotalMasterController == countMasterController) {
		
		$('.selectAllMasterController').prop('checked', true);
	} else {
		
		$('.selectAllMasterController').prop('checked', false);
	}

	/*check all user module length from checkbox check uncheck*/
	if(countTotalUserController == countUserController) {
		$('.selectAllUserController').prop('checked', true);

	} else {
		$('.selectAllUserController').prop('checked', false);
	}
	/*check all user module length from checkbox check uncheck*/
	if(selectChildAllWebUpdation == countWebUpdationController) {
		$('.selectAllWebUpdationController').prop('checked', true);

	} else {
		$('.selectAllWebUpdationController').prop('checked', false);
	}

	var countTotalController = $('.selectChildAll').length;
	var countController = $('.selectChildAll').filter(':checked').length;
	// countController += 2;
	if(countTotalController == countController){
		is_checked_flag = '1';
	}

	/*check all module from checkbox check uncheck*/
	if ((is_checked_flag == '1')) {
		$('.selectAllController').prop('checked', true);
	} else {
		$('.selectAllController').prop('checked', false);
	}
}