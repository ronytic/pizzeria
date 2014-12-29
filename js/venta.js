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
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciotamano]").val(costo);
		sumar();
	});
	$(".ccmediana").on("click",function(){
		$("#ctamano .activado").removeClass("activado");
		$(".ccmediana").addClass("activado");
		$("input[name=tamano]").val("mediano")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciotamano]").val(costo);
		sumar();
	});
	$(".ccpequena").on("click",function(){
		$("#ctamano .activado").removeClass("activado");
		$(".ccpequena").addClass("activado");
		$("input[name=tamano]").val("pequena")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciotamano]").val(costo);
		sumar();
	});
	$(".ccporcion").on("click",function(){
		$("#ctamano .activado").removeClass("activado");
		$(".ccporcion").addClass("activado");
		$("input[name=tamano]").val("porcion")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciotamano]").val(costo);
		sumar();
	});
	
	//Sabores
	$(".cctradicional").on("click",function(){
		$("#csabores .activado").removeClass("activado");
		$(".cctradicional").addClass("activado");
		$("input[name=sabores]").val("tradicional")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciosabores]").val(costo);
		sumar();
	});
	
	$(".cchawaiana").on("click",function(){
		$("#csabores .activado").removeClass("activado");
		$(".cchawaiana").addClass("activado");
		$("input[name=sabores]").val("hawaiana")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciosabores]").val(costo);
		sumar();
	});
	
	$(".ccamericana").on("click",function(){
		$("#csabores .activado").removeClass("activado");
		$(".ccamericana").addClass("activado");
		$("input[name=sabores]").val("americana")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciosabores]").val(costo);
		sumar();
	});
	
	$(".ccespanola").on("click",function(){
		$("#csabores .activado").removeClass("activado");
		$(".ccespanola").addClass("activado");
		$("input[name=sabores]").val("espanola")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciosabores]").val(costo);
		sumar();
	});
	
	$(".cc4estaciones").on("click",function(){
		$("#csabores .activado").removeClass("activado");
		$(".cc4estaciones").addClass("activado");
		$("input[name=sabores]").val("4 estaciones")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciosabores]").val(costo);
		sumar();
	});
	$(".cccarbonara").on("click",function(){
		$("#csabores .activado").removeClass("activado");
		$(".cccarbonara").addClass("activado");
		$("input[name=sabores]").val("carbonara")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=preciosabores]").val(costo);
		sumar();
	});
	
	
	//Extras
	
	$(".ccqueso").on("click",function(){
		$("#cextras .activado").removeClass("activado");
		$(".ccqueso").addClass("activado");
		$("input[name=extras]").val("queso")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioextras]").val(costo);
		sumar();
	});
	$(".ccjamon").on("click",function(){
		$("#cextras .activado").removeClass("activado");
		$(".ccjamon").addClass("activado");
		$("input[name=extras]").val("jamon")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioextras]").val(costo);
		sumar();
	});
	$(".ccaceituna").on("click",function(){
		$("#cextras .activado").removeClass("activado");
		$(".ccaceituna").addClass("activado");
		$("input[name=extras]").val("aceituna")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioextras]").val(costo);
		sumar();
	});
	$(".ccpicante").on("click",function(){
		$("#cextras .activado").removeClass("activado");
		$(".ccpicante").addClass("activado");
		$("input[name=extras]").val("picante")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioextras]").val(costo);
		sumar();
	});
	$(".cctodomucho").on("click",function(){
		$("#cextras .activado").removeClass("activado");
		$(".cctodomucho").addClass("activado");
		$("input[name=extras]").val("todo mucho")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioextras]").val(costo);
		sumar();
	});
	$(".cctodomedio").on("click",function(){
		$("#cextras .activado").removeClass("activado");
		$(".cctodomedio").addClass("activado");
		$("input[name=extras]").val("todo medio")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioextras]").val(costo);
		sumar();
	});
	$(".cctodopoco").on("click",function(){
		$("#cextras .activado").removeClass("activado");
		$(".cctodopoco").addClass("activado");
		$("input[name=extras]").val("todo poco")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioextras]").val(costo);
		sumar();
	});
	$(".ccninguno").on("click",function(){
		$("#cextras .activado").removeClass("activado");
		$(".ccninguno").addClass("activado");
		$("input[name=extras]").val("ninguno")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioextras]").val(costo);
		sumar();
	});
	//Envase
	$(".ccaqui").on("click",function(){
		$("#cenvase .activado").removeClass("activado");
		$(".ccaqui").addClass("activado");
		$("input[name=envase]").val("aqui")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioenvase]").val(costo);
		sumar();
	});
	$(".ccllevarcaja").on("click",function(){
		$("#cenvase .activado").removeClass("activado");
		$(".ccllevarcaja").addClass("activado");
		$("input[name=envase]").val("llevar en caja")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioenvase]").val(costo);
		sumar();
	});
	$(".ccllevarsincaja").on("click",function(){
		$("#cenvase .activado").removeClass("activado");
		$(".ccllevarsincaja").addClass("activado");
		$("input[name=envase]").val("llevar sin caja")
		var costo=$(this).find(".precio").html();
		costo=!isNaN(costo)?costo:0;
		$("input[name=precioenvase]").val(costo);
		sumar();
	});
	//Bebidas
	$("input[name=cantidadpersonalcocacola]").change(function(e) {
        var cantidad=$(this).val();
		var precio=$(".ccpersonalcocacola").find(".precio").html();
		var t=cantidad*precio;
		$("input[name=totalpersonalcocacola]").val(t)
		sumarbebidas();
    });
	$("input[name=cantidadpersonalfanta]").change(function(e) {
        var cantidad=$(this).val();
		var precio=$(".ccpersonalfanta").find(".precio").html();
		var t=cantidad*precio;
		$("input[name=totalpersonalfanta]").val(t)
		sumarbebidas();
    });
	$("input[name=cantidadpersonalsprite]").change(function(e) {
        var cantidad=$(this).val();
		var precio=$(".ccpersonalsprite").find(".precio").html();
		var t=cantidad*precio;
		$("input[name=totalpersonalsprite]").val(t)
		sumarbebidas();
    });
	$("input[name=cantidadcocacolagrande]").change(function(e) {
        var cantidad=$(this).val();
		var precio=$(".cccocacolagrande").find(".precio").html();
		var t=cantidad*precio;
		$("input[name=totalcocacolagrande]").val(t)
		sumarbebidas();
    });
	$("input[name=cantidadfantagrande]").change(function(e) {
        var cantidad=$(this).val();
		var precio=$(".ccfantagrande").find(".precio").html();
		var t=cantidad*precio;
		$("input[name=totalfantagrande]").val(t)
		sumarbebidas();
    });
	$("input[name=cantidadfrutalgrande]").change(function(e) {
        var cantidad=$(this).val();
		var precio=$(".ccfrutalgrande").find(".precio").html();
		var t=cantidad*precio;
		$("input[name=totalfrutalgrande]").val(t)
		sumarbebidas();
    });
});
function sumarbebidas(){
	var cc=parseFloat($("input[name=totalpersonalcocacola]").val());
	var ff=parseFloat($("input[name=totalpersonalfanta]").val());
	var sp=parseFloat($("input[name=totalpersonalsprite]").val());
	var ccg=parseFloat($("input[name=totalcocacolagrande]").val());
	var ffg=parseFloat($("input[name=totalfantagrande]").val());
	var frg=parseFloat($("input[name=totalfrutalgrande]").val());
	$("input[name=preciobebidas]").val(cc+ff+sp+ccg+ffg+frg);
	sumar();
}
function sumar(){
	Tamano=parseFloat($("input[name=preciotamano]").val());
	Sabores=parseFloat($("input[name=preciosabores]").val());
	Extras=parseFloat($("input[name=precioextras]").val());
	Envase=parseFloat($("input[name=precioenvase]").val());
	Bebidas=parseFloat($("input[name=preciobebidas]").val());

	Tamano=isNaN(Tamano)?0:Tamano;
	Sabores=isNaN(Sabores)?0:Sabores;
	Extras=isNaN(Extras)?0:Extras;
	Envase=isNaN(Envase)?0:Envase;
	Bebidas=isNaN(Bebidas)?0:Bebidas;
		
	Total=Tamano+Sabores+Extras+Envase+Bebidas;
	$(".total").html(""+Total);
	$("input[name=total]").val(Total);
};