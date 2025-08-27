// Simple animation for progress rings
        document.addEventListener('DOMContentLoaded', function() {
            const circles = document.querySelectorAll('.progress-ring__circle');
            circles.forEach(circle => {
                const percentage = parseInt(circle.parentElement.querySelector('span').textContent);
                const circumference = 2 * Math.PI * 15.9155;
                const offset = circumference - (percentage / 100) * circumference;
                circle.style.strokeDashoffset = offset;
            });
            
            // Simulate loading
            setTimeout(() => {
                document.body.classList.remove('opacity-0');
            }, 100);
        });