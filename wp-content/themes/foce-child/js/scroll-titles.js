// gestion de l effet d aparition des titres 
    document.addEventListener("scroll", function () {
        // Sélectionne tous les éléments avec la classe 'scroll-fade-in'
        let sections = document.querySelectorAll('.scroll-fade-in');
        // Pour chaque section
        sections.forEach(function (section) {
            // On récupère les dimensions de la boîte qui englobante la section par rapport à la fenêtre
            let boiteEnglobante = section.getBoundingClientRect();
            // Définit une distance à partir du haut de la fenêtre pour considérer la section comme visible
            let decalage = window.innerHeight * 0.9; 
            // Si le top de la boîte qui englobe la section est à une position suffisament haute
            if (boiteEnglobante.top < decalage) {
                // Ajoute la classe 'visible' à la section
                section.classList.add('visible');
            }
        });
    });


