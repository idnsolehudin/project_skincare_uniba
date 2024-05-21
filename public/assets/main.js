let addCategory = document.getElementById("add-category").addEventListener("click", addCattegory);
let addCtg = document.getElementById("form-add-ctg");
let close = document.getElementById("btn-close").addEventListener("click", closeBox);
let inputctg = document.getElementById("input-ctg");
let btnSave = document.getElementById("btn-simpan").addEventListener("click",closeBoxx);
let textBerhasil = document.getElementById("text-berhasil");
let btnHapus = document.getElementById("btn-hapus").addEventListener("click",deleteBox);
let DialogHapus = document.getElementById("hapus-produk");
let closeBtnDel = document.getElementById("btn-no").addEventListener("click",closeDeleteBox);
let closeBtn = document.getElementById("close-del").addEventListener("click",closeDeleteBox);
let confirmHapus = document.getElementById("btn-yes").addEventListener("click", hapusProduk);
document.getElementById("btnedit").addEventListener("click", enabledInput);

function enabledInput() {
    let kategori = document.getElementById("btsave");
    kategori.disbled = false;
};


function addCattegory() {
addCtg.classList.remove('d-none');
addCtg.classList.add('d-block');
inputctg.value = '';

};

function closeBox (){
    addCtg.classList.remove('d-block');
    addCtg.classList.add('d-none');
}

function closeBoxx() {
    if (inputctg.value == '' || inputctg.value == ' ' || inputctg.value == '  ' || inputctg.value == '   ' ) {
        alert("masukan kategori terlebih dahulu");
    } else {
        closeBox();    
        textBerhasil.style.display = 'block';
        // textBerhasil.textContent = "berhasil memasukkan kategori " + inputctg.value;
        

    }
 setTimeout(function() {
        textBerhasil.style.display = 'none';
      }, 3000);

}

function deleteBox() {
    DialogHapus.classList.remove("d-none");
    DialogHapus.classList.add("d-block");
}

function closeDeleteBox() {
    DialogHapus.classList.remove("d-block");
    DialogHapus.classList.add("d-none");
}


btnHapus.addEventListener("click", function() {
    let getID = this.getAttribute('data-id');
    DialogHapus.setAttribute('data-id', getID);
    
});

 function hapusProduk() {
    var itemId = DialogHapus.getAttribute('data-id');
    var xhr = new XMLHttpRequest();
    xhr.open('delete' , "<?= base_url('/produk/'",itemId,") ;?>" , true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    alert('Item deleted successfully');
                } else {
                    alert('Failed to delete item');
                }
            } else {
                alert('Failed to delete item');
            }
            DialogHapus.style.display = 'none';
        }
    };
    xhr.send('id=' + encodeURIComponent(itemId));
};



