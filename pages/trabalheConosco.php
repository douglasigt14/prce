<?php require_once __DIR__ . '/header.php'; ?>
<div id="rootTrabalheConosco">

    <img id="fotoTrabalheConosco">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="titulo"></h1>
                <p id="texto"></p>
                <a id="link"><span id="botao-texto"></span></a>
            </div>
        </div>
    </div>

</div>

<script>
    const urlTC = 'requests/select.php?table=trabalhe_conosco';

    fetch(urlTC)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                
                console.log(data);
                document.querySelector("#fotoTrabalheConosco").src = data[0]['capa'];
                document.querySelector("#titulo").innerHTML = data[0]['titulo'];
                document.querySelector("#texto").innerHTML = data[0]['texto'];
                document.querySelector("#botao-texto").innerHTML = data[0]['botao_texto'];
                document.querySelector("#link").href = data[0]['botao_link'];
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });
</script>

<?php require_once __DIR__ . '/footer.php'; ?>