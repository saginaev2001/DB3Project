CREATE TABLE products ( 
	product_id int NOT NULL,
	product_name varchar(1000) NOT NULL,
	price int NOT NULL
)
;
CREATE TABLE product_category ( 
	product_id int NOT NULL,
	category_id int not null,
)
;
CREATE TABLE product_description ( 
	product_id int NOT NULL,
	description varchar(1000) NOT NULL
)
;

Create table Customer (
	customer_id int not null,
	store_id int not null,
	first_name varchar(100) not null,
	last_name varchar(100) not null,
	email varchar(100) not null,
	phone int not null			
);


create table category (
category_id int not null,
store_id int not null,
category_name varchar(300) not null
);


create table address (
address_id int not null,
customer_id int not null,
address_name varchar(200) not null
);

ALTER TABLE products ADD CONSTRAINT HR_products
	PRIMARY KEY (product_id)
;

ALTER TABLE customer ADD CONSTRAINT HR_customer
	PRIMARY KEY (customer_id)
;
ALTER TABLE address ADD CONSTRAINT HR_address
	PRIMARY KEY (address_id)
;
ALTER TABLE category ADD CONSTRAINT HR_categorys
	PRIMARY KEY (store_id)
;
ALTER TABLE product_category ADD CONSTRAINT HR_product_category
	PRIMARY KEY (category_id)
;


ALTER TABLE product_description ADD CONSTRAINT HR_product_description_prod
	FOREIGN KEY (product_id) REFERENCES products (product_id)
;
ALTER TABLE product_category ADD CONSTRAINT HR_product_category_products
	FOREIGN KEY (product_id) REFERENCES products (product_id)
;

ALTER TABLE customer ADD CONSTRAINT HR_customer_category
	FOREIGN KEY (store_id) REFERENCES store (store_id)
;
ALTER TABLE address ADD CONSTRAINT HR_address_customer
	FOREIGN KEY (customer_id) REFERENCES customer (customer_id)
;

ALTER TABLE category ADD CONSTRAINT HR_product_category_category
	FOREIGN KEY (category_id) REFERENCES product_category (category_id)
;
