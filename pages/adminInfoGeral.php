<?php require_once __DIR__ . '/headerAdmin.php'; ?>

<div class="conteiner-principal p-5">
    <div class="row mt-3">
        <h3>Info Geral</h3>
        <form action="<?= Functions::urlBase('requests/insertContato.php'); ?>" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="rota" value="/admin/contato">
            <input type="hidden" name="dir" value="contato">
            <h5>Header</h5>
            <div class="col-md-12">
                <div class="row" id="selecaoCapa">
                    <div class="row align-items-center mt-4 mb-4" id="selecaoCapa">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label class="form-label fw-bold">Logo</label> <br>
                            <input type="file" class="form-control" name="logo" />
                            <img name="logo" id="logo-adm" class="img-fluid mt-3">
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>

                <div class="row g-3 mb-3 align-items-center">
                    <div class="col-12">
                        <label for="link-portal-cliente" class="form-label fw-bold">Link Portal-do-Cliente</label>
                        <input type="text" name="link-portal-cliente" class="form-control" id="link-portal-cliente">
                    </div>
                </div>

            </div>

            <h5>Footer</h5>
            <div class="col-md-12">
                <div class="row" id="selecaoCapa">
                    <div class="row align-items-center mt-4 mb-4" id="selecaoCapa">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label class="form-label fw-bold">Logo</label> <br>
                            <input type="file" class="form-control" name="logo-footer" />
                            <img name="logo-footer" id="logo-footer" class="img-fluid mt-3">
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>

                <div class="row g-3 mb-3 align-items-center">
                    <div class="col-6">
                        <label for="link-portal-cliente" class="form-label fw-bold">Link Facebook</label>
                        <input type="text" name="link-portal-cliente" class="form-control" id="link-portal-cliente">
                    </div>
                    <div class="col-6">
                        <label for="link-portal-cliente" class="form-label fw-bold">Link Instagram</label>
                        <input type="text" name="link-portal-cliente" class="form-control" id="link-portal-cliente">
                    </div>
                </div>
                <div class="row g-3 mb-3 align-items-center">
                    <div class="col-6">
                        <label for="link-portal-cliente" class="form-label fw-bold">Link Linkedin</label>
                        <input type="text" name="link-portal-cliente" class="form-control" id="link-portal-cliente">
                    </div>
                    <div class="col-6">
                        <label for="link-portal-cliente" class="form-label fw-bold">Link Email</label>
                        <input type="text" name="link-portal-cliente" class="form-control" id="link-portal-cliente">
                    </div>
                </div>
                <div class="row g-3 mb-3 align-items-center">
                    <div class="col-6">
                        <label for="link-portal-cliente" class="form-label fw-bold">Link Youtube</label>
                        <input type="text" name="link-portal-cliente" class="form-control" id="link-portal-cliente">
                    </div>
                    <div class="col-6">
                        <label for="link-portal-cliente" class="form-label fw-bold">Link Portal-do-Cliente</label>
                        <input type="text" name="link-portal-cliente" class="form-control" id="link-portal-cliente">
                    </div>
                </div>

            </div>

    </div>

</div>
</div>
</div>

<footer class="fixed-bottom  text-light text-center p-3">
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
            <button type="submit" class="btn btn-save btn-success">Salvar</button>
            </form>
        </div>

    </div>
</footer>

<script type="text/javascript" src="<?= Functions::urlBase('assets/jquery/jquery-3.7.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Functions::urlBase('assets/fontawesome/js/all.min.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $(".btnSelecaoVideoHome").click(function (e) {
            divArquivo = $(this).parent().parent().parent();
            let radio = divArquivo.find('input[name="radioVideo"]');

            $(".selecaoVideoHome").each(function () {
                $(this).css('background-color', 'transparent');
            });

            radio.prop("checked", true);
            if (radio.is(":checked")) {
                divArquivo.css('background-color', 'rgba(0,0,0,0.3');
            }

        });

        $(".btnSelecaoImagem").click(function (e) {
            divArquivo = $(this).parent().parent().parent();
            let radio = divArquivo.find('input[name="radioImagem"]');

            $(".selecaoImagem").each(function () {
                $(this).css('background-color', 'transparent');
            });

            radio.prop("checked", true);
            if (radio.is(":checked")) {
                divArquivo.css('background-color', 'rgba(0,0,0,0.3');
            }

        });

        $("#btnSalvarBDVideo").click(function () {
            let radio = $(".selecaoVideoHome").find('input[name="radioVideo"]');
            let nameVideo = null;

            radio.each(function () {
                if ($(this).is(":checked")) {
                    nameVideo = $(this).attr('data-nameVideo');

                    $.ajax({
                        url: "<?= Functions::urlBase('requests/requestHome.php'); ?>",
                        method: "POST",
                        data: {
                            idActivity: 1,
                            nameVideo: nameVideo
                        },
                        success: function (data) {
                            if (data.status) {
                                alert("Vídeo alterado!");
                                $("#modalVideo").css("display", "none");
                                $(".modal-backdrop").css("display", "none");
                            } else {
                                alert("Erro ao alterar vídeo! Recarregue a página e tente novamente.");
                            }
                        }, error: function (request, status, error) {
                            alert("Erro ao alterar vídeo! Recarregue a página e tente novamente.");
                        }
                    });

                }
            });
        });

        $("#btnSalvarBDComentario").click(function () {
            let radio = $(".selecaoImagem").find('input[name="radioImagem"]');
            let nameImagem = null;
            radio.each(function () {
                if ($(this).is(":checked")) {
                    nameImagem = $(this).attr('data-nameImagem');
                }
            });
            var nome = $("#nomeComentario").val();
            var empreendimento = $("#selectEmpreendimento option:selected").val();
            var comentario = $("#textComentario").val();

            console.log(nameImagem + "\n" + nome + "\n" + empreendimento + "\n" + comentario);

        });

    });

    const root = window.location.origin;
    const url = root + `/requests/select.php?table=header`;

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
                document.querySelector("#logo-adm").src = root + "/" + data[0]['logo'];
                console.log(document.querySelector("#logo-adm").src)
                document.querySelector("#link-portal-cliente").value = data[0]['link_portal_cliente'];
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

    const urlfoot = root + `/requests/select.php?table=footer`;
    fetch(urlfoot)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                console.log(data);
                document.querySelector("#logoFooter").src = data[0]['logo'];
                document.querySelector("#link-facebook").value = data[0]['link_facebook'];
                document.querySelector("#link-instagram").value = data[0]['link_instagram'];
                document.querySelector("#link-linkedin").value = data[0]['link_linkedin'];
                document.querySelector("#link-email").value = data[0]['link_email'];
                document.querySelector("#link-youtube").value = data[0]['link_youtube'];
                document.querySelector("#link-portal-cliente").value = data[0]['link_portal_cliente'];
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

</script>

</body>

</html>