document.getElementById("add-category").addEventListener("click", addCattegory);

function addCattegory() {
    var id = prompt("Masukkan ID Baru :");
    var kategori = prompt("Masukkan Kategori Baru :");
 

    // Kirim data ke process.php menggunakan AJAX
    var xhr = new XMLHttpRequest();
    var url = "/kategori/save";
    var params = "id=" + id + "&kategori=" + kategori ;
    xhr.open("POST", url, true);

    // Add the required HTTP header for form data POST requests
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    }
    xhr.send(params);
}