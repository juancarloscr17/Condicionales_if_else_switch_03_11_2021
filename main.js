addEventListener("DOMContentLoaded",async()=>{
    let config = {
        method:"POST",
        body: JSON.stringify({
            numero: 2
        })
    };
    let petecion = await fetch("https://juancarloscr17.000webhostapp.com/Condicionales_if_else_switch_03_11_2021/api.php",config);
    let json = await petecion.text();
    alert(json);
    console.log(json);

});