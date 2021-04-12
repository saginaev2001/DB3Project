SELECT * FROM 
(SELECT product_name, COUNT(product_name) FROM products  group by product_name ORDER BY count(product_name)desc ) A
WHERE rownum <= 1;