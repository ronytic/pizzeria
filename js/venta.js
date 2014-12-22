var Total=0;
var Tamano=0;
var Sabores=0;
var Extras=0;
var Envase=0;
var Bebidas=0;
$(document).on("ready",function(){
	$(".ccgrande").on("click",function(){
		$("#ctamano .activado").removeClass("activado");
		$(".ccgrande").addClass("activado");
		$("input[name=tamano]").val("grande");
		var costo=$(this).find(".precio").html();
		$("input[name=preciotamano]").val(costo);
		sumar();
	});
	$(".ccmediana").on("click",function(){
		$("#ctamano .activado").removeClass("activado");
		$(".ccmediana").addClass("activado");
		$("input[name=tamano]").val("mediano")
		var costo=$(this).find(".precio").html();
		$("input[name=preciotamano]").val(costo);
		sumar();
	});
	$(".ccpequena").on("click",function(){
		$("#ctamano .activado").removeClass("activado");
		$(".ccpequena").addClass("activado");
		$("input[name=tamano]").val("pequena")
		var costo=$(this).find(".precio").html();
		$("input[name=preciotamano]").val(costo);
		sumar();
	});
	$(".ccporcion").on("click",function(){
		$("#ctamano .activado").removeClass("activado");
		$(".ccporcion").addClass("activado");
		$("input[name=tamano]").val("porcion")
		var costo=$(this).find(".precio").html();
		$("input[name=preciotamano]").val(costo);
		sumar();
	});
	
});
function sumar(){
	Tamano=$("input[name=preciotamano]").val();
	Total=Tamano;
	$(".total").html(""+Total);
	$("input[name=total]").val(Total);
};