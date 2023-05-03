<?php
    $arr = array(
        "000.000.000-00" => array("Gil Eduardo","Av. Oswald de Andrade, 411","(41)9902-8921"
        ),
        "000.000.000-01" => array("Maria Claudia","Rua Tenório Cardoso, 1002","(41)3422-9543"
        )
    );
    function addArray($arr) {
        unlink("pessoas.txt");
        $fp = fopen('pessoas.txt', 'a+');
        if ($fp) {
            foreach($arr as $cpf => $dados) {

                if(!empty($dados)) {
                    fputs($fp, "$cpf\n");
                    $linha = $dados[0]."#".$dados[1]."#".$dados[2];
                    fputs($fp, "$linha\n");
                }
            }
            fclose($fp);
        }
        print_r($arr);
    }
    addArray($arr);
?>
