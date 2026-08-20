document.addEventListener("DOMContentLoaded",() => {
    /**
     * Swiper
     */
    let swiper = new Swiper(".imageSwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    /**
     * Dark Mode
     */
// Immediately Invoked Function Expressions
    (() => {
        const setTheme = (theme) => {
            document.documentElement.setAttribute('data-bs-theme', theme);
            localStorage.setItem('bs-theme', theme);
        };

// Function to handle the toggle button click
        document.getElementById('dark-mode-toggle').addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            setTheme(newTheme);
        });

// Set initial theme based on localStorage or system preference
        const savedTheme = localStorage.getItem('bs-theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (savedTheme) {
            setTheme(savedTheme);
        } else if (systemPrefersDark) {
            setTheme('dark');
        } else {
            setTheme('light'); // Default to light mode
        }

// Optional: Add an event listener to update the theme if the system preference changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
            const currentTheme = localStorage.getItem('bs-theme');
            // Only update automatically if the user hasn't set a manual preference
            if (!currentTheme) {
                setTheme(event.matches ? 'dark' : 'light');
            }
        });
    })()
}) // end of DOMContentLoaded
