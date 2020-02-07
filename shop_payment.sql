CREATE TABLE shop_payment (
id int(11) NOT NULL,
order_id int(11) NOT NULL,
payment_status varchar(255) NOT NULL,
payment_response text NOT NULL,
create_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;