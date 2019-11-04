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