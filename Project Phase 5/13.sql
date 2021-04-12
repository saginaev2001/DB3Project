SELECT * FROM 
(select product_name,price from products p left join product_description d on p.product_id = d.product_id
 where d.description='Electronics, Computers,Computer Accessories,Keyboards,Mice & Joysticks, Keyboards'
 and p.product_id between 1 and 200 order by p.price desc ) A
WHERE rownum <= 1;