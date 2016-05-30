<?php

class Validacoes {

    public function validaEmail($nmEmail) {

        if (strlen($nmEmail) < 8 || substr_count($nmEmail, "@") != 1 || substr_count($nmEmail, ".") == 0) {
            echo "<script>alert('O email digitado é inválido!')</script>";
            echo "<script>window.location.assign('../../index.php')</script>";
            return exit();
        }
    }

    public function validaCnpj($cdCnpj) {

        $cdCnpj = preg_replace('/[^0-9]/', '', (string) $cdCnpj);
        // Valida tamanho
        if (strlen($cdCnpj) != 14)
            return false;
        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
            $soma += $cdCnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        if ($cdCnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
            return false;
        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
            $soma += $cdCnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        return $cdCnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
    }

    public function validaCpf($cdCpf) {

        $cdCpf = preg_replace('/[^0-9]/', '', (string) $cdCpf);
        // Valida tamanho
        if (strlen($cdCpf) != 11)
            return false;
        // Calcula e confere primeiro dígito verificador
        for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
            $soma += $cdCpf{$i} * $j;
        $resto = $soma % 11;
        if ($cdCpf{9} != ($resto < 2 ? 0 : 11 - $resto))
            return false;
        // Calcula e confere segundo dígito verificador
        for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
            $soma += $cdCpf{$i} * $j;
        $resto = $soma % 11;
        return $cdCpf{10} == ($resto < 2 ? 0 : 11 - $resto);
    }

}
