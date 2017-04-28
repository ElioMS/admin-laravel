@if ($message = session('success'))
	<script>
		setTimeout(function() {
	        toastr.options = {
	            closeButton: true,
	            progressBar: true,
	            showMethod: 'fadeIn',
	            hideMethod: 'fadeOut',
	            timeOut: 5100
	        };
	        toastr.success("{{ $message }}", 'Success!');
	    }, 0);
	</script>

@endif

