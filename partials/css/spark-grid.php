*{
  box-sizing: border-box;
  margin:0;
  padding:0;
}
.row{
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: space-between;
  justify-content: flex-start;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  width:95%;
}
.col{
  --gutter:10px;
  --col-strip-size: calc(calc(100% - calc(var(--gutter) * 11)) / 12);
  --col-1-width: calc(calc(var(--col-strip-size) * 1) + calc(var(--gutter) * 0));
  --col-2-width: calc(calc(var(--col-strip-size) * 2) + calc(var(--gutter) * 1));
  --col-3-width: calc(calc(var(--col-strip-size) * 3) + calc(var(--gutter) * 2));
  --col-4-width: calc(calc(var(--col-strip-size) * 4) + calc(var(--gutter) * 3));
  --col-5-width: calc(calc(var(--col-strip-size) * 5) + calc(var(--gutter) * 4));
  --col-6-width: calc(calc(var(--col-strip-size) * 6) + calc(var(--gutter) * 5));
  --col-7-width: calc(calc(var(--col-strip-size) * 7) + calc(var(--gutter) * 6));
  --col-8-width: calc(calc(var(--col-strip-size) * 8) + calc(var(--gutter) * 7));
  --col-9-width: calc(calc(var(--col-strip-size) * 9) + calc(var(--gutter) * 8));
  --col-10-width: calc(calc(var(--col-strip-size) * 10) + calc(var(--gutter) * 9));
  --col-11-width: calc(calc(var(--col-strip-size) * 11) + calc(var(--gutter) * 10));
  --col-12-width: calc(calc(var(--col-strip-size) * 12) + calc(var(--gutter) * 11));
}
.col:last-child{
  margin:0;
}
.col-xs-1{
  width: var(--col-1-width);
  margin-right:var(--gutter);
}
.col-xs-2{
  width: var(--col-2-width);
  margin-right:var(--gutter);
}
.col-xs-3{
  width: var(--col-3-width);
  margin-right:var(--gutter);
}
.col-xs-4{
  width: var(--col-4-width);
  margin-right:var(--gutter);
}
.col-xs-5{
  width: var(--col-5-width);
  margin-right:var(--gutter);
}
.col-xs-6{
  width: var(--col-6-width);
  margin-right:var(--gutter);
}
.col-xs-7{
  width: var(--col-7-width);
  margin-right:var(--gutter);
}
.col-xs-8{
  width: var(--col-8-width);
  margin-right:var(--gutter);
}
.col-xs-9{
  width: var(--col-9-width);
  margin-right:var(--gutter);
}
.col-xs-10{
  width: var(--col-10-width);
  margin-right:var(--gutter);
}
.col-xs-11{
  width: var(--col-11-width);
  margin-right:var(--gutter);
}
.col-xs-12{
  width: 100%;
  margin-right:0;
}


@media only screen and (min-width:481px) {
  .col{
    --gutter:15px;
  }
  .col-sm-1{
    width: var(--col-1-width);
    margin-right:var(--gutter);
  }
  .col-sm-2{
    width: var(--col-2-width);
    margin-right:var(--gutter);
  }
  .col-sm-3{
    width: var(--col-3-width);
    margin-right:var(--gutter);
  }
  .col-sm-4{
    width: var(--col-4-width);
    margin-right:var(--gutter);
  }
  .col-sm-5{
    width: var(--col-5-width);
    margin-right:var(--gutter);
  }
  .col-sm-6{
    width: var(--col-6-width);
    margin-right:var(--gutter);
  }
  .col-sm-7{
    width: var(--col-7-width);
    margin-right:var(--gutter);
  }
  .col-sm-8{
    width: var(--col-8-width);
    margin-right:var(--gutter);
  }
  .col-sm-9{
    width: var(--col-9-width);
    margin-right:var(--gutter);
  }
  .col-sm-10{
    width: var(--col-10-width);
    margin-right:var(--gutter);
  }
  .col-sm-11{
    width: var(--col-11-width);
    margin-right:var(--gutter);
  }
  .col-sm-12{
    width: 100%;
    margin-right:0;
  }
}
@media only screen and (min-width:768px) {
  .col{
    --gutter:20px;
  }
  .col-md-1{
    width: var(--col-1-width);
    margin-right:var(--gutter);
  }
  .col-md-2{
    width: var(--col-2-width);
    margin-right:var(--gutter);
  }
  .col-md-3{
    width: var(--col-3-width);
    margin-right:var(--gutter);
  }
  .col-md-4{
    width: var(--col-4-width);
    margin-right:var(--gutter);
  }
  .col-md-5{
    width: var(--col-5-width);
    margin-right:var(--gutter);
  }
  .col-md-6{
    width: var(--col-6-width);
    margin-right:var(--gutter);
  }
  .col-md-7{
    width: var(--col-7-width);
    margin-right:var(--gutter);
  }
  .col-md-8{
    width: var(--col-8-width);
    margin-right:var(--gutter);
  }
  .col-md-9{
    width: var(--col-9-width);
    margin-right:var(--gutter);
  }
  .col-md-10{
    width: var(--col-10-width);
    margin-right:var(--gutter);
  }
  .col-md-11{
    width: var(--col-11-width);
    margin-right:var(--gutter);
  }
  .col-md-12{
    width: 100%;
    margin-right:0;
  }
}
@media all and (min-width:992px){
  .row{
    max-width:100%;
  }    
  .col{
    --gutter:25px;
  }
  .col-lg-1{
    width: var(--col-1-width);
    margin-right:var(--gutter);
  }
  .col-lg-2{
    width: var(--col-2-width);
    margin-right:var(--gutter);
  }
  .col-lg-3{
    width: var(--col-3-width);
    margin-right:var(--gutter);
  }
  .col-lg-4{
    width: var(--col-4-width);
    margin-right:var(--gutter);
  }
  .col-lg-5{
    width: var(--col-5-width);
    margin-right:var(--gutter);
  }
  .col-lg-6{
    width: var(--col-6-width);
    margin-right:var(--gutter);
  }
  .col-lg-7{
    width: var(--col-7-width);
    margin-right:var(--gutter);
  }
  .col-lg-8{
    width: var(--col-8-width);
    margin-right:var(--gutter);
  }
  .col-lg-9{
    width: var(--col-9-width);
    margin-right:var(--gutter);
  }
  .col-lg-10{
    width: var(--col-10-width);
    margin-right:var(--gutter);
  }
  .col-lg-11{
    width: var(--col-11-width);
    margin-right:var(--gutter);
  }
  .col-lg-12{
    width: 100%;
    margin-right:0;
  }
}