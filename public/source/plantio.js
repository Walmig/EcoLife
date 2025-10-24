// Mini-banco de dados de exemplo: estado + solo => plantas
const plantDatabase = {
    "São Paulo": {
        "Arenoso": ["Tomate", "Cenoura", "Abobrinha", "Beterraba", "Melancia"],
        "Argiloso": ["Alface", "Espinafre", "Couve", "Rúcula", "Brócolis"],
        "Humoso (rico em matéria orgânica)": ["Morango", "Manjericão", "Pimentão", "Salsa", "Alho-poró"],
        "Misto": ["Rúcula", "Cebolinha", "Pepino", "Abóbora", "Alho"]
    },
    "Minas Gerais": {
        "Arenoso": ["Batata-doce", "Quiabo", "Melancia", "Tomate", "Cenoura"],
        "Argiloso": ["Cenoura", "Repolho", "Alface", "Brócolis", "Beterraba"],
        "Humoso (rico em matéria orgânica)": ["Tomate", "Morango", "Salsa", "Pimentão", "Coentro"],
        "Misto": ["Abóbora", "Rúcula", "Pepino", "Cebolinha", "Pimentão"]
    },
    "Rio de Janeiro": {
        "Arenoso": ["Tomate", "Cenoura", "Pimentão", "Beterraba", "Rúcula"],
        "Argiloso": ["Alface", "Espinafre", "Couve", "Brócolis", "Cebola"],
        "Humoso (rico em matéria orgânica)": ["Morango", "Manjericão", "Abobrinha", "Salsa", "Pimentão"],
        "Misto": ["Rúcula", "Cebolinha", "Pepino", "Alho-poró", "Abóbora"]
    },
    "Bahia": {
        "Arenoso": ["Melancia", "Abóbora", "Quiabo", "Cenoura", "Batata-doce"],
        "Argiloso": ["Alface", "Cenoura", "Couve", "Rúcula", "Salsa"],
        "Humoso (rico em matéria orgânica)": ["Tomate", "Manjericão", "Morango", "Pimentão", "Cebolinha"],
        "Misto": ["Rúcula", "Pepino", "Cebolinha", "Alho", "Abóbora"]
    },
    "Rio Grande do Sul": {
        "Arenoso": ["Batata", "Cenoura", "Abobrinha", "Beterraba", "Rúcula"],
        "Argiloso": ["Alface", "Espinafre", "Couve", "Brócolis", "Alho-poró"],
        "Humoso (rico em matéria orgânica)": ["Tomate", "Morango", "Manjericão", "Pimentão", "Alho"],
        "Misto": ["Rúcula", "Cebolinha", "Pepino", "Alho-poró", "Salsa"]
    }
};

const estadoSelect = document.querySelectorAll("#como-funciona select")[0];
const soloSelect = document.querySelectorAll("#como-funciona select")[1];
const resultContainer = document.querySelector("#como-funciona .region-selector div.flex.items-center div ul");

// Botão buscar
const searchButton = document.querySelector("#como-funciona button");

searchButton.addEventListener("click", () => {
    const estado = estadoSelect.value;
    const solo = soloSelect.value;

    if (estado === "Selecione seu estado" || solo === "Selecione seu tipo de solo") {
        alert("Por favor, selecione estado e tipo de solo.");
        return;
    }

    const plants = plantDatabase[estado][solo] || [];

    // Limpa a lista anterior
    resultContainer.innerHTML = "";

    plants.forEach(plant => {
        const li = document.createElement("li");
        li.className = "flex items-center";
        li.innerHTML = <i class="fas fa-check-circle text-green-500 mr-2"></i>{plant};
        resultContainer.appendChild(li);
    });
});

// Rolagem suave para "Como funciona"
document.getElementById("btn-comecar").addEventListener("click", function () {
    document.querySelector("#como-funciona").scrollIntoView({ behavior: "smooth" });
});

// Rolagem suave para o botão "Comece Agora"
document.getElementById("btn-comecar").addEventListener("click", function () {
    document.querySelector("#como-funciona").scrollIntoView({ behavior: "smooth" });
});

// Rolagem suave para os links do menu
document.querySelectorAll('header nav a[href^="#"]').forEach(link => {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({ behavior: "smooth" });
        }
    });
});