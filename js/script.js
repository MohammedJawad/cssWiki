function pressePapier() {
    var copyText = document.getElementById("preview-form-comment");
    copyText.select();
    document.execCommand("Copy");
}

