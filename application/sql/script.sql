CREATE DATABASE sit
    WITH 
    OWNER = postgres
ENCODING = 'UTF8'
    CONNECTION LIMIT = -1;

CREATE SEQUENCE Contratos_seq;

CREATE TABLE Contratos (
  id              bigint           NOT NULL DEFAULT NEXTVAL ('Contratos_seq'), 
  nome_fornecedor bigint           NOT NULL, 
  tipo            char(10)         NOT NULL, 
  valor           double precision NOT NULL, 
  data_inicial    timestamp(0)     NOT NULL, 
  data_vencimento timestamp(0)     NOT NULL, 
  diluir_valor    boolean, 
  anexo           varchar(255), 
  cadastrado_em   timestamp(0)     NOT NULL, 
  PRIMARY KEY (id)
);

CREATE SEQUENCE Tipos_contrato_seq;

CREATE TABLE Tipos_contrato (
  id             bigint       NOT NULL DEFAULT NEXTVAL ('Tipos_contrato_seq'), 
  nome           varchar(255) NOT NULL, 
  PRIMARY KEY (id), 
  UNIQUE (id)
);

INSERT INTO Tipos_contrato (nome) VALUES ('Contrato de Serviço');
INSERT INTO Tipos_contrato (nome) VALUES ('Contrato de Alocação');
INSERT INTO Tipos_contrato (nome) VALUES ('Sei lá, contrato de qualquer coisa');

SELECT * FROM Tipos_contrato;

-- 
CREATE TABLE Contratos (
  id              bigint           NOT NULL AUTO_INCREMENT, 
  nome_fornecedor bigint           NOT NULL, 
  tipo            char(10)         NOT NULL, 
  valor           double precision NOT NULL, 
  data_inicial    timestamp(0)     NOT NULL, 
  data_vencimento timestamp(0)     NOT NULL, 
  diluir_valor    boolean, 
  anexo           varchar(255), 
  cadastrado_em   timestamp(0)     NOT NULL, 
  PRIMARY KEY (id)
);

CREATE TABLE Tipos_contrato (
  id             bigint       NOT NULL AUTO_INCREMENT, 
  nome           varchar(255) NOT NULL, 
  PRIMARY KEY (id), 
  UNIQUE (id)
);

INSERT INTO Tipos_contrato (nome) VALUES ('Contrato de Serviço');
INSERT INTO Tipos_contrato (nome) VALUES ('Contrato de Alocação');
INSERT INTO Tipos_contrato (nome) VALUES ('Sei lá, contrato de qualquer coisa');

SELECT * FROM Tipos_contrato;