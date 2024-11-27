// Sélection des éléments
const themeToggle = document.getElementById('toggle');
const themeLink = document.getElementById('theme-link');

// Charger le thème sauvegardé depuis le localStorage
const savedTheme = localStorage.getItem('theme') || '../css/dark-theme.css';
themeLink.setAttribute('href', savedTheme);

// Mettre à jour le texte du bouton en fonction du thème actuel
themeToggle.textContent = savedTheme.includes('light') 
    ? 'Passer au thème sombre' 
    : 'Passer au thème clair';

// Gestion du clic sur le bouton pour basculer le thème
themeToggle.addEventListener('click', () => {
    if (themeLink.getAttribute('href').includes('light')) {
        // Passer au thème sombre
        themeLink.setAttribute('href', '../css/dark-theme.css');
        localStorage.setItem('theme', '../css/dark-theme.css');
        themeToggle.textContent = 'Passer au thème clair';
    } else {
        // Passer au thème clair
        themeLink.setAttribute('href', '../css/light-theme.css');
        localStorage.setItem('theme', '../css/light-theme.css');
        themeToggle.textContent = 'Passer au thème sombre';
    }
});
