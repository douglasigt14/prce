<?php require_once __DIR__ . '/header.php'; ?>

<div id="rootContato">

    <img id="capa" class="w-100">

    <div class="container">
        <div class="row">

            <div class="col-md-6 texto-form">
                <h1 id="titulo"></h1>
                <p id="texto"></p>
            </div>

            <div class="col-md-6">
                <form>
                    <div class="mb-4">
                        <label for="inputNome" class="form-label">Nome</label>
                        <input type="text" class="form-control " id="inputNome">
                    </div>
                    <div class="mb-4">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputNome">
                    </div>
                    <div class="mb-4">
                        <label for="inputTelefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="inputTelefone">
                    </div>
                    <div class="mb-4">
                        <label for="inputMensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="inputMensagem" rows="5"></textarea>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Ao me cadastrar estou de acordo com os <a
                                href="#">termos de uso e política de privacide</a></label>
                    </div>
                    <button type="button" class="btn mt-4">Enviar</button>
                </form>
            </div>

        </div>
    </div>

</div>

<script>
    const url = 'requests/select.php?table=contatos';

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                console.log(data);
                document.querySelector("#capa").src = data[0]['capa'];
                document.querySelector("#titulo").innerHTML = data[0]['titulo'];
                document.querySelector("#texto").innerHTML = data[0]['texto'];
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });
</script>

<?php require_once __DIR__ . '/footer.php'; ?>