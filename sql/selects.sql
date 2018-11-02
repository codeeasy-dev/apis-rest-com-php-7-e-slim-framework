SELECT *
FROM lojas;

SELECT *
FROM produtos;

SELECT
	lojas.nome as loja,
    produtos.nome as produto,
    produtos.preco as preco,
    produtos.quantidade as quantidade
FROM produtos
INNER JOIN lojas ON produtos.loja_id = lojas.id
WHERE
	produtos.nome = 'teclado'
ORDER BY produtos.nome
;
