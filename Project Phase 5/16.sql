select p.product_name, c.category_name from products p left join product_description d on p.product_id = d.product_id
 left join product_category pc on pc.product_id = p.product_id left join category c on pc.category_id=c.category_id
 where d.description='TV & Video, Media Streaming Players, New Technology, Frys, Electronics, Streaming Media Players' and p.price between 100000 and 300000;