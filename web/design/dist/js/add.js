
jQuery(document).ready(function () {
    $('.liste').DataTable();
    $('.datetimepicker').datetimepicker({
        format: "d-m-Y"
    });
    
    $('.separateurMillier').inputmask('999 999 999 999 999', {numericInput:true,rightAlign:false, placeholder:'',removeMaskOnSubmit:true});
});

/**
 * ajout de nouveau produit et ses options dans le system
 */
$(document).ready(function () {
    var $container = $('#optionProduit');

    $('#add_prod_option').click(function (e) {
        addOption($container);
        e.preventDefault();
        return false;
    });
    var index = $container.find(':input').length;
    function addOption($container) {
        var $prototype = $($container.attr('data-prototype').replace(/__name__/g, index));
        addDeleteLink($prototype);
        $container.append($prototype);
        index++;
    }
    function addDeleteLink($prototype) {
        $deleteLink = $('<td><a href="#"><i class="fa fa-2x fa-trash" style="margin: 10px 0px 0px 9px; color: #AA3333"></i></a></td>');
        $prototype.append($deleteLink);
        $deleteLink.click(function (e) {
            $prototype.remove();
            e.preventDefault();
            return false;
        });
    }
});

/**
 * 
 * gestion du remplissage des champs reference et prix HT lors 
 * lors de selection de produit ou option pour la facturation
 */
jQuery(document).ready(function () {
    $(document.body).on('change', '.ajaxProdOpt', function (e) {
        var $this = $(this);
        var idElement = $this.attr('id');
        idElementCible = '#' + idElement + " option:selected";
        var idval = $(idElementCible).val();
        console.log(idval);
        if (idval !== '') {
            var ajaxproduitAjaxUrl;
            if ($this.parent('td').attr('class') === 'produit') {
                ajaxproduitAjaxUrl = Routing.generate('infos_produit', {'id': idval});
            } else if ($this.parent('td').attr('class') === 'option') {
                ajaxproduitAjaxUrl = Routing.generate('infos_option', {'id': idval});
            }
            $this.parent('td').append('<i class="loader fa fa-spinner fa-spin"></i>');
            $.ajax({
                type: 'GET',
                url: ajaxproduitAjaxUrl,
                dataType: 'json',
                success: function (data) {
                    $this.parent('td').prev($('td.refprod')).find('input').val(data['reference']);
                    $this.parent('td').next($('td.prixprod')).find('input').val(data['prixHT']);
                    $this.parent('td').find('i.loader').remove();
                },
                error: function (e) {
                    console.log(e);
                }

            });
        }
    });
});
//fin gestion du remplissage des champs reference et prix HT 


/***************************************\
 * 
 * Gestion des bouton d'ajout et de suppression des collection details produits facture
 * et details options facture
 * 
 \**************************************/
var $collectionHolderDetailsProduit;
var $addProdLink = $('.add_prod');
jQuery(document).ready(function () {
    $collectionHolderDetailsProduit = $('tbody.detailsproduits');
    //suppr
    $collectionHolderDetailsProduit.find('tr').each(function () {
        addDeleteLink($(this));
    });
    //fin
    addForm($collectionHolderDetailsProduit);
    ////  $collectionHolder.append($newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolderDetailsProduit.data('index', $collectionHolderDetailsProduit.find(':input').length);
    $addProdLink.on('click', function (e) {
        e.preventDefault();
        addForm($collectionHolderDetailsProduit);
    });
});
// fin pour produit

/***************************************\
 * Gestion details options facture
 \**************************************/
var $collectionHolderDetailsOption;
var $addOptLink = $('.add_opt');
jQuery(document).ready(function () {
    $collectionHolderDetailsOption = $('tbody.detailsOptions');
    //suppr
    $collectionHolderDetailsOption.find('tr').each(function () {
        addDeleteLink($(this));
    });
    //fin
    $collectionHolderDetailsOption.data('index', $collectionHolderDetailsOption.find(':input').length);
    $addOptLink.on('click', function (e) {
        e.preventDefault();
        addForm($collectionHolderDetailsOption);
    });
});
// La fonction d'ajout

function addForm($collectionHolder) {
    var prototype = $collectionHolder.data('prototype');
    //nouveau index
    var index = $collectionHolder.data('index');
    var newForm = prototype.replace(/__name__/g, index);
    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);
    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<tr class="item" ></tr>').append(newForm);
    //// $newLinkLi.before($newFormLi);
    $collectionHolder.append($newFormLi);
    addDeleteLink($newFormLi);
}

// La fonction de suppression
function addDeleteLink($FormElement) {
    var $removeFormA = $('<td><a href="#" class="btn btn-danger">suppr</a></td>');
    $FormElement.append($removeFormA);
    $removeFormA.on('click', function (e) {
        e.preventDefault();
        $FormElement.remove();
    });
}