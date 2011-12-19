-- into ongelma

insert into ongelma (kuvaus) values ('Rööri on alavireinen'); 
insert into ongelma (kuvaus) values ('Rööri on ylävireinen'); 
insert into ongelma (kuvaus) values ('Rööri on liian raskas'); 
insert into ongelma (kuvaus) values ('Rööri on liian kevyt'); 
insert into ongelma (kuvaus) values ('Rööri on liian räikeä'); 
insert into ongelma (kuvaus) values ('Alaäänet eivät syty'); 
insert into ongelma (kuvaus) values ('Ylä-äänet eivät soi'); 
insert into ongelma (kuvaus) values ('Tenorirekisteri ei soi'); 
insert into ongelma (kuvaus) values ('A on a-läpän kanssa liian korkea'); 
insert into ongelma (kuvaus) values ('Röörissä ei ole joustavuutta'); 
insert into ongelma (kuvaus) values ('Nurkat irvistävät'); 
insert into ongelma (kuvaus) values ('Tumppu soundi'); 
insert into ongelma (kuvaus) values ('Es soi epätasaisesti ilman apusormitusta'); 
insert into ongelma (kuvaus) values ('E on matala'); 

-- into syy

insert into syy (kuvaus) values ('Tarkista, ettei rööri ole liian lyhyt, eli alle 27 mm pitkä');
insert into syy(kuvaus) values ('Tarkista, ettei rööri ole liian pitkä. Sen tulisi olla 27 mm.');
insert into syy(kuvaus) values ('Onko takana liikaa puuta?');
insert into syy(kuvaus) values ('Ovatko reunat liian paksut?');
insert into syy(kuvaus) values ('Onko kärjen reunoja ohennettu tarpeeksi (1 mm matkalta kärjestä)?');
insert into syy(kuvaus) values ('Onko kärki liian auki?');
insert into syy(kuvaus) values ('Onko rööriä ohennettu liikaa?');
insert into syy(kuvaus) values ('Ovatko kärjen kulmat tarpeeksi ohuet?');
insert into syy(kuvaus) values ('Oletko kokeillut ohentaa sivujen kanavia? (ihan reunan vieressä)');
insert into syy(kuvaus) values ('Oletko nipistänyt rööriä?');
insert into syy(kuvaus) values ('Tarkista etteivät siteet hölsky (toisen siteen tulisi olla tiukka)');
insert into syy(kuvaus) values ('Onko kanavissa liikaa puuta?');
insert into syy(kuvaus) values ('Oletko työstänyt puolikuita?');
insert into syy(kuvaus) values ('Katso onko röörin silmissä liikaa puuta');
insert into syy(kuvaus) values ('Tarkista ovatko siteet liian tiukalla.');
insert into syy(kuvaus) values ('Oletko työstänyt es-aluetta?');
insert into syy(kuvaus) values ('Oletko työstänyt röörin etuosaa?');

--insert  into ratkaisu

insert into ratkaisu(kuvaus) values('Katkaise röörin soivaa osuutta siten, että sen pituus on 27 mm pitkä.');

