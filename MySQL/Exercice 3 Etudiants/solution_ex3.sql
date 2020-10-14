--1. Afficher la liste des étudiants triés par ordre croissant de date de naissance
SELECT * 
FROM `etudiant` 
ORDER BY date_naissance ASC

--2. Afficher tous les étudiants inscrits à M1 et tous les étudiants inscrits à M2.
SELECT * 
FROM `etudiant` 
WHERE niveau="M1" OR niveau="M2"

--3. Afficher les matricules des étudiants qui ont passé l'examen du cours 002
select Matricule
from Examen
where Code='002'

--4. Afficher les matricules de tous les étudiants qui ont passé l'examen du cours 001 et de tous les étudiants qui ont passé l'examen du cours 002
SELECT * 
FROM `examen` 
WHERE code="002" OR code="001"

--5. Afficher le matricule, code, note /20 et note /40 de tous les examens classés par ordre croissant de matricule et de code.
select matricule,code,note as "Note sur 20",note*2 as "Note sur 40"
from eExamen
order by matricule,code

--6. Trouver la moyenne de notes de cours 002. 
SELECT AVG(note) AS "la moyenne de notes de cours 002" 
FROM `examen` 
WHERE code = "002"

--7. Compter les examens passés par un étudiant (exemple avec matricule 'e001') 
SELECT COUNT(*) 
FROM `examen` 
GROUP BY matricule

--8. Compter le nombre d'étudiants qui ont passé l'examen du cours 002. 
SELECT COUNT(*) AS "Nombre d'etudiants qui ont passé l'examen" 
FROM `examen` 
WHERE code = "002"

--9. Calculer la moyenne des notes d'un étudiant (exemple avec matricule 'e001'). 
SELECT AVG(note) 
FROM `examen` 
GROUP BY matricule

--10. Compter les examens passés par chaque étudiant
SELECT matricule,COUNT(*) AS "Nombre d'examen" 
FROM `examen` 
GROUP BY matricule

--11. Calculer la moyenne des notes pour chaque étudiant. 
select matricule,AVG(note) as "Moyenne de notes"
from examen
group by matricule

--12. Même question, mais afficher seulement les étudiants (et leurs moyennes) dont la moyenne est >= 15
select matricule,AVG(note) as "Moyenne de notes"
from examen
group by matricule
having AVG(note)>=15

--13. Trouver la moyenne de notes de chaque cours
select code,AVG(note) as "Moyenne de notes"
from examen
group by code
