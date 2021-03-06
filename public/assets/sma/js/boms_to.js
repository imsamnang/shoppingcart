$(document).ready(function () {
$('body a, body button').attr('tabindex', -1);
check_add_item_val();
if (site.settings.set_focus != 1) {
    $('#add_itemTo').focus();
}

if (localStorage.getItem('boitemsTo')) {
    loadItemsTo();
}

    // clear localStorage and reload
    $('#reset').click(function (e) {
        bootbox.confirm(lang.r_u_sure, function (result) {
            if (result) {
                if (localStorage.getItem('boitemsTo')) {
                    localStorage.removeItem('boitemsTo');
                }
                if (localStorage.getItem('boshipping')) {
                    localStorage.removeItem('boshipping');
                }
                if (localStorage.getItem('boref')) {
                    localStorage.removeItem('boref');
                }
                if (localStorage.getItem('bo_to_warehouse')) {
                    localStorage.removeItem('bo_to_warehouse');
                }
                if (localStorage.getItem('bonote')) {
                    localStorage.removeItem('bonote');
                }
                if (localStorage.getItem('bo_from_warehouse')) {
                    localStorage.removeItem('bo_from_warehouse');
                }
                if (localStorage.getItem('todate')) {
                    localStorage.removeItem('todate');
                }
                if (localStorage.getItem('bostatus')) {
                    localStorage.removeItem('bostatus');
                }

                 $('#modal-loading').show();
                 location.reload();
             }
         });
});


    
	$('#bonote').redactor('destroy');
	$('#bonote').redactor({
		buttons: ['formatting', '|', 'alignleft', 'aligncenter', 'alignright', 'justify', '|', 'bold', 'italic', 'underline', '|', 'unorderedlist', 'orderedlist', '|', 'link', '|', 'html'],
		formattingTags: ['p', 'pre', 'h3', 'h4'],
		minHeight: 100,
		changeCallback: function (e) {
			var v = this.get();
			localStorage.setItem('bonote', v);
		}
	});
	if (bonote = localStorage.getItem('bonote')) {
		$('#bonote').redactor('set', bonote);
	}

	$(document).on('change', '.rexpiry', function () { 
		var item_idTo = $(this).closest('tr').attr('data-item-id');
		boitemsTo[item_idTo].row.expiry = $(this).val();
		localStorage.setItem('boitemsTo', JSON.stringify(boitemsTo));
	});


	// prevent default action upon enter
	$('body').bind('keypress', function (e) {
		if ($(e.target).hasClass('redactor_editor')) {
			return true;
		}
		if (e.keyCode == 13) {
			e.preventDefault();
			return false;
		}
	});


    /* ---------------------- 
     * Delete Row Method 
     * ---------------------- */

    $(document).on('click', '.todelTo', function () {
        var row = $(this).closest('tr');
        var item_idTo = row.attr('data-item-id');
        delete boitemsTo[item_idTo];
        row.remove();
        if(boitemsTo.hasOwnProperty(item_idTo)) { } else {
            localStorage.setItem('boitemsTo', JSON.stringify(boitemsTo));
            loadItemsTo();
            return;
        }
    });

    /* --------------------------
     * Edit Row Quantity Method 
     -------------------------- */
     var old_row_qty;
     $(document).on("focus", '.rquantityTo', function () {
        old_row_qty = $(this).val();
    }).on("change", '.rquantityTo', function () {
        var row = $(this).closest('tr');
        if (!is_numeric($(this).val()) || parseFloat($(this).val()) < 0) {
            $(this).val(old_row_qty);
            bootbox.alert(lang.unexpected_value);
            return;
        }
        var new_qty = parseFloat($(this).val()),
        item_idTo = row.attr('data-item-id');
        boitemsTo[item_idTo].row.base_quantity = new_qty;
        if(boitemsTo[item_idTo].row.unit != boitemsTo[item_idTo].row.base_unit) {
            $.each(boitemsTo[item_idTo].units, function(){
                if (this.id == boitemsTo[item_idTo].row.unit) {
                    boitemsTo[item_idTo].row.base_quantity = unitToBaseQty(new_qty, this);
                }
            });
        }
        boitemsTo[item_idTo].row.qty = new_qty;
        localStorage.setItem('boitemsTo', JSON.stringify(boitemsTo));
        loadItemsTo();
    });
    
    /* --------------------------
     * Edit Row Cost Method 
     -------------------------- */
     var old_cost;
     $(document).on("focus", '.rcostTo', function () {
        old_cost = $(this).val();
    }).on("change", '.rcostTo', function () {
        var row = $(this).closest('tr');
        if (!is_numeric($(this).val())) {
            $(this).val(old_cost);
            bootbox.alert(lang.unexpected_value);
            return;
        }
        var new_cost = parseFloat($(this).val()),
        item_idTo = row.attr('data-item-id');
        boitemsTo[item_idTo].row.cost = new_cost;
        localStorage.setItem('boitemsTo', JSON.stringify(boitemsTo));
        loadItemsTo();
    });
    
});

