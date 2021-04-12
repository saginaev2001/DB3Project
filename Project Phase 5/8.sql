Select address_id 
FROM Address 
JOIN Customer on Address.customer_id=Customer.customer_id 
JOIN Category on Customer.store_id=Category.store_id 
JOIN Product_category on Category.category_id=Product_category.category_id 
JOIN Products on Product_category.product_id=Products.product_id 
WHERE Products.price=(select Max(price) from Products);
