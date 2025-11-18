.main-header{
    padding: 10px 0;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 99;
    background-color: #fff;
    border-bottom: 1px solid #eee;
}
body{
    padding-top: 104px;
}
.main-header li{
    list-style: none;
}

.main-header .navbar-nav a{
    color: #000;
    font-family: Graphie-regular;
    font-size: 20px;
    padding-bottom: 10px;
    margin-right: 20px;
}
.main-header .navbar-nav a:last-child{
    margin-right: 0;
}
.main-header .navbar-nav a.btn,.main-header .navbar-nav a.btn:hover{
    color: #fff;
}

.main-header .navbar-nav a:hover{
    color: var(--brand-blue);
}
.main-header .dropdown-container li:hover a{
    background-color: rgba(0, 0, 0, .03);
    padding-left: 8px;
}
.main-header .dropdown-container li a{
    font-size: 15px;
}
.main-header .dropdown-icon{
    width: 15px;
    position: relative;
    top: 2px;
    left: 3px;
}
.main-header .contact-info a{
    color: #fff;
    font-size: 20px;
}
.main-header .contact-info img{
    margin-right: 8px;
    width: 14px;
}
.main-header .logo-container{
    display: flex;
    gap: 50px;
    align-items: center;
}

.main-header .navbar{
    height: 100%;
}
.main-header .navbar-nav{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}
.main-header .navbar-nav ul{
    margin-bottom: 0;
}
.main-header .dropdown{
    position: relative;
}
.main-header .dropdown-container{
    background-color: #fff;
    position: absolute;
    width: 200px;
    padding: 15px 0;
    opacity: 0;
    visibility: hidden;
    border: 2px solid #eee;  
    border-top: 5px solid var(--brand-yellow-darker);
}

.main-header .dropdown-container li a{
    color: #000;
    width: 100%;
    display: block;
    padding: 10px;

}
.main-header .dropdown-container{
    justify-content:flex-end;
    padding: 8px;
    margin-top: 2px;
}
.main-header .dropdown:hover > .dropdown-container{
    opacity: 1;
    visibility: visible;
}

@media all and (max-width: 991px){


    li.dropdown > a {
        background-color: rgba(0, 0, 0, .03);
        display: block;
        width: 100%;
        padding: 5px 10px;
    }
    .main-header .dropdown{
        width: 100%;
    }
    .main-header .dropdown-container li:hover a{
        background: none;
        padding-left: 0;
    }
    .main-header .dropdown-container li a{
        font-size: 14px;
    }
    
}
@media all and (max-width: 767px){
    .main-header .rys-200{
        display: none;
    }
    .main-header .contact-info li a{
        font-size: 12px;
    }
    .logo img{
        width: 80px;
    }
    .main-header .logo-container{
        gap: 30px;
    }
}

@media all and (max-width: 480px){
    .main-header ul.navbar-nav li a{
        font-size: 14px;
    }
}
@media all and (max-width: 350px){
    .main-header ul.navbar-nav li a{
        font-size: 12px;
    }
}