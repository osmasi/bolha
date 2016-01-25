<?php
class Produto extends AppModel {
    public $name = 'Produto';

    public function upload($imagem = array(), $dir = 'img/produtos') {
    	$dir = WWW_ROOT . $dir . DS;

    	$img_info = pathinfo($dir . $imagem['name']);

    	$nome = (strtolower($img_info['filename'])) . '.' . $img_info['extension'];


    	App::uses('File', 'Utility');
    	$arquivo = new File($imagem['tmp_name']);
    	$arquivo->copy($dir . $nome);
    	$arquivo->close();


//echo "<br><br><br><br><pre>"; print_r($this->request->data); echo "</pre>";
        return $nome;

    }

}
