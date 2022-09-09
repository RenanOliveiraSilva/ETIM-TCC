

    <input type="hidden" id="valor" name="valor" value="<?php echo $_GET['id']; ?>">



<script type="text/javascript">

    var input = document.querySelector("#valor");
    
    var id = input.value;

    let text = "Confirma a Exclusão?";  
    
    if (confirm(text) == true) {
        location.href = "../controller/cadastro.controller.php?acaoCad=excluir&id="+id;        

    } else {
        location.href = "index.php?link=3&acaoCad=recuperar";


    }


</script>
