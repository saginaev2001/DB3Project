Select Count(customer_id) FROM Customer 
JOIN Category on Customer.store_id=Category.store_id 
JOIN Product_category on Category.category_id=Product_category.category_id 
JOIN Products on Product_category.product_id=Products.product_id
WHERE Products.product_name='Capacitor Electric Double Layer-Supercaps';