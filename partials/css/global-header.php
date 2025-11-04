body{
	padding-top: 100px;
}
header{
	position:fixed;
	top:0;
	left:0;
	right:0;
	width:100%;
	border-bottom:1px solid #000;
	z-index:999;
	background:rgba(255,255,255,0.96);
}
header li{
	list-style: none;
}
.main-header{
	padding: 10px 0;
}
.main-header .logo-container img{
	width: 160px;
}
.bottom-header{
    justify-content: center;
    background: var(--brand-green);
    width: 100%;
    max-width: 100%;
}
.menu-list{
	height: 100%;
}

.menu-list ul{
    display: flex;
    height: 100%;
    align-items: center;
    justify-content: center;
    list-style: none;
	margin-bottom: 0;
}

.menu-list ul li{
	padding: 0 10px;
	list-style: none;
}
.menu-list > ul > li > a{
    padding: 10px 0;
}
.menu-list ul li a{
	color: #fff;
    font-size: 16px;
    text-transform: capitalize;
    display: flex;
    align-items: center;
}
.menu-list .dropdown-container{
	padding: 20px 10px;
}
.menu-list .dropdown-container li span{
	width: 8px;
    height: 8px;
    background-color: var(--brand-green);
    display: inline-block;
    margin-right: 20px;
    border-radius: 50%;
}
.menu-list .dropdown-container li{
	padding: 10px 0;
	display: flex;
	align-items: center;
}
.menu-list li img{
    margin-right: 8px;
    width: 16px;
}
.search-container{
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: space-between;
}
.search-container .search-box{
    width: 55%;
    border: 1px solid #E5E7EB;    
    height: 40px;
    padding: 0 10px;
    border-radius: 12px;
}
.header-buttons{
	display: flex;
	align-items: center;
	justify-content: center;
	width: 45%;
	margin-bottom: 0;
}
.header-buttons li{
	margin-bottom: 0;
	margin-right: 10px;
	color: #000;
}
.header-buttons li.account-btn{
	 border: 1px solid #E5E7EB;    
}

.header-buttons li.sell-btn{
	 background-color: var(--brand-green);   
}

.header-buttons li.sell-btn a{
	color: #fff;
}
li.dropdown{
	position: relative;
}
.desktop-menu-container .message-button img,.desktop-menu-container .notification-btn img{
	width: 20px;
}
ul.dropdown-container{
	position: absolute;
	top: 34px;
	list-style: none;
    display: none;
    background: #fff;
    padding: 10px;
    width: 200px;
    text-align: left;
    border-radius: 12px;
    box-shadow: 2px 2px 2px #eee;
    height: fit-content;
}
ul.dropdown-container li a:hover,.menu-list ul .mega-column a:hover {
    color: var(--brand-green);
}
ul.dropdown-container li a{
  color: #000;
}
ul.dropdown-container li{
	padding: 0 6px;
	margin: 8px 0;
}
li.dropdown:hover .dropdown-container{
	display: block;
}
.mega-menu {
  background: #1f1f1f;
  color: #fff;
}

.has-mega:hover .mega-content {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}
.mega-content {
  position: absolute;
  left: 0;
  top: 100%;
  width: 100vw;
  background: #fff;
  color: #333;
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: all 0.3s ease;
  z-index: 1000;
}

.mega-row {
  display: flex;
  justify-content: center;
  padding: 20px 50px;
}

.mega-column {
  flex: 1;
  max-width: 250px;
  margin: 0 20px;
}

.mega-column h3 {
  font-size: 16px;
  color: #000;
  margin-bottom: 10px;
  border-bottom: 2px solid var(--brand-green);
  padding-bottom: 5px;
  width: fit-content;
}
.bottom-header.desktop-menu-row ul.dropdown-container{
	top: 42px;
}
.menu-list ul .mega-column a {
  display: block;
  color: #333;
  text-decoration: none;
  padding: 5px 0;
  transition: color 0.2s;
}
.mobile-menu-container{
	display: none;
}

@media all and (max-width: 991px){
	.desktop-menu-container{
		display: none;
	}
	.mobile-menu-container{
		display: block;
	}
	.header-buttons li{
		margin-right: 0;
		padding: 5px;
	}
}
.mobile-menu-container .main-header{
    padding: 20px 0;
}
.mobile-menu-container .header-buttons li.account-btn{
	border: none;
}
.mobile-menu-container .logo-container img{
	width: 120px;
	height: auto;
}
.mobile-menu-container .search-container{
	justify-content: flex-end;
}
.mobile-menu-container .search-container .search-box{
	width: 60%;
}

.mobile-menu-container .account-btn{
	margin-right: 0;
}
.hamburger-menu .icon span{
	width: 20px;
	height: 2px;
	background-color: #fff;
	margin-bottom: 5px;
	display: block;
}
.hamburger-menu .icon span:last-child {
    margin-bottom: 0;
}

.mobile-menu-container .search-bar-container {
    display: none;
    left: 0;
    width: 100%;
    background: #fff;
    padding: 10px 20px;
    justify-content: center;
    transition: bottom 0.3s ease;
  }

.mobile-menu-container  .search-bar-container input {
    width: 80%;
    padding: 10px;
    font-size: 16px;
    border-radius: 8px;
    border: 1px solid #ccc;
    transition: bottom 0.4s ease-in-out;
  }

.mobile-menu-container .search-bar-container.active {
    display: flex;
     transition: bottom 0.4s ease-in-out;
  }
  .hamburger-menu.active{
  	display: block;
  }

  .mobile-menu-container .hamburger-menu ul.dropdown-container{
  	top: 30px;
	right: -50px;
  }
  @media all and (max-width: 768px) {
  .menu {
    flex-direction: column;
  }

  .menu > li > a {
    padding: 12px 20px;
  }

  .mega-content {
    position: absolute;
    opacity: 0;
    visibility: hidden;
    transform: none;
    box-shadow: none;
    width: 100%;
  }

  .mega-row {
    flex-direction: column;
    padding: 15px 20px;
  }

  .mega-column {
    margin-bottom: 20px;
  }
}