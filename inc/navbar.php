<style>
.nav{
	position: fixed;
	background-color: #f8f9fa;
    width: 100%;
    font-family: Arial, Helvetica, sans-serif;
    height: 70px;
    line-height: 45px;
    padding-top: 2px;
    padding-left: 20px;
}

.nav a:hover {
	color:black;
}

.navbar a {
    float: left;
    font-size: 20px;
    color: gray;
    text-align: center;
    padding: 14px 22px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
	height: 70px;
	line-height: 45px;
    font-size: 20px;    
    border: none;
    outline: none;
    color: gray;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown:hover .dropbtn:hover{
	color:black;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.logo {
    float:left;
    margin-right: 50px;
}
</style>

<div class="nav">
    <div class="navbar">
      <div class="logo">
         <img width="auto" height="65px" src="images/logo.png">
     </div>
     <a href="index.php">Home</a>
     <div class="dropdown">
        <button class="dropbtn">Serviços
        </button>
        <div class="dropdown-content">
          <a href="servicos.php">Serviço 1</a>
          <a href="servicos.php">Serviço 2</a>
      </div>
  </div> 
  <a href="sobre.php">Sobre Nós</a>
  <a href="contato.php">Contato</a>
</div>
</div>