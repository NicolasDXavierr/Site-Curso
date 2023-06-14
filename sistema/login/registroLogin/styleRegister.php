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
    background: url('../../../img/bg.jpg') no-repeat;
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

.navbar .btnLogin-popup {
    width: 130px;
    height: 40px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    margin-left: 40px;
    transition: .5s;
}

.navbar .btnLogin-popup:hover {
    background: #fff;
    color: #162938;

}

.navbar.active {
        transform: translateX(0);
}

.success{
  position: fixed;
  width: 390px;
  top: 100px;
  margin: 0 auto;
  padding: 20px;
  border: .2px solid #ccc;
  border-radius: 12px;
  font-weight: bold;
  color: #fff;
  text-align: center;
  justify-content: center;
  background-color: #03C04A;
}

.info{
  position: fixed;
  width: 390px;
  height: 97px;
  top: 100px;
  margin: 0 auto;
  padding: 20px;
  border: .2px solid #ccc;
  border-radius: 12px;
  font-weight: bold;
  color: #fff;
  display: flex;
  text-align: center;
  align-items: center;
  justify-content: center;
  background-color: #008081;
}

.wrapper {
    position: relative;
    width: 380px;
    height: 430px;
    top: 70px;
    background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0,0,0,.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

.wrapper .formbox { 
    width: 100%;
    padding: 40px;
}

.wrapper .form-box.login {
    transition: transform .18s ease;
    transform: translateX(0);
}

.wrapper.active .form-box.login {
    transition: none;
    transform: translateX(-400px);
}

.wrapper .form-box.register {
    position: absolute;
    transition: none;
}

.wrapper.active .form-box.register {
    transition: transform .18s ease;
    transform: translateX(0);
}

.wrapper .icon-close {
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
.form-box h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}

.input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid white;
    margin: 30px 0;
}

.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    font-weight: 500;
    pointer-events: none;
    transition: .5s;
}

.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color:#fff;
    font-weight: 600;
    padding: 0 35px 0 5px;
}

.input-box .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: #fff;
    line-height: 57px;
}

.remember-forgot {
    font-size: .9em;
    color: #fff;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;
}

.remember-forgot label input {
    accent-color: #fff;
    margin-right: 3px;
}

.remember-forgot a {
    color: #fff;
    text-decoration: none;
}

.remember-forgot a:hover {
    text-decoration: underline;
}

.btn {
    display: flex;
    width: 100%;
    height: 45px;
    align-items: center; 
    justify-content: center;
    background: #162938;
    text-decoration: none;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
}

.login-register {
    font-size: .9em;
    color: #fff;
    text-align: center;
    font-weight: 500;
    margin: 25px 0 10px;
}

.login-register p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.login-register p a:hover {
    text-decoration: underline;
}

@media(max-width:900px) {


.navbar .btnLogin-popup{
    display: block;
    border: none;
}

.wrapper{
    width: auto;
    height: auto;
}

.form-box.register{
    width: auto;
    height: auto;
}

.success{
    top: 87px;
}

.info{
    top: 87px;
}

}
</style>