function verifica(recId){
    if(confirm("Tem certeza que deseja excluir esta luta?")){
        window.location="excluirLuta.php?idExc="+recId;
    }
}

function verificaLutador(recCpf){
    if(confirm("Tem certeza que deseja excluir este lutador?")){
        window.location="excluirLutador.php?cpfExc="+recCpf;
    }
}