(function($){

	$.fn.PagePaginate=function(options)
			{
				var PaginationContainer=this;
				var itemsToPaginate;

				var defaultv={

					itemsPerPage:1
				}

				var settings={}

				$.extend(settings,defaultv,options);

				itemsToPaginate=$(settings.itemsToPaginate);
				var numberoflinks=Math.ceil((itemsToPaginate.length/settings.itemsPerPage));
				$("<ul class=\"pagination flex-wrap\"></ul>").prependTo(PaginationContainer);


				for (var i = 0; i < numberoflinks; i++) {
					PaginationContainer.find("ul").append("<li class=\"page-item\"><a onclick=\"topFunction()\" class=\"page-link\" >"+(i+1)+"</a></li>");
				}



				itemsToPaginate.filter(":gt("+(settings.itemsPerPage-1)+")").hide();

				PaginationContainer.find("ul li").on('click', function(event) {
					$(this).addClass('active')
					$(this).siblings().removeClass('active')

					var linknumber=$(this).text();
					var  itemstohide= itemsToPaginate.filter(":lt("+((linknumber-1)*settings.itemsPerPage)+")");
					$.merge(itemstohide, itemsToPaginate.filter(":gt("+((linknumber*settings.itemsPerPage)-1)+")"));

					itemstohide.hide();
					var itemstoshow=itemsToPaginate.not(itemstohide);
					itemstoshow.show();
				});
			};

			$.fn.ItemPaginate=function(options)
			{
				var PaginationContainer=this;
				var itemsToPaginate;

				var defaultv={

					itemsPerPage:20
				}

				var settings={}

				$.extend(settings,defaultv,options);

				itemsToPaginate=$(settings.itemsToPaginate);
				var numberoflinks=Math.ceil((itemsToPaginate.length/settings.itemsPerPage));
				$("<ul class=\"pagination flex-wrap\"></ul>").prependTo(PaginationContainer);


				for (var i = 0; i < numberoflinks; i++) {
					PaginationContainer.find("ul").append("<li class=\"page-item\"><a onclick=\"topFunction()\" class=\"page-link\" >"+(i+1)+"</a></li>");
				}



				itemsToPaginate.filter(":gt("+(settings.itemsPerPage-1)+")").hide();

				PaginationContainer.find("ul li").on('click', function(event) {
					$(this).addClass('active')
					$(this).siblings().removeClass('active')

					var linknumber=$(this).text();
					var  itemstohide= itemsToPaginate.filter(":lt("+((linknumber-1)*settings.itemsPerPage)+")");
					$.merge(itemstohide, itemsToPaginate.filter(":gt("+((linknumber*settings.itemsPerPage)-1)+")"));

					itemstohide.hide();
					var itemstoshow=itemsToPaginate.not(itemstohide);
					itemstoshow.show();
				});
			};

}(jQuery));

