// Récupère l'élément du bouton
const themeToggleButton = document.getElementById('theme-toggle');
const themeStylesheet = document.getElementById('theme-stylesheet'); // L'élément <link> pour les styles

// Vérifie si un thème a déjà été sauvegardé dans le stockage local
const savedTheme = localStorage.getItem('theme');

// Applique le thème enregistré ou le thème clair par défaut
if (savedTheme === 'dark') {
    themeStylesheet.setAttribute('href', 'style-dark.css');  // Change le fichier CSS pour le thème sombre
    document.body.classList.add('dark-theme');
    themeToggleButton.textContent = "Passer au thème clair";
} else {
    themeStylesheet.setAttribute('href', 'style-light.css'); // Change le fichier CSS pour le thème clair
    document.body.classList.remove('dark-theme');
    themeToggleButton.textContent = "Passer au thème sombre";
}

// Ajoute un écouteur d'événement au bouton
themeToggleButton.addEventListener('click', function() {
    // Bascule entre les classes de thème
    document.body.classList.toggle('dark-theme');

    // Change le fichier CSS du thème
    if (document.body.classList.contains('dark-theme')) {
        themeStylesheet.setAttribute('href', 'style-dark.css');
        localStorage.setItem('theme', 'dark');
        themeToggleButton.textContent = "Passer au thème clair";
    } else {
        themeStylesheet.setAttribute('href', 'style-light.css');
        localStorage.setItem('theme', 'light');
        themeToggleButton.textContent = "Passer au thème sombre";
    }
});