/* -----------------------
 * Edit Row Modal Hanlder 
 ----------------------- */
 $(document).on('click', '.editTo', function () {
    var row = $(this).closest('tr');
    var row_idTo = row.attr('id');
    item_idTo = row.attr('data-item-id');
    item = boitemsTo[item_idTo];
    var qty = row.children().children('.rquantityTo').val(), 
    product_option_to = row.children().children('.roptionTo').val(),
    cost = row.children().children('.rucost').val();
    $('#prModalLabel').text(item.row.name + ' (' + item.row.code + ')');
    if (site.settings.tax1) {
        var tax = item.tax_rate != 0 ? item.tax_rate.name + ' (' + item.tax_rate.rate + ')' : 'N/A';
        $('#ptaxTo').text(tax);
        $('#old_taxTo').val($('#sproduct_tax_' + row_idTo).text());
    }

    var opt = '<p style="margin: 12px 0 0 0;">n/a</p>';
    if(item.options !== false) {
        var o = 1;
        opt = $("<select id=\"poptionTo\" name=\"poptionTo\" class=\"form-control select\" />");
        $.each(item.options, function () {
            if(o == 1) {
                if(product_option_to == '') { product_variant = this.id; } else { product_variant = product_option_to; }
            }
            $("<option />", {value: this.id, text: this.name}).appendTo(opt);
            o++;
        });
    } 
    uopt = $("<select id=\"punitTo\" name=\"punitTo\" class=\"form-control select\" />");
        $.each(item.units, function () {
            if(this.id == item.row.unit) {
                $("<option />", {value: this.id, text: this.name, selected:true}).appendTo(uopt);
            } else {
                $("<option />", {value: this.id, text: this.name}).appendTo(uopt);
            }
        });
    $('#poptions-divTo').html(opt);
    $('#punits-divTo').html(uopt);
    $('select.select').select2({minimumResultsForSearch: 7});
    $('#pquantityTo').val(qty);
    $('#old_qtyTo').val(qty);
    $('#ppriceTo').val(cost);
    $('#poptionTo').select2('val', item.row.option);
    $('#old_priceTo').val(cost);
    $('#row_idTo').val(row_idTo);
    $('#item_idTo').val(item_idTo);
    $('#pserialTo').val(row.children().children('.rserial').val());
    $('#pproduct_taxTo').select2('val', row.children().children('.rproduct_tax').val());
    $('#pdiscountTo').val(row.children().children('.rdiscount').val());
    $('#prModalTo').appendTo("body").modal('show');

});

$('#prModalTo').on('shown.bs.modal', function (e) {
    if($('#poptionTo').select2('val') != '') {
        $('#poptionTo').select2('val', product_variant);
        product_variant = 0;
    }
});

$(document).on('change', '#punitTo', function () {
    var row = $('#' + $('#row_idTo').val());
    var item_idTo = row.attr('data-item-id');
    var item = boitemsTo[item_idTo];
    if (!is_numeric($('#pquantityTo').val()) || parseFloat($('#pquantityTo').val()) < 0) {
        $(this).val(old_row_qty);
        bootbox.alert(lang.unexpected_value);
        return;
    }
    var unit = $('#punitTo').val();
    if(unit != boitemsTo[item_idTo].row.base_unit) {
        $.each(item.units, function() {
            if (this.id == unit) {
                $('#ppriceTo').val(formatDecimal((parseFloat(item.row.base_unit_cost)*(unitToBaseQty(1, this))), 4)).change();
            }
        });
    } else {
        $('#ppriceTo').val(formatDecimal(item.row.base_unit_cost)).change();
    }
});

