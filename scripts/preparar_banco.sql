--BANCO: /script/comex.sqlite
DELETE FROM categorias;
INSERT INTO categorias VALUES(1,'LUXO',date('now'),date('now'));
INSERT INTO categorias VALUES(2,'CELULARES',date('now'),date('now'));
INSERT INTO categorias VALUES(3,'INFORMÁTICA',date('now'),date('now'));
INSERT INTO categorias VALUES(4,'MÓVEIS',date('now'),date('now'));
INSERT INTO categorias VALUES(5,'AUTOMOTIVA',date('now'),date('now'));
INSERT INTO categorias VALUES(6,'LIVROS',date('now'),date('now'));
INSERT INTO categorias VALUES(7,'BELEZA',date('now'),date('now'));
INSERT INTO categorias VALUES(8,'ESPORTE',date('now'),date('now'));

DELETE FROM clientes;
INSERT INTO clientes VALUES(1,'MARLINDO MARTINS MACIEL','209.590.442-72','96 99195-5060','Av. José Loureiro de Sena','2515',NULL,'Jardim Felicidade II','Macapá','Amapá',date('now'),date('now'));
INSERT INTO clientes VALUES(2,'JULIA CRISTIANE BEZERRA','432.132.222-49','96 99195-5064','Av. José Loureiro de Sena','2515',NULL,'Jardim Felicidade II','Macapá','Amapá',date('now'),date('now'));
INSERT INTO clientes VALUES(3,'GABRIELA TORRES MACIEL','100.100.100-10','96 99195-1334','Rua da Farol','100',NULL,'Centro','Salvador','Bahia',date('now'),date('now'));
INSERT INTO clientes VALUES(4,'VERONICA MARTINS MACIEL','900.900.900-90','96 99195-0000','Av. Caramurú','312','proximo ao Quartel da PM-AP','Beirol','Macapá','Amapá',date('now'),date('now'));

