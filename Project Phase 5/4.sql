SELECT SUM(price) FROM products INNER JOIN product_category ON products.product_id=product_category.product_id INNER JOIN category ON 
product_category.category_id = category.category_id INNER JOIN customer ON category.store_id = customer.store_id INNER JOIN address ON 
customer.customer_id = address.customer_id WHERE address.address_name = 'Butcher Hill, West Park, LEEDS, LS16 5EA';