function make_changes() {
    setTimeout(make_changes2, 2000);
};

function make_changes() {
    setTimeout(refPage, 150);
};

var refPage = function () {
    document.location.reload(true);
};
