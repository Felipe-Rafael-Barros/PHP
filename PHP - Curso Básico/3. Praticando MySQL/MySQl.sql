-- Consultas básicas
SELECT * FROM usuarios;

-- Consulta filtrada
SELECT nome FROM usuarios WHERE idade>18;

-- Inserir dados a uma tabela
INSERT INTO usuarios (nome, idade) VALUES ('Felipe', 26);

-- Atualizar dados da tabela
UPDATE usuarios SET idade = 26 WHERE nome = 'Felipe';

-- Excluir dados
DELETE FROM usuarios WHERE nome = 'Felipe';


-- Retornos ordenados e limitações
SELECT * FROM usuarios ORDER BY nome ASC LIMIT 20;

-- Relacionar duas tabelas
SELECT pedidos.id, clientes.nome
FROM pedidos
INNER JOIN clientes ON pedidos.cliente_id = clientes.id;

-- Criação e modificações de tabelas

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    idade INT
);

-- Agrupamento de dados
SELECT idade, COUNT(*) as total
FROM usuarios
GROUP BY idade
HAVING totla > 1;