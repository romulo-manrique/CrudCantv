 DROP DATABASE "BDTestCantv";

CREATE DATABASE "BDTestCantv"
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Spanish_Spain.1252'
       LC_CTYPE = 'Spanish_Spain.1252'
       CONNECTION LIMIT = -1;


 -- Table: musica

DROP TABLE musica;

CREATE TABLE musica
(
  id serial NOT NULL,
  cancion character varying(25),
  grupo character varying(25),
  genero character varying(25),
  video character varying(100),
  usuario character varying(25),
  CONSTRAINT musica_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE musica
  OWNER TO postgres;


-- Table: usuarios

 DROP TABLE usuarios;

CREATE TABLE usuarios
(
  id serial NOT NULL,
  usuario character varying(25),
  pass character varying(25),
  CONSTRAINT usuarios_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios
  OWNER TO postgres;
      

-- ----------------------------
-- Records of musica
-- ----------------------------
INSERT INTO "public"."musica" VALUES ('1', 'Yo tambien', 'Romeo', 'Bachata', 'https://www.youtube.com/embed/QBaIMZ8QjcU', 'romulo');
INSERT INTO "public"."musica" VALUES ('2', 'Te aviso', 'Shakira', 'Pop', 'https://www.youtube.com/embed/8C6xDjQ66wM', 'romulo');
INSERT INTO "public"."musica" VALUES ('3', 'flor palida', 'mark antoni', 'salsa', 'https://www.youtube.com/embed/3VmoZrxXbmg', 'romulo');
INSERT INTO "public"."musica" VALUES ('4', 'Vivir mi vida', 'mark antoni', 'salsa', 'https://www.youtube.com/embed/YXnjy5YlDwk?list=PLJ4Av4aCMWUAFphyYlTr4uO2fUG0U6jbA', 'romulo');

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO "public"."usuarios" VALUES ('1', 'romulo', '123');
INSERT INTO "public"."usuarios" VALUES ('2', 'Ingrid', '1234');
