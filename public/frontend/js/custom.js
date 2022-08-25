$(document).ready(function(){
	
	loadcart();
	loadwishlist();

	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

	function loadcart()
	{
		$.ajax({
			method: "GET",
			url: "/load-cart-data",
			success: function(response)
			{
				$('.cart-count').html('');
				$('.cart-count').html(response.count);
			}
		});
	}

	function loadwishlist()
	{
		$.ajax({
			method: "GET",
			url: "/load-wishlist-count",
			success: function(response)
			{
				$('.wishlist-count').html('');
				$('.wishlist-count').html(response.count);
			}
		});
	}

	$('.addToCartBtn').click(function(e){
		e.preventDefault();

		var product_id = $(this).closest('.product_data').find('.prod_id').val();
		var product_qty = $(this).closest('.product_data').find('.qty-input').val();
	
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		$.ajax({
			method: "POST",
			url: "/add-to-cart",
			data: {
				'product_id': product_id,
				'product_qty': product_qty,
			},
			success: function (response){
				swal(response.status);
				loadcart();	
			}
		});
	});

	$('.addToWishlist').click(function(e){
		e.preventDefault();

		var product_id = $(this).closest('.product_data').find('.prod_id').val();

		$.ajax({
			method: "POST",
			url: "/add-to-wishlist",
			data: {
				'product_id': product_id,
			},
			success: function (response){
				swal(response.status);
				loadwishlist();	
			}
		});
	});


	// $('.increment-btn').click(function(e){
	$(document).on('click', '.increment-btn', function(e){
		e.preventDefault();

		var inc_value = $(this).closest('.product_data').find('.qty-input').val();
		var value = parseInt(inc_value, 10);
		value = isNaN(value) ? 0 : value;
		if(value < 10)
		{
			value++;
			$(this).closest('.product_data').find('.qty-input').val(value);
		}
	});

	// $('.decrement-btn').click(function(e){
	$(document).on('click', '.decrement-btn', function(e){
		e.preventDefault();

		var dec_value = $(this).closest('.product_data').find('.qty-input').val();
		var value = parseInt(dec_value, 10);
		value = isNaN(value) ? 0 : value;
		if(value > 1)
		{
			value--;
			$(this).closest('.product_data').find('.qty-input').val(value);
		}
	});

	// $('.delete-cart-item').click(function(e){
	$(document).on('click', '.delete-cart-item', function(e){
		e.preventDefault();

		var prod_id = $(this).closest('.product_data').find('.prod_id').val();
		$.ajax({
			method: "POST",
			url: "delete-cart-item",
			data:{
				'prod_id' :prod_id,
			},
			success: function(response){
				// window.location.reload();
				loadcart();
				$('.cartitems').load(location.href + " .cartitems");
				swal("", response.status, "success");
			}
		});
	});

	// $('.remove-wishlist-item').click(function(e){
	$(document).on('click', '.remove-wishlist-item', function(e){
		e.preventDefault();

		var prod_id = $(this).closest('.product_data').find('.prod_id').val();
		$.ajax({
			method: "POST",
			url: "delete-wishlist-item",
			data:{
				'prod_id' :prod_id,
			},
			success: function(response){
				// window.location.reload();
				loadwishlist();
				$('.wishlistitems').load(location.href + " .wishlistitems");
				swal("", response.status, "success");
			}
		});
	});

	// $('.changeQuantity').click(function(e){
	$(document).on('click', '.changeQuantity', function(e){
		e.preventDefault();

		var prod_id = $(this).closest('.product_data').find('.prod_id').val();
		var qty = $(this).closest('.product_data').find('.qty-input').val();
		data = {
			'prod_id' : prod_id,
			'prod_qty' : qty,
		}
		$.ajax({
			method: "POST",
			url: "update-cart",
			data: data,
			success: function(response){
				$('.cartitems').load(location.href + " .cartitems");
				// window.location.reload();
			}
		});
	});
	////////////////////////////////////////////////////////////
	
	//Get Kec
	$('select[name="city_id"]').on('change', function(){
	var namakotaku = $("#city_id option:selected").attr("namakota");
	$("#nama_kota").val(namakotaku);
		let cityid = $(this).val();
		if(cityid){
			jQuery.ajax({
				url:"/subdistrict/"+cityid,
				type:'GET',
				dataType:'json',
			success:function(data){
				$('select[name="kec_id"]').empty();
				$.each(data, function(key, value){
					$('select[name="kec_id"]').append('<option value="'+ value.subdistrict_id +'" namakec="'+ value.type +' ' +value.subdistrict_name+ '">' + value.type + ' ' + value.subdistrict_name + '</option>');
				});
			}
			});
		}
		else
		{
			$('select[name="kec_id"]').empty();
		}
	});
	
	//Get Ongkir
	$('select[name="kec_id"]').on('change', function(){
	var namakecku = $("#kec_id option:selected").attr("namakec");
	$("#nama_kec").val(namakecku);
	
		let origin = $("input[name=origin]").val();
		let destination = $("select[name=kec_id]").val();
		let courier = $("select[name=courier]").val();
		let weight = $("input[name=weight]").val();
		if(courier){
			jQuery.ajax({
				url:"/origin="+origin+"&destination="+destination+"&weight="+weight+"&courier="+courier,
				type:'GET',
				dataType:'json',
				success:function(data){
					$('select[name="layanan"]').empty();
					$.each(data, function(key, value){
					$.each(value.costs, function(key1, value1){
						$.each(value1.cost, function(key2, value2){
							$('select[name="layanan"]').append('<option value="'+ key +'" service="'+ value1.description +'" ongkir="'+ value2.value +'">' + value1.service + '-' + value1.description + '-' +value2.value+ '</option>');
							});
						});
					});
				}
			});
		} 
		else 
		{
			$('select[name="layanan"]').empty();
		}
	});

	//Total
	$('select[name="layanan"]').on('change', function(){
	   
	    var serviceku = $("#layanan option:selected").attr("service");
	    $("#service_eks").val(serviceku);
	    
	    let totalbelanja = $("input[name=totalbelanja]").val();
	    
	    var ongkirku = $("#layanan option:selected").attr("ongkir");
	    $("#ongkir_ku").val(ongkirku);
	    
    		
    		let total = parseInt(totalbelanja) + parseInt(ongkirku);
    		$("#total").val(total);
	});
});