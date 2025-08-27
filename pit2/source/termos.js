   // Back to top button
        const backToTopBtn = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove('opacity-0', 'invisible');
                backToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                backToTopBtn.classList.remove('opacity-100', 'visible');
                backToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Print button
        document.getElementById('printBtn').addEventListener('click', () => {
            window.print();
        });

        // Accept terms functionality
        const acceptCheckbox = document.getElementById('acceptCheckbox');
        const finalAcceptBtn = document.getElementById('finalAcceptBtn');
        const acceptModal = document.getElementById('acceptModal');
        
        acceptCheckbox.addEventListener('change', () => {
            finalAcceptBtn.disabled = !acceptCheckbox.checked;
        });
        
        finalAcceptBtn.addEventListener('click', () => {
            acceptModal.classList.remove('hidden');
        });
        
        document.getElementById('closeModal').addEventListener('click', () => {
            acceptModal.classList.add('hidden');
        });
        
        document.getElementById('continueBtn').addEventListener('click', () => {
            acceptModal.classList.add('hidden');
            // Redirecionar para a página principal ou próxima etapa
            // window.location.href = '/';
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Highlight current section in TOC
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const scrollPosition = window.scrollY + 150;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    document.querySelector(`a[href="#${sectionId}"]`).classList.add('font-bold', 'text-blue-800');
                } else {
                    document.querySelector(`a[href="#${sectionId}"]`).classList.remove('font-bold', 'text-blue-800');
                }
            });
        });