SELECT last_name, first_name, DATE(birthdate)
FROM user_card
WHERE YEAR(DATE(birthdate)) = 1989
ORDER BY last_name;
