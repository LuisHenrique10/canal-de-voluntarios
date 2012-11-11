
$(document).ready(function()
		{
			//alert("Olá Laura");

//Pagina formulario3.html----------------------------------
		$(".mest").click(function() 
		{
			$(".nota3").show(500);
			$(".nota6").hide(500);
			$(".nota7").hide(500);
		});

		$(".dout").click(function() 
		{
			$(".nota3").hide(500);
			$(".nota6").show(500);
			$(".nota7").show(500);
		});

		$(".mestdout").click(function() 
		{
			$(".nota3").show(500);
			$(".nota6").show(500);
			$(".nota7").show(500);
		});

		




//---------------------------------------------------

$("#cadastro_form").validate({
		// Define as regras
		rules:{
			universidade:{
				required: true
			},
			sigla:{
				required: true
			},
			curso:{
				required: true
			},
			nivel:{
				required: true
			},
			area:{
				required: true
			},
			linhas_pesquisa:{
				required: true
			},
			abertura:{
				required: true
			},
			nota:{
				required: true
			},
			poscomp:{
				required: true
			},
			link:{
				required: true
			},
			nome:{
				required: true
			},
			telefone:{
				required: true
			},
			operadora:{
				required: true
			},
			email:{
				required: true
			},
			nome_vice:{
				required: true
			},
			telefone_vice:{
				required: true
			},
			operadora_vice:{
				required: true
			},
			email_vice:{
				required: true
			}

			
		},
		// Define as mensagens de erro para cada regra
		messages:{
			universidade:{
				required: "*"
			},
			sigla:{
				required: "*"
			},
			curso:{
				required: "*"
			},
			nivel:{
				required: "*"
			},
			area:{
				required: "*"
			},
			linhas_pesquisa:{
				required: "*"
			},
			abertura:{
				required: "*"
			},
			nota:{
				required: "*"
			},
			poscomp:{
				required: "*"
			},
			link:{
				required: "*"
			},
			nome:{
				required: "*"
			},
			telefone:{
				required: "*"
			},
			operadora:{
				required: "*"
			},
			email:{
				required: "*"
			},
			nome_vice:{
				required: "*"
			},
			telefone_vice:{
				required: "*"
			},
			operadora_vice:{
				required: "*"
			},
			email_vice:{
				required: "*"
			}
		}
	});


//---------------------------------------------------



//Pagi
//--------------------------------------------------

});