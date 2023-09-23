<?php
    $Numero1_php = filter_input(INPUT_POST,"Numero1_name");
    $Numero2_php = filter_input(INPUT_POST,"Numero2_name");
    $Operacao_php = filter_input(INPUT_POST,"EscolherOperador_name");
    $Resultado_php = 0;
    if($Numero1_php && $Numero2_php){
        switch($Operacao_php){
            case "+";
            $Resultado_php = ($Numero1_php + $Numero2_php);
            break;
            case "-";
            $Resultado_php = ($Numero1_php - $Numero2_php);
            break;
            case "x";
            $Resultado_php = ($Numero1_php * $Numero2_php);
            break;
            case "/";
            $Resultado_php = ($Numero1_php / $Numero2_php);
            break;
        }
    }
    echo "O RESULTADO É: ", $Resultado_php;
?>