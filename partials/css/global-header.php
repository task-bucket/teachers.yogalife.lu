.main-header{
    padding: 10px 0;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 99;
}
body{
    padding-top: 104px;
}
.main-header li{
    list-style: none;
}

.main-header .navbar-nav a{
    color: #fff;
    font-family: Graphie-Bold;
    font-size: 20px;
    padding: 0 10px;
    padding-bottom: 10px;
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
.main-header{
    background-color:#F0AB1F;
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
.mobile-menu-toggle{
    display: none;
}
@media all and (max-width: 991px){
    .mobile-menu-toggle{
        display: block;
    }
    .main-header .navbar-nav a{
        padding: 10px;
    }
    .main-header .mobile-menu-toggle{
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: center;
    }
    .main-header .mobile-menu-toggle span{
        display: block;
        height: 2px;
        background: #fff;
        width: 30px;
        margin-bottom: 5px;
    }
    .main-header .dropdown-container{
        opacity: 1;
        visibility: visible;
        position: relative;
        border-top: none;
        border: none;
    }
    .main-header .dropdown-container li a{
        color: #000;
    }
    .main-header ul.navbar-nav{
        position: absolute;
        top: 84px;
        right: 0;
        width: 100vw;
        background: #fff;
        flex-direction: column;
        border-top: 5px solid orange;
        height: auto;
        color: #000;
        padding: 30px;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 20px;
        border: 2px solid #eee;
    }
    .main-header ul.navbar-nav li a{
        color: #000;
    }
    header.main-header.menu-close .navbar-nav {
        display: none;
    }

    .mobile-menu-toggle .toggle-menu-close{
        display: none;
        color: #fff;
    }
    .mobile-menu-toggle .toggle-menu-open{
        display: block;
    }
    .main-header .mobile-menu-toggle .toggle-menu-close{
        display: block;
        position: relative;
        top: -10px;
        font-size: 25px;
    }
    .main-header .mobile-menu-toggle .toggle-menu-open{
        display: none;
    }
    .main-header.menu-close .mobile-menu-toggle .toggle-menu-close{
        display: none;
    }
    
    .main-header.menu-close .mobile-menu-toggle .toggle-menu-open{
        display: block;
    }
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