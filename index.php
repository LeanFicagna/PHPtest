<?php
include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/db/connection.php';
?>

<div class="container">   
    <form style="margin-top: 100px;">
        <div class="row">
            <div class="col-4">
                <label for="cep" class="form-label">CEP:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="cep">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="button" id="send" >Pesquisar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <label class="form-label">Logradouro:</label>
                <input type="text" class="form-control" id="logradouro" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <label for="" class="form-label">Bairro:</label>
                <input type="text" class="form-control" id="bairro" readonly>
            </div>
            <div class="col-4">
                <label for="" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="localidade" readonly>
            </div>
            <div class="col-3">
                <label for="" class="form-label">IBGE:</label>
                <input type="text" class="form-control" id="ibge" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="" class="form-label">Estado:</label>
                <input type="text" class="form-control" id="uf" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Complemento:</label>
                <input type="text" class="form-control" id="complemento" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="" class="form-label">DDD:</label>
                <input type="text" class="form-control" id="ddd" readonly>
            </div>
            <div class="col-4">
                <label for="" class="form-label">Siafi:</label>
                <input type="text" class="form-control" id="siafi" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Gia:</label>
                <input type="text" class="form-control" id="gia" readonly>
            </div>
        </div>
    </form>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>