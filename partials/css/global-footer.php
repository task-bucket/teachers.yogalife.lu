footer{
	background:#000;
	position:relative;
}
footer li{
	list-style: none;
}
footer .main-row{
	border-bottom: 1px solid #E5E7EB;
	padding-bottom: 20px;
}
footer h2{
	color:#fff;
}

.footer-section .main-row img.logo{
	margin-bottom: 20px;
}
.footer-section .col-b h3{ 
	margin-bottom: 10px;
}
.footer-section li{
	padding: 5px 0;
}
.footer-section li a{ 
	color: rgba(255, 255, 255, 0.8);
}
.footer-section .contact a{
	display: flex;
}
.footer-section .contact a img{
	margin-right: 8px;
	width: 18px;
}
.copyright-row{
	padding-top: 20px;
}
.copyright-row p{
	color: rgba(255, 255, 255, 0.8);
}
.copyright-row ul{
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.copyright-row ul li{
	margin-right: 10px;
}
.copyright-row ul li:last-child{
	margin-right: 0px;
}
.chatbox-icon{
	background: var(--gradient-green);
    width: 64px;
	height: 64px;
 		border-radius: 50%;
}
.chatbox-icon a{
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.chatbox-icon img{
	width: 20px;
	height: 20px;
}
.chat-container{
	width: fit-content;
    position: absolute;
    right: 50px;
    top: -100px;
}
.chat-box{
    position: absolute;
    width: 416px;
    height: auto;
    bottom:  50px;
    padding: 20px;
    display: none;
}
.chat-box h2, .chat-box p{
	color: #fff;
	margin-bottom: 0;
}
.chat-box h2{
	font-size: 18px;
}
.chatbox-header{
	border-top-left-radius: 16px;
	border-top-right-radius: 16px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	background: var(--gradient-blue);
	padding: 20px;
    
}
.chatbox-header .title{
	display: flex;
	align-items: center;
}
.chatbox-header .title .icon{
	margin-right: 10px;
}
.chatbot-message{
	display: flex;
}
.chatbot-message .message{
    background: #f3f7fb;
    border-radius: 12px;
    padding: 15px;
    margin-bottom: 10px;
    font-size: 15px;
    line-height: 1.4em;
    width: 80%;
    background-color: #fff;
    border: 1px solid #E5E7EB;
}
.chatbot-message  p{
	color: #000;
}
.chatbot-message .icon{
    width: 40px;
    height: 40px;
    background: var(--gradient-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
}
.chatbox-body{
	padding: 10px;
	box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
	height: 400px;
	overflow-y: scroll;
}
.chatbox-body{
	display: flex;
	flex-direction: column;
	gap: 10px;
}
.chat-options{
	margin-top: 20px;
}
.chat-options button{
	color: #000;
   	border-radius: 20px;
	padding: 10px;
	 	background: #fff;
	 	margin-bottom: 10px;
	 	border: 1px solid #E5E7EB;
}
.chat-options button:hover{
	background: rgba(31, 143, 255, 0.1);
	border: 1px solid var(--brand-blue);
	cursor: pointer;
}
.chat-section{
	background: #F5FBFB;
	padding: 20px;
	border-radius: 16px;
}
.chatbox-body{
	background: #fff;
}
.customer-reply{
	display: flex;
    flex-direction: row-reverse;
    align-items: center;
    margin-bottom: 10px;
}
.customer-reply .message{
   	background: var(--brand-green);
    border-radius: 12px;
    padding: 10px;
    font-size: 15px;
    line-height: 1.4em;
    border: 1px solid #E5E7EB;
}
.customer-reply .icon{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 10px;
    color: #fff;
}
.customer-reply .icon img{
	width: 40px;
}
.customer-reply p{
	color: #fff;
}
.chatbox-bottom input{
	width: 80%;
	padding: 10px;
	border-radius: 10px;
    border: 1px solid #E5E7EB;
}

.chatbox-bottom{
	background: #fff;
	padding: 20px;
}
.chatbox-bottom button{
	width: 40px;
    height: 40px;
	background: var(--gradient-blue);
	color: #fff;
	border-radius: 10px;

}
.chat-box.show{
	display: block;
	bottom: 0;
	left: -400px;
    position: absolute;
    bottom: -100px;
}
.chatbox-icon.hide{
	display: none;
}

.taskbucket{
   	color: #5DB1E5;
    border-bottom: 2px solid;
}