function verifica(recId){
    if(confirm("Tem certeza que deseja excluir esta luta?")){
        window.location="excluirLuta.php?idExc="+recId;
    }
}