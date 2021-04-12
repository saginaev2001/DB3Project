Select phone 
FROM Customer 
JOIN Category on Customer.store_id=Category.store_id 
JOIN Product_category on Category.category_id = Product_category.category_id    
JOIN Products on Product_category.product_id=Product.product_id 
WHERE Product.price=(select Min(price) from Products);