<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->



</body>
</html>
<script src="/assetsa/libs/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".se-pre-con").delay(3000).fadeOut('5000');

    });
</script>
<script src="/assetsa/js/vendor.min.js"></script>
<script src="/assetsa/libs/ladda/spin.min.js"></script>
<script src="/assetsa/libs/ladda/ladda.min.js"></script>

<!-- Buttons init js-->
<script src="/assetsa/js/pages/loading-btn.init.js"></script>

<script src="/assetsa/libs/dropzone/min/dropzone.min.js"></script>
<script src="/assetsa/libs/select2/js/select2.min.js"></script>
<!-- Plugins js-->
<script src="/assetsa/libs/flatpickr/flatpickr.min.js"></script>


<script src="/assetsa/libs/selectize/js/standalone/selectize.min.js"></script>

<!-- Dashboar 1 init js-->


<!-- App js-->
<script src="/assetsa/js/app.min.js"></script>
<!--<script src="/assetsa/libs/parsleyjs/parsley.min.js"></script>-->
<!-- third party js -->
<script src="/assetsa/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assetsa/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assetsa/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assetsa/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="/assetsa/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assetsa/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="/assetsa/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/assetsa/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/assetsa/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/assetsa/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/assetsa/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="/assetsa/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="/assetsa/libs/pdfmake/build/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="/assetsa/js/pages/datatables.init.js"></script>


<script src="/assetsa/libs/selectize/js/standalone/selectize.min.js"></script>
<script src="/assetsa/libs/mohithg-switchery/switchery.min.js"></script>
<script src="/assetsa/libs/multiselect/js/jquery.multi-select.js"></script>
<script src="/assetsa/libs/select2/js/select2.min.js"></script>
<script src="/assetsa/libs/jquery-mockjax/jquery.mockjax.min.js"></script>
<script src="/assetsa/libs/devbridge-autocomplete/jquery.autocomplete.min.js"></script>
<script src="/assetsa/libs/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/assetsa/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="/assetsa/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

<!-- Plugins js -->
<script src="/assetsa/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
<script src="/assetsa/libs/autonumeric/autoNumeric-min.js"></script>

<!-- Init js-->
<script src="/assetsa/js/pages/form-masks.init.js"></script>

<!-- Init js-->
<!--<script src="/assetsa/js/pages/form-validation.init.js"></script>-->
<!--<script src="/assetsa/js/pages/form-advanced.init.js"></script>-->
<script>
	$('input.number').keyup(function (event) {
		// skip for arrow keys
		if (event.which >= 37 && event.which <= 40) {
			event.preventDefault();
		}
		
		var currentVal = $(this).val();
		var testDecimal = testDecimals(currentVal);
		if (testDecimal.length > 1) {
			//console.log("You cannot enter more than one decimal point");
			currentVal = currentVal.slice(0, -1);
		}
		$(this).val(replaceCommas(currentVal));
		
	});
	
	function testDecimals(currentVal) {
		var count;
		currentVal.match(/\./g) === null ? count = 0 : count = currentVal.match(/\./g);
		return count;
	}
	
	function replaceCommas(yourNumber) {
		var components = yourNumber.toString().split(".");
		if (components.length === 1)
			components[0] = yourNumber;
		components[0] = components[0].replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		
		if (components.length === 2)
			components[1] = components[1].replace(/\D/g, "");
		return components.join(".");
	}

</script>


<?=$this->renderSection('extra-scripts') ?>
