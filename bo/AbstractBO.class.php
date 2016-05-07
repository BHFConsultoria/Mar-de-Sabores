<?php

abstract class AbstractBO {

    abstract protected function getDAO();

    /*     * Função para buscar um registro na tabela pela sua chave primária. */

    public function findByPk($pk) {
        $dados = $this->getDAO()->findByPk($pk);

        return $dados;
    }

    /*     * Função para listar todos os registros de uma tabela. */

    public function listAll() {
        $dados = $this->getDAO()->listAll();

        return $dados;
    }

}
