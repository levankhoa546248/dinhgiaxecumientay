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
