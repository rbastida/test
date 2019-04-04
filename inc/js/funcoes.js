$(document).ready(function () {

    var numero_protocolo    = new Cleave('.input-protocolo', {
        delimiters: ['/', '/'],
        blocks: [2, 2, 5],
        uppercase: true
    });
    
    var data_protocolo      = new Cleave('.input-data', {
        date: true,
        datePattern: ['d', 'm', 'Y']
    });
    
    var erro                = 0;
    var lista_erros         = [];

    $('#enviar').click(function (e) {

        e.preventDefault();

        ///////////////////////////////////////////////////////////////////////////////////////
        // VALIDACAO
        ///////////////////////////////////////////////////////////////////////////////////////

        var nu_protocolo = $('#nu_protocolo').val();
        var nu_protocolo_ano = nu_protocolo.substring(0, 2);
        var nu_protocolo_origem = nu_protocolo.substring(3, 5);
        var nu_protocolo_numero = nu_protocolo.substring(6);

        valida_protocolo(nu_protocolo_ano, nu_protocolo_origem, nu_protocolo_numero);

    });

    function consulta_protocolo_existe(nu_protocolo_ano, nu_protocolo_origem, nu_protocolo_numero) {

        var myData = 'nu_protocolo_ano=' + nu_protocolo_ano + '&nu_protocolo_origem=' + nu_protocolo_origem + '&nu_protocolo_numero=' + nu_protocolo_numero;

        $.ajax({

            type:       "POST", // HTTP method POST or GET
            url:        "response_list_protocolo.php", // Where to make Ajax calls
            dataType:   "text", // Data type, HTML, json etc.
            data:       myData, // Form variables
            success: function (response) {

                return(response);

            },
            error: function (xhr, ajaxOptions, thrownError) {
            }
        });        

    }

    function valida_protocolo(nu_protocolo_ano, nu_protocolo_origem, nu_protocolo_numero) {

        var existe = consulta_protocolo_existe(nu_protocolo_ano, nu_protocolo_origem, nu_protocolo_numero);

        if (existe != 1) {

        } else {

            $('.modal-header .modal-title').html('Cadastro de Requisição');
            $('.modal-body .modal-title').html('<h4>Protocolo informado já existente!</h4>');
            $('.modal-footer .btn-default').html('Fechar');
            $('#alert-modal').modal('show');
        }
    }


});