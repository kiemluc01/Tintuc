$(document).ready(function() {
    $("#val-search").keypress(function(e) {
        var search_text = this.value
        if (e.keyCode == 13) {
            console.log("đã nhấn enter")
            this.value = ""
        } else
            console.log(search_text)
    })
})