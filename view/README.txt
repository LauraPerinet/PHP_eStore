Login Administrateur :

email: admin@admin.fr
password : admin

----------------------------------------
           FONCTIONNALITES 
----------------------------------------

userController :
	- login : affichage page de log
	- dologin :teste les entrées en page de log :
		-> crée un nouvel utilisateur si l'email et le mot de passe sont bons
		-> Renvoie sur la page de log avec une erreur si l'email ou le password n'a pas été rempli, ou si aucune ligne correspondante n'est trouvé dans la base de donnée
	-logout : détruit la session utilisateur
	-create : affichage page de creation d'utilsateur
	-doCreate : crée un nouvelle ligne user dans la base de donnée si aucun user n'est enregistré avec le meme email et si tous les champs ont été rempli.
	
adminController :
	- redirection vers le backOffice et liste des utilisateurs.
		
		