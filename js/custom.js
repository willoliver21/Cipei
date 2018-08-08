$(function() {

    // Atribui evento e função para limpeza dos campos
    $('#txtAutor').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $("#txtAutor").autocomplete({
	    minLength: 2,
	    source: function( request, response ) {
	        $.ajax({
	            url: "consultar.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#txtAutor').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#txtAutor").val( ui.item.nome );
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#txtAutor").val( ui.item.nome );
	        return false;
	    }
    })
    .autocomplete("instance")._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( " - <b>Nome: </b>" + item.nome + "</a>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#txtAutor').val();

    	if(busca != "" && busca.length >= 2){
    		$.ajax({
	            url: "../consultar.php",
	            dataType: "json",	
	            data: {
	            	acao: 'procura',
	                parametro: $('#txtAutor').val()
	            },
	            success: function(data) {
	               $('#txtAutor').val(data[0].nome);
	               $('#mail').val(data[0].email);
	               $('#instituicao').val(data[0].instituicao);
	               
	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#txtAutor').val();

       if(busca == ""){
	   $('#mail').val('');
           $('#instituicao').val('')
           
       }
    }
});

// https://phpcipei-pandimxd20.c9users.io/consultar.php?acao=autocomplete&parametro=um