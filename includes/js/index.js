function requestCep(cep) {
    fetch(`https://viacep.com.br/ws/${cep}/xml/`)
        .then( response => response.text())
        .catch(
            () => alert('Formato de CEP inválido!')
        )
        .then( data => {
            debugger;
            if(buildXML(data))
                saveCep(cep);
            else
                alert("CEP não encontrado!");
        });
}

function verCep(cep) {
    let formData = new FormData();
    formData.append('cep', cep);
    
    fetch('app/verCep.php', {
        method: 'POST',
        body: formData
    })
        .then( response => response.text() )
        .then( data => {
            if(!buildXML(data))
                requestCep(cep);
        });
}

function saveCep(cep) {
    let formData = new FormData();
    formData.append('cep', cep);
    formData.append('logradouro', document.getElementById('logradouro').value);
    formData.append('complemento', document.getElementById('complemento').value);
    formData.append('bairro', document.getElementById('bairro').value);
    formData.append('localidade', document.getElementById('localidade').value);
    formData.append('uf', document.getElementById('uf').value);
    formData.append('ibge', document.getElementById('ibge').value);
    formData.append('gia', document.getElementById('gia').value);
    formData.append('ddd', document.getElementById('ddd').value);
    formData.append('siafi', document.getElementById('siafi').value);
    console.log(formData);
    fetch('app/saveCep.php', {
        method: 'POST',
        body: formData
    })
        .then( response => response.text() )
        .then( data => {
            
        });
}

function buildXML(data) {
    let parser = new DOMParser();
    let xml = parser.parseFromString(data, "text/xml");
    console.log(xml);
    if(xml.getElementsByTagName('erro')[0]) {
        return false;
    }
    document.getElementById('logradouro').value = xml.getElementsByTagName('logradouro')[0].innerHTML;
    document.getElementById('complemento').value = xml.getElementsByTagName('complemento')[0].innerHTML;
    document.getElementById('bairro').value = xml.getElementsByTagName('bairro')[0].innerHTML;
    document.getElementById('localidade').value = xml.getElementsByTagName('localidade')[0].innerHTML;
    document.getElementById('uf').value = xml.getElementsByTagName('uf')[0].innerHTML;
    document.getElementById('ibge').value = xml.getElementsByTagName('ibge')[0].innerHTML;
    document.getElementById('gia').value = xml.getElementsByTagName('gia')[0].innerHTML;
    document.getElementById('ddd').value = xml.getElementsByTagName('ddd')[0].innerHTML;
    document.getElementById('siafi').value = xml.getElementsByTagName('siafi')[0].innerHTML;
    return true;
}

const btn = document.getElementById('send');
btn.addEventListener('click', function(e) {
    e.preventDefault();
    let cep = document.getElementById('cep').value.replace(/\D/g, '');
    if(cep.length != 8) {
        alert('Formato de CEP inválido!');
        return ;
    }
    verCep(cep);
});
