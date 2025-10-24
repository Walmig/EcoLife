 // Simple JavaScript for mobile menu toggle (would be expanded in a real implementation)
        document.querySelector('.fa-bars').addEventListener('click', function() {
            alert('Menu mobile seria aberto aqui em uma implementação completa');
        });

        // Category filter functionality
        document.querySelectorAll('.category-pill').forEach(pill => {
            pill.addEventListener('click', function() {
                alert('Filtro por categoria seria implementado aqui: ' + this.textContent.trim());
            });
        });