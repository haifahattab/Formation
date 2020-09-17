PHP Exercice 4 - La suite Fibonacci

Leonardo Pisano (Fibonacci) (1175 - 1250)

Enoncé tiré de l'ouvrage Liber Abaci de Leonardo Pisano écrit en 1202.

« Possédant initialement un couple de lapins, combien de couples obtient-on en douze mois si chaque couple engendre tous les mois un nouveau couple
à compter du second mois de son existence ? »_

En d'autres termes : la suite de Fibonacci est une suite d'entiers dans laquelle chaque terme est la somme des deux termes qui le précèdent.
Elle commence par les termes 0 et 1 et ses premiers termes sont : 0, 1, 1, 2, 3, 5, 8, 13, 21, etc

Creez donc une fonction qui prend un paramètre de type entier, cela correspondra à la durée en mois de la reproduction des lapins,
votre fonction doit retourner le nombre de couples que vous afficherez à l'aide d'un echo.

Pour comprendre, de manière imagée, le fonctionnement de la suite de Fibonacci avec la reproduction des lapins,
vous pouvez consulter l'image fournie dans le dossier.

Exemple

fibonacci(12) ;

Devra afficher le résultat suivant : 144


Pour aller plus loin :

* Renseignez-vous sur le principe de récursivité et essayez de programmer une seconde version de la fonction de calcul de la suite de Fibonacci de manière récursive.

* Culture : Cette suite est fortement liée au nombre d'or, φ (phi). Ce nombre intervient dans l'expression du terme général de la suite.
Inversement, la suite de Fibonacci intervient dans l'écriture des réduites de l'expression de φ en fraction continue :
les quotients de deux termes consécutifs de la suite de Fibonacci sont les meilleures approximations du nombre d'or. 
Et plus on tend vers l'infini, plus l'approximation sera précise. Amusez-vous à calculer ce quotient (valeur au rang n / valeur au rang (n-1)) 
sur plusieurs valeurs pour constater cette approximation.
