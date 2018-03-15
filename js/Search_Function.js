function SearchAlgoritm() {
    var d, g, f, b, s = document.getElementById("book-type").value;
    d = document.getElementById("SearchingLine");
    d.value = d.value.replace(/[^\sа-яА-Яa-zA-Z1-9.-]+/g, '');
    g = d.value.trim().toUpperCase().replace(/[\s.-]+/g, '');
    f = document.getElementById("G");
    b = f.getElementsByTagName("li");
    if (g) {
        for (var e = 0; e < b.length; e++) {
            var c = b[e].getElementsByTagName("a")[0];
            if (c.className == 'header') {
                b[e].style.display = "none";
                continue;
            } else if (c.innerHTML.toUpperCase().replace(/[^а-яА-Яa-zA-Z1-9]+/g, '').indexOf(g) != -1) {
                b[e].style.display = "";
            }
            else {
                b[e].style.display = "none";
            }
        }
    } else for (var e = 0; e < b.length; e++) b[e].style.display = "";
    if (s) filter(s, b);
}
function filter(s, b) {
    for (var e = 0; e < b.length; e++) {
        var c = b[e].getElementsByTagName('a')[0].getAttribute('t');
        if (c != s) b[e].style.display = "none";
        else b[e].style.display = "";
    }
};