document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.appeltaart');

    stars.forEach(star => {
        star.addEventListener('click', (e) => {
            const rating = e.target.getAttribute('data-value');
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add('checked');

                } else {
                    s.classList.remove('checked');
                }
            });
            console.log(`Appeltaarten selected: ${rating}`);
            var inputVeld = document.getElementById("appeltaarten");
            inputVeld.value = rating;
        });

    });
});

document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.coffee');

    stars.forEach(star => {
        star.addEventListener('click', (e) => {
            const rating = e.target.getAttribute('data-value');
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add('checked');
                } else {
                    s.classList.remove('checked');
                }
            });
            console.log(`Koffies selected: ${rating}`);
            var inputVeld = document.getElementById("coffee");
            inputVeld.value = rating;
        });
    });
});


