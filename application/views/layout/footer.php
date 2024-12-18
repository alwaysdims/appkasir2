<!-- BEGIN: Dark Mode Switcher-->

<!-- END: Dark Mode Switcher-->

<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
<script src="<?= base_url('assets/template/Compiled') ?>/dist/js/app.js"></script>
<!-- END: JS Assets-->

	<!-- DataTables CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">	

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // Add any customization options here
        });
    });
	tailwind.config = {
		darkMode: 'class',
		theme: {
			extend: {}
		}	
	}
</script>
</body>

</html>
