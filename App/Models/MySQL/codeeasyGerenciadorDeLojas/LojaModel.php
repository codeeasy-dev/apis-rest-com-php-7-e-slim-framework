<?php

namespace App\Models\MySQL\CodeeasyGerenciadorDeLojas;

final class LojaModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $nome;
    /**
     * @var string
     */
    private $telefone;
    /**
     * @var string
     */
    private $endereco;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }
    /**
     * @param string $nome
     * @return LojaModel
     */
    public function setNome(string $nome): LojaModel
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefone(): string
    {
        return $this->telefone;
    }
    /**
     * @param string $telefone
     * @return LojaModel
     */
    public function setTelefone(string $telefone): LojaModel
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }
    /**
     * @param string $endereco
     * @return LojaModel
     */
    public function setEndereco(string $endereco): LojaModel
    {
        $this->endereco = $endereco;
        return $this;
    }
}
