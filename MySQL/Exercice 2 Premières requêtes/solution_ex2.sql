--1) Ecrivez la requête permettant d'obtenir la liste des 10 villes les plus peuplées en 2012 
SELECT * 
FROM villes_france_free
ORDER BY ville_population_2012 
LIMIT 10;

--2) Ecrivez la requête permettant d'obtenir la liste des 50 villes ayant la plus faible superficie 
SELECT *
FROM villes_france_free 
ORDER BY ville_surface 
LIMIT 50;

--3) Ecrivez la requête permettant d'obtenir la liste des départements d’outre-mer, c’est-à-dire ceux dont le numéro de département commence par “97” 
SELECT * 
FROM departement 
WHERE departement_code 
LIKE '97%';

--4) Ecrivez la requête permettant d'obtenir le nom des 10 villes les plus peuplées en 2012, ainsi que le nom du département associé 
SELECT villes_france_free.ville_nom, departement.departement_nom 
FROM villes_france_free 
INNER JOIN departement 
ON ville_departement = departement_code 
ORDER BY ville_population_2012 DESC 
LIMIT 10

--5) Ecrivez la requête permettant d'obtenir la liste du nom de chaque département, associé à son code et du nombre de commune au sein de ces départements, en triant afin d’obtenir en priorité les départements qui possèdent le plus de communes 
SELECT departement.departement_nom, 
departement.departement_code, 
villes_france_free.ville_commune 
FROM departement 
INNER JOIN villes_france_free 
ON departement_code = ville_departement 
ORDER BY ville_commune DESC

--6) Ecrivez la requête permettant d'obtenir la liste des 10 plus grands départements, en terme de superficie
SELECT departement.departement_nom, villes_france_free.ville_surface 
FROM departement 
INNER JOIN villes_france_free 
ON departement_code = ville_departement 
ORDER BY ville_surface DESC 
LIMIT 10

--7) Ecrivez la requête permettant de compter le nombre de villes dont le nom commence par “Saint” 
SELECT COUNT(*) 
FROM villes_france_free 
WHERE ville_nom LIKE 'Saint%'

--8) Ecrivez la requête permettant d'obtenir la liste des villes qui ont un nom existants plusieurs fois, et trier afin d’obtenir en premier celles dont le nom est le plus souvent utilisé par plusieurs communes  
SELECT ville_nom, COUNT(*) AS count_n
FROM villes_france_free
GROUP BY ville_nom
ORDER BY count_n DESC

--9) Ecrivez la requête permettant d'obtenir en une seule requête SQL la liste des villes dont la superficie est supérieure à la superficie moyenne 
SELECT * 
FROM `villes_france_free` 
WHERE `ville_surface` > (SELECT AVG(`ville_surface`) FROM `villes_france_free`)

--10) Ecrivez la requête permettant d'obtenir la liste des départements qui possèdent plus de 2 millions d’habitants 
SELECT ville_departement, SUM(`ville_population_2012`) AS population_2012 
FROM `villes_france_free` 
GROUP BY `ville_departement` 
HAVING population_2012 > 2000000 
ORDER BY population_2012 DESC
