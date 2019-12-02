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
