<?php

namespace App\DAO\MySQL\CodeeasyGerenciadorDeLojas;

class ProdutosDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProdutosFromLoja(int $lojaId): array
    {
        $statement = $this->pdo
            ->prepare('SELECT
                    *
                FROM produtos
                WHERE
                    loja_id = :loja_id
            ;');
        $statement->bindParam(':loja_id', $lojaId, \PDO::PARAM_INT);
        $statement->execute();
        $produtos = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $produtos;
    }
}
