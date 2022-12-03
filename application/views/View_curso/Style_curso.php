<style>
    :root {
    --claro:#E6D7BD;
    --oscuro:#382C1E;
    --white: #FFFFFF;

}
*{
    margin: 0px;
    padding: 0;
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: 'Arenas movedizas', sans-serif;
    
}
p{
    margin:0;
    color: var(--oscuro);
}
h4{
    font-weight:bold;
    color: var(--oscuro);

}

.main-container{
    margin-top:100px;
}


/* buscador */

.container-buscador{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom:50px;
}

.search{
  display: flex;
  width: 80%;
}
.search-icon{
    width: 1px;
    height: 1px;
    color:while;
}
.input-buscador{
  width: 100%;
  border: 4px solid var(--claro);
  border-right: none;
  padding:  10px ;
  height: 60px;
  font-size: 17px;
  border-radius:10px 0 0 10px;
  outline: none;
}

.btn-buscador{
  width: 70px;
  height: 60px;
  border: 4px solid var(--claro);
  background: var(--claro);
  text-align: center;
  color: #fff;
  border-radius: 0 10px 10px 0;
  cursor: pointer;
}
.btn-buscador:hover{
  color: var(--oscuro);
}
.boton-crear{
    height: 60px;
    width: 240px;
    background-color: var(--claro);
    border: 0;
    font-size: 25px;
    color: white;
    border-radius: 5px ;
    padding: 0 15px;
    margin-left: 15px;
    border: 1px solid var(--claro);
}
.boton-crear:hover{

    border: 1px solid var(--oscuro);
    box-shadow: 0 1px black;
    color: (--claro);
    background-color: var(--oscuro);
}

/* containers */
.container-cursos{
    margin: 20px 50px 20px 50px;
    display: grid;
    grid-template-columns: repeat(auto-fill,400px);
    gap: 36px;
    place-content: center;
    
}
.hover:hover{
    cursor: pointer;
}
.container-evento-boton{
    /* cursor: pointer; */
    padding:10px;
    border: 5px solid var(--claro);
    border-radius:10px;
}
.container-primary{
    display: grid;
    grid-template-columns: auto 1fr ;
    
    margin-top:10px;
}
.container-fecha{
    padding-right:180px;
}
.container-secundary{
    display: flex;
    align-items: flex-end;
    flex-direction: column;
    justify-content: space-between;
  }
  .eliminar-icon{
    margin:0 15px 15px;
    position:static;
    width: 1px;
    height: 1px;
    color:var(--oscuro);
   }
    .eliminar-icon:hover{
        color:red;
    }
    .texto-visita{
        font-weight:bold;
    }
</style>