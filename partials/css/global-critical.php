*{
    font-family: "Roboto", sans-serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    margin:0;
    padding:0;
    border:0;
    box-sizing:border-box;
    outline-color:#56AEE3;
}
:root{
    --text-grey: #64748B;
    --text-black: #22262A;
    --brand-blue: #1F8FFF;
    --brand-blue-darker: #0574e3;
    --brand-green: #36D399;
    --brand-purple: #9582F8;
    --gradient-blue: linear-gradient(135deg, #1F8FFF, #36D399);
    --gradient-green: linear-gradient(135deg, #36D399, #1F8FFF);
    --gradient-purple: linear-gradient(135deg, #9582F8, #36D399);
}
html,body{
    background:#FCFDFE;
    overflow-x: hidden;
    width:100%;
    scroll-behavior: smooth;
}
.section{
    padding:30px 0 30px;
}
.row{
    max-width:1200px;
    margin:0 auto;
}
h1,h2,h3,h4,h5,h6{
    font-weight:700;
    color: var(--text-black);
}
h1{
    font-size:36px;
    margin-bottom: 20px;
}
h2{
    font-size:24px;
    margin-bottom: 15px;
}
h3{
    font-size:20px;
    margin-bottom: 10px;
}
h4{
    font-size:18px;
    margin-bottom: 8px;
}
h5{
    font-size:16px;
    margin-bottom: 5px;
}
h6{
    font-size:14px;
    margin-bottom: 5px;
}
p,a,button,label,input,select,textarea,li{
    font-size:14px;
    color: var(--text-grey);
    text-decoration:none;
    line-height:1.5em;
}
ul,ol{
    list-style: inside;
}
p,ul,ol{
    margin-bottom:12px;
}
.small-text{
    font-size:12px;
}
.section-title{
    font-size: 24px;
    color: #000;
    line-height: 1.2em;
    margin-bottom: 20px;
}
.section-hero .section-title{
    font-size: 36px;
}
.section-description{
    font-size:16px;
    margin-bottom:40px;
}
@media all and (min-width:768px){
    h1{
        font-size:44px;
    }
    h2{
        font-size:36px;
    }
    h3{
        font-size:22px;
    }
    h4{
        font-size:20px;
    }
    h5{
        font-size:18px;
    }
    h6{
        font-size:16px;
    }
    p,a,button,label,input,select,textarea,li{
        font-size:14px;
    }
    .small-text{
        font-size:12px;
    }
    .section{
        padding:60px 0 60px;
    }
    .section-title{
        font-size: 36px;
    }
    .section-hero .section-title{
        font-size: 44px;
    }
    .section-description{
        font-size:18px;
    }
}

/* Buttons */
.btn{
    border:none;
    border-radius:10px;
    padding:8px 15px;   
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:10px;
    text-align:center;
}
.btn:hover{
    cursor:pointer;
}
.btn img{
    height:16px;
    margin-right:8px;
}
.btn-large{
    padding:12px 30px;
}
.btn-blue{
    background:var(--brand-blue);
    border:none;
    color:#fff;
    transition-duration:0.2s;
}
.btn-blue:hover{
    background:var(--brand-blue-darker);
    transform:scale(1.02);
    transition-duration:0.2s;
}
.btn-gradient{
    transition-duration:0.2s;
    color:#fff;
}
.btn-gradient:hover{
    transform:scale(1.02);
    transition-duration:0.2s;
}
.btn-white{
    background:#fff;
    border:none;
    color:var(--brand-blue-darker);
    transition-duration:0.2s;
}
.btn-white:hover{
    background:#f2f2f2;
    transform:scale(1.02);
    transition-duration:0.2s;
}
.btn-transparent{
    color:#fff;
    background:transparent;
    border:1px solid rgba(255, 255, 255, 0.4);
}



/* Specific Classes */

@keyframes sway-up-down{
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
}
@keyframes fade-pulse {
  0% {
    opacity: 0.25;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 0.25;
  }
}
.fade-pulse{
    opacity: 0.25;
    animation: fadePulse 3s ease-in-out infinite;
}
.sway-up-down{
    animation: sway-up-down 3s infinite alternate;
}
.text-center{
    text-align:center;
    display:flex;
    justify-content:center;
}
.text-white{
    color:#fff;
}
.gradient-blue{
    background: var(--gradient-blue);
}
.gradient-green{
    background: var(--gradient-green);
}
.gradient-purple{
    background: var(--gradient-purple);
}
.gradient-icon-box{
    padding:16px;
    display:flex;
    justify-content:center;
    align-items:center;
    width: 56px;
    border-radius:15px;
}
.gradient-text {
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text; /* for non-webkit browsers */
  color: transparent;
  font-weight:inherit;
}
.fullwidth-image{
    display:block;
    height:auto;
    width:100%;
}
.fullheight-image{
    display:block;
    height:100%;
    width:auto;
}
.hidden{
    display:none !important;
}

/* Notifications */
#notification-area {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    align-items: right;
}
.notification-item {
    background:#fff;
    padding:20px;
    border:1px solid #eaeaea;
    border-radius:10px;
    transform: translateX(150%); 
    transition: transform 0.5s ease-in-out, opacity 0.5s ease;
    opacity: 0;
    margin-top: 10px;
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff;
}
.notification-item.show {
    transform: translateY(0);
    opacity: 1;
}
.notification-success{
    color:#155724;
    background:#d4edda;
    border-color:#c3e6cb;
}
.notification-danger{
    color:#721c24;
    background:#f8d7da;
    border-color:#f5c6cb;
}

/* Spinner */
.spinner {
   width: 56px;
   height: 56px;
   border-radius: 50%;
   border: 9px solid;
   border-color: #dbdcef;
   border-right-color: #36d399;
   animation: spinner-d3wgkg 1s infinite linear;
}
@keyframes spinner-d3wgkg {
   to {
      transform: rotate(1turn);
   }
}

/* Forms */
.form{
    display:flex;
    flex-direction:column;
}
.form-row{
    width:100%;
}
.form input,.form textarea,.form select{
    padding:10px;
    border-radius:4px;
    border:1px solid #ddd;
}
.form input:hover,.form input:focus,.form textarea:hover,.form textarea:focus,.form select:hover,.form select:focus{
    border:1px solid #56AEE3;
}
.form input,.form textarea,.form select,.form button{
    margin-top:5px;
    width:100%;
}
.form textarea{
    min-height:200px;
    resize: none;
}
.form button{
    margin-top:15px;
}
.form-group{
    margin-bottom:15px;
}
.form-group label{
    color:var(--text-grey);
}
form .form-btn-disabled,form .form-btn-disabled:hover {
    background:#444;
    color:#fff;
    border-color:#444;
    pointer-events:none;
}
