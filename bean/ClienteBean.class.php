<?php

class ClienteBean {
    
    private $cdCliente;
    private $nmCliente;
    private $nmEmail;
    private $dsSenha;
    private $cdCpf;
    private $dtNascimento;
    private $cdTelefone;
    private $nmLogradouro;
    private $nmComplemento;
    private $nmCidade;
    private $nmBairro;
    private $cdCep;
    private $sgUf;
    private $sgSexo;
    private $cdCelular; 
    private $nmSituacao;
    
   
    function getCdCliente() {
        return $this->cdCliente;
    }

    function getNmCliente() {
        return $this->nmCliente;
    }

    function getNmEmail() {
        return $this->nmEmail;
    }

    function getDsSenha() {
        return $this->dsSenha;
    }

    function getCdCpf() {
        return $this->cdCpf;
    }

    function getDtNascimento() {
        return $this->dtNascimento;
    }

    function getCdTelefone() {
        return $this->cdTelefone;
    }

    function getNmLogradouro() {
        return $this->nmLogradouro;
    }

    function getNmComplemento() {
        return $this->nmComplemento;
    }

    function getNmCidade() {
        return $this->nmCidade;
    }

    function getNmBairro() {
        return $this->nmBairro;
    }

    function getCdCep() {
        return $this->cdCep;
    }

    function getSgUf() {
        return $this->sgUf;
    }

    function getSgSexo() {
        return $this->sgSexo;
    }

    function getCdCelular() {
        return $this->cdCelular;
    }

    function getNmSituacao() {
        return $this->nmSituacao;
    }

    function setCdCliente($cdCliente) {
        $this->cdCliente = $cdCliente;
    }

    function setNmCliente($nmCliente) {
        $this->nmCliente = $nmCliente;
    }

    function setNmEmail($nmEmail) {
        $this->nmEmail = $nmEmail;
    }

    function setDsSenha($dsSenha) {
        $this->dsSenha = $dsSenha;
    }

    function setCdCpf($cdCpf) {
        $this->cdCpf = $cdCpf;
    }

    function setDtNascimento($dtNascimento) {
        $this->dtNascimento = $dtNascimento;
    }

    function setCdTelefone($cdTelefone) {
        $this->cdTelefone = $cdTelefone;
    }

    function setNmLogradouro($nmLogradouro) {
        $this->nmLogradouro = $nmLogradouro;
    }

    function setNmComplemento($nmComplemento) {
        $this->nmComplemento = $nmComplemento;
    }

    function setNmCidade($nmCidade) {
        $this->nmCidade = $nmCidade;
    }

    function setNmBairro($nmBairro) {
        $this->nmBairro = $nmBairro;
    }

    function setCdCep($cdCep) {
        $this->cdCep = $cdCep;
    }

    function setSgUf($sgUf) {
        $this->sgUf = $sgUf;
    }

    function setSgSexo($sgSexo) {
        $this->sgSexo = $sgSexo;
    }

    function setCdCelular($cdCelular) {
        $this->cdCelular = $cdCelular;
    }

    function setNmSituacao($nmSituacao) {
        $this->nmSituacao = $nmSituacao;
    }

}
