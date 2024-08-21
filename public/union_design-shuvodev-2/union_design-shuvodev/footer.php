<script src="assets/plugins/common/common.min.js"></script>
<script src="assets/js/custom.min.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/my/select2.min.js"></script>
<script src="assets/my/toastr.min.js"></script>

<script>
	@if(Session::has('messege'))
	var type="{{Session::get('alert-type','info')}}"
	switch(type){
		case 'info':
		toastr.info("{{ Session::get('messege') }}");
		break;
		case 'success':
		toastr.success("{{ Session::get('messege') }}");
		break;
		case 'warning':
		toastr.warning("{{ Session::get('messege') }}");
		break;
		case 'error':
		toastr.error("{{ Session::get('messege') }}");
		break;
	}
	@endif
</script>


<script src="assets/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>


<script type="text/javascript">
	(function($) {
		"use strict"

		new quixSettings({
			sidebarPosition: "fixed",
			headerPosition: "fixed"
		});

	})(jQuery);

</script>


<script type="text/javascript">

	$(document).ready(function() {
		$('.myselect').select2();
	});




</script>




<script src="assets/my/uikit.min.js"></script>
<script src="assets/my/uikit-icons.min.js"></script>
<script src="assets/my/sweetalert2@11.js"></script>



</body>
</html>

