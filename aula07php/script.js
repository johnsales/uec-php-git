function verifica(recCpf){
    if(confirm("Tem certeza que deseja excluir este cadastro?")){
        window.location="excluirLutador.php?cpfExc="+recCpf;
    }
}