(function ($) {
    var $wrapper = $('#TFraProformaAuxWrapper');
    $wrapper.on('click', '.removeTFraProformaAux', function(e) {
        e.preventDefault();
        $(this).closest('.TFraProformaAuxItem')
            .fadeOut()
            .remove();
    });
    $wrapper.on('click', '#add-FraProfAux', function(e) {
        e.preventDefault();
        // Get the data-prototype explained earlier
        var prototype = $wrapper.data('prototype');
        // get the new index
        var index = $wrapper.data('index');
        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        var newForm = prototype.replace(/__name__/g, index);
        // increase the index with one for the next item
        $wrapper.data('index', index + 1);
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
})(jQuery);
