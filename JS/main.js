    /* Navbar shrink on scroll*/
    window.onscroll = function () {
        let navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('small');
        } else {
            navbar.classList.remove('small');
        }
    };

    // Smooth scroll to sections
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            document.querySelector(targetId).scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            const navbarHeight = document.querySelector('.navbar').offsetHeight; // Get the navbar height

            window.scrollTo({
                top: targetElement.offsetTop - navbarHeight,
                behavior: 'smooth' // Smooth scroll behavior
            });
        });
    });