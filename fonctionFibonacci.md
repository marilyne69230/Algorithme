DEBUT 
 
    fonction fibonacci(nombre)

    SI nombre = 0
        Retourne 0
    FINSI

    SI nombre = 1
        Retourne 1
    FINSI

    nombre = fibonacci(nombre-1) + fibonacci(nombre-2)
    Retourne nombre

    fin fonction
    
    Affiche (10)

FIN