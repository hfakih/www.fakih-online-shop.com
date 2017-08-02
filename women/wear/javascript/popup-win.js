$(document).ready(function(){
	
	// popup window begin
		$('.closebtn-popupwin').click(function(){
			$('#transparent-div').hide();
			var popupWin =$(this).closest('.popup-win');
			popupWin.hide();
		});
	// popup window end
	
});