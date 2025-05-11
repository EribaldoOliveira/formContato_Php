// Função para atualizar a hora
function atualizarRelogio() {
    const now = new Date();

    // Formatar data e hora
    const dia = String(now.getDate()).padStart(2, '0');
    const mes = String(now.getMonth() + 1).padStart(2, '0'); // Meses começam de 0
    const ano = now.getFullYear();
    const horas = String(now.getHours()).padStart(2, '0');
    const minutos = String(now.getMinutes()).padStart(2, '0');
    const segundos = String(now.getSeconds()).padStart(2, '0');

    // Exibir a data e hora no formato 'dd/mm/yyyy HH:MM:SS'
    const dataHoraAtual = `${dia}/${mes}/${ano} ${horas}:${minutos}:${segundos}`;

    // Atualizar o conteúdo do elemento com id 'data-hora-atual'
    document.getElementById("data-hora-atual").innerHTML = `Data e Hora atual: ${dataHoraAtual}`;
}

// Atualiza a hora a cada 1 segundo (1000 milissegundos)
setInterval(atualizarRelogio, 1000);
