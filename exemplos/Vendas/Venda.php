<?php
/**
 * Created by PhpStorm.
 * User: 00554653230
 * Date: 16/02/2018
 * Time: 19:51
 */

namespace Vendas;


class Venda
{
    private $id;
    private $dataVenda;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDataVenda()
    {
        return $this->dataVenda;
    }

    /**
     * @param mixed $dataVenda
     */
    public function setDataVenda($dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }



}