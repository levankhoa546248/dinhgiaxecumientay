function checkIf(val) {
    if (!val) {
        return true;
    } else if (val == null) {
        return true;
    } else if (val == '') {
        return true;
    } else if (val == "") {
        return true;
    } else if (val == " ") {
        return true;
    } else if (val == "null") {
        return true;
    } else if (val == 'null') {
        return true;
    } else if (val == ' ') {
        return true;
    } else if (val == 'undefined') {
        return true
    } else if (val == undefined) {
        return true;
    } else if (val == -1) {
        return true;
    } else if (val == '-1') {
        return true;
    } else {
        return false;
    }
}

function fShowHide() {
    // var status = $('#status').val();
    // if (status == "1"){
    //     $('#divtoggle').show();
    //     $('#status').val("0");
    // } else {
    //     $('#divtoggle').hide();
    //     $('#status').val("1");
    // }
    if ($('#divpanelbody')[0].style.display == "none"){
        $('#divpanelbody').show();
    }else {
        $('#divpanelbody').hide();
    }
}

function setDistrict(provinceid, districtid) {
    $.ajax({
        type: "POST",
        url: "admin/controllers/units/setDistrict.php",
        data: {
            'provinceid': provinceid,
            'districtid': districtid
        },
        success: function (data) {
            $("#district").html(data);
        }
    });
    return true;
}

function setVillage(districtid, villageid) {
    $.ajax({
        type: "POST",
        url: "admin/controllers/units/setVillage.php",
        data: {
            'districtid': districtid,
            'villageid': villageid
        },
        success: function (data) {
            $("#village").html(data);
        }
    });
    return true;
}

function getListDistrict(val) {
    $.ajax({
        type: "POST",
        url: "admin/controllers/units/listDistrict.php",
        data: 'provinceid=' + val,
        success: function (data) {
            $("#district").html(data);
        }
    });
    return true;
}

function getListVillage(val) {
    $.ajax({
        type: "POST",
        url: "admin/controllers/units/listVillage.php",
        data: 'districtid=' + val,
        success: function (data) {
            $("#village").html(data);
        }
    });
    return true;
}


function toggleSelectAll(control) {
    var allOptionIsSelected = (control.val() || []).indexOf("All") > -1;

    function valuesOf(elements) {
        return $.map(elements, function (element) {
            return element.value;
        });
    }

    if (control.data('allOptionIsSelected') != allOptionIsSelected) {
        // User clicked 'All' option
        if (allOptionIsSelected) {
            // Can't use .selectpicker('selectAll') because multiple "change" events will be triggered
            control.selectpicker('val', valuesOf(control.find('option')));
        } else {
            control.selectpicker('val', []);
        }
    } else {
        // User clicked other option
        if (allOptionIsSelected && control.val().length != control.find('option').length) {
            // All options were selected, user deselected one option
            // => unselect 'All' option
            control.selectpicker('val', valuesOf(control.find('option:selected[value!=All]')));
            allOptionIsSelected = false;
        } else if (!allOptionIsSelected && control.val().length == control.find('option').length - 1) {
            // Not all options were selected, user selected all options except 'All' option
            // => select 'All' option too
            control.selectpicker('val', valuesOf(control.find('option')));
            allOptionIsSelected = true;
        }
    }
    control.data('allOptionIsSelected', allOptionIsSelected);
}

function getGoodsgroup(goodsgroupsubid, selected) {
    $.ajax({
        type: "POST",
        url: "admin/controllers/goods/listGoodsgroup.php",
        data: {
            'goodsgroupsubid': goodsgroupsubid
        },
        success: function (data) {
            $('#goodsgroup').html(data);
            $('#goodsgroup').addClass('selectpicker');
            $('#goodsgroup').attr('data-live-search', 'true');
            $('select[name=goodsgroup]').val(selected);
            $('#goodsgroup').selectpicker('refresh');
        }
    });
    return true;
}

function formatNumber(n) {
    // format number 1000000 to 1,234,567
    if (n < 0) {
        return "-" + n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }else {
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }
}

function formatCurrency(input, blur) {
    // appends $ to value, validates decimal side
    // and puts cursor back in right position.

    // get input value
    var input_val = input.val();

    // don't validate empty input
    if (input_val === "") {
        return;
    }

    // original length
    var original_len = input_val.length;

    // initial caret position
    var caret_pos = input.prop("selectionStart");

    // check for decimal
    if (input_val.indexOf(".") >= 0) {

        // get position of first decimal
        // this prevents multiple decimals from
        // being entered
        var decimal_pos = input_val.indexOf(".");

        // split number by decimal point
        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);

        // add commas to left side of number
        left_side = formatNumber(left_side);

        // validate right side
        right_side = formatNumber(right_side);

        // On blur make sure 2 numbers after decimal
        if (blur === "blur") {
            right_side;
        }

        // Limit decimal to only 2 digits
        right_side = right_side.substring(0, 2);

        // join number by .
        input_val = left_side;

    } else {
        // no decimal entered
        // add commas to number
        // remove all non-digits
        input_val = formatNumber(input_val);
        input_val = input_val;

        // final formatting
        if (blur === "blur") {
            input_val;
        }
    }

    // send updated string to input
    input.val(input_val);

    // put caret back in the right position
    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
}

function StringToNumber(str) {
    return Number(str.replace(/[^0-9.-]+/g, ""));
}

function checkSurvival(object, listChecks) { //Kiem tra ton tai
    for (const value of listChecks) {
        if (value == object) {
            return true;
        }
    }
    return false;
}