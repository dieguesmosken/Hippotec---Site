create database bdforum;

create table temas (
	id int unsigned auto_increment primary key,
    titulo varchar(255) not null
);
CREATE TABLE comentarios (
    id INT unsigned AUTO_INCREMENT PRIMARY KEY,
    comentario varchar(255) NOT NULL,
    criadoem datetime,
   id_tema int unsigned NOT NULL,
    CONSTRAINT fk_id_tema FOREIGN KEY (id_tema) REFERENCES users(id_tema) ON DELETE CASCADE
);

insert into temas (titulo) values ("Você gosta de Maça?");
insert into temas (titulo) values ("Qual a melhor hora para programar?");
insert into temas (titulo) values ("Web ou Desktop?");

insert into comentarios (comentario, id_tema) values ('Comentario 1', 1),('Comentario 2', 1);


CREATE TABLE hpt_coment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    coment_usr varchar(255) NOT NULL,
    coment_criado datetime,
    id_user int NOT NULL,
    CONSTRAINT fk_id_user FOREIGN KEY (id_user) REFERENCES hpt_usr(id) ON DELETE CASCADE
);

/** 

exclusivo do meu tccc


ALTER TABLE hpt_usr ADD dtcriado_usr datetime;
ALTER TABLE hpt_usr ADD dtmodificado_usr datetime;


*/