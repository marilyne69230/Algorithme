DEBUT
    aDeviner = 42
    valeurProposer = 0
    nombreEssai = 0

    TANT QUE  (valeurProposer est différent de aDeviner) FAIRE
        Afficher "entrez votre nombre"

        SI (valeurProposer >100 ou <0) ALORS
        Afficher "le nombre n'est pas valable"
        FINSI

        SI (valeurProposer < aDeviner) ALORS
        Afficher "le nombre proposé est trop petit !"
        Ajouter +1 à nombreEssai
        FINSI

        SINON SI (valeurProposer > aDeviner) ALORS
        Afficher "Le nombre est trop grand !"
        Ajouter +1 à nombreEssai
        FINSI
        
    FIN TANTQUE

    Afficher "Bravo, vous avez réussi en" nombreEssai "coups"
FIN
