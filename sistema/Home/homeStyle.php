<style>
@import url("https://fonts.googleapis.com/css2?family=Crimson+Pro");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: .2s linear  ;
    font-family: "Poppins",sans-serif;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('../../img/bg.jpg') no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

 header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 5px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #162938;
    z-index: 99;
    float:center;
 }

.logo {
    font-size: 2em;
    color: #fff;
    user-select: none;
}

li {
    list-style: none;
}

.navbar{
    min-height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 34px;
}


.nav-menu{
    display: flex;
    align-items: center;
    gap: 2px;
}

.hamburguer{
    display: none;
    cursor: pointer;
}

.bar{
    display: block;
    width: 28px;
    height: 3px;
    border-radius: 2px;
    margin: 5px auto;
    background: #fff;
    transition: all .3s ease-in-out;
}

.navbar a {
    position: relative;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
}
.navbar a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .5s;
}

.navbar a:hover::after {
    transform-origin: left;
    transform: scaleX(1);
}

.navbar.active {
        transform: translateX(0);
}

.wrapper{
    display: flex;
    width: 100%;
    position: relative;
    top: 100px;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 10px;
}

.container{ 
    display: grid;
    flex-wrap: wrap;
    gap: 20px;
    width: 400px;
    justify-content: center;
    position: relative;
    top: 63px;
    grid-template-columns: 350px repeat(auto-fit, minmax(350px, 1fr)) 350px
}

h1{
    position: relative;
    top: 20px; 
    color: #fff;
    font-size: 40px;
    padding-bottom: 15px;
    text-shadow: 0 15px 10px rgba(0, 0, 0, .2);
}

.box{
    padding: 10px;
    text-align: center;
    border-radius: 12px;
    background: #fff;
    width: 350px;
    height: 230px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, .2);
}

.box img{
    height: 50px;
}

.box h3{
    color: #162938;
    padding: 10px 0;
    font-size: 20px;
}

.box p {
    position: relative;
    top: 10px;
    color: #162938;
    font-size: 15px;
}

.btn{
    position: relative;
    top: 30px;
    color: #fff;
    border: none;
    outline: none;
    font-size: 18px;
    margin-top: 10px;
    padding: 8px 20px;
    background: #162938;
    cursor: pointer;
    border-radius: 12px;
    display: inline-block;
    text-decoration: none;
}

.btn:hover{
    letter-spacing: 1px;
}

.box:hover{
    transform: scale(1.03);
    box-shadow: 0 10px 15px rgba(0, 0, 0, .3);    
}

.popup{
    display: none;
    position: fixed;
    justify-items: center;
    width: 70%;
    height: 600px;
    top: 100px;
    background: #fff;
    border: 2px solid #162938;
    border-radius: 20px; 
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    justify-content: center;
    align-items: center;
    overflow: hidden; 
}

.open-popup{
    display: flex;
}

.popup .info-cursos{
    width: 100%;
    padding: 40px;
}

.popup .icon-close{
    position: absolute;
    top: 0;
    right: 0;
    width: 45px;
    height: 45px;
    background: #162938;
    font-size: 2em;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom-left-radius: 20px;
    cursor: pointer;
    z-index: 1;
}

.info-cursos h2{
    position: absolute;
    font-size: 1.2em;
    top: 10%;
    left: 50%;
    color: #162938;
    text-align: center;
}

p.info{
    font-weight: bold;
}

.info{
    position: relative;
    width: 100%;
    height: 50px;
    left: 3px;
    margin: 5px 0;
}

.btn-sub{
    position: absolute;
    bottom: 80px;
    left: 25%;
    width: 50%;
    height: 45px;
    background: #162938;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500; 
}

.btn-sub:hover{
    letter-spacing: 1px;
}

.subscribed{
    width: 400px;
    height: 300px;
    background: #162938;
    border-radius: 12px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%,-50%) scale(0.1);
    text-align: center;
    padding: 0 30px;
    color: #fff;
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
}

.open-subpopup{
    position: fixed
    ;
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
}

.subscribed .img{
    width: 100px;
    margin-top: -50px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.subscribed .h2{
    font-size: 38px;
    font-weight: 500;
    margin-top: 30px;
}

.subscribed .msg{
    position: relative;
    top: 45px;
}

.subscribed .button{
    position: relative;
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    top: 60px;
    background: #6fd649;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    
}

@media (max-width: 1080px) {

    .popup{
    width: 50%;
    height: 500px;
}
    
    .box{
            width: 230px;
            height: 220px;
        }

    .container{
        grid-template-columns:repeat(auto-fill, minmax(250px, 1fr)) 250px;
        padding: 50px;
        top: 20px;
    }

    .popup{
        height: 450px;
    }

}

@media(max-width:900px) {

.hamburguer{
    display: block;
}

.hamburguer.active .bar:nth-child(2){
    opacity: 0;
}    

.hamburguer.active .bar:nth-child(1){
    transform: translateY(8px) rotate(45deg);
}

.hamburguer.active .bar:nth-child(3){
    transform: translateY(-8px) rotate(-45deg);
}

.nav-menu{
    position: fixed;
    left: -100%;
    top: 70px;
    gap: 0;
    border-radius: 0 0 20px 20px;
    background-color: #162938;
    text-align: center;
    flex-direction: column;
    width: 100%;
    transition: .3s;
}

.nav-item{
    margin: 16px 0;
}

.nav-menu.active{
    left: 0;
}

h1{
        display: none;
    }
}
</style>