(function ($) {
    var $proformawrapper = $('#TFraProformaAuxWrapper');
    var $proformaVtowrapper = $('#TFraProformaVtoWrapper');
    $proformawrapper.on('click', '.removeTFraProformaAux', function(e) {
        e.preventDefault();
        $(this).closest('.TFraProformaAuxItem')
            .fadeOut()
            .remove();
    });
    $proformawrapper.on('click', '#add-FraProfAux', function(e) {
        e.preventDefault();
        // Get the data-prototype explained earlier
        var prototype = $proformawrapper.data('prototype');
        // get the new index
        var index = $proformawrapper.data('index');
        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        var newForm = prototype.replace(/__name__/g, index);
        // increase the index with one for the next item
        $proformawrapper.data('index', index + 1);
        // Display the form in the page before the "new" link
        $(this).before(newForm);
        $('.selectorProducte').select2({
            minimumInputLength: 3,
            width: '100% !important',
            ajax: {
                url: '{{path("t_productes_get_nomprod")|escape("js")}}',
                data: function (params) {
                    var query = {
                        nomProd: params.term,
                        type: 'public'
                        
                    }
                    return query;
                },
            }  
            });
    });
    $proformaVtowrapper.on('click', '.removeTFraProformaVto', function(e) {
        e.preventDefault();
        $(this).closest('.TFraProformaVtoItem')
            .fadeOut()
            .remove();
    });
    $proformaVtowrapper.on('click', '#add-FraProfVto', function(e) {
        e.preventDefault();
        // Get the data-prototype explained earlier
        var prototype = $proformaVtowrapper.data('prototype');
        // get the new index
        var index = $proformaVtowrapper.data('index');
        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        var newForm = prototype.replace(/__name__/g, index);
        // increase the index with one for the next item
        $proformaVtowrapper.data('index', index + 1);
        // Display the form in the page before the "new" link
        $(this).before(newForm);
    });
    $proformaVtowrapper.on('keyup', '.unitProf', function(e) {
        e.preventDefault();
        $(this).closest('.totalProf ')
            .val(e.target.value)
    });
})(jQuery);
