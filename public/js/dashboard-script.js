const deleteItem = (deleteButton, itemDataID, formID) => {
    swal.fire({
        title: "هل أنت متأكد ؟",
        text: "سيتم حذف جميع البيانات وﻻ يمكن استرجاعها !!!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#4CAF50",
        cancelButtonColor: "#f44336",
        confirmButtonText: "حذف",
        cancelButtonText: "إلغاء",
    }).then((result) => {
        if (result.isConfirmed) {
            const itemID = deleteButton.getAttribute(itemDataID)
            // console.log(`#${formID}${itemID}`)
            document.querySelector(`#${formID}${itemID}`).submit()
        }
    });

} // end of function
/*
dark mode
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
/*
dark mode
 */

const createLoginPlatformChart = () => {
    fetch('api/user-login-platform-count')
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`)
            }
            return response.json()
        })
        .then((data) => {
            const loginPlatformChart = document.getElementById('login-platform-count-chart');
            new Chart(loginPlatformChart, {
                type: 'bar',
                data: {
                    labels: data.platform,
                    datasets: [{
                        label: 'إحصائية تسجيل الدخول حسب نظام التشغيل',
                        data: data.count,
                        backgroundColor: ['red', 'blue'],
                        borderColor: ['darkred', 'darkblue'],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch((error) => {
            console.log(error)
        })
}
const createLoginBrowserChart = () => {
    fetch('api/user-login-browser-count')
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`)
            }
            return response.json()
        })
        .then((data) => {
            const loginBrowserChart = document.getElementById('login-browser-count-chart');
            new Chart(loginBrowserChart, {
                type: 'doughnut',
                data: {
                    labels: data.browser,
                    datasets: [{
                        label: 'إحصائية تسجيل الدخول حسب نوع المتصفح ',
                        data: data.count,
                        backgroundColor: ['yellow', 'green'],
                        borderColor: ['darkyellow', 'darkgreen'],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch((error) => {
            console.log(error)
        })
}
const createUsersCountChart = () => {
    fetch('api/users-count')
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`)
            }
            return response.json()
        })
        .then((data) => {
            const loginBrowserChart = document.getElementById('users-count-chart');
            new Chart(loginBrowserChart, {
                type: 'pie',
                data: {
                    labels: data.data,
                    datasets: [{
                        label: 'إحصائية المستخدمين والأدوار والأذونات',
                        data: data.count,
                        backgroundColor: ['Red', 'Orange', 'Yellow', 'Green', 'Blue'],
                        borderColor: ['darkred', 'darkorange', 'darkyellow', 'darkgreen', 'darkblue'],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch((error) => {
            console.log(error)
        })
}
/*
*
*/
document.addEventListener("DOMContentLoaded", () => {
    createLoginPlatformChart()
    createLoginBrowserChart()
    createUsersCountChart()
})

