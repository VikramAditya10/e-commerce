create table product(
product_id int(11),
model varchar(64),
quantity int(4),
image varchar(255),
price decimal(15,4),
date_available date,
weight decimal(15,8),
length decimal(15,8),
width decimal(15,8),
status tinyint(1)
);

create table product_description(
product_id int(11),
name varchar(255),
description text,
tag text,
meta_title varchar(255),
meta_description varchar(255),
meta_keyword varchar(255)
);

create table cart(
cart_id int(11),
api_id int(11),
customer_id int(11),
session_id int(11),
product_id int(11),
option text,
quantity int(5),
date_added datetime
);

create table order(
order_id 				int(11),
invoice_no 				int(11),
customer_id 			int(11),
customer_id             int(11),
customer_group_id       int(11),
firstname                varchar(32),
lastname                 varchar(32),
email                    varchar(96),
telephone                varchar(32),
payment_firstname        varchar(32),
payment_lastname         varchar(32),
payment_company          varchar(60),
payment_address          varchar(255),
payment_city             varchar(128),
payment_postcode         varchar(10),
payment_country          varchar(128)
payment_country_id       int(11),
payment_zone             varchar(128),
payment_zone_id          int(11),
payment_method           varchar(128),
payment_code             varchar(128),
shipping_firstname       varchar(32),
shipping_lastname        varchar(32),
shipping_company         varchar(40),
shipping_address_1       varchar(128),
shipping_address_2       varchar(128),
shipping_city            varchar(128),
shipping_postcode        varchar(10),
shipping_country         varchar(128),
shipping_country_id      int(11),
shipping_zone            varchar(128),
shipping_zone_id         int(11),
shipping_address_format  text,
shipping_custom_field    text,
shipping_method          varchar(128),
shipping_code            varchar(128),
comment                  text,
total                    decimal(15,4),
order_status_id          int(11),
price		           decimal(15,8),
ip                       varchar(40),
date_added               datetime,
date_modified            datetime,
);

create table product_image(
product_image_id  int(11),      
product_id        int(11),      
image             varchar(255), 
sort_order        int(3)       
);

create table category(
 category_id    int(11) NOT NULL AUTO_INCREMENT,
 image          varchar(255),
 parent_id      int(11),
 top            tinyint(4),
 column         int(11),
 sort_order     int(11),
 status         tinyint(4),
 created_at     timestamp,
 updated_at   timestamp
);

create product_to_category(
product_id int(11),
category_id int(11),
);


create table available_size(
product_id int(11),
size tinyint(2),
quantity int(10)
);
create table category_description(
category_id int(11),
language_id tinyint,
name varchar(255),
description text,
meta_title varchar(255),
meta_description varchar(255),
meta_keyword varchar(255)
);




