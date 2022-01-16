function zistiPocetCisel(input){
    let cislo =10;
    if(input.value.length !== cislo){
        var nespravne = document.getElementById('tel_cislo');
        nespravne.innerHTML = "Číslo musi mať 10 znakov!";
        nespravne.style.color = 'red';
        nespravne.style.backgroundColor = '#E4DDED';
        nespravne.style.marginLeft = '22px';
        nespravne.style.borderRadius = '4px';
        nespravne.style.padding= '7px 7px';

    }else{
        var spravne = document.getElementById('tel_cislo');
        spravne.innerHTML = "Číslo je zadané správne.";
        spravne.style.color = 'green';
        spravne.style.marginLeft = '22px';
        spravne.style.backgroundColor = '#E4DDED';
        spravne.style.borderRadius = '4px';
        spravne.style.padding= '7px 7px';
    }
}

function skontrolujHeslo(input){
    let cisloDolne =6;
    let cisloHorne = 15;
    if((input.value.length >=  cisloDolne) && (input.value.length <=  cisloHorne)  ){
        var spravne = document.getElementById('heslo');
        spravne.innerHTML = "Heslo je zadané správne.";
        spravne.style.color = 'green';
        spravne.style.marginLeft = '22px';
        spravne.style.backgroundColor = '#E4DDED';
        spravne.style.borderRadius = '4px';
        spravne.style.padding= '7px 7px';

    }else{
        var nespravne = document.getElementById('heslo');
        nespravne.innerHTML = "Heslo musi od 6 do 15 znakov!";
        nespravne.style.color = 'red';
        nespravne.style.backgroundColor = '#E4DDED';
        nespravne.style.marginLeft = '22px';
        nespravne.style.borderRadius = '4px';
        nespravne.style.padding= '7px 7px';
    }
}

function skontrolujPSC(input){
    let cislo =5;
    if(input.value.length !== cislo){
        var nespravne = document.getElementById('psc');
        nespravne.innerHTML = "PSČ musi mať 5 znakov!";
        nespravne.style.color = 'red';
        nespravne.style.backgroundColor = '#E4DDED';
        nespravne.style.marginLeft = '22px';
        nespravne.style.borderRadius = '4px';
        nespravne.style.padding= '7px 7px';
    }else{
        var spravne = document.getElementById('psc');
        spravne.innerHTML = "PSČ je zadané správne.";
        spravne.style.color = 'green';
        spravne.style.marginLeft = '22px';
        spravne.style.backgroundColor = '#E4DDED';
        spravne.style.borderRadius = '4px';
        spravne.style.padding= '7px 7px';
    }
}

function kontrolaTypuSuboru(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Zvolte si subor tychto typov: .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        if (fileInput.files && fileInput.files[0]) {
            alert('Zvolili ste spravny typ suboru.');
        }
    }
}
