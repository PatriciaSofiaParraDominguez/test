CREATE TABLE shop_order_item (
id int(11) NOT NULL,
order_id int(11) NOT NULL,
product_id int(11) NOT NULL,
item_price double NOT NULL,
quantity int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;