
    <footer>
        <!-- <div class="footer-conteiner">
            <div class="footer-about">
                <h2>SOBRE NOSOTROS</h2>
                <p>Este proyecto fue realizado por estudiantes de 	Quinto semestre de la carrera de ingeniera de sistemas de la Universidad Católica Boliviana regional “Tarija”, este proyecto es una automatización de unidades vistas en la materia de Investigación Operativa II utilizando tecnologías web y trabajando en base de  metodologías ágiles usando partes de SCRUM</p>
            </div>

            <div class="footer-follow">
                <div class="footer-follow-user">
                    <p>Pedro Anze (UI/UX & Frontend)</p>
                    <div class="icons">
                        <a href="https://www.linkedin.com/in/pedro-gustavo-anze-condori-65786a163/" class="fa fa-linkedin"></a>
                        <a href="https://github.com/anze28" class="fa fa-github"></a>
                        <a href="https://www.facebook.com/profile.php?id=100014069383690" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/pedroanze_/" class="fa fa-instagram"></a>
                       
                        
                    </div>

                    <p>Mateo Zubieta (Frontend & Logic)</p>
                    <div class="icons">
                        <a href="https://github.com/MattZub13" class="fa fa-github"></a>
                        <a href="https://www.facebook.com/profile.php?id=100004400895195" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/mateo_zubieta13/" class="fa fa-instagram"></a>
                        
                    </div>
                    <p>Gabriel Mamani (Frontend & Testing)</p>
                    <div class="icons">
                        <a href="https://www.facebook.com/gabo.mamani.5" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/gabo_mf0/" class="fa fa-instagram"></a>
                    </div>

                </div>
            </div>
        </div> -->
        <div class="footer-copy">
            <small>
                &copy; 2022 <b>Parroquia Virgen de Fatima</b> -website hecha por estudiantes de UCB Tarija
            </small>
        </div>
    </footer>


<style>
    /* estilos footer */

footer{
    margin-top: 40px;
    width: 100%;
    background-color: black;
}

.footer-conteiner{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    display:grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap:50px;
    padding: 45px 0px;
}

.footer-about{
    margin-left: 40px;
}
.footer-about h2{
    color: #fff;
    margin-bottom: 25px;
    font-size: 20px;
}

.footer-about p{
    color: #efefef;
    margin-bottom: 10px;
}

.footer-follow-user{
    display:flex;
    text-align: center;
    align-items: center;
    flex-direction: column;
}

.footer-follow-user a{ 
      
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: #fff;
    margin-right: 10px;

    background-color: #0d2033;
    text-align: center;
    transition: all 300ms ease;
}

.footer-follow-user p{
    font-size: 16px;
    color: var(--white);
    margin-top: 10px;
}

.footer-follow-user a:hover{
    color: var(--red);
}

.footer-copy{
    background-color: #382C1E;
    padding: 15px 10px;
    text-align: center;
    color: var(--white);
}
.footer-copy small{
    font-size: 15px;
}

@media (max-width:640px) {
    .menu{
        display: block;
        
    }
    .navbar-left{
        display: none;
    }
    .conteiner-titulo{
        display: block;
    }
    .cards-conteiner {
        display: grid;
        grid-template-columns: repeat(auto-fill,310px);
        
        
    }
    .bottom-info {
        margin-left:0 ;
        margin-right: 0;
        width: 300px;

    }

    .bottom-info:hover{
        width: 300px;
        height: 151px;
    }
    .footer-conteiner{
        width: 90%;
        grid-template-columns: repeat(1, 1fr);
        grid-gap:30px;
        padding: 35px 0px;
    }


}
</style>