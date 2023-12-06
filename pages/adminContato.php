<?php require_once __DIR__ . '/headerAdmin.php'; ?>

        <div class="container p-3">
            <div class="row mt-5">
                <form action="<?= Functions::urlBase('upload.php'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="rota" value="/admin/sobre">
                    <div class="col-md-12">
                        <div class="row" id="selecaoCapa">
                            <label class="form-label fw-bold">Capa</label>
                            <div class="w-100 mt-4 mb-4">
                                Selecione o arquivo: <input type="file" name="arquivo" />
                                <input type="hidden" name="dir" value="/sobre/capa">
                            </div>
                            <?= Functions::bibliotecaImages('/sobre/capa/'); ?>
                        </div>

                        <div class="row g-3 mb-3 align-items-center">
                            <div class="col-6">
                                <label for="texto1" class="form-label fw-bold">Texto 1</label>
                                <input type="text" class="form-control" id="texto1">
                            </div>
                            <div class="col-6">
                                <label for="titulo1" class="form-label fw-bold">Titulo 1</label>
                                <input type="text" class="form-control" id="titulo1">
                            </div>
                        </div>

            </div>

        </div>
        </div>
        </div>

        <script type="text/javascript" src="<?= Functions::urlBase('assets/jquery/jquery-3.7.1.min.js'); ?>"></script>
        <script type="text/javascript"
            src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script type="text/javascript"
            src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
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
        </script>

</body>

</html>