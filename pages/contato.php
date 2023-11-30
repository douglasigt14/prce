<?php require_once __DIR__ . '/header.php'; ?>

<div id="rootContato">

    <img src="<?= Functions::urlBase('assets/images/capa-nest635.jpg'); ?>" class="w-100">

    <div class="container">
        <div class="row">
            
            <div class="col-md-6 texto-form">
                <h1>Fale com um dos nossos corretores</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium, ipsum consequat posuere vestibulum, turpis ex pharetra ante, et finibus tortor quam sit amet nibh. Quisque porta in urna et faucibus. Aenean mollis pharetra ex, in scelerisque nisl scelerisque sit amet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vitae urna sed nisi efficitur sodales vitae in erat. Maecenas augue ante, ullamcorper at posuere sed, congue non nibh. </p>
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
                        <label class="form-check-label" for="flexCheckDefault">Ao me cadastrar estou de acordo com os <a href="#">termos de uso e política de privacide</a></label>
                    </div>
                    <button type="button" class="btn mt-4">Enviar</button>
                </form>
            </div>

        </div>
    </div>

</div>
        
<?php require_once __DIR__ . '/footer.php'; ?>