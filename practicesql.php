1.INNER JOIN
SELECT * FROM `feeds` JOIN `users` ON `feeds`.`user_id`=`users`.id

2.RIGHT JOIN
SELECT * FROM `feeds` RIGHT JOIN `users` ON `feeds`.`user_id` = `users`.id
