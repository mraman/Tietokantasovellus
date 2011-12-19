-- skripti ajetaan "< create.sql psql" (ilman lainausmerkkejä)

create table ongelma(
otunnus serial primary key,
kuvaus text not null
);

create table syy(
stunnus serial primary key,
kuvaus text not null
);

create table ratkaisu(
rtunnus serial primary key,
kuvaus text not null
);


-- välitaulut

create table ongelma_syy(
ongelma_id integer,
syy_id integer,
foreign key (ongelma_id)
references ongelma (otunnus),
foreign key (syy_id)
references syy (stunnus) 
on delete cascade
);

create table syy_ratkaisu(
syy_id integer,
ratkaisu_id integer,
foreign key (syy_id)
references syy (stunnus),
foreign key (ratkaisu_id)
references ratkaisu (rtunnus)
on delete cascade

);
