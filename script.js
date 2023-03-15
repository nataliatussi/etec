  const formCadastro = document.getElementById('form-cadastro');

  formCadastro.addEventListener('submit', (event) => {
    event.preventDefault();
    
    const nome = document.getElementById('input-nome').value;
    const email = document.getElementById('input-email').value;
    const endereco = document.getElementById('input-endereco').value;
    const cpfCnpj = document.getElementById('input-cpf-cnpj').value;
    const senha = document.getElementById


    const form = document.querySelector('form');
  const table = document.querySelector('table tbody');

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const produto = document.getElementById('produto').value;
    const quantidade = document.getElementById('quantidade').value;
    const preco = document.getElementById('preco').value;
    if (!produto || !quantidade || !preco) {
      alert('Por favor, preencha todos os campos.');
      return;
    }
    const newRow = table.insertRow();
    const produto


    