document.addEventListener("DOMContentLoaded", function () {
const loginTab = document.getElementById("login-tab");

const registerTab = document.getElementById("register-tab");
const loginForm = document.getElementById("login-form");
const registerForm = document.getElementById("register-form");
loginTab.addEventListener("click", function () {
loginTab.classList.add("tab-active");
registerTab.classList.remove("tab-active");
registerTab.classList.add("text-white/60");
loginTab.classList.remove("text-white/60");
loginForm.classList.add("active");
registerForm.classList.remove("active");
});
registerTab.addEventListener("click", function () {
registerTab.classList.add("tab-active");
loginTab.classList.remove("tab-active");
loginTab.classList.add("text-white/60");
registerTab.classList.remove("text-white/60");
registerForm.classList.add("active");
loginForm.classList.remove("active");
});
});
document.addEventListener("DOMContentLoaded", function () {
const googleBtn = document.getElementById("google-login-btn");
const googleDialog = document.getElementById("google-dialog");
const closeGoogleDialog =
document.getElementById("close-google-dialog");
const cancelGoogleLogin =
document.getElementById("cancel-google-login");
const confirmGoogleLogin =
document.getElementById("confirm-google-login");
function showGoogleDialog() {
googleDialog.classList.remove("hidden");
document.body.style.overflow = "hidden";
}
function hideGoogleDialog() {
googleDialog.classList.add("hidden");

document.body.style.overflow = "";
}
function handleGoogleLogin() {
hideGoogleDialog();
const loadingDialog = document.createElement("div");
loadingDialog.className =
"fixed inset-0 bg-black/50 flex items-center justify-center z-50";
loadingDialog.innerHTML = `
<div class="bg-[#1e1e1e] rounded-lg p-6 flex items-center gap-3">
<div class="w-6 h-6 border-2 border-primary border-t-transparent
rounded-full animate-spin"></div>
<span>Conectando ao Google...</span>
</div>
`;
document.body.appendChild(loadingDialog);
setTimeout(() => {
document.body.removeChild(loadingDialog);
const successDialog = document.createElement("div");
successDialog.className =
"fixed inset-0 bg-black/50 flex items-center justify-center z-50";
successDialog.innerHTML = `
<div class="bg-[#1e1e1e] rounded-lg p-6 text-center">
<div class="w-12 h-12 rounded-full bg-primary/20 flex items-center
justify-center mx-auto mb-4">
<i class="ri-check-line text-2xl text-primary"></i>
</div>
<h3 class="text-lg font-semibold mb-2">Conectado com sucesso!</h3>
<p class="text-white/60 mb-4">Redirecionando para configuração do
perfil...</p>
</div>
`;
document.body.appendChild(successDialog);
setTimeout(() => {
document.body.removeChild(successDialog);
window.location.href = "/profile-setup";
}, 2000);
}, 2000);

}
googleBtn.addEventListener("click", showGoogleDialog);
closeGoogleDialog.addEventListener("click", hideGoogleDialog);
cancelGoogleLogin.addEventListener("click", hideGoogleDialog);
confirmGoogleLogin.addEventListener("click", handleGoogleLogin);
const facebookBtn = document.getElementById("facebook-login-btn");
const facebookDialog = document.getElementById("facebook-dialog");
const closeFacebookDialog =
document.getElementById("close-facebook-dialog");
const cancelFacebookLogin =
document.getElementById("cancel-facebook-login");
const confirmFacebookLogin = document.getElementById(
"confirm-facebook-login",
);
function showFacebookDialog() {
facebookDialog.classList.remove("hidden");
document.body.style.overflow = "hidden";
}
function hideFacebookDialog() {
facebookDialog.classList.add("hidden");
document.body.style.overflow = "";
}
function handleFacebookLogin() {
hideFacebookDialog();
const loadingDialog = document.createElement("div");
loadingDialog.className =
"fixed inset-0 bg-black/50 flex items-center justify-center z-50";
loadingDialog.innerHTML = `
<div class="bg-[#1e1e1e] rounded-lg p-6 flex items-center gap-3">
<div class="w-6 h-6 border-2 border-primary border-t-transparent
rounded-full animate-spin"></div>
<span>Conectando ao Facebook...</span>
</div>
`;
document.body.appendChild(loadingDialog);

setTimeout(() => {
document.body.removeChild(loadingDialog);
const successDialog = document.createElement("div");
successDialog.className =
"fixed inset-0 bg-black/50 flex items-center justify-center z-50";
successDialog.innerHTML = `
<div class="bg-[#1e1e1e] rounded-lg p-6 text-center">
<div class="w-12 h-12 rounded-full bg-primary/20 flex items-center
justify-center mx-auto mb-4">
<i class="ri-check-line text-2xl text-primary"></i>
</div>
<h3 class="text-lg font-semibold mb-2">Conectado com sucesso!</h3>
<p class="text-white/60 mb-4">Redirecionando para configuração do
perfil...</p>
</div>
`;
document.body.appendChild(successDialog);
setTimeout(() => {
document.body.removeChild(successDialog);
window.location.href = "/profile-setup";
}, 2000);
}, 2000);
}
facebookBtn.addEventListener("click", showFacebookDialog);
closeFacebookDialog.addEventListener("click", hideFacebookDialog);
cancelFacebookLogin.addEventListener("click", hideFacebookDialog);
confirmFacebookLogin.addEventListener("click", handleFacebookLogin);
const appleBtn = document.getElementById("apple-login-btn");
const appleDialog = document.getElementById("apple-dialog");
const closeAppleDialog = document.getElementById("close-apple-dialog");
const cancelAppleLogin = document.getElementById("cancel-apple-login");
const confirmAppleLogin = document.getElementById("confirm-apple-login");
function showAppleDialog() {
appleDialog.classList.remove("hidden");
document.body.style.overflow = "hidden";

}
function hideAppleDialog() {
appleDialog.classList.add("hidden");
document.body.style.overflow = "";
}
function handleAppleLogin() {
hideAppleDialog();
const loadingDialog = document.createElement("div");
loadingDialog.className =
"fixed inset-0 bg-black/50 flex items-center justify-center z-50";
loadingDialog.innerHTML = `
<div class="bg-[#1e1e1e] rounded-lg p-6 flex items-center gap-3">
<div class="w-6 h-6 border-2 border-primary border-t-transparent
rounded-full animate-spin"></div>
<span>Conectando à Apple...</span>
</div>
`;
document.body.appendChild(loadingDialog);
setTimeout(() => {
document.body.removeChild(loadingDialog);
const successDialog = document.createElement("div");
successDialog.className =
"fixed inset-0 bg-black/50 flex items-center justify-center z-50";
successDialog.innerHTML = `
<div class="bg-[#1e1e1e] rounded-lg p-6 text-center">
<div class="w-12 h-12 rounded-full bg-primary/20 flex items-center
justify-center mx-auto mb-4">
<i class="ri-check-line text-2xl text-primary"></i>
</div>
<h3 class="text-lg font-semibold mb-2">Conectado com sucesso!</h3>
<p class="text-white/60 mb-4">Redirecionando para configuração do
perfil...</p>
</div>
`;
document.body.appendChild(successDialog);
setTimeout(() => {

document.body.removeChild(successDialog);
window.location.href = "/profile-setup";
}, 2000);
}, 2000);
}
appleBtn.addEventListener("click", showAppleDialog);
closeAppleDialog.addEventListener("click", hideAppleDialog);
cancelAppleLogin.addEventListener("click", hideAppleDialog);
confirmAppleLogin.addEventListener("click", handleAppleLogin);
});
function togglePassword(inputId) {
const input = document.getElementById(inputId);
const icon = input.nextElementSibling.querySelector("i");
if (input.type === "password") {
input.type = "text";
icon.classList.remove("ri-eye-line");
icon.classList.add("ri-eye-off-line");
} else {
input.type = "password";
icon.classList.remove("ri-eye-off-line");
icon.classList.add("ri-eye-line");
}
}
function checkPasswordStrength() {
const password = document.getElementById("register-password").value;
const strengthBar = document.getElementById("password-strength-bar");
const strengthText = document.getElementById("password-strength-text");
let strength = 0;
if (password.length >= 8) {
strength += 1;
}
if (password.match(/[a-z]/) && password.match(/[A-Z]/)) {
strength += 1;
}
if (password.match(/[0-9]/)) {
strength += 1;

}
if (password.match(/[^a-zA-Z0-9]/)) {
strength += 1;
}
strengthBar.className = "password-strength-bar";
switch (strength) {
case 0:
strengthBar.style.width = "0%";
strengthText.textContent = "Use 8+ caracteres com letras, números e símbolos";
strengthText.style.color = "rgba(255, 255, 255, 0.6)";
break;
case 1:
strengthBar.classList.add("strength-weak");
strengthText.textContent = "Fraca";
strengthText.style.color = "#f44336";
break;
case 2:
strengthBar.classList.add("strength-medium");
strengthText.textContent = "Média";
strengthText.style.color = "#ff9800";
break;
case 3:
strengthBar.classList.add("strength-good");
strengthText.textContent = "Boa";
strengthText.style.color = "#2196f3";
break;
case 4:
strengthBar.classList.add("strength-strong");
strengthText.textContent = "Forte";
strengthText.style.color = "#4caf50";
break;
}
}