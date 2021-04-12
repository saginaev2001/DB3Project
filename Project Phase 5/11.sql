Select Count(SELECT Products.product_id 
FROM Products WHERE product_name='Sally Clark') from Products 
JOIN Product_category on Products.product_id=Product_category.product_id 
JOIN Category on Product_category.category_id=Category.category_id 
WHERE category_name='Speakers';