-- LIMPA TODAS AS TABELAS
SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE `usuarios`;
TRUNCATE `professores`;
TRUNCATE `materias`;
TRUNCATE `conteudos`;
TRUNCATE `arquivos_conteudos`;

SET FOREIGN_KEY_CHECKS = 1;


-- CADASTRA TESTES

-- professores
INSERT INTO `computacao`.`professores` (`prof_id`, `prof_nome`, `prof_sobrenome`, `prof_avatar`, `prof_alias`, `prof_status`) VALUES ('1', 'Luciano', 'Sávio', 'luciano.jpg', 'luciano-savio', 'Ativado');
INSERT INTO `computacao`.`professores` (`prof_id`, `prof_nome`, `prof_sobrenome`, `prof_avatar`, `prof_email`, `prof_alias`, `prof_status`) VALUES ('2', 'Max', 'Pereira', 'max.jpg', 'max.pereira@unisul.br', 'max-pereira', 'Ativado');
INSERT INTO `computacao`.`professores` (`prof_id`, `prof_nome`, `prof_sobrenome`, `prof_avatar`, `prof_email`, `prof_alias`, `prof_status`) VALUES ('3', 'Clávison', 'Zapelini', 'clavison.jpg', 'clavison@gmail.com', 'clavison', 'Ativado');
INSERT INTO `computacao`.`professores` (`prof_id`, `prof_nome`, `prof_sobrenome`, `prof_avatar`, `prof_status`) VALUES ('4', 'Carlos', 'Luz', 'luz.jpg', 'Ativado');
INSERT INTO `computacao`.`professores` (`prof_id`, `prof_nome`, `prof_sobrenome`, `prof_avatar`, `prof_email`, `prof_alias`, `prof_status`) VALUES ('5', 'Carlos Fernando', 'Buss', 'buss.jpg', 'fernando.buss@unisul.br', 'carlos-fernando-buss', 'Ativado');

-- usuários
INSERT INTO `computacao`.`usuarios` (`usu_id`, `usu_nome`, `usu_sobrenome`, `usu_email`, `usu_status`, `usu_ip`) VALUES ('1', 'Tiago', 'Boeing', 'tiagoboeing11@gmail.com', 'Ativado', '127.0.0.1');
INSERT INTO `computacao`.`usuarios` (`usu_id`, `usu_nome`, `usu_sobrenome`, `usu_email`, `usu_status`, `usu_ip`) VALUES ('2', 'Henrique', 'Sombrio', 'email_aqui@email', 'Ativado', '127.0.0.1');

-- matérias
INSERT INTO `computacao`.`materias` (`mat_id`, `mat_nome`, `mat_professor`, `mat_alias`, `mat_cadastrado_por`) VALUES ('1', 'Fundamentos de Banco de Dados', '1', 'fundamentos-banco-de-dados', '1');
INSERT INTO `computacao`.`materias` (`mat_id`, `mat_nome`, `mat_professor`, `mat_alias`, `mat_cadastrado_por`) VALUES ('2', 'Grafos', '2', 'grafos', '1');
INSERT INTO `computacao`.`materias` (`mat_id`, `mat_nome`, `mat_professor`, `mat_alias`, `mat_cadastrado_por`) VALUES ('3', 'Tópicos Avançados de Programação', '3', 'topicos-avancados-programacao', '1');
INSERT INTO `computacao`.`materias` (`mat_id`, `mat_nome`, `mat_professor`, `mat_alias`, `mat_cadastrado_por`) VALUES ('4', 'Aplicação de Banco de Dados', '1', 'aplicacao-banco-de-dados', '1');
INSERT INTO `computacao`.`materias` (`mat_id`, `mat_nome`, `mat_professor`, `mat_alias`, `mat_cadastrado_por`) VALUES ('5', 'SAD - Sistema de Apoio à Decisão', '1', 'sistema-de-apoio-a-decisao-sad', '1');
INSERT INTO `computacao`.`materias` (`mat_id`, `mat_nome`, `mat_professor`, `mat_alias`, `mat_cadastrado_por`) VALUES ('6', 'Programação Orientada a Objetos', '3', 'programacao-orientada-objetos', '1');
INSERT INTO `computacao`.`materias` (`mat_id`, `mat_nome`, `mat_professor`, `mat_alias`, `mat_cadastrado_por`) VALUES ('7', 'Redes I', '4', 'redes-i', '1');
