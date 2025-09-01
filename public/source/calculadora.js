document.getElementById('bmiForm').addEventListener('submit', function(e) {
e.preventDefault();
const height = parseFloat(document.getElementById('height').value) / 100;
const weight = parseFloat(document.getElementById('weight').value);
const bmi = (weight / (height * height)).toFixed(1);
let category, iconClass, message, tip;
if (bmi < 18.5) {
category = "Abaixo do peso";
iconClass = "fas fa-utensils text-blue-500";
message = "Seu IMC indica que você está abaixo do peso ideal. Considere aumentar sua ingestão calórica com alimentos nutritivos.";
tip = "Inclua alimentos ricos em nutrientes como abacate, nozes e grãos integrais para ganho de peso saudável.";
} else if (bmi >= 18.5 && bmi <= 24.9) {
category = "Peso normal";
iconClass = "fas fa-heart text-green-500";
message = "Parabéns! Seu IMC está dentro da faixa considerada saudável. Mantenha seus hábitos alimentares equilibrados.";
tip = "Continue com uma dieta variada incluindo frutas, vegetais,proteínas magras e grãos integrais.";
} else if (bmi >= 25 && bmi <= 29.9) {
category = "Sobrepeso";
iconClass = "fas fa-exclamation-triangle text-yellow-500";
message = "Seu IMC indica sobrepeso. Pequenas mudanças na dieta eatividade física podem ajudar a alcançar um peso mais saudável.";
tip = "Reduza alimentos processados e bebidas açucaradas. Aumente oconsumo de vegetais e proteínas magras.";
} else {
category = "Obesidade";
iconClass = "fas fa-exclamation-circle text-red-500";
message = "Seu IMC indica obesidade. Recomendamos consultar um nutricionista para orientação personalizada sobre alimentação saudável.";
tip = "Foque em porções controladas e alimentos integrais. Considere acompanhamento profissional para um plano alimentar personalizado.";
}

document.getElementById('bmiValue').textContent = bmi;
document.getElementById('bmiCategory').textContent = category;
const iconElement = document.getElementById('bmiIcon');
iconElement.className = iconClass;
document.getElementById('bmiMessage').textContent = message;
document.getElementById('nutritionTip').textContent = tip;
const resultBox = document.getElementById('resultBox');
resultBox.classList.add('show');
resultBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
});