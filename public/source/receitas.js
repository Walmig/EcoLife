// Tab filtering functionality
const tabButtons = document.querySelectorAll('.tab-btn');
const recipeCards = document.querySelectorAll('.recipe-card');
tabButtons.forEach(button => {
button.addEventListener('click', () => {

// Update active tab
tabButtons.forEach(btn => btn.classList.remove('active-tab'));
button.classList.add('active-tab');
const category = button.dataset.category;
// Filter recipes
recipeCards.forEach(card => {
if (category === 'all' || card.dataset.categories.includes(category)) {
card.style.display = 'block';
} else {
card.style.display = 'none';
}
});
});
});
// Simulate recipe view functionality
document.querySelectorAll('.recipe-card button').forEach(button => {
button.addEventListener('click', (e) => {
e.preventDefault();
const recipeTitle =
button.closest('.recipe-card').querySelector('h3').textContent;
alert(`Você selecionou a receita: ${recipeTitle}\n\nEsta funcionalidade
pode ser expandida para mostrar a receita completa em uma nova página ou
modal.`);
});
});