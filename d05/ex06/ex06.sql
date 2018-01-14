SELECT titre, resum FROM film
WHERE INSTR(resum, 'vincent') > 0
ORDER BY id_film ASC;
