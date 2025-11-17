@font-face{
    font-family: Graphie-Bold;
    src: url("<?php echo $cdn_url; ?>/fonts/Graphie-Bold.woff2");
    font-display: swap;
}
@font-face{
    font-family: Graphie-Regular;
    src: url("<?php echo $cdn_url; ?>/fonts/Graphie-Regular.woff2");
    font-display: swap;
}
:root{
    --brand-blue: #05868B;
    --brand-blue-darker: #04676b;
    --brand-yellow: #d9931a;
    --brand-yellow-darker: #ba7b0d;
    --brand-alternate: #016063;
}
html{
    scroll-behavior: smooth;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-size: cover;
    outline: none;
    font-family: 'Graphie-Regular';
    font-weight:400;
}
.section{
    background:#fff;
    padding:30px 0 30px;
}
.row{
    max-width:1350px;
    margin:0 auto;
}
h1,h2,h3,h4,h5,h6{
    font-family: Graphie-Bold;
    font-weight:700;
    color: var(--brand-blue);
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
    line-height:1.6em;
}
strong{
    font-weight:bold;
    font-family: Graphie-Bold;
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
        font-size:16px;
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
    padding:12px 15px;
    border-radius:5px;
    cursor:pointer;
}
.btn-white{
    color:#333;
    background:#fff;
}
.btn-white:hover{
    color:#333;
    background:#dedede;
}
.btn-blue{
    background:var(--brand-blue);
    color:#fff;
}
.btn-blue:hover{
    background:var(--brand-blue-darker);
    color:#fff;
}
.btn-yellow{
    background:var(--brand-yellow);
    color:#fff;
}
.btn-yellow:hover{
    background:var(--brand-yellow-darker);
    color:#fff;
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
    border:1px solid var(--brand-blue);
}
.form input,.form textarea,.form select{
    margin-top:5px;
    width:100%;
}
.form textarea{
    min-height:200px;
    resize: none;
}
.form button{
    margin-top:25px;
    border:none;
}
.form-group{
    margin-bottom:20px;
}
.form-group label{
    color:#333;
    position:relative;
    display:inline-block;
}
.form-group p{
    color:#333;
    position:relative;
}
.form-group .required-mark{
    position:relative;
}
.form-group .required-mark:before{
    content: "*";
    position: absolute;
    right: -10px;
    top: -3px;
    font-size: 18px;
    color: red;
}
form .form-btn-disabled,form .form-btn-disabled:hover {
    background:#eee;
    color:#222;
    pointer-events:none;
}
.form-inline-element{
    display:flex;
    justify-content:flex-start;
}
.form-inline-element label{
    display:flex;
    margin-right:20px;
}
.form-inline-element label input{
    margin-right:10px;
    margin-top:0;
}
[id^="form-message-"] {
    scroll-margin-top: 200px; 
}


/* Special Classes */
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
.text-center{
    text-align:center;
}
.text-white{
    color:#fff;
}
.text-yellow{
    color:var(--brand-yellow);
}
.text-blue{
    color:var(--brand-blue);
}
.hidden{
    display:none !important;
}
.yellow-link{
    color: var(--brand-yellow);
}
