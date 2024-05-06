document.getElementById("add-category").addEventListener("click", addCattegory);
let addCtg = document.getElementById("form-add-ctg");
let close = document.getElementById("btn-close").addEventListener("click", closeBox);
let inputctg = document.getElementById("input-ctg");
let btnSave = document.getElementById("btn-simpan").addEventListener("click",closeBoxx);
let textBerhasil = document.getElementById("text-berhasil");

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
        textBerhasil.textContent = "berhasil memasukkan kategori " + inputctg.value;


    }
 setTimeout(function() {
        textBerhasil.style.display = 'none';
      }, 3000);

}
