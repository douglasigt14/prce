<?php
class Functions {

    static function urlBase(string $file = '', string $baseUrl = 'prce.douglasrocha.tech') {
        $urlBase = !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
        $urlBase .= $baseUrl ?: $_SERVER['SERVER_NAME'];
    
        if ($file === '' || $file === null) {
            return $urlBase;
        } else {
            return $urlBase . '/' . $file;
        }
    }

    static function filesUploaderTable() {
        $pasta = 'assets/uploads/'; 
        $diretorio = dir($pasta);
        while ($arquivo = $diretorio -> read()) {
            if ($arquivo != '.' && $arquivo != '..') {
                $linkDelete = "functions" . DIRECTORY_SEPARATOR . "deleteFile.php?fileName=".$arquivo;
                echo "<tr><td>".$arquivo."</td><td class='text-align-center'><a href='" . self::urlBase($pasta.$arquivo) . "' target='_blank' class='btn'><i class='fa-solid fa-eye'></i></a></td><td class='d-flex justify-content-center align-items-center'><a href='" . self::urlBase($linkDelete) . "' class='btn' name-file='".$arquivo."'><i class='fa-solid fa-trash'></i></a></td></tr>";            }
        }
        $diretorio -> close();
    }

    static function bibliotecaVideoHome($dir = "") {
        $pasta = 'assets/uploads/'.$dir; 

        if (!is_dir($pasta)) {
            echo "";
        }
        return;

        $diretorio = dir($pasta);

        $index = 1;
        $formatosVideoPermitidos = ['mp4', 'avi', 'mkv', 'mov', 'wmv', 'flv', 'webm', 'mpeg', 'mpg', '3gp', 'ogg', 'qt', 'swf', 'rm', 'asf', 'm4v', 'm2v', 'mpg2', 'mpg4', 'ts'];
        while ($arquivo = $diretorio -> read()) {
            if ($arquivo != '.' && $arquivo != '..') {
                if (strpos($arquivo, '.mp4') !== false) {
                    echo '
                        <div class="col-md-4 mb-2">
                            <div class="form-check w-100 d-flex justify-content-center align-items-center flex-column ps-0 selecaoVideoHome">
                                <input class="form-check-input d-none" type="radio" name="radioVideo" id="radioVideo'.$index.'" data-nameVideo="'.$arquivo.'">
                                <label class="form-check-label" for="radioVideo'.$index.'">
                                    <video src="' . self::urlBase($pasta.$arquivo) . '" class="w-100 p-1" controls></video>
                                    <p class="w-100 p-1 d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary ms-2 btnSelecaoVideoHome">Selecionar</button>
                                    </p>
                                </label>
                            </div>
                        </div>
                    ';
                    $index++;
                }
            }

        }
    }

    static function bibliotecaImages($dir = "") {
        $pasta = 'assets/uploads/'.$dir; 
        
        if (!is_dir($pasta)) {
            echo "";
        }
        return;
        
        $diretorio = dir($pasta);

        
        $index = 1;

        while ($arquivo = $diretorio -> read()) {
            $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'tiff', 'webp', 'ico', 'svg', 'eps', 'pdf', 'ai', 'psd', 'tif', 'jfif', 'jpe', 'jp2', 'jpx', 'wdp', 'hdp'];
            if ($arquivo != '.' && $arquivo != '..') {
               if (in_array(pathinfo($arquivo, PATHINFO_EXTENSION), $extensoesPermitidas)) {
                    echo '
                        <div class="col-md-4 mb-2">
                            <div class="form-check w-100 d-flex justify-content-center align-items-center flex-column ps-0 selecaoImagem">
                                <input class="form-check-input d-none" type="radio" name="radioImagem" id="radioImagem'.$index.'" data-nameImagem="'.$arquivo.'">
                                <label class="form-check-label" for="radiImagem'.$index.'">
                                    <img src="' . self::urlBase($pasta.$arquivo) . '" class="w-100 p-1">
                                    <p class="w-100 p-1 d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary ms-2 btnSelecaoImagem">Selecionar</button>
                                    </p>
                                </label>
                            </div>
                        </div>
                    ';
                    $index++;
               }
            }

        }
    }
}