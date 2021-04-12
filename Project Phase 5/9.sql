Select Address.address_name,Customer.phone,Products.product_name 
FROM Address join Customer on Address.customer_id=Customer.customer_id 
JOIN Category on Customer.store_id=Category.store_id
JOIN Product_category on Category.category_id=Product_category.category_id 
JOIN Products on Product_category.product_id=Products.product_id
WHERE Customer.phone='1 132 640 450';