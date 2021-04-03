<script>
	
	$(document).ready(function() {
		
		$('.kategori').click(function() {
				
			let kategori = $(this).data('kategori');

			$.ajax({
				url: 'http://localhost/salten-hotel/user/ajaxsearch',
				type: 'post',
				data: {kategori: kategori},
				success: function(data) {

					$('.list-kamar').html(data);

				}
			});


		});

	});

</script>