/* -----------------------
 * Edit Row Method 
 ----------------------- */
 $(document).on('click', '#editItemTo', function () {
    var row = $('#' + $('#row_idTo').val());
    var item_idTo = row.attr('data-item-id');
    if (!is_numeric($('#pquantityTo').val()) || parseFloat($('#pquantityTo').val()) < 0) {
        $(this).val(old_row_qty);
        bootbox.alert(lang.unexpected_value);
        return;
    }
    var unit = $('#punitTo').val();
    var base_quantity = parseFloat($('#pquantityTo').val());
    if(unit != boitemsTo[item_idTo].row.base_unit) {
        $.each(boitemsTo[item_idTo].units, function(){
            if (this.id == unit) {
                base_quantity = unitToBaseQty($('#pquantityTo').val(), this);
            }
        });
    }
    boitemsTo[item_idTo].row.fup = 1,
    boitemsTo[item_idTo].row.qty = parseFloat($('#pquantityTo').val()),
    boitemsTo[item_idTo].row.base_quantity = parseFloat(base_quantity),
    boitemsTo[item_idTo].row.unit = unit,
    boitemsTo[item_idTo].row.real_unit_cost_to = parseFloat($('#ppriceTo').val()),
    boitemsTo[item_idTo].row.cost = parseFloat($('#ppriceTo').val()),
    // boitemsTo[item_idTo].row.tax_rate = new_pr_tax_rate,
    boitemsTo[item_idTo].row.discount = $('#pdiscount').val(),
    boitemsTo[item_idTo].row.option = $('#poptionTo').val(),
    // boitemsTo[item_idTo].row.tax_method = 1;
    localStorage.setItem('boitemsTo', JSON.stringify(boitemsTo));
    $('#prModalTo').modal('hide');
    
    loadItemsTo();
    return;
});

