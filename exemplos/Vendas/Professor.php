<?php
/**
 * Created by PhpStorm.
 * User: 00554653230
 * Date: 15/02/2018
 * Time: 21:41
 */

class Professor
{
    private $nome;
    private $salario;

    /**
     * Professor constructor.
     * @param $nome
     * @param $salario
     */
    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

}