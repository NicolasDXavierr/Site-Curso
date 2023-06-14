<style>
@import url("https://fonts.googleapis.com/css2?family=Crimson+Pro");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('img/bg.jpg') no-repeat;
    background-size: cover;
    background-position: center;
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
}

.logo {
    font-size: 2em;
    color: #fff;
    user-select: none;
}

.navbar {
    min-height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 34px;
}

.nav-menu {
    display: flex;
    align-items: center;
    gap: 2px;
}

.navbar .btnLogin-popup {
    display: flex;
    width: 130px;
    height: 40px;
    text-decoration: none;
    align-items: center;
    justify-content: center;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    transition: .5s;
}

.navbar .btnLogin-popup:hover {
    background: #fff;
    color: #162938;
}

.panel {
    position: absolute;
    width: 90%;
    height: 200px; /* Ajuste a altura conforme necessário */
    margin-top: 10px; /* Adicione margem superior se desejar */
    top: 180px;
    left: 5%; /* Centraliza horizontalmente o painel */
    display: flex;
    align-items: center; /* Centraliza verticalmente o conteúdo */
    justify-content: center; /* Centraliza horizontalmente o conteúdo */
}

.panel h1 {
    position: absolute;
    top: -100px;
    font-family: sans-serif;
    font-size: 2em;
    color: #fff;
    text-align: center;
}

footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: #162938;
    color: #fff;
    padding: 10px;
    text-align: center;
}   

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 20px;
}

.social-media a {
    color: #fff;
    font-size: 24px;
    margin-right: 10px;
    text-decoration: none;
}

.contact-info {
    text-align: center;
    
}

.contact-info p {
    margin-bottom: 5px;
}

.footer-bottom {
    margin-top: 20px;
}

.footer-bottom p {
    font-size: 14px;
    opacity: 0.7;
}

@media(max-width:900px) {


.navbar .btnLogin-popup{
    display: block;
    border: none;
}
}

</style>