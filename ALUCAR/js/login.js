function verifica() {
  const cpfInput = document.getElementById("cpf1");
  const cpfValue = cpfInput.value;
  const url = new URL("./verificar.php", window.location.origin);
  url.searchParams.append("CPF", cpfValue);
  window.location.href = url.href;
}