insert into ratkaisu(kuvaus) values( 'Jos rööri on liian lyhyt, niin et voi tehdä asialle mitään. :(
Parempaa onnea seuraavalle kerralle.');

insert into ratkaisu(kuvaus) values(' Ota takaa puuta pois, niin että puun paksuus takaa mitattuna on yksi.');

insert into ratkaisu(kuvaus) values(' Ohenna sivujen reunoja 12 mm matkalta kärjestä tyveä kohti. Reunat saavat olla hyvin ohuita.');

insert into ratkaisu(kuvaus) values('Röörin kärjen tulisi olla hyvin ohut. Ohenna liian paksua kärkeä max 1 mm matkalta.');

insert into ratkaisu(kuvaus) values('Purista rööriä ensimmäisestä siteestä keskeltä, jos kärki on liian auki');

insert into ratkaisu(kuvaus) values('Röörin paksuuden tulisi olla takaa mitattuna 1 ja aivan kärjestä 53-55. Jos rööriä on ohennettu liikaa, voit yrittää kaventaa rööriä.');

insert into ratkaisu(kuvaus) values(' Mikäli kärjen ihan ulommaisissa kulmissa on liikaa puuta, niin ota puuta varovasti pois kulmista enintään kolmen millimetrin matkalta.');


insert into ratkaisu(kuvaus) values('Sivujen kanava on reunan vieressä oleva suorakaiteen muotoinen millimetri halkaisijaltaan oleva alue.
 Ota puuta varovasti pois tältä alueelta.');

insert into ratkaisu(kuvaus) values('Ota röörin kulmista kiinni ja työnnä kulmia vastakkain.
 Rööri aukeaa ja kärki saa paremman salmiakkimuodon. Nipistäminen pehmentää röörin ääntä.');

insert into ratkaisu(kuvaus) values('Kiristä siteitä niin, että toinen (keskimmäisin) side on tiukemmalla kuin ensimmäinen (lähinnä röörin soivaa osaa).
Toisen siteen tulisi pysyä paikallaan, se ei saa liikkua sidettä kokeiltaessa. Ensimmäinen side saa hieman antaa periksi.
 Toinen side on liian tiukalla jos se pureutuu puuhun.');

insert into ratkaisu(kuvaus) values('Kanavan alaosaa työstämällä saa joustavuutta alaäniin.');

insert into ratkaisu(kuvaus) values('Puolikuut ovat röörin kärjessä sijaitseva kolmion tai puolikuun näköinen alue.
 Puolikuitten tulisi näkyä vaaleampana kun rööriä katsotaan valoa vasten.');

insert into ratkaisu(kuvaus) values('Röörin silmät ovat aivan puolikuiden rajoilla olevat pienet ympyrän muotoiset alueet.');

insert into ratkaisu(kuvaus) values('Siteet ovat liian tiukalla jos messinkilanka pureutuu (uppoaa) puuhun.
 Toisen siteen (keskimmäisin) tulisi olla tiukemmalla kuin ensimmäisen (lähinnä soivaa osaa) siteen.
 Toisen siteen tulisi pysyä paikallaan, se ei saa liikkua sidettä kokeiltaessa. Ensimmäinen side saa hieman antaa periksi.');

insert into ratkaisu(kuvaus) values('Es-alue on ympyrän muotoinen alue ihan röörin keskellä kärjessä.');

insert into ratkaisu(kuvaus) values('Etuosassa on röörin joustavuus. Työstä puolikuita, kärjen reunoja ja kärjen sivuja.
Yritä saada röörin suuaukosta salmiakin muotoinen. Katso rööriä valoa vasten, jotta näet puolikuiden muodon.
Niiden tulisi olla symmetriset molemmilta puolilta.');



-- into ongelma_syy

insert into ongelma_syy (ongelma_id, syy_id) values (2, 1);
insert into ongelma_syy (ongelma_id, syy_id) values (1, 2); 
insert into ongelma_syy (ongelma_id, syy_id) values (3, 3);
insert into ongelma_syy (ongelma_id, syy_id) values (6, 3);
insert into ongelma_syy (ongelma_id, syy_id) values (7, 3);
insert into ongelma_syy (ongelma_id, syy_id) values (9, 3);
insert into ongelma_syy (ongelma_id, syy_id) values (3, 4);
insert into ongelma_syy (ongelma_id, syy_id) values (10, 5);
insert into ongelma_syy (ongelma_id, syy_id) values (3, 5); 
insert into ongelma_syy (ongelma_id, syy_id) values (3, 6);
insert into ongelma_syy (ongelma_id, syy_id) values (4, 7);
insert into ongelma_syy (ongelma_id, syy_id) values (14, 7);
insert into ongelma_syy (ongelma_id, syy_id) values (5, 8);
insert into ongelma_syy (ongelma_id, syy_id) values (5, 9);
insert into ongelma_syy (ongelma_id, syy_id) values (5, 10);
insert into ongelma_syy (ongelma_id, syy_id) values (5, 11); 
insert into ongelma_syy (ongelma_id, syy_id) values (8, 12);
insert into ongelma_syy (ongelma_id, syy_id) values (10, 13);
insert into ongelma_syy (ongelma_id, syy_id) values (12, 13);
insert into ongelma_syy (ongelma_id, syy_id) values (11, 14);
insert into ongelma_syy (ongelma_id, syy_id) values (12, 15);
insert into ongelma_syy (ongelma_id, syy_id) values (13, 16);
insert into ongelma_syy (ongelma_id, syy_id) values (10, 17); 
insert into ongelma_syy (ongelma_id, syy_id) values (13, 17);


-- into syy_ratkaisu

insert into syy_ratkaisu (syy_id, ratkaisu_id) values (2,1);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (1,2);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (3,3);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (4,4);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (5,5);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (6,6);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (7,7);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (8,8);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (9,9);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (10,10);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (11,11);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (12,12);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (13,13);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (14,14);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (15,15);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (16,16);
insert into syy_ratkaisu (syy_id, ratkaisu_id) values (17,17);



