CREATE TABLE tb_kategori (
	kat_id int(11) NOT NULL AUTO_INCREMENT,
	kat_name varchar(100) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(kat_id),
	UNIQUE KEY(kat_name)
);

CREATE TABLE tb_produk (
   produk_id int(11) NOT NULL AUTO_INCREMENT,
   produk_id_kat int(11) NOT NULL,
   namaproduk varchar(100) NOT NULL,
   harga_produk varchar(100) NOT NULL,
   deskripsi_produk varchar(100) NOT NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   updated_at DATETIME DEFAULT NULL,
   PRIMARY KEY(produk_id),
   FOREIGN KEY(produk_id_kat) REFERENCES tb_kategori(kat_id) ON UPDATE CASCADE ON DELETE RESTRICT
 );  

CREATE TABLE tb_order (
   order_id int(11) NOT NULL AUTO_INCREMENT,
   order_id_prdk int(100) NOT NULL,
   jumlahbarang int(20) NOT NULL,
   keterangan varchar(100) NOT NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   updated_at DATETIME DEFAULT NULL,
   PRIMARY KEY(order_id),
   FOREIGN KEY(order_id_prdk) REFERENCES tb_produk(produk_id) ON UPDATE CASCADE ON DELETE RESTRICT
 );  