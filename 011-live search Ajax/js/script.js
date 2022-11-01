// ambil element
var search = document.getElementById("keyword");
var container = document.getElementById("container");

search.addEventListener('keyup', function() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            container.innerHTML = ajax.responseText;
        }
    }

    ajax.open('GET', 'ajax/siswa.php?keyword=' + search.value, true);
    ajax.send();
});