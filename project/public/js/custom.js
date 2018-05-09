(function($){


	$(document).ready(function(){

		$(".pagination").PagePaginate({

			itemsToPaginate: ".itempage"
		});

	});

	$(document).ready(function(){

		$(".itempagination").ItemPaginate({

			itemsToPaginate: ".carditem"
		});

	});



}(jQuery));