DELETE FROM produtos;
INSERT INTO produtos VALUES(1,'Smartphone Nokia 5.3','Smartphone Nokia 5.3 128GB Dual Chip Android 10 Tela 6.55 Octa Core Câmera 13MP+5MP+2MP+2MP Frontal 8MP- Verde Ciano','2599,00',100,0,2,'01-nokia-min.webp','01-nokia-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(2,'Smartphone OUKITEL WP5 Pro','Smartphone OUKITEL WP5 Pro (2020) robusto, telefone IP68 à prova dágua Dual SIM Card 4G LTE (8000 mAh), versão mundial Android 9.0, câmera tripla de 4pol64 GB, 5,5" (Laranja preta)','1583,70',100,2,0,'02-okitel-min.webp','02-okitel-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(3,'Microsoft Lumia 435 Dual','Microsoft Lumia 435 Dual Windows Tela 4´ 8gb 2mp - Exposição','299,00',100,0,2,'03-microsoft-min.webp','03-microsoft-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(4,'Smartphone Motorola Edge 30','Smartphone Motorola Edge 30 5G 256GB 8GB RAM Rosê','2569,00',100,0,2,'04-motorola-max.jpg','04-motorola-min.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(5,'Poco M4 Pro Smartphone','Poco M4 Pro Smartphone 128GB 6GB RAM no Brasil - Azul','1599,90',100,0,2,'05-poco-max.jpg','05-poco-min.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(6,'Samsung Galaxy Note10','Samsung Galaxy Note10 Dual SIM 256 GB Aura black 8 GB RAM','3339,00',100,0,2,'06-samsung-min.webp','06-samsung-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(7,'Smartphone Xiaomi Redmi 10','Smartphone Xiaomi Redmi 10 128gb 6gb Ram Dual Sim Global Azul','1258,11',100,0,2,'07-xaomi-max.jpg','07-xaomi-min.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(8,'iPhone 11','iPhone 11 Apple 64GB (PRODUCT)RED 6,1 12MP iOS','2975,99',100,0,2,'08-apple-min.webp','08-apple-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(9,'Smartphone LG K62 64GB','Smartphone LG K62 64GB Azul 4G Octa-Core 4GB RAM - Tela 6,59 Câm. Quádrupla + Selfie 13MP Dual Chip - Tela 6,59 Câm. Quádrupla + Selfie 13MP Dual Chip','1079,99',100,0,2,'09-lg-min.webp','09-lg-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(10,'Smartphone ASUS Zenfone Max','Smartphone ASUS Zenfone Max Pro M2, 6GB 64GB, Black Saphire','1849,00',100,0,2,'10-asus-min.webp','10-asus-max.jpg',date('now'),date('now'));
INSERT INTO produtos VALUES(11,'Notebook Asus Zenbook','Notebook Asus Zenbook Duo Ux482ear-ka371w Intel Core i7 1195g7 16gb 512gb Ssd W11 14pol Azul Celestial','7998,90',100,0,3,'11-asus-zenbuook-min.webp','11-asus-zenbuook-max.jpg',date('now'),date('now'));
INSERT INTO produtos VALUES(12,'Conjuntos Joias Jankelly','Conjuntos De Joias De Luxo Jankelly Para Mulheres Exclusivo Conjunto De Anéis De Pulseira Africana','95,07',100,0,1,'12-anel-min.webp','12-anel-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(13,'Escrivaninha MATCH','Escrivaninha com Estante Lateral MATCH cor Preto/Pinho - Artely','230,96',100,0,4,'12-escrivanhinha-min.webp','12-escrivanhinha-max.jpg',date('now'),date('now'));
INSERT INTO produtos VALUES(14,'Coraline','Coraline - Acompanha Marcador de Páginas Especial Capa dura – Edição padrão, 19 junho 2020\r\nClássico de Neil Gaiman que mistura terror e conto de fadas ganha edição especial\r\n\r\nCertas portas não devem ser abertas. E Coraline descobre isso pouco tempo depois de chegar com os pais à sua nova casa, um apartamento em um casarão antigo ocupado por vizinhos excêntricos e envolto por uma névoa insistente, um mundo de estranhezas e magia, o tipo de universo que apenas Neil Gaiman pode criar.','42,90',100,0,6,'13-livro-min.jpg','13-livro-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(15,'Organizador Objetos no carro','Organizador Objetos Banco Traseiro Carro Acessórios Carros','41,92',100,0,5,'14-organizador-min.webp','14-organizador-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(16,'Bola Futebol de Areia Adidas','Bola Futebol de Areia Adidas Al Rihla PRO Beach Copa do Mundo','239,00',100,0,8,'15-bola-min.webp','15-bola-max.jpg',date('now'),date('now'));
INSERT INTO produtos VALUES(17,'Kimono+Rash Guard+Bermuda','Kit: Kimono World Combat BJJ + Rash Guard BJJ Competidor + Bermuda BJJ Competidor','498,00',100,0,8,'16-kimono-min.webp','16-kimono-max.webp',date('now'),date('now'));
INSERT INTO produtos VALUES(18,'Bolsa de cosméticos LHLYSGS','Bolsa de cosméticos de marca LHLYSGS\r\nBolsa de cosméticos de marca LHLYSGS, organizador de belleza para mujer, estuche cosmético profesional, bolsa de maquillaje de almacenamiento impermeable necesaria de viaje','116,75',100,0,7,'17-kitbeleza.min.webp','17-kitbeleza.max.webp',date('now'),date('now'));

DELETE FROM pedidos;
INSERT INTO pedidos VALUES(1,'PEDIDO 0001.2023','1000,00',0,'5000,00','INICIADO',1,date('now'),date('now'));
INSERT INTO pedidos VALUES(2,'PEDIDO 0002.2023','5800,00',0,'15000,00','INICIADO',2,date('now'),date('now'));
INSERT INTO pedidos VALUES(3,'PEDIDO 0003.2023','130,00',0,130,'INICIADO',3,date('now'),date('now'));

DELETE FROM itens;
INSERT INTO itens VALUES(1,'0','0','10','0',3,1,1,date('now'),date('now'));
INSERT INTO itens VALUES(2,'0','0','5','0',4,2,2,date('now'),date('now'));
INSERT INTO itens VALUES(3,'0','0','15','0',5,3,2,date('now'),date('now'));

UPDATE itens SET valor_unitario=(SELECT valor_unitario FROM produtos WHERE produtos.id=itens.produtos_id);
UPDATE itens SET valor_parcial=(valor_unitario * quantidade);
UPDATE itens SET valor_total=(valor_parcial - valor_desconto);

UPDATE produtos SET vendidos=(select sum(quantidade) from itens where itens.produtos_id=produtos.id) WHERE id IN (select produtos_id from itens where itens.produtos_id=produtos.id);
UPDATE produtos SET estoque=(estoque - vendidos);
  
