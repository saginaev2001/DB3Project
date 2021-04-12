SELECT * FROM 
(select product_name, count(product_name) from products where price>150000 group by product_name order by count(product_name) desc ) A
WHERE rownum <= 1;