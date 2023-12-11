SELECT salles.nom, etage.nom AS 'Biggest room', capacite
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id
ORDER BY capacite
DESC LIMIT 1