/* -----------------------
 * Misc Actions
 ----------------------- */

 function loadItemsTo() {

    if (localStorage.getItem('boitemsTo')) {
        total = 0;
        count = 1;
        an = 1;
        product_tax_to = 0;
        $("#ctTable tbody").empty();
        $('#add_transfer, #edit_transfer').attr('disabled', false);
        boitemsTo = JSON.parse(localStorage.getItem('boitemsTo'));
        sortedItems = (site.settings.item_addition == 1) ? _.sortBy(boitemsTo, function(o){return [parseInt(o.order)];}) :   boitemsTo;

        var order_no = new Date().getTime();
        $.each(sortedItems, function () {
            var item = this;
            var item_idTo = site.settings.item_addition == 1 ? item.item_idTo : item.id;
            item.order = item.order ? item.order : order_no++;
            var bo_from_warehouse = localStorage.getItem('bo_from_warehouse'), check = false;
            var product_id = item.row.id, item_type = item.row.type, item_cost = item.row.cost, item_qty = item.row.qty, item_bqty = item.row.quantity_balance, item_oqty = item.row.ordered_quantity, item_expiry = item.row.expiry, item_aqty = item.row.quantity_to, item_tax_method = item.row.tax_method, item_ds = item.row.discount, item_discount = 0, item_option = item.row.option, item_code = item.row.code, item_serial = item.row.serial, item_name = item.row.name.replace(/"/g, "&#034;").replace(/'/g, "&#039;");

            var unit_cost_to = item.row.real_unit_cost_to;
            var product_unit_to = item.row.unit, base_quantity = item.row.base_quantity;

            var pr_tax = item.tax_rate;
            var pr_tax_val = 0, pr_tax_rate = 0;
            if (site.settings.tax1 == 1) {
                if (pr_tax !== false) {
                    if (pr_tax.type == 1) {

                        if (item_tax_method == '0') {
                            pr_tax_val = formatDecimal(((unit_cost_to) * parseFloat(pr_tax.rate)) / (100 + parseFloat(pr_tax.rate)), 4);
                            pr_tax_rate = formatDecimal(pr_tax.rate) + '%';
                        } else {
                            pr_tax_val = formatDecimal(((unit_cost_to) * parseFloat(pr_tax.rate)) / 100, 4);
                            pr_tax_rate = formatDecimal(pr_tax.rate) + '%';
                        }

                    } else if (pr_tax.type == 2) {

                        pr_tax_val = parseFloat(pr_tax.rate);
                        pr_tax_rate = pr_tax.rate;

                    }
                    product_tax_to += pr_tax_val * item_qty;
                }
            }
            item_cost = item_tax_method == 0 ? formatDecimal(unit_cost_to-pr_tax_val, 4) : formatDecimal(unit_cost_to);
            unit_cost_to = formatDecimal(unit_cost_to+item_discount, 4);
            var sel_opt = '';
            $.each(item.options, function () {
                if(this.id == item_option) {
                    sel_opt = this.name;
                }
            });

            var row_no = item_idTo;//(new Date).getTime();
            var newTr = $('<tr id="row_' + row_no + '" class="row_' + item_idTo + '" data-item-id="' + item_idTo + '"></tr>');
            tr_html = '<td><input name="product_id[]" type="hidden" class="rid" value="' + product_id + '"><input name="product_type[]" type="hidden" class="rtype" value="' + item_type + '"><input name="product_code_to[]" type="hidden" class="rcode" value="' + item_code + '"><input name="product_name[]" type="hidden" class="rname" value="' + item_name + '"><input name="product_option_to[]" type="hidden" class="roptionTo" value="' + item_option + '"><span class="sname" id="name_' + row_no + '">' + item_code +' - '+ item_name +(sel_opt != '' ? ' ('+sel_opt+')' : '')+'</span> <i class="pull-right fa fa-edit tip tointer editTo" id="' + row_no + '" data-item="' + item_idTo + '" title="Edit" style="cursor:pointer;"></i></td>';            
            tr_html += '<td><input name="quantity_balance[]" type="hidden" class="rbqty" value="' + formatDecimal(item_bqty, 4) + '"><input name="ordered_quantity[]" type="hidden" class="roqty" value="' + formatDecimal(item_oqty, 4) + '"><input class="form-control text-center rquantityTo" tabindex="'+((site.settings.set_focus == 1) ? an : (an+1))+'" name="quantity_to[]" type="text" value="' + formatDecimal(item_qty) + '" data-id="' + row_no + '" data-item="' + item_idTo + '" id="quantity_' + row_no + '" onClick="this.select();"><input name="product_unit_to[]" type="hidden" class="runit" value="' + product_unit_to + '"><input name="product_base_quantity_to[]" type="hidden" class="rbase_quantity" value="' + base_quantity + '"></td>';

            tr_html += '<td class="text-center"><i class="fa fa-times tip todelTo" id="' + row_no + '" title="Remove" style="cursor:pointer;"></i></td>';
            newTr.html(tr_html);
            newTr.prependTo("#ctTable");
            total += formatDecimal(((parseFloat(item_cost) + parseFloat(pr_tax_val)) * parseFloat(item_qty)), 4);
            count += parseFloat(item_qty);
            an++;

            
        });

        var col = 1;        
        var tfoot = '<tr id="tfoot" class="tfoot active"><th colspan="'+col+'">Total</th><th class="text-center">' + formatNumber(parseFloat(count) - 1) + '</th>';
        tfoot += '<th class="text-center"><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i></th></tr>';
        $('#ctTable tfoot').html(tfoot);

        // Totals calculations after item addition
        var gtotal = total + shipping;
        $('#total').text(formatMoney(total));
        $('#titems').text((an-1)+' ('+(parseFloat(count)-1)+')');
        if (site.settings.tax1) {
            $('#ttax1').text(formatMoney(product_tax_to));
        }
        $('#gtotal').text(formatMoney(gtotal));
        if (an > parseInt(site.settings.bc_fix) && parseInt(site.settings.bc_fix) > 0) {
            $("html, body").animate({scrollTop: $('#sticker').offset().top}, 500);
            $(window).scrollTop($(window).scrollTop() + 1);
        }
        set_page_focus();
    }
}

/* -----------------------------
 * Add Purchase Iten Function
 * @param {json} item
 * @returns {Boolean}
 ---------------------------- */
 function add_bom_itemTo(item) {

    if (count == 1) {
        boitemsTo = {};
        if ($('#bowarehouse').val()) {
            $('#bowarehouse').select2("readonly", true);
        } else {
            bootbox.alert(lang.select_above);
            item = null;
            return;
        }
    }
    if (item == null)
        return;

    var item_idTo = site.settings.item_addition == 1 ? item.item_idTo : item.id;
    if (boitemsTo[item_idTo]) {

        var new_qty = parseFloat(boitemsTo[item_idTo].row.qty) + 1;
        boitemsTo[item_idTo].row.base_quantity = new_qty;
        if(boitemsTo[item_idTo].row.unit != boitemsTo[item_idTo].row.base_unit) {
            $.each(boitemsTo[item_idTo].units, function(){
                if (this.id == boitemsTo[item_idTo].row.unit) {
                    boitemsTo[item_idTo].row.base_quantity = unitToBaseQty(new_qty, this);
                }
            });
        }
        boitemsTo[item_idTo].row.qty = new_qty;

    } else {
        boitemsTo[item_idTo] = item;
    }
    boitemsTo[item_idTo].order = new Date().getTime();
    localStorage.setItem('boitemsTo', JSON.stringify(boitemsTo));
    loadItemsTo();
    return true;
}

if (typeof (Storage) === "undefined") {
    $(window).bind('beforeunload', function (e) {
        if (count > 1) {
            var message = "You will loss data!";
            return message;
        }
    });
}