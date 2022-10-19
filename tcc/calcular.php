

    <input type="hidden" id="valor" name="valor" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" id="valor1" name="valor1" value="<?php echo $_GET['data']; ?>">



<script type="text/javascript">

    var input = document.querySelector("#valor");
    var date = document.querySelector("#valor1");

    var id = input.value;
    var data = date.value;

    let text = "Deseja calcular a data da colheita?";
    
    if (confirm(text) == true) {
        location.href = "../controller/cadastro.controller.php?acaoCad=inserirData&id="+id+"&data="+data;        

    } else {
        location.href = "index.php";

    }


</script>
