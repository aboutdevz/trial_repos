function HargaTotal(){
    var jumlah = document.getElementById('jumlah');
    var harga = document.getElementById('harga_basket');
    var total = document.getElementById('total_harga_basket');
    if((parseInt(jumlah.value)) > parseInt(harga.value)){
        jumlah.value = 1;
    }else{
        total.value = jumlah.value * harga.value; 
    }
}

function Total(){
    var jumlah = document.getElementById('beli');
    var harga = document.getElementById('harga');
    var total = document.getElementById('total');
    if((parseInt(jumlah.value)) > parseInt(harga.value)){
        jumlah.value = 1;
    }else{
        total.value = jumlah.value * harga.value;
    }
}

function Ya(){
    var tot = document.getElementById('tot');
    var tot1 = Number.parseInt(tot.value);
    var total1 = document.getElementById('total_harga_basket');
    var total2 = document.getElementById('total');
    var totalint1 = Number.parseInt(total1.value);
    var totalint2 = Number.parseInt(total2.value);
    if((totalint1 && totalint2 > 0)){
        tot1 = totalint1+totalint2;
    }
}
