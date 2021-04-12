SELECT * FROM 
(select product_name,count(product_id) from products group by product_name order by count(product_id) desc ) A
WHERE rownum <= 5;