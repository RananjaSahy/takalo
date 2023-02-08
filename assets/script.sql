create database takalo;

create table utilisateur(
    idutilisateur int primary key not null auto_increment,
    nom varchar(50),
    email varchar(50) unique,
    motdepasse varchar(50)
);

create table categorie(
    idcategorie int not null auto_increment primary key,
    nomcategorie varchar(50)
);



create table objet(
    idobjet int primary key not null auto_increment,
    titre varchar(50),
    description varchar(250),
    idproprietaire int,
    idcategorie int,
    prixestime double,
    foreign key (idcategorie) references categorie(idcategorie),
    foreign key (idproprietaire) references utilisateur(idutilisateur) 
);

create table photo(
    idphoto int primary key not null auto_increment,
    idobjet int,
    pathphoto varchar(100),
    foreign key (idobjet) references objet(idobjet)
);


create table demandeechange(
    iddemandeechange int primary key not null auto_increment,
    idobjet_un int,
    idobjet_deux int,
    foreign key (idobjet_un) references objet(idobjet),
    foreign key (idobjet_deux) references objet(idobjet)
);

insert into utilisateur(nom,email,motdepasse) values('admin','admin@gmail.com','0000');
insert into utilisateur(nom,email,motdepasse) values('essai','essai@gmail.com','1234');


insert into categorie(nomcategorie) values('Vêtement');
insert into categorie(nomcategorie) values('Outils');
insert into categorie(nomcategorie) values('Autre');

--drop table
drop table objet;
drop table categorie;
drop table utilisateur;
drop table photo;
drop table demandeechange;