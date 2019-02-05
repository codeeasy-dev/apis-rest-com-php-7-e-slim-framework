<?php

namespace App\Models\MySQL\CodeeasyGerenciadorDeLojas;

final class ProdutoModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $loja_id;
    /**
     * @var string
     */
    private $nome;
    /**
     * @var float
     */
    private $preco;
    /**
     * @var int
     */
    private $quantidade;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     * @return ProdutoModel
     */
    public function setId(int $id): ProdutoModel
    {
        $this->id = $id;
        return $this;
    }

    // TODO: Terminar de montar o model
}
