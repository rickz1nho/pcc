CREATE TABLE IF NOT EXISTS `usuarios` (
      `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
      `nome` VARCHAR( 50 ) NOT NULL ,
      `usuario` VARCHAR( 25 ) NOT NULL ,
      `senha` VARCHAR( 40 ) NOT NULL ,
      `email` VARCHAR( 100 ) NOT NULL ,
      `nivel` INT(1) UNSIGNED NOT NULL DEFAULT '1',
      `cadastro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      `twitch` VARCHAR(50) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `usuario` (`usuario`),
      KEY `nivel` (`nivel`));

INSERT INTO usuarios (nome, usuario, senha, email, nivel) VALUES ('administrador', 'admin', SHA1('admin'), 'admin@admin', 4);

CREATE TABLE IF NOT EXISTS `publicacao` (
      `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
      `titulo` VARCHAR(50) NOT NULL,
      `categoria` VARCHAR(50) NOT NULL,
      `autor` VARCHAR(26) NOT NULL,
      `postagem` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      `conteudo` text NOT NULL,
      PRIMARY KEY (`id`));