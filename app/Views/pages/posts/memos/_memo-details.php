<style>
  @charset "UTF-8";/*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */:root{--blue:#4a81d4;--indigo:#675aa9;--purple:#6658dd;--pink:#f672a7;--red:#f1556c;--orange:#fd7e14;--yellow:#f7b84b;--green:#1abc9c;--teal:#02a8b5;--cyan:#4fc6e1;--white:#fff;--gray:#98a6ad;--gray-dark:#343a40;--primary:#6658dd;--secondary:#6c757d;--success:#1abc9c;--info:#4fc6e1;--warning:#f7b84b;--danger:#f1556c;--light:#f3f7f9;--dark:#323a46;--pink:#f672a7;--blue:#4a81d4;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1367px;--font-family-sans-serif:"Nunito",sans-serif;--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}article,aside,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:Nunito,sans-serif;font-size:.875rem;font-weight:400;line-height:1.5;color:#6c757d;text-align:left;background-color:#f5f6f8}[tabindex="-1"]:focus:not(:focus-visible){outline:0!important}hr{box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:1.5rem}p{margin-top:0;margin-bottom:1rem}abbr[data-original-title],abbr[title]{text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}address{margin-bottom:1rem;font-style:normal;line-height:inherit}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#6658dd;text-decoration:none;background-color:transparent}a:hover{color:#3827c1;text-decoration:none}a:not([href]){color:inherit;text-decoration:none}a:not([href]):hover{color:inherit;text-decoration:none}code,kbd,pre,samp{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size:1em}pre{margin-top:0;margin-bottom:1rem;overflow:auto}figure{margin:0 0 1rem}img{vertical-align:middle;border-style:none}svg{overflow:hidden;vertical-align:middle}table{border-collapse:collapse}caption{padding-top:.85rem;padding-bottom:.85rem;color:#98a6ad;text-align:left;caption-side:bottom}th{text-align:inherit}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{-webkit-appearance:listbox}textarea{overflow:auto;resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}summary{display:list-item;cursor:pointer}template{display:none}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:1.5rem;font-weight:500;line-height:1.1}.h1,h1{font-size:2.25rem}.h2,h2{font-size:1.875rem}.h3,h3{font-size:1.5rem}.h4,h4{font-size:1.125rem}.h5,h5{font-size:.9375rem}.h6,h6{font-size:.75rem}.lead{font-size:1.09375rem;font-weight:300}.display-1{font-size:6rem;font-weight:300;line-height:1.1}.display-2{font-size:5.5rem;font-weight:300;line-height:1.1}.display-3{font-size:4.5rem;font-weight:300;line-height:1.1}.display-4{font-size:3.5rem;font-weight:300;line-height:1.1}hr{margin-top:1.5rem;margin-bottom:1.5rem;border:0;border-top:1px solid #e5e8eb}.small,small{font-size:.75rem;font-weight:400}.mark,mark{padding:.2em;background-color:#fcf8e3}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:6px}.initialism{font-size:90%;text-transform:uppercase}.blockquote{margin-bottom:1.5rem;font-size:1.09375rem}.blockquote-footer{display:block;font-size:.75rem;color:#98a6ad}.blockquote-footer::before{content:"\2014\00A0"}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#f5f6f8;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.75rem;line-height:1}.figure-caption{font-size:90%;color:#98a6ad}code{font-size:87.5%;color:#f672a7;word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:#fff;background-color:#323a46;border-radius:.2rem}kbd kbd{padding:0;font-size:100%;font-weight:700}pre{display:block;font-size:87.5%;color:#323a46}pre code{font-size:inherit;color:inherit;word-break:normal}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{width:100%;padding-right:12px;padding-left:12px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1367px){.container{max-width:1140px}}.container-fluid,.container-lg,.container-md,.container-sm,.container-xl{width:100%;padding-right:12px;padding-left:12px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1367px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}.row{display:flex;flex-wrap:wrap;margin-right:-12px;margin-left:-12px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;padding-right:12px;padding-left:12px}.col{flex-basis:0;flex-grow:1;max-width:100%}.row-cols-1>*{flex:0 0 100%;max-width:100%}.row-cols-2>*{flex:0 0 50%;max-width:50%}.row-cols-3>*{flex:0 0 33.33333%;max-width:33.33333%}.row-cols-4>*{flex:0 0 25%;max-width:25%}.row-cols-5>*{flex:0 0 20%;max-width:20%}.row-cols-6>*{flex:0 0 16.66667%;max-width:16.66667%}.col-auto{flex:0 0 auto;width:auto;max-width:100%}.col-1{flex:0 0 8.33333%;max-width:8.33333%}.col-2{flex:0 0 16.66667%;max-width:16.66667%}.col-3{flex:0 0 25%;max-width:25%}.col-4{flex:0 0 33.33333%;max-width:33.33333%}.col-5{flex:0 0 41.66667%;max-width:41.66667%}.col-6{flex:0 0 50%;max-width:50%}.col-7{flex:0 0 58.33333%;max-width:58.33333%}.col-8{flex:0 0 66.66667%;max-width:66.66667%}.col-9{flex:0 0 75%;max-width:75%}.col-10{flex:0 0 83.33333%;max-width:83.33333%}.col-11{flex:0 0 91.66667%;max-width:91.66667%}.col-12{flex:0 0 100%;max-width:100%}.order-first{order:-1}.order-last{order:13}.order-0{order:0}.order-1{order:1}.order-2{order:2}.order-3{order:3}.order-4{order:4}.order-5{order:5}.order-6{order:6}.order-7{order:7}.order-8{order:8}.order-9{order:9}.order-10{order:10}.order-11{order:11}.order-12{order:12}.offset-1{margin-left:8.33333%}.offset-2{margin-left:16.66667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.33333%}.offset-5{margin-left:41.66667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.33333%}.offset-8{margin-left:66.66667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.33333%}.offset-11{margin-left:91.66667%}@media (min-width:576px){.col-sm{flex-basis:0;flex-grow:1;max-width:100%}.row-cols-sm-1>*{flex:0 0 100%;max-width:100%}.row-cols-sm-2>*{flex:0 0 50%;max-width:50%}.row-cols-sm-3>*{flex:0 0 33.33333%;max-width:33.33333%}.row-cols-sm-4>*{flex:0 0 25%;max-width:25%}.row-cols-sm-5>*{flex:0 0 20%;max-width:20%}.row-cols-sm-6>*{flex:0 0 16.66667%;max-width:16.66667%}.col-sm-auto{flex:0 0 auto;width:auto;max-width:100%}.col-sm-1{flex:0 0 8.33333%;max-width:8.33333%}.col-sm-2{flex:0 0 16.66667%;max-width:16.66667%}.col-sm-3{flex:0 0 25%;max-width:25%}.col-sm-4{flex:0 0 33.33333%;max-width:33.33333%}.col-sm-5{flex:0 0 41.66667%;max-width:41.66667%}.col-sm-6{flex:0 0 50%;max-width:50%}.col-sm-7{flex:0 0 58.33333%;max-width:58.33333%}.col-sm-8{flex:0 0 66.66667%;max-width:66.66667%}.col-sm-9{flex:0 0 75%;max-width:75%}.col-sm-10{flex:0 0 83.33333%;max-width:83.33333%}.col-sm-11{flex:0 0 91.66667%;max-width:91.66667%}.col-sm-12{flex:0 0 100%;max-width:100%}.order-sm-first{order:-1}.order-sm-last{order:13}.order-sm-0{order:0}.order-sm-1{order:1}.order-sm-2{order:2}.order-sm-3{order:3}.order-sm-4{order:4}.order-sm-5{order:5}.order-sm-6{order:6}.order-sm-7{order:7}.order-sm-8{order:8}.order-sm-9{order:9}.order-sm-10{order:10}.order-sm-11{order:11}.order-sm-12{order:12}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.33333%}.offset-sm-2{margin-left:16.66667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.33333%}.offset-sm-5{margin-left:41.66667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.33333%}.offset-sm-8{margin-left:66.66667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.33333%}.offset-sm-11{margin-left:91.66667%}}@media (min-width:768px){.col-md{flex-basis:0;flex-grow:1;max-width:100%}.row-cols-md-1>*{flex:0 0 100%;max-width:100%}.row-cols-md-2>*{flex:0 0 50%;max-width:50%}.row-cols-md-3>*{flex:0 0 33.33333%;max-width:33.33333%}.row-cols-md-4>*{flex:0 0 25%;max-width:25%}.row-cols-md-5>*{flex:0 0 20%;max-width:20%}.row-cols-md-6>*{flex:0 0 16.66667%;max-width:16.66667%}.col-md-auto{flex:0 0 auto;width:auto;max-width:100%}.col-md-1{flex:0 0 8.33333%;max-width:8.33333%}.col-md-2{flex:0 0 16.66667%;max-width:16.66667%}.col-md-3{flex:0 0 25%;max-width:25%}.col-md-4{flex:0 0 33.33333%;max-width:33.33333%}.col-md-5{flex:0 0 41.66667%;max-width:41.66667%}.col-md-6{flex:0 0 50%;max-width:50%}.col-md-7{flex:0 0 58.33333%;max-width:58.33333%}.col-md-8{flex:0 0 66.66667%;max-width:66.66667%}.col-md-9{flex:0 0 75%;max-width:75%}.col-md-10{flex:0 0 83.33333%;max-width:83.33333%}.col-md-11{flex:0 0 91.66667%;max-width:91.66667%}.col-md-12{flex:0 0 100%;max-width:100%}.order-md-first{order:-1}.order-md-last{order:13}.order-md-0{order:0}.order-md-1{order:1}.order-md-2{order:2}.order-md-3{order:3}.order-md-4{order:4}.order-md-5{order:5}.order-md-6{order:6}.order-md-7{order:7}.order-md-8{order:8}.order-md-9{order:9}.order-md-10{order:10}.order-md-11{order:11}.order-md-12{order:12}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.33333%}.offset-md-2{margin-left:16.66667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.33333%}.offset-md-5{margin-left:41.66667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.33333%}.offset-md-8{margin-left:66.66667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.33333%}.offset-md-11{margin-left:91.66667%}}@media (min-width:992px){.col-lg{flex-basis:0;flex-grow:1;max-width:100%}.row-cols-lg-1>*{flex:0 0 100%;max-width:100%}.row-cols-lg-2>*{flex:0 0 50%;max-width:50%}.row-cols-lg-3>*{flex:0 0 33.33333%;max-width:33.33333%}.row-cols-lg-4>*{flex:0 0 25%;max-width:25%}.row-cols-lg-5>*{flex:0 0 20%;max-width:20%}.row-cols-lg-6>*{flex:0 0 16.66667%;max-width:16.66667%}.col-lg-auto{flex:0 0 auto;width:auto;max-width:100%}.col-lg-1{flex:0 0 8.33333%;max-width:8.33333%}.col-lg-2{flex:0 0 16.66667%;max-width:16.66667%}.col-lg-3{flex:0 0 25%;max-width:25%}.col-lg-4{flex:0 0 33.33333%;max-width:33.33333%}.col-lg-5{flex:0 0 41.66667%;max-width:41.66667%}.col-lg-6{flex:0 0 50%;max-width:50%}.col-lg-7{flex:0 0 58.33333%;max-width:58.33333%}.col-lg-8{flex:0 0 66.66667%;max-width:66.66667%}.col-lg-9{flex:0 0 75%;max-width:75%}.col-lg-10{flex:0 0 83.33333%;max-width:83.33333%}.col-lg-11{flex:0 0 91.66667%;max-width:91.66667%}.col-lg-12{flex:0 0 100%;max-width:100%}.order-lg-first{order:-1}.order-lg-last{order:13}.order-lg-0{order:0}.order-lg-1{order:1}.order-lg-2{order:2}.order-lg-3{order:3}.order-lg-4{order:4}.order-lg-5{order:5}.order-lg-6{order:6}.order-lg-7{order:7}.order-lg-8{order:8}.order-lg-9{order:9}.order-lg-10{order:10}.order-lg-11{order:11}.order-lg-12{order:12}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.33333%}.offset-lg-2{margin-left:16.66667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.33333%}.offset-lg-5{margin-left:41.66667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.33333%}.offset-lg-8{margin-left:66.66667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.33333%}.offset-lg-11{margin-left:91.66667%}}@media (min-width:1367px){.col-xl{flex-basis:0;flex-grow:1;max-width:100%}.row-cols-xl-1>*{flex:0 0 100%;max-width:100%}.row-cols-xl-2>*{flex:0 0 50%;max-width:50%}.row-cols-xl-3>*{flex:0 0 33.33333%;max-width:33.33333%}.row-cols-xl-4>*{flex:0 0 25%;max-width:25%}.row-cols-xl-5>*{flex:0 0 20%;max-width:20%}.row-cols-xl-6>*{flex:0 0 16.66667%;max-width:16.66667%}.col-xl-auto{flex:0 0 auto;width:auto;max-width:100%}.col-xl-1{flex:0 0 8.33333%;max-width:8.33333%}.col-xl-2{flex:0 0 16.66667%;max-width:16.66667%}.col-xl-3{flex:0 0 25%;max-width:25%}.col-xl-4{flex:0 0 33.33333%;max-width:33.33333%}.col-xl-5{flex:0 0 41.66667%;max-width:41.66667%}.col-xl-6{flex:0 0 50%;max-width:50%}.col-xl-7{flex:0 0 58.33333%;max-width:58.33333%}.col-xl-8{flex:0 0 66.66667%;max-width:66.66667%}.col-xl-9{flex:0 0 75%;max-width:75%}.col-xl-10{flex:0 0 83.33333%;max-width:83.33333%}.col-xl-11{flex:0 0 91.66667%;max-width:91.66667%}.col-xl-12{flex:0 0 100%;max-width:100%}.order-xl-first{order:-1}.order-xl-last{order:13}.order-xl-0{order:0}.order-xl-1{order:1}.order-xl-2{order:2}.order-xl-3{order:3}.order-xl-4{order:4}.order-xl-5{order:5}.order-xl-6{order:6}.order-xl-7{order:7}.order-xl-8{order:8}.order-xl-9{order:9}.order-xl-10{order:10}.order-xl-11{order:11}.order-xl-12{order:12}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.33333%}.offset-xl-2{margin-left:16.66667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.33333%}.offset-xl-5{margin-left:41.66667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.33333%}.offset-xl-8{margin-left:66.66667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.33333%}.offset-xl-11{margin-left:91.66667%}}.table{width:100%;margin-bottom:1.5rem;color:#6c757d}.table td,.table th{padding:.85rem;vertical-align:top;border-top:1px solid #dee2e6}.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6}.table tbody+tbody{border-top:2px solid #dee2e6}.table-sm td,.table-sm th{padding:.5rem}.table-bordered{border:1px solid #dee2e6}.table-bordered td,.table-bordered th{border:1px solid #dee2e6}.table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}.table-borderless tbody+tbody,.table-borderless td,.table-borderless th,.table-borderless thead th{border:0}.table-striped tbody tr:nth-of-type(odd){background-color:#f3f7f9}.table-hover tbody tr:hover{color:#6c757d;background-color:#f3f7f9}.table-primary,.table-primary>td,.table-primary>th{background-color:#d4d0f5}.table-primary tbody+tbody,.table-primary td,.table-primary th,.table-primary thead th{border-color:#afa8ed}.table-hover .table-primary:hover{background-color:#c1bbf1}.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#c1bbf1}.table-secondary,.table-secondary>td,.table-secondary>th{background-color:#d6d8db}.table-secondary tbody+tbody,.table-secondary td,.table-secondary th,.table-secondary thead th{border-color:#b3b7bb}.table-hover .table-secondary:hover{background-color:#c8cbcf}.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#c8cbcf}.table-success,.table-success>td,.table-success>th{background-color:#bfece3}.table-success tbody+tbody,.table-success td,.table-success th,.table-success thead th{border-color:#88dccc}.table-hover .table-success:hover{background-color:#abe6da}.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#abe6da}.table-info,.table-info>td,.table-info>th{background-color:#ceeff7}.table-info tbody+tbody,.table-info td,.table-info th,.table-info thead th{border-color:#a3e1ef}.table-hover .table-info:hover{background-color:#b8e8f3}.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#b8e8f3}.table-warning,.table-warning>td,.table-warning>th{background-color:#fdebcd}.table-warning tbody+tbody,.table-warning td,.table-warning th,.table-warning thead th{border-color:#fbdaa1}.table-hover .table-warning:hover{background-color:#fce1b4}.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#fce1b4}.table-danger,.table-danger>td,.table-danger>th{background-color:#fbcfd6}.table-danger tbody+tbody,.table-danger td,.table-danger th,.table-danger thead th{border-color:#f8a7b3}.table-hover .table-danger:hover{background-color:#f9b7c2}.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f9b7c2}.table-light,.table-light>td,.table-light>th{background-color:#fcfdfd}.table-light tbody+tbody,.table-light td,.table-light th,.table-light thead th{border-color:#f9fbfc}.table-hover .table-light:hover{background-color:#edf3f3}.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#edf3f3}.table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8cb}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#94999f}.table-hover .table-dark:hover{background-color:#b9bbbf}.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbf}.table-pink,.table-pink>td,.table-pink>th{background-color:#fcd8e6}.table-pink tbody+tbody,.table-pink td,.table-pink th,.table-pink thead th{border-color:#fab6d1}.table-hover .table-pink:hover{background-color:#fac0d7}.table-hover .table-pink:hover>td,.table-hover .table-pink:hover>th{background-color:#fac0d7}.table-blue,.table-blue>td,.table-blue>th{background-color:#ccdcf3}.table-blue tbody+tbody,.table-blue td,.table-blue th,.table-blue thead th{border-color:#a1bde9}.table-hover .table-blue:hover{background-color:#b7ceee}.table-hover .table-blue:hover>td,.table-hover .table-blue:hover>th{background-color:#b7ceee}.table-active,.table-active>td,.table-active>th{background-color:#f3f7f9}.table-hover .table-active:hover{background-color:#e2ecf1}.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:#e2ecf1}.table .thead-dark th{color:#98a6ad;background-color:#323a46;border-color:#424c5c}.table .thead-light th{color:#6c757d;background-color:#f3f7f9;border-color:#dee2e6}.table-dark{color:#98a6ad;background-color:#323a46}.table-dark td,.table-dark th,.table-dark thead th{border-color:#424c5c}.table-dark.table-bordered{border:0}.table-dark.table-striped tbody tr:nth-of-type(odd){background-color:rgba(255,255,255,.05)}.table-dark.table-hover tbody tr:hover{color:#98a6ad;background-color:rgba(255,255,255,.075)}@media (max-width:575.98px){.table-responsive-sm{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-sm>.table-bordered{border:0}}@media (max-width:767.98px){.table-responsive-md{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-md>.table-bordered{border:0}}@media (max-width:991.98px){.table-responsive-lg{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-lg>.table-bordered{border:0}}@media (max-width:1366.98px){.table-responsive-xl{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-xl>.table-bordered{border:0}}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive>.table-bordered{border:0}.form-control{display:block;width:100%;height:calc(1.5em + .9rem + 2px);padding:.45rem .9rem;font-size:.875rem;font-weight:400;line-height:1.5;color:#6c757d;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.2rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #6c757d}.form-control:focus{color:#6c757d;background-color:#fff;border-color:#b1bbc4;outline:0;box-shadow:none}.form-control:-ms-input-placeholder{color:#adb5bd;opacity:1}.form-control::-ms-input-placeholder{color:#adb5bd;opacity:1}.form-control::placeholder{color:#adb5bd;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#fff;opacity:1}select.form-control:focus::-ms-value{color:#6c757d;background-color:#fff}.form-control-file,.form-control-range{display:block;width:100%}.col-form-label{padding-top:calc(.45rem + 1px);padding-bottom:calc(.45rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.09375rem;line-height:1.5}.col-form-label-sm{padding-top:calc(.28rem + 1px);padding-bottom:calc(.28rem + 1px);font-size:.7875rem;line-height:1.5}.form-control-plaintext{display:block;width:100%;padding:.45rem 0;margin-bottom:0;font-size:.875rem;line-height:1.5;color:#6c757d;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{height:calc(1.5em + .56rem + 2px);padding:.28rem .8rem;font-size:.7875rem;line-height:1.5;border-radius:.2rem}.form-control-lg{height:calc(1.5em + 1rem + 2px);padding:.5rem 1rem;font-size:1.09375rem;line-height:1.5;border-radius:.3rem}select.form-control[multiple],select.form-control[size]{height:auto}textarea.form-control{height:auto}.form-group{margin-bottom:1rem}.form-text{display:block;margin-top:.25rem}.form-row{display:flex;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label,.form-check-input[disabled]~.form-check-label{color:#98a6ad}.form-check-label{margin-bottom:0}.form-check-inline{display:inline-flex;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.75rem;color:#1abc9c}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.4rem .8rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(26,188,156,.9);border-radius:.2rem}.is-valid~.valid-feedback,.is-valid~.valid-tooltip,.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip{display:block}.form-control.is-valid,.was-validated .form-control:valid{border-color:#1abc9c;padding-right:calc(1.5em + .9rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231abc9c' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .225rem) center;background-size:calc(.75em + .45rem) calc(.75em + .45rem)}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#1abc9c;box-shadow:0 0 0 .15rem rgba(26,188,156,.25)}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:calc(1.5em + .9rem);background-position:top calc(.375em + .225rem) right calc(.375em + .225rem)}.custom-select.is-valid,.was-validated .custom-select:valid{border-color:#1abc9c;padding-right:calc(.75em + 2.575rem);background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .9rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231abc9c' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.9rem/calc(.75em + .45rem) calc(.75em + .45rem)}.custom-select.is-valid:focus,.was-validated .custom-select:valid:focus{border-color:#1abc9c;box-shadow:0 0 0 .15rem rgba(26,188,156,.25)}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#1abc9c}.form-check-input.is-valid~.valid-feedback,.form-check-input.is-valid~.valid-tooltip,.was-validated .form-check-input:valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid~.custom-control-label,.was-validated .custom-control-input:valid~.custom-control-label{color:#1abc9c}.custom-control-input.is-valid~.custom-control-label::before,.was-validated .custom-control-input:valid~.custom-control-label::before{border-color:#1abc9c}.custom-control-input.is-valid:checked~.custom-control-label::before,.was-validated .custom-control-input:valid:checked~.custom-control-label::before{border-color:#28e1bd;background-color:#28e1bd}.custom-control-input.is-valid:focus~.custom-control-label::before,.was-validated .custom-control-input:valid:focus~.custom-control-label::before{box-shadow:0 0 0 .15rem rgba(26,188,156,.25)}.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before{border-color:#1abc9c}.custom-file-input.is-valid~.custom-file-label,.was-validated .custom-file-input:valid~.custom-file-label{border-color:#1abc9c}.custom-file-input.is-valid:focus~.custom-file-label,.was-validated .custom-file-input:valid:focus~.custom-file-label{border-color:#1abc9c;box-shadow:0 0 0 .15rem rgba(26,188,156,.25)}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.75rem;color:#f1556c}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.4rem .8rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(241,85,108,.9);border-radius:.2rem}.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip{display:block}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#f1556c;padding-right:calc(1.5em + .9rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23f1556c' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23f1556c' stroke='none'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .225rem) center;background-size:calc(.75em + .45rem) calc(.75em + .45rem)}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#f1556c;box-shadow:0 0 0 .15rem rgba(241,85,108,.25)}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.5em + .9rem);background-position:top calc(.375em + .225rem) right calc(.375em + .225rem)}.custom-select.is-invalid,.was-validated .custom-select:invalid{border-color:#f1556c;padding-right:calc(.75em + 2.575rem);background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .9rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23f1556c' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23f1556c' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.9rem/calc(.75em + .45rem) calc(.75em + .45rem)}.custom-select.is-invalid:focus,.was-validated .custom-select:invalid:focus{border-color:#f1556c;box-shadow:0 0 0 .15rem rgba(241,85,108,.25)}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#f1556c}.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label{color:#f1556c}.custom-control-input.is-invalid~.custom-control-label::before,.was-validated .custom-control-input:invalid~.custom-control-label::before{border-color:#f1556c}.custom-control-input.is-invalid:checked~.custom-control-label::before,.was-validated .custom-control-input:invalid:checked~.custom-control-label::before{border-color:#f58495;background-color:#f58495}.custom-control-input.is-invalid:focus~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus~.custom-control-label::before{box-shadow:0 0 0 .15rem rgba(241,85,108,.25)}.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before{border-color:#f1556c}.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-file-input:invalid~.custom-file-label{border-color:#f1556c}.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label{border-color:#f1556c;box-shadow:0 0 0 .15rem rgba(241,85,108,.25)}.form-inline{display:flex;flex-flow:row wrap;align-items:center}.form-inline .form-check{width:100%}@media (min-width:576px){.form-inline label{display:flex;align-items:center;justify-content:center;margin-bottom:0}.form-inline .form-group{display:flex;flex:0 0 auto;flex-flow:row wrap;align-items:center;margin-bottom:0}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-plaintext{display:inline-block}.form-inline .custom-select,.form-inline .input-group{width:auto}.form-inline .form-check{display:flex;align-items:center;justify-content:center;width:auto;padding-left:0}.form-inline .form-check-input{position:relative;flex-shrink:0;margin-top:0;margin-right:.25rem;margin-left:0}.form-inline .custom-control{align-items:center;justify-content:center}.form-inline .custom-control-label{margin-bottom:0}}.btn{display:inline-block;font-weight:400;color:#6c757d;text-align:center;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.45rem .9rem;font-size:.875rem;line-height:1.5;border-radius:.15rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#6c757d;text-decoration:none}.btn.focus,.btn:focus{outline:0;box-shadow:0 0 0 .15rem rgba(102,88,221,.25)}.btn.disabled,.btn:disabled{opacity:.65}a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}.btn-primary{color:#fff;background-color:#6658dd;border-color:#6658dd}.btn-primary:hover{color:#fff;background-color:#4938d7;border-color:#3f2ed4}.btn-primary.focus,.btn-primary:focus{color:#fff;background-color:#4938d7;border-color:#3f2ed4;box-shadow:0 0 0 .15rem rgba(125,113,226,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#6658dd;border-color:#6658dd}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#3f2ed4;border-color:#3b29cc}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(125,113,226,.5)}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}.btn-secondary.focus,.btn-secondary:focus{color:#fff;background-color:#5a6268;border-color:#545b62;box-shadow:0 0 0 .15rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(130,138,145,.5)}.btn-success{color:#fff;background-color:#1abc9c;border-color:#1abc9c}.btn-success:hover{color:#fff;background-color:#159a80;border-color:#148f77}.btn-success.focus,.btn-success:focus{color:#fff;background-color:#159a80;border-color:#148f77;box-shadow:0 0 0 .15rem rgba(60,198,171,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#1abc9c;border-color:#1abc9c}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#148f77;border-color:#12846e}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(60,198,171,.5)}.btn-info{color:#fff;background-color:#4fc6e1;border-color:#4fc6e1}.btn-info:hover{color:#fff;background-color:#2ebbdb;border-color:#25b7d8}.btn-info.focus,.btn-info:focus{color:#fff;background-color:#2ebbdb;border-color:#25b7d8;box-shadow:0 0 0 .15rem rgba(105,207,230,.5)}.btn-info.disabled,.btn-info:disabled{color:#fff;background-color:#4fc6e1;border-color:#4fc6e1}.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active,.show>.btn-info.dropdown-toggle{color:#fff;background-color:#25b7d8;border-color:#23aecd}.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(105,207,230,.5)}.btn-warning{color:#fff;background-color:#f7b84b;border-color:#f7b84b}.btn-warning:hover{color:#fff;background-color:#f5aa26;border-color:#f5a51a}.btn-warning.focus,.btn-warning:focus{color:#fff;background-color:#f5aa26;border-color:#f5a51a;box-shadow:0 0 0 .15rem rgba(248,195,102,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#fff;background-color:#f7b84b;border-color:#f7b84b}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle{color:#fff;background-color:#f5a51a;border-color:#f4a00e}.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(248,195,102,.5)}.btn-danger{color:#fff;background-color:#f1556c;border-color:#f1556c}.btn-danger:hover{color:#fff;background-color:#ee324d;border-color:#ed2643}.btn-danger.focus,.btn-danger:focus{color:#fff;background-color:#ee324d;border-color:#ed2643;box-shadow:0 0 0 .15rem rgba(243,111,130,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#f1556c;border-color:#f1556c}.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#ed2643;border-color:#ec1a39}.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(243,111,130,.5)}.btn-light{color:#343a40;background-color:#f3f7f9;border-color:#f3f7f9}.btn-light:hover{color:#343a40;background-color:#dae6ec;border-color:#d1e0e8}.btn-light.focus,.btn-light:focus{color:#343a40;background-color:#dae6ec;border-color:#d1e0e8;box-shadow:0 0 0 .15rem rgba(214,219,221,.5)}.btn-light.disabled,.btn-light:disabled{color:#343a40;background-color:#f3f7f9;border-color:#f3f7f9}.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active,.show>.btn-light.dropdown-toggle{color:#343a40;background-color:#d1e0e8;border-color:#c9dbe4}.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(214,219,221,.5)}.btn-dark{color:#fff;background-color:#323a46;border-color:#323a46}.btn-dark:hover{color:#fff;background-color:#222830;border-color:#1d2128}.btn-dark.focus,.btn-dark:focus{color:#fff;background-color:#222830;border-color:#1d2128;box-shadow:0 0 0 .15rem rgba(81,88,98,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#323a46;border-color:#323a46}.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1d2128;border-color:#171b21}.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(81,88,98,.5)}.btn-pink{color:#fff;background-color:#f672a7;border-color:#f672a7}.btn-pink:hover{color:#fff;background-color:#f44e91;border-color:#f34289}.btn-pink.focus,.btn-pink:focus{color:#fff;background-color:#f44e91;border-color:#f34289;box-shadow:0 0 0 .15rem rgba(247,135,180,.5)}.btn-pink.disabled,.btn-pink:disabled{color:#fff;background-color:#f672a7;border-color:#f672a7}.btn-pink:not(:disabled):not(.disabled).active,.btn-pink:not(:disabled):not(.disabled):active,.show>.btn-pink.dropdown-toggle{color:#fff;background-color:#f34289;border-color:#f23682}.btn-pink:not(:disabled):not(.disabled).active:focus,.btn-pink:not(:disabled):not(.disabled):active:focus,.show>.btn-pink.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(247,135,180,.5)}.btn-blue{color:#fff;background-color:#4a81d4;border-color:#4a81d4}.btn-blue:hover{color:#fff;background-color:#306cc8;border-color:#2d67be}.btn-blue.focus,.btn-blue:focus{color:#fff;background-color:#306cc8;border-color:#2d67be;box-shadow:0 0 0 .15rem rgba(101,148,218,.5)}.btn-blue.disabled,.btn-blue:disabled{color:#fff;background-color:#4a81d4;border-color:#4a81d4}.btn-blue:not(:disabled):not(.disabled).active,.btn-blue:not(:disabled):not(.disabled):active,.show>.btn-blue.dropdown-toggle{color:#fff;background-color:#2d67be;border-color:#2b61b4}.btn-blue:not(:disabled):not(.disabled).active:focus,.btn-blue:not(:disabled):not(.disabled):active:focus,.show>.btn-blue.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(101,148,218,.5)}.btn-outline-primary{color:#6658dd;border-color:#6658dd}.btn-outline-primary:hover{color:#fff;background-color:#6658dd;border-color:#6658dd}.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 .15rem rgba(102,88,221,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#6658dd;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#6658dd;border-color:#6658dd}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(102,88,221,.5)}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary.focus,.btn-outline-secondary:focus{box-shadow:0 0 0 .15rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(108,117,125,.5)}.btn-outline-success{color:#1abc9c;border-color:#1abc9c}.btn-outline-success:hover{color:#fff;background-color:#1abc9c;border-color:#1abc9c}.btn-outline-success.focus,.btn-outline-success:focus{box-shadow:0 0 0 .15rem rgba(26,188,156,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#1abc9c;background-color:transparent}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active,.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#1abc9c;border-color:#1abc9c}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(26,188,156,.5)}.btn-outline-info{color:#4fc6e1;border-color:#4fc6e1}.btn-outline-info:hover{color:#fff;background-color:#4fc6e1;border-color:#4fc6e1}.btn-outline-info.focus,.btn-outline-info:focus{box-shadow:0 0 0 .15rem rgba(79,198,225,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#4fc6e1;background-color:transparent}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active,.show>.btn-outline-info.dropdown-toggle{color:#fff;background-color:#4fc6e1;border-color:#4fc6e1}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(79,198,225,.5)}.btn-outline-warning{color:#f7b84b;border-color:#f7b84b}.btn-outline-warning:hover{color:#fff;background-color:#f7b84b;border-color:#f7b84b}.btn-outline-warning.focus,.btn-outline-warning:focus{box-shadow:0 0 0 .15rem rgba(247,184,75,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#f7b84b;background-color:transparent}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-outline-warning.dropdown-toggle{color:#fff;background-color:#f7b84b;border-color:#f7b84b}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(247,184,75,.5)}.btn-outline-danger{color:#f1556c;border-color:#f1556c}.btn-outline-danger:hover{color:#fff;background-color:#f1556c;border-color:#f1556c}.btn-outline-danger.focus,.btn-outline-danger:focus{box-shadow:0 0 0 .15rem rgba(241,85,108,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#f1556c;background-color:transparent}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#f1556c;border-color:#f1556c}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(241,85,108,.5)}.btn-outline-light{color:#f3f7f9;border-color:#f3f7f9}.btn-outline-light:hover{color:#343a40;background-color:#f3f7f9;border-color:#f3f7f9}.btn-outline-light.focus,.btn-outline-light:focus{box-shadow:0 0 0 .15rem rgba(243,247,249,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f3f7f9;background-color:transparent}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active,.show>.btn-outline-light.dropdown-toggle{color:#343a40;background-color:#f3f7f9;border-color:#f3f7f9}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(243,247,249,.5)}.btn-outline-dark{color:#323a46;border-color:#323a46}.btn-outline-dark:hover{color:#fff;background-color:#323a46;border-color:#323a46}.btn-outline-dark.focus,.btn-outline-dark:focus{box-shadow:0 0 0 .15rem rgba(50,58,70,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#323a46;background-color:transparent}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#323a46;border-color:#323a46}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(50,58,70,.5)}.btn-outline-pink{color:#f672a7;border-color:#f672a7}.btn-outline-pink:hover{color:#fff;background-color:#f672a7;border-color:#f672a7}.btn-outline-pink.focus,.btn-outline-pink:focus{box-shadow:0 0 0 .15rem rgba(246,114,167,.5)}.btn-outline-pink.disabled,.btn-outline-pink:disabled{color:#f672a7;background-color:transparent}.btn-outline-pink:not(:disabled):not(.disabled).active,.btn-outline-pink:not(:disabled):not(.disabled):active,.show>.btn-outline-pink.dropdown-toggle{color:#fff;background-color:#f672a7;border-color:#f672a7}.btn-outline-pink:not(:disabled):not(.disabled).active:focus,.btn-outline-pink:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-pink.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(246,114,167,.5)}.btn-outline-blue{color:#4a81d4;border-color:#4a81d4}.btn-outline-blue:hover{color:#fff;background-color:#4a81d4;border-color:#4a81d4}.btn-outline-blue.focus,.btn-outline-blue:focus{box-shadow:0 0 0 .15rem rgba(74,129,212,.5)}.btn-outline-blue.disabled,.btn-outline-blue:disabled{color:#4a81d4;background-color:transparent}.btn-outline-blue:not(:disabled):not(.disabled).active,.btn-outline-blue:not(:disabled):not(.disabled):active,.show>.btn-outline-blue.dropdown-toggle{color:#fff;background-color:#4a81d4;border-color:#4a81d4}.btn-outline-blue:not(:disabled):not(.disabled).active:focus,.btn-outline-blue:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-blue.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(74,129,212,.5)}.btn-link{font-weight:400;color:#6658dd;text-decoration:none}.btn-link:hover{color:#3827c1;text-decoration:none}.btn-link.focus,.btn-link:focus{text-decoration:none;box-shadow:none}.btn-link.disabled,.btn-link:disabled{color:#98a6ad;pointer-events:none}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.09375rem;line-height:1.5;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.28rem .8rem;font-size:.7875rem;line-height:1.5;border-radius:.2rem}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{position:relative;height:0;overflow:hidden;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{transition:none}}.dropdown,.dropleft,.dropright,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.25rem 0;margin:.125rem 0 0;font-size:.875rem;color:#6c757d;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid #e9f0f4;border-radius:.25rem}.dropdown-menu-left{right:auto;left:0}.dropdown-menu-right{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-left{right:auto;left:0}.dropdown-menu-sm-right{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-left{right:auto;left:0}.dropdown-menu-md-right{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-left{right:auto;left:0}.dropdown-menu-lg-right{right:0;left:auto}}@media (min-width:1367px){.dropdown-menu-xl-left{right:auto;left:0}.dropdown-menu-xl-right{right:0;left:auto}}.dropup .dropdown-menu{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropright .dropdown-menu{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropright .dropdown-toggle::after{vertical-align:0}.dropleft .dropdown-menu{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropleft .dropdown-toggle::before{vertical-align:0}.dropdown-menu[x-placement^=bottom],.dropdown-menu[x-placement^=left],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=top]{right:auto;bottom:auto}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #f7f7f7}.dropdown-item{display:block;width:100%;padding:.375rem 1.2rem;clear:both;font-weight:400;color:#6c757d;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#272e37;text-decoration:none;background-color:#f3f7f9}.dropdown-item.active,.dropdown-item:active{color:#323a46;text-decoration:none;background-color:#f3f7f9}.dropdown-item.disabled,.dropdown-item:disabled{color:#98a6ad;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.25rem 1.2rem;margin-bottom:0;font-size:.7875rem;color:inherit;white-space:nowrap}.dropdown-item-text{display:block;padding:.375rem 1.2rem;color:#6c757d}.btn-group,.btn-group-vertical{position:relative;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;flex:1 1 auto}.btn-group-vertical>.btn:hover,.btn-group>.btn:hover{z-index:1}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus{z-index:1}.btn-toolbar{display:flex;flex-wrap:wrap;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.675rem;padding-left:.675rem}.dropdown-toggle-split::after,.dropright .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after{margin-left:0}.dropleft .dropdown-toggle-split::before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.6rem;padding-left:.6rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{flex-direction:column;align-items:flex-start;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn:not(:first-child){border-top-left-radius:0;border-top-right-radius:0}.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn{margin-bottom:0}.btn-group-toggle>.btn input[type=checkbox],.btn-group-toggle>.btn input[type=radio],.btn-group-toggle>.btn-group>.btn input[type=checkbox],.btn-group-toggle>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:flex;flex-wrap:wrap;align-items:stretch;width:100%}.input-group>.custom-file,.input-group>.custom-select,.input-group>.form-control,.input-group>.form-control-plaintext{position:relative;flex:1 1 0%;min-width:0;margin-bottom:0}.input-group>.custom-file+.custom-file,.input-group>.custom-file+.custom-select,.input-group>.custom-file+.form-control,.input-group>.custom-select+.custom-file,.input-group>.custom-select+.custom-select,.input-group>.custom-select+.form-control,.input-group>.form-control+.custom-file,.input-group>.form-control+.custom-select,.input-group>.form-control+.form-control,.input-group>.form-control-plaintext+.custom-file,.input-group>.form-control-plaintext+.custom-select,.input-group>.form-control-plaintext+.form-control{margin-left:-1px}.input-group>.custom-file .custom-file-input:focus~.custom-file-label,.input-group>.custom-select:focus,.input-group>.form-control:focus{z-index:3}.input-group>.custom-file .custom-file-input:focus{z-index:4}.input-group>.custom-select:not(:last-child),.input-group>.form-control:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-select:not(:first-child),.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.input-group>.custom-file{display:flex;align-items:center}.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label::after{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-file:not(:first-child) .custom-file-label{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-append,.input-group-prepend{display:flex}.input-group-append .btn,.input-group-prepend .btn{position:relative;z-index:2}.input-group-append .btn:focus,.input-group-prepend .btn:focus{z-index:3}.input-group-append .btn+.btn,.input-group-append .btn+.input-group-text,.input-group-append .input-group-text+.btn,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-prepend .input-group-text+.input-group-text{margin-left:-1px}.input-group-prepend{margin-right:-1px}.input-group-append{margin-left:-1px}.input-group-text{display:flex;align-items:center;padding:.45rem .9rem;margin-bottom:0;font-size:.875rem;font-weight:400;line-height:1.5;color:#6c757d;text-align:center;white-space:nowrap;background-color:#f7f7f7;border:1px solid #ced4da;border-radius:.2rem}.input-group-text input[type=checkbox],.input-group-text input[type=radio]{margin-top:0}.input-group-lg>.custom-select,.input-group-lg>.form-control:not(textarea){height:calc(1.5em + 1rem + 2px)}.input-group-lg>.custom-select,.input-group-lg>.form-control,.input-group-lg>.input-group-append>.btn,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-prepend>.input-group-text{padding:.5rem 1rem;font-size:1.09375rem;line-height:1.5;border-radius:.3rem}.input-group-sm>.custom-select,.input-group-sm>.form-control:not(textarea){height:calc(1.5em + .56rem + 2px)}.input-group-sm>.custom-select,.input-group-sm>.form-control,.input-group-sm>.input-group-append>.btn,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-prepend>.input-group-text{padding:.28rem .8rem;font-size:.7875rem;line-height:1.5;border-radius:.2rem}.input-group-lg>.custom-select,.input-group-sm>.custom-select{padding-right:1.9rem}.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text{border-top-left-radius:0;border-bottom-left-radius:0}.custom-control{position:relative;display:block;min-height:1.3125rem;padding-left:1.5rem}.custom-control-inline{display:inline-flex;margin-right:1rem}.custom-control-input{position:absolute;left:0;z-index:-1;width:1rem;height:1.15625rem;opacity:0}.custom-control-input:checked~.custom-control-label::before{color:#fff;border-color:#6658dd;background-color:#6658dd}.custom-control-input:focus~.custom-control-label::before{box-shadow:none}.custom-control-input:focus:not(:checked)~.custom-control-label::before{border-color:#b1bbc4}.custom-control-input:not(:disabled):active~.custom-control-label::before{color:#fff;background-color:#eeecfb;border-color:#eeecfb}.custom-control-input:disabled~.custom-control-label,.custom-control-input[disabled]~.custom-control-label{color:#98a6ad}.custom-control-input:disabled~.custom-control-label::before,.custom-control-input[disabled]~.custom-control-label::before{background-color:#fff}.custom-control-label{position:relative;margin-bottom:0;vertical-align:top}.custom-control-label::before{position:absolute;top:.15625rem;left:-1.5rem;display:block;width:1rem;height:1rem;pointer-events:none;content:"";background-color:#fff;border:#adb5bd solid 1px}.custom-control-label::after{position:absolute;top:.15625rem;left:-1.5rem;display:block;width:1rem;height:1rem;content:"";background:no-repeat 50%/50% 50%}.custom-checkbox .custom-control-label::before{border-radius:.25rem}.custom-checkbox .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e")}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before{border-color:#6658dd;background-color:#6658dd}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")}.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(102,88,221,.5)}.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before{background-color:rgba(102,88,221,.5)}.custom-radio .custom-control-label::before{border-radius:50%}.custom-radio .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(102,88,221,.5)}.custom-switch{padding-left:2.25rem}.custom-switch .custom-control-label::before{left:-2.25rem;width:1.75rem;pointer-events:all;border-radius:.5rem}.custom-switch .custom-control-label::after{top:calc(.15625rem + 2px);left:calc(-2.25rem + 2px);width:calc(1rem - 4px);height:calc(1rem - 4px);background-color:#adb5bd;border-radius:.5rem;transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.custom-switch .custom-control-label::after{transition:none}}.custom-switch .custom-control-input:checked~.custom-control-label::after{background-color:#fff;transform:translateX(.75rem)}.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(102,88,221,.5)}.custom-select{display:inline-block;width:100%;height:calc(1.5em + .9rem + 2px);padding:.45rem 1.9rem .45rem .9rem;font-size:.875rem;font-weight:400;line-height:1.5;color:#6c757d;vertical-align:middle;background:#fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .9rem center/8px 10px;border:1px solid #ced4da;border-radius:.25rem;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-select:focus{border-color:#b1bbc4;outline:0;box-shadow:none}.custom-select:focus::-ms-value{color:#6c757d;background-color:#fff}.custom-select[multiple],.custom-select[size]:not([size="1"]){height:auto;padding-right:.9rem;background-image:none}.custom-select:disabled{color:#98a6ad;background-color:#f7f7f7}.custom-select::-ms-expand{display:none}.custom-select:-moz-focusring{color:transparent;text-shadow:0 0 0 #6c757d}.custom-select-sm{height:calc(1.5em + .56rem + 2px);padding-top:.28rem;padding-bottom:.28rem;padding-left:.8rem;font-size:.7875rem}.custom-select-lg{height:calc(1.5em + 1rem + 2px);padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.09375rem}.custom-file{position:relative;display:inline-block;width:100%;height:calc(1.5em + .9rem + 2px);margin-bottom:0}.custom-file-input{position:relative;z-index:2;width:100%;height:calc(1.5em + .9rem + 2px);margin:0;opacity:0}.custom-file-input:focus~.custom-file-label{border-color:#b1bbc4;box-shadow:none}.custom-file-input:disabled~.custom-file-label,.custom-file-input[disabled]~.custom-file-label{background-color:#fff}.custom-file-input:lang(en)~.custom-file-label::after{content:"Browse"}.custom-file-input~.custom-file-label[data-browse]::after{content:attr(data-browse)}.custom-file-label{position:absolute;top:0;right:0;left:0;z-index:1;height:calc(1.5em + .9rem + 2px);padding:.45rem .9rem;font-weight:400;line-height:1.5;color:#6c757d;background-color:#fff;border:1px solid #ced4da;border-radius:.2rem}.custom-file-label::after{position:absolute;top:0;right:0;bottom:0;z-index:3;display:block;height:calc(1.5em + .9rem);padding:.45rem .9rem;line-height:1.5;color:#6c757d;content:"Browse";background-color:#f7f7f7;border-left:inherit;border-radius:0 .2rem .2rem 0}.custom-range{width:100%;height:1.3rem;padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-range:focus{outline:0}.custom-range:focus::-webkit-slider-thumb{box-shadow:0 0 0 1px #f5f6f8,none}.custom-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #f5f6f8,none}.custom-range:focus::-ms-thumb{box-shadow:0 0 0 1px #f5f6f8,none}.custom-range::-moz-focus-outer{border:0}.custom-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:#6658dd;border:0;border-radius:1rem;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-webkit-slider-thumb{-webkit-transition:none;transition:none}}.custom-range::-webkit-slider-thumb:active{background-color:#eeecfb}.custom-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-moz-range-thumb{width:1rem;height:1rem;background-color:#6658dd;border:0;border-radius:1rem;-moz-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-moz-range-thumb{-moz-transition:none;transition:none}}.custom-range::-moz-range-thumb:active{background-color:#eeecfb}.custom-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-ms-thumb{width:1rem;height:1rem;margin-top:0;margin-right:.15rem;margin-left:.15rem;background-color:#6658dd;border:0;border-radius:1rem;-ms-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-ms-thumb{-ms-transition:none;transition:none}}.custom-range::-ms-thumb:active{background-color:#eeecfb}.custom-range::-ms-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:transparent;border-color:transparent;border-width:.5rem}.custom-range::-ms-fill-lower{background-color:#dee2e6;border-radius:1rem}.custom-range::-ms-fill-upper{margin-right:15px;background-color:#dee2e6;border-radius:1rem}.custom-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.custom-range:disabled::-webkit-slider-runnable-track{cursor:default}.custom-range:disabled::-moz-range-thumb{background-color:#adb5bd}.custom-range:disabled::-moz-range-track{cursor:default}.custom-range:disabled::-ms-thumb{background-color:#adb5bd}.custom-control-label::before,.custom-file-label,.custom-select{transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.custom-control-label::before,.custom-file-label,.custom-select{transition:none}}.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#98a6ad;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-item{margin-bottom:-1px}.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#f7f7f7 #f7f7f7 #dee2e6}.nav-tabs .nav-link.disabled{color:#98a6ad;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#6c757d;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#6658dd}.nav-fill .nav-item{flex:1 1 auto;text-align:center}.nav-justified .nav-item{flex-basis:0;flex-grow:1;text-align:center}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding:.75rem 1.5rem}.navbar .container,.navbar .container-fluid,.navbar .container-lg,.navbar .container-md,.navbar .container-sm,.navbar .container-xl{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.33594rem;padding-bottom:.33594rem;margin-right:1.5rem;font-size:1.09375rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-text{display:inline-block;padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.09375rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.15rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:no-repeat center center;background-size:100% 100%}@media (max-width:575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-xl{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-sm .navbar-nav{flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-xl{flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}@media (max-width:767.98px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-md,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-xl{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-md .navbar-nav{flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-md,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-xl{flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-xl{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-xl{flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}@media (max-width:1366.98px){.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-xl{padding-right:0;padding-left:0}}@media (min-width:1367px){.navbar-expand-xl{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-xl .navbar-nav{flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-xl{flex-wrap:nowrap}.navbar-expand-xl .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}}.navbar-expand{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-lg,.navbar-expand>.container-md,.navbar-expand>.container-sm,.navbar-expand>.container-xl{padding-right:0;padding-left:0}.navbar-expand .navbar-nav{flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-lg,.navbar-expand>.container-md,.navbar-expand>.container-sm,.navbar-expand>.container-xl{flex-wrap:nowrap}.navbar-expand .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-light .navbar-text{color:rgba(0,0,0,.5)}.navbar-light .navbar-text a{color:rgba(0,0,0,.9)}.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.5)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.5);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-dark .navbar-text{color:rgba(255,255,255,.5)}.navbar-dark .navbar-text a{color:#fff}.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:0 solid #f7f7f7;border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group:first-child .list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card>.list-group:last-child .list-group-item:last-child{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-body{flex:1 1 auto;min-height:1px;padding:1.5rem}.card-title{margin-bottom:1rem}.card-subtitle{margin-top:-.5rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1.5rem}.card-header{padding:1rem 1.5rem;margin-bottom:0;background-color:#edeff1;border-bottom:0 solid #f7f7f7}.card-header:first-child{border-radius:.25rem .25rem 0 0}.card-header+.list-group .list-group-item:first-child{border-top:0}.card-footer{padding:1rem 1.5rem;background-color:#edeff1;border-top:0 solid #f7f7f7}.card-footer:last-child{border-radius:0 0 .25rem .25rem}.card-header-tabs{margin-right:-.75rem;margin-bottom:-1rem;margin-left:-.75rem;border-bottom:0}.card-header-pills{margin-right:-.75rem;margin-left:-.75rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem}.card-img,.card-img-bottom,.card-img-top{flex-shrink:0;width:100%}.card-img,.card-img-top{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card-img,.card-img-bottom{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-deck .card{margin-bottom:12px}@media (min-width:576px){.card-deck{display:flex;flex-flow:row wrap;margin-right:-12px;margin-left:-12px}.card-deck .card{flex:1 0 0%;margin-right:12px;margin-bottom:0;margin-left:12px}}.card-group>.card{margin-bottom:12px}@media (min-width:576px){.card-group{display:flex;flex-flow:row wrap}.card-group>.card{flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.card-columns .card{margin-bottom:1.25rem}@media (min-width:576px){.card-columns{column-count:3;column-gap:1.25rem;orphans:1;widows:1}.card-columns .card{display:inline-block;width:100%}}.accordion>.card{overflow:hidden}.accordion>.card:not(:last-of-type){border-bottom:0;border-bottom-right-radius:0;border-bottom-left-radius:0}.accordion>.card:not(:first-of-type){border-top-left-radius:0;border-top-right-radius:0}.accordion>.card>.card-header{border-radius:0;margin-bottom:0}.breadcrumb{display:flex;flex-wrap:wrap;padding:1rem 0;margin-bottom:1rem;list-style:none;background-color:transparent;border-radius:.25rem}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{display:inline-block;padding-right:.5rem;color:#ced4da;content:"󰅂"}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:underline}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:none}.breadcrumb-item.active{color:#adb5bd}.pagination{display:flex;padding-left:0;list-style:none;border-radius:.25rem}.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#323a46;background-color:#fff;border:1px solid #dee2e6}.page-link:hover{z-index:2;color:#323a46;text-decoration:none;background-color:#f7f7f7;border-color:#dee2e6}.page-link:focus{z-index:3;outline:0;box-shadow:0 0 0 .15rem rgba(102,88,221,.25)}.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.page-item.active .page-link{z-index:3;color:#fff;background-color:#6658dd;border-color:#6658dd}.page-item.disabled .page-link{color:#98a6ad;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.09375rem;line-height:1.5}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.7875rem;line-height:1.5}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.badge{transition:none}}a.badge:focus,a.badge:hover{text-decoration:none}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#6658dd}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#3f2ed4}a.badge-primary.focus,a.badge-primary:focus{outline:0;box-shadow:0 0 0 .15rem rgba(102,88,221,.5)}.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}a.badge-secondary.focus,a.badge-secondary:focus{outline:0;box-shadow:0 0 0 .15rem rgba(108,117,125,.5)}.badge-success{color:#fff;background-color:#1abc9c}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#148f77}a.badge-success.focus,a.badge-success:focus{outline:0;box-shadow:0 0 0 .15rem rgba(26,188,156,.5)}.badge-info{color:#fff;background-color:#4fc6e1}a.badge-info:focus,a.badge-info:hover{color:#fff;background-color:#25b7d8}a.badge-info.focus,a.badge-info:focus{outline:0;box-shadow:0 0 0 .15rem rgba(79,198,225,.5)}.badge-warning{color:#fff;background-color:#f7b84b}a.badge-warning:focus,a.badge-warning:hover{color:#fff;background-color:#f5a51a}a.badge-warning.focus,a.badge-warning:focus{outline:0;box-shadow:0 0 0 .15rem rgba(247,184,75,.5)}.badge-danger{color:#fff;background-color:#f1556c}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#ed2643}a.badge-danger.focus,a.badge-danger:focus{outline:0;box-shadow:0 0 0 .15rem rgba(241,85,108,.5)}.badge-light{color:#343a40;background-color:#f3f7f9}a.badge-light:focus,a.badge-light:hover{color:#343a40;background-color:#d1e0e8}a.badge-light.focus,a.badge-light:focus{outline:0;box-shadow:0 0 0 .15rem rgba(243,247,249,.5)}.badge-dark{color:#fff;background-color:#323a46}a.badge-dark:focus,a.badge-dark:hover{color:#fff;background-color:#1d2128}a.badge-dark.focus,a.badge-dark:focus{outline:0;box-shadow:0 0 0 .15rem rgba(50,58,70,.5)}.badge-pink{color:#fff;background-color:#f672a7}a.badge-pink:focus,a.badge-pink:hover{color:#fff;background-color:#f34289}a.badge-pink.focus,a.badge-pink:focus{outline:0;box-shadow:0 0 0 .15rem rgba(246,114,167,.5)}.badge-blue{color:#fff;background-color:#4a81d4}a.badge-blue:focus,a.badge-blue:hover{color:#fff;background-color:#2d67be}a.badge-blue.focus,a.badge-blue:focus{outline:0;box-shadow:0 0 0 .15rem rgba(74,129,212,.5)}.jumbotron{padding:2rem 1rem;margin-bottom:2rem;background-color:#edeff1;border-radius:.3rem}@media (min-width:576px){.jumbotron{padding:4rem 2rem}}.jumbotron-fluid{padding-right:0;padding-left:0;border-radius:0}.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:3.9rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#352e73;background-color:#e0def8;border-color:#d4d0f5}.alert-primary hr{border-top-color:#c1bbf1}.alert-primary .alert-link{color:#241f4f}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#0e6251;background-color:#d1f2eb;border-color:#bfece3}.alert-success hr{border-top-color:#abe6da}.alert-success .alert-link{color:#08352c}.alert-info{color:#296775;background-color:#dcf4f9;border-color:#ceeff7}.alert-info hr{border-top-color:#b8e8f3}.alert-info .alert-link{color:#1c464f}.alert-warning{color:#806027;background-color:#fdf1db;border-color:#fdebcd}.alert-warning hr{border-top-color:#fce1b4}.alert-warning .alert-link{color:#59431b}.alert-danger{color:#7d2c38;background-color:#fcdde2;border-color:#fbcfd6}.alert-danger hr{border-top-color:#f9b7c2}.alert-danger .alert-link{color:#571f27}.alert-light{color:#7e8081;background-color:#fdfdfe;border-color:#fcfdfd}.alert-light hr{border-top-color:#edf3f3}.alert-light .alert-link{color:#656667}.alert-dark{color:#1a1e24;background-color:#d6d8da;border-color:#c6c8cb}.alert-dark hr{border-top-color:#b9bbbf}.alert-dark .alert-link{color:#050506}.alert-pink{color:#803b57;background-color:#fde3ed;border-color:#fcd8e6}.alert-pink hr{border-top-color:#fac0d7}.alert-pink .alert-link{color:#5d2b3f}.alert-blue{color:#26436e;background-color:#dbe6f6;border-color:#ccdcf3}.alert-blue hr{border-top-color:#b7ceee}.alert-blue .alert-link{color:#192c48}@keyframes progress-bar-stripes{from{background-position:.75rem 0}to{background-position:0 0}}.progress{display:flex;height:.75rem;overflow:hidden;font-size:.65625rem;background-color:#eef0f2;border-radius:.25rem}.progress-bar{display:flex;flex-direction:column;justify-content:center;overflow:hidden;color:#fff;text-align:center;white-space:nowrap;background-color:#6658dd;transition:width .6s ease}@media (prefers-reduced-motion:reduce){.progress-bar{transition:none}}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:.75rem .75rem}.progress-bar-animated{animation:progress-bar-stripes 1s linear infinite}@media (prefers-reduced-motion:reduce){.progress-bar-animated{animation:none}}.media{display:flex;align-items:flex-start}.media-body{flex:1}.list-group{display:flex;flex-direction:column;padding-left:0;margin-bottom:0}.list-group-item-action{width:100%;color:#6c757d;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{z-index:1;color:#6c757d;text-decoration:none;background-color:#f3f7f9}.list-group-item-action:active{color:#6c757d;background-color:#f7f7f7}.list-group-item{position:relative;display:block;padding:.75rem 1.25rem;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.list-group-item:last-child{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.list-group-item.disabled,.list-group-item:disabled{color:#98a6ad;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#6658dd;border-color:#6658dd}.list-group-item+.list-group-item{border-top-width:0}.list-group-item+.list-group-item.active{margin-top:-1px;border-top-width:1px}.list-group-horizontal{flex-direction:row}.list-group-horizontal .list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal .list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal .list-group-item.active{margin-top:0}.list-group-horizontal .list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal .list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}@media (min-width:576px){.list-group-horizontal-sm{flex-direction:row}.list-group-horizontal-sm .list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-sm .list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-sm .list-group-item.active{margin-top:0}.list-group-horizontal-sm .list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-sm .list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:768px){.list-group-horizontal-md{flex-direction:row}.list-group-horizontal-md .list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-md .list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-md .list-group-item.active{margin-top:0}.list-group-horizontal-md .list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-md .list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:992px){.list-group-horizontal-lg{flex-direction:row}.list-group-horizontal-lg .list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-lg .list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-lg .list-group-item.active{margin-top:0}.list-group-horizontal-lg .list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-lg .list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1367px){.list-group-horizontal-xl{flex-direction:row}.list-group-horizontal-xl .list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xl .list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xl .list-group-item.active{margin-top:0}.list-group-horizontal-xl .list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xl .list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}.list-group-flush .list-group-item{border-right-width:0;border-left-width:0;border-radius:0}.list-group-flush .list-group-item:first-child{border-top-width:0}.list-group-flush:last-child .list-group-item:last-child{border-bottom-width:0}.list-group-item-primary{color:#352e73;background-color:#d4d0f5}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#352e73;background-color:#c1bbf1}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#352e73;border-color:#352e73}.list-group-item-secondary{color:#383d41;background-color:#d6d8db}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#383d41;background-color:#c8cbcf}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#383d41;border-color:#383d41}.list-group-item-success{color:#0e6251;background-color:#bfece3}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#0e6251;background-color:#abe6da}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#0e6251;border-color:#0e6251}.list-group-item-info{color:#296775;background-color:#ceeff7}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#296775;background-color:#b8e8f3}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#296775;border-color:#296775}.list-group-item-warning{color:#806027;background-color:#fdebcd}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#806027;background-color:#fce1b4}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#806027;border-color:#806027}.list-group-item-danger{color:#7d2c38;background-color:#fbcfd6}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#7d2c38;background-color:#f9b7c2}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#7d2c38;border-color:#7d2c38}.list-group-item-light{color:#7e8081;background-color:#fcfdfd}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#7e8081;background-color:#edf3f3}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#7e8081;border-color:#7e8081}.list-group-item-dark{color:#1a1e24;background-color:#c6c8cb}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#1a1e24;background-color:#b9bbbf}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#1a1e24;border-color:#1a1e24}.list-group-item-pink{color:#803b57;background-color:#fcd8e6}.list-group-item-pink.list-group-item-action:focus,.list-group-item-pink.list-group-item-action:hover{color:#803b57;background-color:#fac0d7}.list-group-item-pink.list-group-item-action.active{color:#fff;background-color:#803b57;border-color:#803b57}.list-group-item-blue{color:#26436e;background-color:#ccdcf3}.list-group-item-blue.list-group-item-action:focus,.list-group-item-blue.list-group-item-action:hover{color:#26436e;background-color:#b7ceee}.list-group-item-blue.list-group-item-action.active{color:#fff;background-color:#26436e;border-color:#26436e}.close{float:right;font-size:1.4rem;font-weight:700;line-height:1;color:#000;text-shadow:none;opacity:.5}.close:hover{color:#000;text-decoration:none}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0;-webkit-appearance:none;-moz-appearance:none;appearance:none}a.close.disabled{pointer-events:none}.toast{max-width:350px;overflow:hidden;font-size:.875rem;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);box-shadow:0 .25rem .75rem rgba(0,0,0,.1);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);opacity:0;border-radius:.25rem}.toast:not(:last-child){margin-bottom:.75rem}.toast.showing{opacity:1}.toast.show{display:block;opacity:1}.toast.hide{display:none}.toast-header{display:flex;align-items:center;padding:.25rem .75rem;color:#98a6ad;background-color:rgba(255,255,255,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05)}.toast-body{padding:.75rem}.modal-open{overflow:hidden}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:transform .3s ease-out;transform:translate(0,-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{transform:none}.modal.modal-static .modal-dialog{transform:scale(1.02)}.modal-dialog-scrollable{display:flex;max-height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 1rem);overflow:hidden}.modal-dialog-scrollable .modal-footer,.modal-dialog-scrollable .modal-header{flex-shrink:0}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem)}.modal-dialog-centered::before{display:block;height:calc(100vh - 1rem);content:""}.modal-dialog-centered.modal-dialog-scrollable{flex-direction:column;justify-content:center;height:100%}.modal-dialog-centered.modal-dialog-scrollable .modal-content{max-height:none}.modal-dialog-centered.modal-dialog-scrollable::before{content:none}.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:0 solid transparent;border-radius:.2rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#323a46}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:flex;align-items:flex-start;justify-content:space-between;padding:1rem 1rem;border-bottom:0 solid #e5e8eb;border-top-left-radius:.2rem;border-top-right-radius:.2rem}.modal-header .close{padding:1rem 1rem;margin:-1rem -1rem -1rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;flex:1 1 auto;padding:1rem}.modal-footer{display:flex;flex-wrap:wrap;align-items:center;justify-content:flex-end;padding:.75rem;border-top:0 solid #e5e8eb;border-bottom-right-radius:.2rem;border-bottom-left-radius:.2rem}.modal-footer>*{margin:.25rem}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{max-height:calc(100% - 3.5rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-dialog-centered::before{height:calc(100vh - 3.5rem)}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1367px){.modal-xl{max-width:1140px}}.tooltip{position:absolute;z-index:1070;display:block;margin:0;font-family:Nunito,sans-serif;font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[x-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[x-placement^=top] .arrow,.bs-tooltip-top .arrow{bottom:0}.bs-tooltip-auto[x-placement^=top] .arrow::before,.bs-tooltip-top .arrow::before{top:0;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[x-placement^=right],.bs-tooltip-right{padding:0 .4rem}.bs-tooltip-auto[x-placement^=right] .arrow,.bs-tooltip-right .arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=right] .arrow::before,.bs-tooltip-right .arrow::before{right:0;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[x-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[x-placement^=bottom] .arrow,.bs-tooltip-bottom .arrow{top:0}.bs-tooltip-auto[x-placement^=bottom] .arrow::before,.bs-tooltip-bottom .arrow::before{bottom:0;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[x-placement^=left],.bs-tooltip-left{padding:0 .4rem}.bs-tooltip-auto[x-placement^=left] .arrow,.bs-tooltip-left .arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=left] .arrow::before,.bs-tooltip-left .arrow::before{left:0;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.4rem .8rem;color:#fff;text-align:center;background-color:#000;border-radius:.2rem}.popover{position:absolute;top:0;left:0;z-index:1060;display:block;max-width:276px;font-family:Nunito,sans-serif;font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.7875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid #dee2e6;border-radius:.25rem}.popover .arrow{position:absolute;display:block;width:1rem;height:.5rem;margin:0 .25rem}.popover .arrow::after,.popover .arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[x-placement^=top],.bs-popover-top{margin-bottom:.5rem}.bs-popover-auto[x-placement^=top]>.arrow,.bs-popover-top>.arrow{bottom:calc(-.5rem - 1px)}.bs-popover-auto[x-placement^=top]>.arrow::before,.bs-popover-top>.arrow::before{bottom:0;border-width:.5rem .5rem 0;border-top-color:#dee2e6}.bs-popover-auto[x-placement^=top]>.arrow::after,.bs-popover-top>.arrow::after{bottom:1px;border-width:.5rem .5rem 0;border-top-color:#fff}.bs-popover-auto[x-placement^=right],.bs-popover-right{margin-left:.5rem}.bs-popover-auto[x-placement^=right]>.arrow,.bs-popover-right>.arrow{left:calc(-.5rem - 1px);width:.5rem;height:1rem;margin:.25rem 0}.bs-popover-auto[x-placement^=right]>.arrow::before,.bs-popover-right>.arrow::before{left:0;border-width:.5rem .5rem .5rem 0;border-right-color:#dee2e6}.bs-popover-auto[x-placement^=right]>.arrow::after,.bs-popover-right>.arrow::after{left:1px;border-width:.5rem .5rem .5rem 0;border-right-color:#fff}.bs-popover-auto[x-placement^=bottom],.bs-popover-bottom{margin-top:.5rem}.bs-popover-auto[x-placement^=bottom]>.arrow,.bs-popover-bottom>.arrow{top:calc(-.5rem - 1px)}.bs-popover-auto[x-placement^=bottom]>.arrow::before,.bs-popover-bottom>.arrow::before{top:0;border-width:0 .5rem .5rem .5rem;border-bottom-color:#dee2e6}.bs-popover-auto[x-placement^=bottom]>.arrow::after,.bs-popover-bottom>.arrow::after{top:1px;border-width:0 .5rem .5rem .5rem;border-bottom-color:#fff}.bs-popover-auto[x-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f3f7f9}.bs-popover-auto[x-placement^=left],.bs-popover-left{margin-right:.5rem}.bs-popover-auto[x-placement^=left]>.arrow,.bs-popover-left>.arrow{right:calc(-.5rem - 1px);width:.5rem;height:1rem;margin:.25rem 0}.bs-popover-auto[x-placement^=left]>.arrow::before,.bs-popover-left>.arrow::before{right:0;border-width:.5rem 0 .5rem .5rem;border-left-color:#dee2e6}.bs-popover-auto[x-placement^=left]>.arrow::after,.bs-popover-left>.arrow::after{right:1px;border-width:.5rem 0 .5rem .5rem;border-left-color:#fff}.popover-header{padding:.7rem .8rem;margin-bottom:0;font-size:.875rem;background-color:#f3f7f9;border-bottom:1px solid #e2ecf1;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:.7rem .8rem;color:#6c757d}.carousel{position:relative}.carousel.pointer-event{touch-action:pan-y}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner::after{display:block;clear:both;content:""}.carousel-item{position:relative;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:transform .6s ease-in-out}@media (prefers-reduced-motion:reduce){.carousel-item{transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-right,.carousel-item-next:not(.carousel-item-left){transform:translateX(100%)}.active.carousel-item-left,.carousel-item-prev:not(.carousel-item-right){transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;transition-property:opacity;transform:none}.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{z-index:0;opacity:0;transition:opacity 0s .6s}@media (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:flex;align-items:center;justify-content:center;width:15%;color:#fff;text-align:center;opacity:.5;transition:opacity .15s ease}@media (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:20px;height:20px;background:no-repeat 50%/100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e")}.carousel-control-next-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:15;display:flex;justify-content:center;padding-left:0;margin-right:15%;margin-left:15%;list-style:none}.carousel-indicators li{box-sizing:content-box;flex:0 1 auto;width:30px;height:3px;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;transition:opacity .6s ease}@media (prefers-reduced-motion:reduce){.carousel-indicators li{transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center}@keyframes spinner-border{to{transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;animation:spinner-border .75s linear infinite}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;background-color:currentColor;border-radius:50%;opacity:0;animation:spinner-grow .75s linear infinite}.spinner-grow-sm{width:1rem;height:1rem}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.bg-primary{background-color:#6658dd!important}a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover{background-color:#3f2ed4!important}.bg-secondary{background-color:#6c757d!important}a.bg-secondary:focus,a.bg-secondary:hover,button.bg-secondary:focus,button.bg-secondary:hover{background-color:#545b62!important}.bg-success{background-color:#1abc9c!important}a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover{background-color:#148f77!important}.bg-info{background-color:#4fc6e1!important}a.bg-info:focus,a.bg-info:hover,button.bg-info:focus,button.bg-info:hover{background-color:#25b7d8!important}.bg-warning{background-color:#f7b84b!important}a.bg-warning:focus,a.bg-warning:hover,button.bg-warning:focus,button.bg-warning:hover{background-color:#f5a51a!important}.bg-danger{background-color:#f1556c!important}a.bg-danger:focus,a.bg-danger:hover,button.bg-danger:focus,button.bg-danger:hover{background-color:#ed2643!important}.bg-light{background-color:#f3f7f9!important}a.bg-light:focus,a.bg-light:hover,button.bg-light:focus,button.bg-light:hover{background-color:#d1e0e8!important}.bg-dark{background-color:#323a46!important}a.bg-dark:focus,a.bg-dark:hover,button.bg-dark:focus,button.bg-dark:hover{background-color:#1d2128!important}.bg-pink{background-color:#f672a7!important}a.bg-pink:focus,a.bg-pink:hover,button.bg-pink:focus,button.bg-pink:hover{background-color:#f34289!important}.bg-blue{background-color:#4a81d4!important}a.bg-blue:focus,a.bg-blue:hover,button.bg-blue:focus,button.bg-blue:hover{background-color:#2d67be!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.border{border:1px solid #e5e8eb!important}.border-top{border-top:1px solid #e5e8eb!important}.border-right{border-right:1px solid #e5e8eb!important}.border-bottom{border-bottom:1px solid #e5e8eb!important}.border-left{border-left:1px solid #e5e8eb!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-primary{border-color:#6658dd!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#1abc9c!important}.border-info{border-color:#4fc6e1!important}.border-warning{border-color:#f7b84b!important}.border-danger{border-color:#f1556c!important}.border-light{border-color:#f3f7f9!important}.border-dark{border-color:#323a46!important}.border-pink{border-color:#f672a7!important}.border-blue{border-color:#4a81d4!important}.border-white{border-color:#fff!important}.rounded-sm{border-radius:.2rem!important}.rounded{border-radius:.25rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-right{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-left{border-top-left-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-lg{border-radius:.3rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-0{border-radius:0!important}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:flex!important}.d-inline-flex{display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:flex!important}.d-sm-inline-flex{display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:flex!important}.d-md-inline-flex{display:inline-flex!important}}@media (min-width:992px){.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:flex!important}.d-lg-inline-flex{display:inline-flex!important}}@media (min-width:1367px){.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:flex!important}.d-xl-inline-flex{display:inline-flex!important}}@media print{.d-print-none{display:none!important}.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:flex!important}.d-print-inline-flex{display:inline-flex!important}}.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden}.embed-responsive::before{display:block;content:""}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-21by9::before{padding-top:42.85714%}.embed-responsive-16by9::before{padding-top:56.25%}.embed-responsive-4by3::before{padding-top:75%}.embed-responsive-1by1::before{padding-top:100%}.embed-responsive-21by9::before{padding-top:42.85714%}.embed-responsive-16by9::before{padding-top:56.25%}.embed-responsive-4by3::before{padding-top:75%}.embed-responsive-1by1::before{padding-top:100%}.flex-row{flex-direction:row!important}.flex-column{flex-direction:column!important}.flex-row-reverse{flex-direction:row-reverse!important}.flex-column-reverse{flex-direction:column-reverse!important}.flex-wrap{flex-wrap:wrap!important}.flex-nowrap{flex-wrap:nowrap!important}.flex-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-fill{flex:1 1 auto!important}.flex-grow-0{flex-grow:0!important}.flex-grow-1{flex-grow:1!important}.flex-shrink-0{flex-shrink:0!important}.flex-shrink-1{flex-shrink:1!important}.justify-content-start{justify-content:flex-start!important}.justify-content-end{justify-content:flex-end!important}.justify-content-center{justify-content:center!important}.justify-content-between{justify-content:space-between!important}.justify-content-around{justify-content:space-around!important}.align-items-start{align-items:flex-start!important}.align-items-end{align-items:flex-end!important}.align-items-center{align-items:center!important}.align-items-baseline{align-items:baseline!important}.align-items-stretch{align-items:stretch!important}.align-content-start{align-content:flex-start!important}.align-content-end{align-content:flex-end!important}.align-content-center{align-content:center!important}.align-content-between{align-content:space-between!important}.align-content-around{align-content:space-around!important}.align-content-stretch{align-content:stretch!important}.align-self-auto{align-self:auto!important}.align-self-start{align-self:flex-start!important}.align-self-end{align-self:flex-end!important}.align-self-center{align-self:center!important}.align-self-baseline{align-self:baseline!important}.align-self-stretch{align-self:stretch!important}@media (min-width:576px){.flex-sm-row{flex-direction:row!important}.flex-sm-column{flex-direction:column!important}.flex-sm-row-reverse{flex-direction:row-reverse!important}.flex-sm-column-reverse{flex-direction:column-reverse!important}.flex-sm-wrap{flex-wrap:wrap!important}.flex-sm-nowrap{flex-wrap:nowrap!important}.flex-sm-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-sm-fill{flex:1 1 auto!important}.flex-sm-grow-0{flex-grow:0!important}.flex-sm-grow-1{flex-grow:1!important}.flex-sm-shrink-0{flex-shrink:0!important}.flex-sm-shrink-1{flex-shrink:1!important}.justify-content-sm-start{justify-content:flex-start!important}.justify-content-sm-end{justify-content:flex-end!important}.justify-content-sm-center{justify-content:center!important}.justify-content-sm-between{justify-content:space-between!important}.justify-content-sm-around{justify-content:space-around!important}.align-items-sm-start{align-items:flex-start!important}.align-items-sm-end{align-items:flex-end!important}.align-items-sm-center{align-items:center!important}.align-items-sm-baseline{align-items:baseline!important}.align-items-sm-stretch{align-items:stretch!important}.align-content-sm-start{align-content:flex-start!important}.align-content-sm-end{align-content:flex-end!important}.align-content-sm-center{align-content:center!important}.align-content-sm-between{align-content:space-between!important}.align-content-sm-around{align-content:space-around!important}.align-content-sm-stretch{align-content:stretch!important}.align-self-sm-auto{align-self:auto!important}.align-self-sm-start{align-self:flex-start!important}.align-self-sm-end{align-self:flex-end!important}.align-self-sm-center{align-self:center!important}.align-self-sm-baseline{align-self:baseline!important}.align-self-sm-stretch{align-self:stretch!important}}@media (min-width:768px){.flex-md-row{flex-direction:row!important}.flex-md-column{flex-direction:column!important}.flex-md-row-reverse{flex-direction:row-reverse!important}.flex-md-column-reverse{flex-direction:column-reverse!important}.flex-md-wrap{flex-wrap:wrap!important}.flex-md-nowrap{flex-wrap:nowrap!important}.flex-md-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-md-fill{flex:1 1 auto!important}.flex-md-grow-0{flex-grow:0!important}.flex-md-grow-1{flex-grow:1!important}.flex-md-shrink-0{flex-shrink:0!important}.flex-md-shrink-1{flex-shrink:1!important}.justify-content-md-start{justify-content:flex-start!important}.justify-content-md-end{justify-content:flex-end!important}.justify-content-md-center{justify-content:center!important}.justify-content-md-between{justify-content:space-between!important}.justify-content-md-around{justify-content:space-around!important}.align-items-md-start{align-items:flex-start!important}.align-items-md-end{align-items:flex-end!important}.align-items-md-center{align-items:center!important}.align-items-md-baseline{align-items:baseline!important}.align-items-md-stretch{align-items:stretch!important}.align-content-md-start{align-content:flex-start!important}.align-content-md-end{align-content:flex-end!important}.align-content-md-center{align-content:center!important}.align-content-md-between{align-content:space-between!important}.align-content-md-around{align-content:space-around!important}.align-content-md-stretch{align-content:stretch!important}.align-self-md-auto{align-self:auto!important}.align-self-md-start{align-self:flex-start!important}.align-self-md-end{align-self:flex-end!important}.align-self-md-center{align-self:center!important}.align-self-md-baseline{align-self:baseline!important}.align-self-md-stretch{align-self:stretch!important}}@media (min-width:992px){.flex-lg-row{flex-direction:row!important}.flex-lg-column{flex-direction:column!important}.flex-lg-row-reverse{flex-direction:row-reverse!important}.flex-lg-column-reverse{flex-direction:column-reverse!important}.flex-lg-wrap{flex-wrap:wrap!important}.flex-lg-nowrap{flex-wrap:nowrap!important}.flex-lg-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-lg-fill{flex:1 1 auto!important}.flex-lg-grow-0{flex-grow:0!important}.flex-lg-grow-1{flex-grow:1!important}.flex-lg-shrink-0{flex-shrink:0!important}.flex-lg-shrink-1{flex-shrink:1!important}.justify-content-lg-start{justify-content:flex-start!important}.justify-content-lg-end{justify-content:flex-end!important}.justify-content-lg-center{justify-content:center!important}.justify-content-lg-between{justify-content:space-between!important}.justify-content-lg-around{justify-content:space-around!important}.align-items-lg-start{align-items:flex-start!important}.align-items-lg-end{align-items:flex-end!important}.align-items-lg-center{align-items:center!important}.align-items-lg-baseline{align-items:baseline!important}.align-items-lg-stretch{align-items:stretch!important}.align-content-lg-start{align-content:flex-start!important}.align-content-lg-end{align-content:flex-end!important}.align-content-lg-center{align-content:center!important}.align-content-lg-between{align-content:space-between!important}.align-content-lg-around{align-content:space-around!important}.align-content-lg-stretch{align-content:stretch!important}.align-self-lg-auto{align-self:auto!important}.align-self-lg-start{align-self:flex-start!important}.align-self-lg-end{align-self:flex-end!important}.align-self-lg-center{align-self:center!important}.align-self-lg-baseline{align-self:baseline!important}.align-self-lg-stretch{align-self:stretch!important}}@media (min-width:1367px){.flex-xl-row{flex-direction:row!important}.flex-xl-column{flex-direction:column!important}.flex-xl-row-reverse{flex-direction:row-reverse!important}.flex-xl-column-reverse{flex-direction:column-reverse!important}.flex-xl-wrap{flex-wrap:wrap!important}.flex-xl-nowrap{flex-wrap:nowrap!important}.flex-xl-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-xl-fill{flex:1 1 auto!important}.flex-xl-grow-0{flex-grow:0!important}.flex-xl-grow-1{flex-grow:1!important}.flex-xl-shrink-0{flex-shrink:0!important}.flex-xl-shrink-1{flex-shrink:1!important}.justify-content-xl-start{justify-content:flex-start!important}.justify-content-xl-end{justify-content:flex-end!important}.justify-content-xl-center{justify-content:center!important}.justify-content-xl-between{justify-content:space-between!important}.justify-content-xl-around{justify-content:space-around!important}.align-items-xl-start{align-items:flex-start!important}.align-items-xl-end{align-items:flex-end!important}.align-items-xl-center{align-items:center!important}.align-items-xl-baseline{align-items:baseline!important}.align-items-xl-stretch{align-items:stretch!important}.align-content-xl-start{align-content:flex-start!important}.align-content-xl-end{align-content:flex-end!important}.align-content-xl-center{align-content:center!important}.align-content-xl-between{align-content:space-between!important}.align-content-xl-around{align-content:space-around!important}.align-content-xl-stretch{align-content:stretch!important}.align-self-xl-auto{align-self:auto!important}.align-self-xl-start{align-self:flex-start!important}.align-self-xl-end{align-self:flex-end!important}.align-self-xl-center{align-self:center!important}.align-self-xl-baseline{align-self:baseline!important}.align-self-xl-stretch{align-self:stretch!important}}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}@media (min-width:992px){.float-lg-left{float:left!important}.float-lg-right{float:right!important}.float-lg-none{float:none!important}}@media (min-width:1367px){.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}@supports ((position:-webkit-sticky) or (position:sticky)){.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;overflow:visible;clip:auto;white-space:normal}.shadow-sm{box-shadow:0 .75rem 6rem rgba(56,65,74,.03)!important}.shadow{box-shadow:0 0 35px 0 rgba(154,161,171,.15)!important}.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{box-shadow:none!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mw-100{max-width:100%!important}.mh-100{max-height:100%!important}.min-vw-100{min-width:100vw!important}.min-vh-100{min-height:100vh!important}.vw-100{width:100vw!important}.vh-100{height:100vh!important}.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;pointer-events:auto;content:"";background-color:rgba(0,0,0,0)}.m-0{margin:0!important}.mt-0,.my-0{margin-top:0!important}.mr-0,.mx-0{margin-right:0!important}.mb-0,.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.m-1{margin:.375rem!important}.mt-1,.my-1{margin-top:.375rem!important}.mr-1,.mx-1{margin-right:.375rem!important}.mb-1,.my-1{margin-bottom:.375rem!important}.ml-1,.mx-1{margin-left:.375rem!important}.m-2{margin:.75rem!important}.mt-2,.my-2{margin-top:.75rem!important}.mr-2,.mx-2{margin-right:.75rem!important}.mb-2,.my-2{margin-bottom:.75rem!important}.ml-2,.mx-2{margin-left:.75rem!important}.m-3{margin:1.5rem!important}.mt-3,.my-3{margin-top:1.5rem!important}.mr-3,.mx-3{margin-right:1.5rem!important}.mb-3,.my-3{margin-bottom:1.5rem!important}.ml-3,.mx-3{margin-left:1.5rem!important}.m-4{margin:2.25rem!important}.mt-4,.my-4{margin-top:2.25rem!important}.mr-4,.mx-4{margin-right:2.25rem!important}.mb-4,.my-4{margin-bottom:2.25rem!important}.ml-4,.mx-4{margin-left:2.25rem!important}.m-5{margin:4.5rem!important}.mt-5,.my-5{margin-top:4.5rem!important}.mr-5,.mx-5{margin-right:4.5rem!important}.mb-5,.my-5{margin-bottom:4.5rem!important}.ml-5,.mx-5{margin-left:4.5rem!important}.p-0{padding:0!important}.pt-0,.py-0{padding-top:0!important}.pr-0,.px-0{padding-right:0!important}.pb-0,.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.375rem!important}.pt-1,.py-1{padding-top:.375rem!important}.pr-1,.px-1{padding-right:.375rem!important}.pb-1,.py-1{padding-bottom:.375rem!important}.pl-1,.px-1{padding-left:.375rem!important}.p-2{padding:.75rem!important}.pt-2,.py-2{padding-top:.75rem!important}.pr-2,.px-2{padding-right:.75rem!important}.pb-2,.py-2{padding-bottom:.75rem!important}.pl-2,.px-2{padding-left:.75rem!important}.p-3{padding:1.5rem!important}.pt-3,.py-3{padding-top:1.5rem!important}.pr-3,.px-3{padding-right:1.5rem!important}.pb-3,.py-3{padding-bottom:1.5rem!important}.pl-3,.px-3{padding-left:1.5rem!important}.p-4{padding:2.25rem!important}.pt-4,.py-4{padding-top:2.25rem!important}.pr-4,.px-4{padding-right:2.25rem!important}.pb-4,.py-4{padding-bottom:2.25rem!important}.pl-4,.px-4{padding-left:2.25rem!important}.p-5{padding:4.5rem!important}.pt-5,.py-5{padding-top:4.5rem!important}.pr-5,.px-5{padding-right:4.5rem!important}.pb-5,.py-5{padding-bottom:4.5rem!important}.pl-5,.px-5{padding-left:4.5rem!important}.m-n1{margin:-.375rem!important}.mt-n1,.my-n1{margin-top:-.375rem!important}.mr-n1,.mx-n1{margin-right:-.375rem!important}.mb-n1,.my-n1{margin-bottom:-.375rem!important}.ml-n1,.mx-n1{margin-left:-.375rem!important}.m-n2{margin:-.75rem!important}.mt-n2,.my-n2{margin-top:-.75rem!important}.mr-n2,.mx-n2{margin-right:-.75rem!important}.mb-n2,.my-n2{margin-bottom:-.75rem!important}.ml-n2,.mx-n2{margin-left:-.75rem!important}.m-n3{margin:-1.5rem!important}.mt-n3,.my-n3{margin-top:-1.5rem!important}.mr-n3,.mx-n3{margin-right:-1.5rem!important}.mb-n3,.my-n3{margin-bottom:-1.5rem!important}.ml-n3,.mx-n3{margin-left:-1.5rem!important}.m-n4{margin:-2.25rem!important}.mt-n4,.my-n4{margin-top:-2.25rem!important}.mr-n4,.mx-n4{margin-right:-2.25rem!important}.mb-n4,.my-n4{margin-bottom:-2.25rem!important}.ml-n4,.mx-n4{margin-left:-2.25rem!important}.m-n5{margin:-4.5rem!important}.mt-n5,.my-n5{margin-top:-4.5rem!important}.mr-n5,.mx-n5{margin-right:-4.5rem!important}.mb-n5,.my-n5{margin-bottom:-4.5rem!important}.ml-n5,.mx-n5{margin-left:-4.5rem!important}.m-auto{margin:auto!important}.mt-auto,.my-auto{margin-top:auto!important}.mr-auto,.mx-auto{margin-right:auto!important}.mb-auto,.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.m-sm-0{margin:0!important}.mt-sm-0,.my-sm-0{margin-top:0!important}.mr-sm-0,.mx-sm-0{margin-right:0!important}.mb-sm-0,.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.m-sm-1{margin:.375rem!important}.mt-sm-1,.my-sm-1{margin-top:.375rem!important}.mr-sm-1,.mx-sm-1{margin-right:.375rem!important}.mb-sm-1,.my-sm-1{margin-bottom:.375rem!important}.ml-sm-1,.mx-sm-1{margin-left:.375rem!important}.m-sm-2{margin:.75rem!important}.mt-sm-2,.my-sm-2{margin-top:.75rem!important}.mr-sm-2,.mx-sm-2{margin-right:.75rem!important}.mb-sm-2,.my-sm-2{margin-bottom:.75rem!important}.ml-sm-2,.mx-sm-2{margin-left:.75rem!important}.m-sm-3{margin:1.5rem!important}.mt-sm-3,.my-sm-3{margin-top:1.5rem!important}.mr-sm-3,.mx-sm-3{margin-right:1.5rem!important}.mb-sm-3,.my-sm-3{margin-bottom:1.5rem!important}.ml-sm-3,.mx-sm-3{margin-left:1.5rem!important}.m-sm-4{margin:2.25rem!important}.mt-sm-4,.my-sm-4{margin-top:2.25rem!important}.mr-sm-4,.mx-sm-4{margin-right:2.25rem!important}.mb-sm-4,.my-sm-4{margin-bottom:2.25rem!important}.ml-sm-4,.mx-sm-4{margin-left:2.25rem!important}.m-sm-5{margin:4.5rem!important}.mt-sm-5,.my-sm-5{margin-top:4.5rem!important}.mr-sm-5,.mx-sm-5{margin-right:4.5rem!important}.mb-sm-5,.my-sm-5{margin-bottom:4.5rem!important}.ml-sm-5,.mx-sm-5{margin-left:4.5rem!important}.p-sm-0{padding:0!important}.pt-sm-0,.py-sm-0{padding-top:0!important}.pr-sm-0,.px-sm-0{padding-right:0!important}.pb-sm-0,.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.375rem!important}.pt-sm-1,.py-sm-1{padding-top:.375rem!important}.pr-sm-1,.px-sm-1{padding-right:.375rem!important}.pb-sm-1,.py-sm-1{padding-bottom:.375rem!important}.pl-sm-1,.px-sm-1{padding-left:.375rem!important}.p-sm-2{padding:.75rem!important}.pt-sm-2,.py-sm-2{padding-top:.75rem!important}.pr-sm-2,.px-sm-2{padding-right:.75rem!important}.pb-sm-2,.py-sm-2{padding-bottom:.75rem!important}.pl-sm-2,.px-sm-2{padding-left:.75rem!important}.p-sm-3{padding:1.5rem!important}.pt-sm-3,.py-sm-3{padding-top:1.5rem!important}.pr-sm-3,.px-sm-3{padding-right:1.5rem!important}.pb-sm-3,.py-sm-3{padding-bottom:1.5rem!important}.pl-sm-3,.px-sm-3{padding-left:1.5rem!important}.p-sm-4{padding:2.25rem!important}.pt-sm-4,.py-sm-4{padding-top:2.25rem!important}.pr-sm-4,.px-sm-4{padding-right:2.25rem!important}.pb-sm-4,.py-sm-4{padding-bottom:2.25rem!important}.pl-sm-4,.px-sm-4{padding-left:2.25rem!important}.p-sm-5{padding:4.5rem!important}.pt-sm-5,.py-sm-5{padding-top:4.5rem!important}.pr-sm-5,.px-sm-5{padding-right:4.5rem!important}.pb-sm-5,.py-sm-5{padding-bottom:4.5rem!important}.pl-sm-5,.px-sm-5{padding-left:4.5rem!important}.m-sm-n1{margin:-.375rem!important}.mt-sm-n1,.my-sm-n1{margin-top:-.375rem!important}.mr-sm-n1,.mx-sm-n1{margin-right:-.375rem!important}.mb-sm-n1,.my-sm-n1{margin-bottom:-.375rem!important}.ml-sm-n1,.mx-sm-n1{margin-left:-.375rem!important}.m-sm-n2{margin:-.75rem!important}.mt-sm-n2,.my-sm-n2{margin-top:-.75rem!important}.mr-sm-n2,.mx-sm-n2{margin-right:-.75rem!important}.mb-sm-n2,.my-sm-n2{margin-bottom:-.75rem!important}.ml-sm-n2,.mx-sm-n2{margin-left:-.75rem!important}.m-sm-n3{margin:-1.5rem!important}.mt-sm-n3,.my-sm-n3{margin-top:-1.5rem!important}.mr-sm-n3,.mx-sm-n3{margin-right:-1.5rem!important}.mb-sm-n3,.my-sm-n3{margin-bottom:-1.5rem!important}.ml-sm-n3,.mx-sm-n3{margin-left:-1.5rem!important}.m-sm-n4{margin:-2.25rem!important}.mt-sm-n4,.my-sm-n4{margin-top:-2.25rem!important}.mr-sm-n4,.mx-sm-n4{margin-right:-2.25rem!important}.mb-sm-n4,.my-sm-n4{margin-bottom:-2.25rem!important}.ml-sm-n4,.mx-sm-n4{margin-left:-2.25rem!important}.m-sm-n5{margin:-4.5rem!important}.mt-sm-n5,.my-sm-n5{margin-top:-4.5rem!important}.mr-sm-n5,.mx-sm-n5{margin-right:-4.5rem!important}.mb-sm-n5,.my-sm-n5{margin-bottom:-4.5rem!important}.ml-sm-n5,.mx-sm-n5{margin-left:-4.5rem!important}.m-sm-auto{margin:auto!important}.mt-sm-auto,.my-sm-auto{margin-top:auto!important}.mr-sm-auto,.mx-sm-auto{margin-right:auto!important}.mb-sm-auto,.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.m-md-0{margin:0!important}.mt-md-0,.my-md-0{margin-top:0!important}.mr-md-0,.mx-md-0{margin-right:0!important}.mb-md-0,.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.m-md-1{margin:.375rem!important}.mt-md-1,.my-md-1{margin-top:.375rem!important}.mr-md-1,.mx-md-1{margin-right:.375rem!important}.mb-md-1,.my-md-1{margin-bottom:.375rem!important}.ml-md-1,.mx-md-1{margin-left:.375rem!important}.m-md-2{margin:.75rem!important}.mt-md-2,.my-md-2{margin-top:.75rem!important}.mr-md-2,.mx-md-2{margin-right:.75rem!important}.mb-md-2,.my-md-2{margin-bottom:.75rem!important}.ml-md-2,.mx-md-2{margin-left:.75rem!important}.m-md-3{margin:1.5rem!important}.mt-md-3,.my-md-3{margin-top:1.5rem!important}.mr-md-3,.mx-md-3{margin-right:1.5rem!important}.mb-md-3,.my-md-3{margin-bottom:1.5rem!important}.ml-md-3,.mx-md-3{margin-left:1.5rem!important}.m-md-4{margin:2.25rem!important}.mt-md-4,.my-md-4{margin-top:2.25rem!important}.mr-md-4,.mx-md-4{margin-right:2.25rem!important}.mb-md-4,.my-md-4{margin-bottom:2.25rem!important}.ml-md-4,.mx-md-4{margin-left:2.25rem!important}.m-md-5{margin:4.5rem!important}.mt-md-5,.my-md-5{margin-top:4.5rem!important}.mr-md-5,.mx-md-5{margin-right:4.5rem!important}.mb-md-5,.my-md-5{margin-bottom:4.5rem!important}.ml-md-5,.mx-md-5{margin-left:4.5rem!important}.p-md-0{padding:0!important}.pt-md-0,.py-md-0{padding-top:0!important}.pr-md-0,.px-md-0{padding-right:0!important}.pb-md-0,.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.375rem!important}.pt-md-1,.py-md-1{padding-top:.375rem!important}.pr-md-1,.px-md-1{padding-right:.375rem!important}.pb-md-1,.py-md-1{padding-bottom:.375rem!important}.pl-md-1,.px-md-1{padding-left:.375rem!important}.p-md-2{padding:.75rem!important}.pt-md-2,.py-md-2{padding-top:.75rem!important}.pr-md-2,.px-md-2{padding-right:.75rem!important}.pb-md-2,.py-md-2{padding-bottom:.75rem!important}.pl-md-2,.px-md-2{padding-left:.75rem!important}.p-md-3{padding:1.5rem!important}.pt-md-3,.py-md-3{padding-top:1.5rem!important}.pr-md-3,.px-md-3{padding-right:1.5rem!important}.pb-md-3,.py-md-3{padding-bottom:1.5rem!important}.pl-md-3,.px-md-3{padding-left:1.5rem!important}.p-md-4{padding:2.25rem!important}.pt-md-4,.py-md-4{padding-top:2.25rem!important}.pr-md-4,.px-md-4{padding-right:2.25rem!important}.pb-md-4,.py-md-4{padding-bottom:2.25rem!important}.pl-md-4,.px-md-4{padding-left:2.25rem!important}.p-md-5{padding:4.5rem!important}.pt-md-5,.py-md-5{padding-top:4.5rem!important}.pr-md-5,.px-md-5{padding-right:4.5rem!important}.pb-md-5,.py-md-5{padding-bottom:4.5rem!important}.pl-md-5,.px-md-5{padding-left:4.5rem!important}.m-md-n1{margin:-.375rem!important}.mt-md-n1,.my-md-n1{margin-top:-.375rem!important}.mr-md-n1,.mx-md-n1{margin-right:-.375rem!important}.mb-md-n1,.my-md-n1{margin-bottom:-.375rem!important}.ml-md-n1,.mx-md-n1{margin-left:-.375rem!important}.m-md-n2{margin:-.75rem!important}.mt-md-n2,.my-md-n2{margin-top:-.75rem!important}.mr-md-n2,.mx-md-n2{margin-right:-.75rem!important}.mb-md-n2,.my-md-n2{margin-bottom:-.75rem!important}.ml-md-n2,.mx-md-n2{margin-left:-.75rem!important}.m-md-n3{margin:-1.5rem!important}.mt-md-n3,.my-md-n3{margin-top:-1.5rem!important}.mr-md-n3,.mx-md-n3{margin-right:-1.5rem!important}.mb-md-n3,.my-md-n3{margin-bottom:-1.5rem!important}.ml-md-n3,.mx-md-n3{margin-left:-1.5rem!important}.m-md-n4{margin:-2.25rem!important}.mt-md-n4,.my-md-n4{margin-top:-2.25rem!important}.mr-md-n4,.mx-md-n4{margin-right:-2.25rem!important}.mb-md-n4,.my-md-n4{margin-bottom:-2.25rem!important}.ml-md-n4,.mx-md-n4{margin-left:-2.25rem!important}.m-md-n5{margin:-4.5rem!important}.mt-md-n5,.my-md-n5{margin-top:-4.5rem!important}.mr-md-n5,.mx-md-n5{margin-right:-4.5rem!important}.mb-md-n5,.my-md-n5{margin-bottom:-4.5rem!important}.ml-md-n5,.mx-md-n5{margin-left:-4.5rem!important}.m-md-auto{margin:auto!important}.mt-md-auto,.my-md-auto{margin-top:auto!important}.mr-md-auto,.mx-md-auto{margin-right:auto!important}.mb-md-auto,.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}@media (min-width:992px){.m-lg-0{margin:0!important}.mt-lg-0,.my-lg-0{margin-top:0!important}.mr-lg-0,.mx-lg-0{margin-right:0!important}.mb-lg-0,.my-lg-0{margin-bottom:0!important}.ml-lg-0,.mx-lg-0{margin-left:0!important}.m-lg-1{margin:.375rem!important}.mt-lg-1,.my-lg-1{margin-top:.375rem!important}.mr-lg-1,.mx-lg-1{margin-right:.375rem!important}.mb-lg-1,.my-lg-1{margin-bottom:.375rem!important}.ml-lg-1,.mx-lg-1{margin-left:.375rem!important}.m-lg-2{margin:.75rem!important}.mt-lg-2,.my-lg-2{margin-top:.75rem!important}.mr-lg-2,.mx-lg-2{margin-right:.75rem!important}.mb-lg-2,.my-lg-2{margin-bottom:.75rem!important}.ml-lg-2,.mx-lg-2{margin-left:.75rem!important}.m-lg-3{margin:1.5rem!important}.mt-lg-3,.my-lg-3{margin-top:1.5rem!important}.mr-lg-3,.mx-lg-3{margin-right:1.5rem!important}.mb-lg-3,.my-lg-3{margin-bottom:1.5rem!important}.ml-lg-3,.mx-lg-3{margin-left:1.5rem!important}.m-lg-4{margin:2.25rem!important}.mt-lg-4,.my-lg-4{margin-top:2.25rem!important}.mr-lg-4,.mx-lg-4{margin-right:2.25rem!important}.mb-lg-4,.my-lg-4{margin-bottom:2.25rem!important}.ml-lg-4,.mx-lg-4{margin-left:2.25rem!important}.m-lg-5{margin:4.5rem!important}.mt-lg-5,.my-lg-5{margin-top:4.5rem!important}.mr-lg-5,.mx-lg-5{margin-right:4.5rem!important}.mb-lg-5,.my-lg-5{margin-bottom:4.5rem!important}.ml-lg-5,.mx-lg-5{margin-left:4.5rem!important}.p-lg-0{padding:0!important}.pt-lg-0,.py-lg-0{padding-top:0!important}.pr-lg-0,.px-lg-0{padding-right:0!important}.pb-lg-0,.py-lg-0{padding-bottom:0!important}.pl-lg-0,.px-lg-0{padding-left:0!important}.p-lg-1{padding:.375rem!important}.pt-lg-1,.py-lg-1{padding-top:.375rem!important}.pr-lg-1,.px-lg-1{padding-right:.375rem!important}.pb-lg-1,.py-lg-1{padding-bottom:.375rem!important}.pl-lg-1,.px-lg-1{padding-left:.375rem!important}.p-lg-2{padding:.75rem!important}.pt-lg-2,.py-lg-2{padding-top:.75rem!important}.pr-lg-2,.px-lg-2{padding-right:.75rem!important}.pb-lg-2,.py-lg-2{padding-bottom:.75rem!important}.pl-lg-2,.px-lg-2{padding-left:.75rem!important}.p-lg-3{padding:1.5rem!important}.pt-lg-3,.py-lg-3{padding-top:1.5rem!important}.pr-lg-3,.px-lg-3{padding-right:1.5rem!important}.pb-lg-3,.py-lg-3{padding-bottom:1.5rem!important}.pl-lg-3,.px-lg-3{padding-left:1.5rem!important}.p-lg-4{padding:2.25rem!important}.pt-lg-4,.py-lg-4{padding-top:2.25rem!important}.pr-lg-4,.px-lg-4{padding-right:2.25rem!important}.pb-lg-4,.py-lg-4{padding-bottom:2.25rem!important}.pl-lg-4,.px-lg-4{padding-left:2.25rem!important}.p-lg-5{padding:4.5rem!important}.pt-lg-5,.py-lg-5{padding-top:4.5rem!important}.pr-lg-5,.px-lg-5{padding-right:4.5rem!important}.pb-lg-5,.py-lg-5{padding-bottom:4.5rem!important}.pl-lg-5,.px-lg-5{padding-left:4.5rem!important}.m-lg-n1{margin:-.375rem!important}.mt-lg-n1,.my-lg-n1{margin-top:-.375rem!important}.mr-lg-n1,.mx-lg-n1{margin-right:-.375rem!important}.mb-lg-n1,.my-lg-n1{margin-bottom:-.375rem!important}.ml-lg-n1,.mx-lg-n1{margin-left:-.375rem!important}.m-lg-n2{margin:-.75rem!important}.mt-lg-n2,.my-lg-n2{margin-top:-.75rem!important}.mr-lg-n2,.mx-lg-n2{margin-right:-.75rem!important}.mb-lg-n2,.my-lg-n2{margin-bottom:-.75rem!important}.ml-lg-n2,.mx-lg-n2{margin-left:-.75rem!important}.m-lg-n3{margin:-1.5rem!important}.mt-lg-n3,.my-lg-n3{margin-top:-1.5rem!important}.mr-lg-n3,.mx-lg-n3{margin-right:-1.5rem!important}.mb-lg-n3,.my-lg-n3{margin-bottom:-1.5rem!important}.ml-lg-n3,.mx-lg-n3{margin-left:-1.5rem!important}.m-lg-n4{margin:-2.25rem!important}.mt-lg-n4,.my-lg-n4{margin-top:-2.25rem!important}.mr-lg-n4,.mx-lg-n4{margin-right:-2.25rem!important}.mb-lg-n4,.my-lg-n4{margin-bottom:-2.25rem!important}.ml-lg-n4,.mx-lg-n4{margin-left:-2.25rem!important}.m-lg-n5{margin:-4.5rem!important}.mt-lg-n5,.my-lg-n5{margin-top:-4.5rem!important}.mr-lg-n5,.mx-lg-n5{margin-right:-4.5rem!important}.mb-lg-n5,.my-lg-n5{margin-bottom:-4.5rem!important}.ml-lg-n5,.mx-lg-n5{margin-left:-4.5rem!important}.m-lg-auto{margin:auto!important}.mt-lg-auto,.my-lg-auto{margin-top:auto!important}.mr-lg-auto,.mx-lg-auto{margin-right:auto!important}.mb-lg-auto,.my-lg-auto{margin-bottom:auto!important}.ml-lg-auto,.mx-lg-auto{margin-left:auto!important}}@media (min-width:1367px){.m-xl-0{margin:0!important}.mt-xl-0,.my-xl-0{margin-top:0!important}.mr-xl-0,.mx-xl-0{margin-right:0!important}.mb-xl-0,.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.m-xl-1{margin:.375rem!important}.mt-xl-1,.my-xl-1{margin-top:.375rem!important}.mr-xl-1,.mx-xl-1{margin-right:.375rem!important}.mb-xl-1,.my-xl-1{margin-bottom:.375rem!important}.ml-xl-1,.mx-xl-1{margin-left:.375rem!important}.m-xl-2{margin:.75rem!important}.mt-xl-2,.my-xl-2{margin-top:.75rem!important}.mr-xl-2,.mx-xl-2{margin-right:.75rem!important}.mb-xl-2,.my-xl-2{margin-bottom:.75rem!important}.ml-xl-2,.mx-xl-2{margin-left:.75rem!important}.m-xl-3{margin:1.5rem!important}.mt-xl-3,.my-xl-3{margin-top:1.5rem!important}.mr-xl-3,.mx-xl-3{margin-right:1.5rem!important}.mb-xl-3,.my-xl-3{margin-bottom:1.5rem!important}.ml-xl-3,.mx-xl-3{margin-left:1.5rem!important}.m-xl-4{margin:2.25rem!important}.mt-xl-4,.my-xl-4{margin-top:2.25rem!important}.mr-xl-4,.mx-xl-4{margin-right:2.25rem!important}.mb-xl-4,.my-xl-4{margin-bottom:2.25rem!important}.ml-xl-4,.mx-xl-4{margin-left:2.25rem!important}.m-xl-5{margin:4.5rem!important}.mt-xl-5,.my-xl-5{margin-top:4.5rem!important}.mr-xl-5,.mx-xl-5{margin-right:4.5rem!important}.mb-xl-5,.my-xl-5{margin-bottom:4.5rem!important}.ml-xl-5,.mx-xl-5{margin-left:4.5rem!important}.p-xl-0{padding:0!important}.pt-xl-0,.py-xl-0{padding-top:0!important}.pr-xl-0,.px-xl-0{padding-right:0!important}.pb-xl-0,.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.375rem!important}.pt-xl-1,.py-xl-1{padding-top:.375rem!important}.pr-xl-1,.px-xl-1{padding-right:.375rem!important}.pb-xl-1,.py-xl-1{padding-bottom:.375rem!important}.pl-xl-1,.px-xl-1{padding-left:.375rem!important}.p-xl-2{padding:.75rem!important}.pt-xl-2,.py-xl-2{padding-top:.75rem!important}.pr-xl-2,.px-xl-2{padding-right:.75rem!important}.pb-xl-2,.py-xl-2{padding-bottom:.75rem!important}.pl-xl-2,.px-xl-2{padding-left:.75rem!important}.p-xl-3{padding:1.5rem!important}.pt-xl-3,.py-xl-3{padding-top:1.5rem!important}.pr-xl-3,.px-xl-3{padding-right:1.5rem!important}.pb-xl-3,.py-xl-3{padding-bottom:1.5rem!important}.pl-xl-3,.px-xl-3{padding-left:1.5rem!important}.p-xl-4{padding:2.25rem!important}.pt-xl-4,.py-xl-4{padding-top:2.25rem!important}.pr-xl-4,.px-xl-4{padding-right:2.25rem!important}.pb-xl-4,.py-xl-4{padding-bottom:2.25rem!important}.pl-xl-4,.px-xl-4{padding-left:2.25rem!important}.p-xl-5{padding:4.5rem!important}.pt-xl-5,.py-xl-5{padding-top:4.5rem!important}.pr-xl-5,.px-xl-5{padding-right:4.5rem!important}.pb-xl-5,.py-xl-5{padding-bottom:4.5rem!important}.pl-xl-5,.px-xl-5{padding-left:4.5rem!important}.m-xl-n1{margin:-.375rem!important}.mt-xl-n1,.my-xl-n1{margin-top:-.375rem!important}.mr-xl-n1,.mx-xl-n1{margin-right:-.375rem!important}.mb-xl-n1,.my-xl-n1{margin-bottom:-.375rem!important}.ml-xl-n1,.mx-xl-n1{margin-left:-.375rem!important}.m-xl-n2{margin:-.75rem!important}.mt-xl-n2,.my-xl-n2{margin-top:-.75rem!important}.mr-xl-n2,.mx-xl-n2{margin-right:-.75rem!important}.mb-xl-n2,.my-xl-n2{margin-bottom:-.75rem!important}.ml-xl-n2,.mx-xl-n2{margin-left:-.75rem!important}.m-xl-n3{margin:-1.5rem!important}.mt-xl-n3,.my-xl-n3{margin-top:-1.5rem!important}.mr-xl-n3,.mx-xl-n3{margin-right:-1.5rem!important}.mb-xl-n3,.my-xl-n3{margin-bottom:-1.5rem!important}.ml-xl-n3,.mx-xl-n3{margin-left:-1.5rem!important}.m-xl-n4{margin:-2.25rem!important}.mt-xl-n4,.my-xl-n4{margin-top:-2.25rem!important}.mr-xl-n4,.mx-xl-n4{margin-right:-2.25rem!important}.mb-xl-n4,.my-xl-n4{margin-bottom:-2.25rem!important}.ml-xl-n4,.mx-xl-n4{margin-left:-2.25rem!important}.m-xl-n5{margin:-4.5rem!important}.mt-xl-n5,.my-xl-n5{margin-top:-4.5rem!important}.mr-xl-n5,.mx-xl-n5{margin-right:-4.5rem!important}.mb-xl-n5,.my-xl-n5{margin-bottom:-4.5rem!important}.ml-xl-n5,.mx-xl-n5{margin-left:-4.5rem!important}.m-xl-auto{margin:auto!important}.mt-xl-auto,.my-xl-auto{margin-top:auto!important}.mr-xl-auto,.mx-xl-auto{margin-right:auto!important}.mb-xl-auto,.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}}.text-monospace{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace!important}.text-justify{text-align:justify!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.text-lg-left{text-align:left!important}.text-lg-right{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1367px){.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.font-weight-light{font-weight:300!important}.font-weight-lighter{font-weight:lighter!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-weight-bolder{font-weight:bolder!important}.font-italic{font-style:italic!important}.text-white{color:#fff!important}.text-primary{color:#6658dd!important}a.text-primary:focus,a.text-primary:hover{color:#3827c1!important}.text-secondary{color:#6c757d!important}a.text-secondary:focus,a.text-secondary:hover{color:#494f54!important}.text-success{color:#1abc9c!important}a.text-success:focus,a.text-success:hover{color:#117964!important}.text-info{color:#4fc6e1!important}a.text-info:focus,a.text-info:hover{color:#21a5c2!important}.text-warning{color:#f7b84b!important}a.text-warning:focus,a.text-warning:hover{color:#eb990a!important}.text-danger{color:#f1556c!important}a.text-danger:focus,a.text-danger:hover{color:#e71332!important}.text-light{color:#f3f7f9!important}a.text-light:focus,a.text-light:hover{color:#c0d5e0!important}.text-dark{color:#323a46!important}a.text-dark:focus,a.text-dark:hover{color:#121519!important}.text-pink{color:#f672a7!important}a.text-pink:focus,a.text-pink:hover{color:#f12a7a!important}.text-blue{color:#4a81d4!important}a.text-blue:focus,a.text-blue:hover{color:#285ca9!important}.text-body{color:#6c757d!important}.text-muted{color:#98a6ad!important}.text-black-50{color:rgba(0,0,0,.5)!important}.text-white-50{color:rgba(255,255,255,.5)!important}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.text-decoration-none{text-decoration:none!important}.text-break{word-break:break-word!important;overflow-wrap:break-word!important}.text-reset{color:inherit!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" (" attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}.custom-accordion .accordion-arrow{font-size:1.2rem;position:absolute;right:0}.custom-accordion a.collapsed i.accordion-arrow:before{content:"\F0142"}.badge{box-shadow:none}.badge-soft-primary{color:#6658dd;background-color:rgba(102,88,221,.18);box-shadow:none}.badge-soft-primary[href]:focus,.badge-soft-primary[href]:hover{color:#6658dd;text-decoration:none;background-color:rgba(102,88,221,.4)}.badge-soft-secondary{color:#6c757d;background-color:rgba(108,117,125,.18);box-shadow:none}.badge-soft-secondary[href]:focus,.badge-soft-secondary[href]:hover{color:#6c757d;text-decoration:none;background-color:rgba(108,117,125,.4)}.badge-soft-success{color:#1abc9c;background-color:rgba(26,188,156,.18);box-shadow:none}.badge-soft-success[href]:focus,.badge-soft-success[href]:hover{color:#1abc9c;text-decoration:none;background-color:rgba(26,188,156,.4)}.badge-soft-info{color:#4fc6e1;background-color:rgba(79,198,225,.18);box-shadow:none}.badge-soft-info[href]:focus,.badge-soft-info[href]:hover{color:#4fc6e1;text-decoration:none;background-color:rgba(79,198,225,.4)}.badge-soft-warning{color:#f7b84b;background-color:rgba(247,184,75,.18);box-shadow:none}.badge-soft-warning[href]:focus,.badge-soft-warning[href]:hover{color:#f7b84b;text-decoration:none;background-color:rgba(247,184,75,.4)}.badge-soft-danger{color:#f1556c;background-color:rgba(241,85,108,.18);box-shadow:none}.badge-soft-danger[href]:focus,.badge-soft-danger[href]:hover{color:#f1556c;text-decoration:none;background-color:rgba(241,85,108,.4)}.badge-soft-light{color:#f3f7f9;background-color:rgba(243,247,249,.18);box-shadow:none}.badge-soft-light[href]:focus,.badge-soft-light[href]:hover{color:#f3f7f9;text-decoration:none;background-color:rgba(243,247,249,.4)}.badge-soft-dark{color:#323a46;background-color:rgba(50,58,70,.18);box-shadow:none}.badge-soft-dark[href]:focus,.badge-soft-dark[href]:hover{color:#323a46;text-decoration:none;background-color:rgba(50,58,70,.4)}.badge-soft-pink{color:#f672a7;background-color:rgba(246,114,167,.18);box-shadow:none}.badge-soft-pink[href]:focus,.badge-soft-pink[href]:hover{color:#f672a7;text-decoration:none;background-color:rgba(246,114,167,.4)}.badge-soft-blue{color:#4a81d4;background-color:rgba(74,129,212,.18);box-shadow:none}.badge-soft-blue[href]:focus,.badge-soft-blue[href]:hover{color:#4a81d4;text-decoration:none;background-color:rgba(74,129,212,.4)}.badge-outline-primary{color:#6658dd;border:1px solid #6658dd;background-color:transparent;box-shadow:none}.badge-outline-primary[href]:focus,.badge-outline-primary[href]:hover{color:#6658dd;text-decoration:none;background-color:rgba(102,88,221,.2)}.badge-outline-secondary{color:#6c757d;border:1px solid #6c757d;background-color:transparent;box-shadow:none}.badge-outline-secondary[href]:focus,.badge-outline-secondary[href]:hover{color:#6c757d;text-decoration:none;background-color:rgba(108,117,125,.2)}.badge-outline-success{color:#1abc9c;border:1px solid #1abc9c;background-color:transparent;box-shadow:none}.badge-outline-success[href]:focus,.badge-outline-success[href]:hover{color:#1abc9c;text-decoration:none;background-color:rgba(26,188,156,.2)}.badge-outline-info{color:#4fc6e1;border:1px solid #4fc6e1;background-color:transparent;box-shadow:none}.badge-outline-info[href]:focus,.badge-outline-info[href]:hover{color:#4fc6e1;text-decoration:none;background-color:rgba(79,198,225,.2)}.badge-outline-warning{color:#f7b84b;border:1px solid #f7b84b;background-color:transparent;box-shadow:none}.badge-outline-warning[href]:focus,.badge-outline-warning[href]:hover{color:#f7b84b;text-decoration:none;background-color:rgba(247,184,75,.2)}.badge-outline-danger{color:#f1556c;border:1px solid #f1556c;background-color:transparent;box-shadow:none}.badge-outline-danger[href]:focus,.badge-outline-danger[href]:hover{color:#f1556c;text-decoration:none;background-color:rgba(241,85,108,.2)}.badge-outline-light{color:#f3f7f9;border:1px solid #f3f7f9;background-color:transparent;box-shadow:none}.badge-outline-light[href]:focus,.badge-outline-light[href]:hover{color:#f3f7f9;text-decoration:none;background-color:rgba(243,247,249,.2)}.badge-outline-dark{color:#323a46;border:1px solid #323a46;background-color:transparent;box-shadow:none}.badge-outline-dark[href]:focus,.badge-outline-dark[href]:hover{color:#323a46;text-decoration:none;background-color:rgba(50,58,70,.2)}.badge-outline-pink{color:#f672a7;border:1px solid #f672a7;background-color:transparent;box-shadow:none}.badge-outline-pink[href]:focus,.badge-outline-pink[href]:hover{color:#f672a7;text-decoration:none;background-color:rgba(246,114,167,.2)}.badge-outline-blue{color:#4a81d4;border:1px solid #4a81d4;background-color:transparent;box-shadow:none}.badge-outline-blue[href]:focus,.badge-outline-blue[href]:hover{color:#4a81d4;text-decoration:none;background-color:rgba(74,129,212,.2)}.bg-soft-primary{background-color:rgba(102,88,221,.25)!important}.bg-soft-secondary{background-color:rgba(108,117,125,.25)!important}.bg-soft-success{background-color:rgba(26,188,156,.25)!important}.bg-soft-info{background-color:rgba(79,198,225,.25)!important}.bg-soft-warning{background-color:rgba(247,184,75,.25)!important}.bg-soft-danger{background-color:rgba(241,85,108,.25)!important}.bg-soft-light{background-color:rgba(243,247,249,.25)!important}.bg-soft-dark{background-color:rgba(50,58,70,.25)!important}.bg-soft-pink{background-color:rgba(246,114,167,.25)!important}.bg-soft-blue{background-color:rgba(74,129,212,.25)!important}.bg-ghost{opacity:.4}.breadcrumb-item>a{color:#6c757d}.breadcrumb-item+.breadcrumb-item::before{font-family:"Material Design Icons"}.btn-primary{box-shadow:0 0 0 rgba(102,88,221,.5)}.btn-secondary{box-shadow:0 0 0 rgba(108,117,125,.5)}.btn-success{box-shadow:0 0 0 rgba(26,188,156,.5)}.btn-info{box-shadow:0 0 0 rgba(79,198,225,.5)}.btn-warning{box-shadow:0 0 0 rgba(247,184,75,.5)}.btn-danger{box-shadow:0 0 0 rgba(241,85,108,.5)}.btn-light{box-shadow:0 0 0 rgba(243,247,249,.5)}.btn-dark{box-shadow:0 0 0 rgba(50,58,70,.5)}.btn-pink{box-shadow:0 0 0 rgba(246,114,167,.5)}.btn-blue{box-shadow:0 0 0 rgba(74,129,212,.5)}.btn .mdi:before{margin-top:-1px}.btn i{display:inline-block}.btn-rounded{border-radius:2em}.btn-light,.btn-white{color:#323a46}.btn-white{border-color:#dee2e6}.btn-white:focus,.btn-white:hover{background-color:#f3f7f9;border-color:#f3f7f9}.btn-white.focus,.btn-white:focus{box-shadow:0 0 0 .15rem rgba(222,226,230,.3)}.btn-link{font-weight:400;color:#6658dd;background-color:transparent}.btn-link:hover{color:#3827c1;text-decoration:none;background-color:transparent;border-color:transparent}.btn-link.focus,.btn-link:focus{text-decoration:none;border-color:transparent;box-shadow:none}.btn-link.disabled,.btn-link:disabled{color:#98a6ad;pointer-events:none}.btn-outline-primary{color:#6658dd;border-color:#6658dd}.btn-outline-primary:hover{color:#fff;background-color:#6658dd;border-color:#6658dd}.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 .15rem rgba(102,88,221,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#6658dd;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#6658dd;border-color:#6658dd}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(102,88,221,.5)}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary.focus,.btn-outline-secondary:focus{box-shadow:0 0 0 .15rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(108,117,125,.5)}.btn-outline-success{color:#1abc9c;border-color:#1abc9c}.btn-outline-success:hover{color:#fff;background-color:#1abc9c;border-color:#1abc9c}.btn-outline-success.focus,.btn-outline-success:focus{box-shadow:0 0 0 .15rem rgba(26,188,156,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#1abc9c;background-color:transparent}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active,.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#1abc9c;border-color:#1abc9c}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(26,188,156,.5)}.btn-outline-info{color:#4fc6e1;border-color:#4fc6e1}.btn-outline-info:hover{color:#fff;background-color:#4fc6e1;border-color:#4fc6e1}.btn-outline-info.focus,.btn-outline-info:focus{box-shadow:0 0 0 .15rem rgba(79,198,225,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#4fc6e1;background-color:transparent}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active,.show>.btn-outline-info.dropdown-toggle{color:#fff;background-color:#4fc6e1;border-color:#4fc6e1}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(79,198,225,.5)}.btn-outline-warning{color:#f7b84b;border-color:#f7b84b}.btn-outline-warning:hover{color:#fff;background-color:#f7b84b;border-color:#f7b84b}.btn-outline-warning.focus,.btn-outline-warning:focus{box-shadow:0 0 0 .15rem rgba(247,184,75,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#f7b84b;background-color:transparent}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-outline-warning.dropdown-toggle{color:#fff;background-color:#f7b84b;border-color:#f7b84b}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(247,184,75,.5)}.btn-outline-danger{color:#f1556c;border-color:#f1556c}.btn-outline-danger:hover{color:#fff;background-color:#f1556c;border-color:#f1556c}.btn-outline-danger.focus,.btn-outline-danger:focus{box-shadow:0 0 0 .15rem rgba(241,85,108,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#f1556c;background-color:transparent}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#f1556c;border-color:#f1556c}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(241,85,108,.5)}.btn-outline-light{color:#f3f7f9;border-color:#f3f7f9}.btn-outline-light:hover{color:#343a40;background-color:#f3f7f9;border-color:#f3f7f9}.btn-outline-light.focus,.btn-outline-light:focus{box-shadow:0 0 0 .15rem rgba(243,247,249,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f3f7f9;background-color:transparent}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active,.show>.btn-outline-light.dropdown-toggle{color:#343a40;background-color:#f3f7f9;border-color:#f3f7f9}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(243,247,249,.5)}.btn-outline-dark{color:#323a46;border-color:#323a46}.btn-outline-dark:hover{color:#fff;background-color:#323a46;border-color:#323a46}.btn-outline-dark.focus,.btn-outline-dark:focus{box-shadow:0 0 0 .15rem rgba(50,58,70,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#323a46;background-color:transparent}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#323a46;border-color:#323a46}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(50,58,70,.5)}.btn-outline-pink{color:#f672a7;border-color:#f672a7}.btn-outline-pink:hover{color:#fff;background-color:#f672a7;border-color:#f672a7}.btn-outline-pink.focus,.btn-outline-pink:focus{box-shadow:0 0 0 .15rem rgba(246,114,167,.5)}.btn-outline-pink.disabled,.btn-outline-pink:disabled{color:#f672a7;background-color:transparent}.btn-outline-pink:not(:disabled):not(.disabled).active,.btn-outline-pink:not(:disabled):not(.disabled):active,.show>.btn-outline-pink.dropdown-toggle{color:#fff;background-color:#f672a7;border-color:#f672a7}.btn-outline-pink:not(:disabled):not(.disabled).active:focus,.btn-outline-pink:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-pink.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(246,114,167,.5)}.btn-outline-blue{color:#4a81d4;border-color:#4a81d4}.btn-outline-blue:hover{color:#fff;background-color:#4a81d4;border-color:#4a81d4}.btn-outline-blue.focus,.btn-outline-blue:focus{box-shadow:0 0 0 .15rem rgba(74,129,212,.5)}.btn-outline-blue.disabled,.btn-outline-blue:disabled{color:#4a81d4;background-color:transparent}.btn-outline-blue:not(:disabled):not(.disabled).active,.btn-outline-blue:not(:disabled):not(.disabled):active,.show>.btn-outline-blue.dropdown-toggle{color:#fff;background-color:#4a81d4;border-color:#4a81d4}.btn-outline-blue:not(:disabled):not(.disabled).active:focus,.btn-outline-blue:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-blue.dropdown-toggle:focus{box-shadow:0 0 0 .15rem rgba(74,129,212,.5)}.btn-label{margin:-.55rem .9rem -.55rem -.9rem;padding:.6rem .9rem;background-color:rgba(50,58,70,.1)}.btn-label-right{margin:-.45rem -.9rem -.45rem .9rem;padding:.45rem .9rem;background-color:rgba(50,58,70,.1);display:inline-block}.btn-xs{padding:.2rem .6rem;font-size:.75rem;border-radius:.15rem}.btn-soft-primary{color:#6658dd;background-color:rgba(102,88,221,.18);border-color:rgba(102,88,221,.12)}.btn-soft-primary:hover{color:#fff;background-color:#6658dd}.btn-soft-primary.focus,.btn-soft-primary:focus{box-shadow:0 0 0 .15rem rgba(102,88,221,.3)}.btn-soft-secondary{color:#6c757d;background-color:rgba(108,117,125,.18);border-color:rgba(108,117,125,.12)}.btn-soft-secondary:hover{color:#fff;background-color:#6c757d}.btn-soft-secondary.focus,.btn-soft-secondary:focus{box-shadow:0 0 0 .15rem rgba(108,117,125,.3)}.btn-soft-success{color:#1abc9c;background-color:rgba(26,188,156,.18);border-color:rgba(26,188,156,.12)}.btn-soft-success:hover{color:#fff;background-color:#1abc9c}.btn-soft-success.focus,.btn-soft-success:focus{box-shadow:0 0 0 .15rem rgba(26,188,156,.3)}.btn-soft-info{color:#4fc6e1;background-color:rgba(79,198,225,.18);border-color:rgba(79,198,225,.12)}.btn-soft-info:hover{color:#fff;background-color:#4fc6e1}.btn-soft-info.focus,.btn-soft-info:focus{box-shadow:0 0 0 .15rem rgba(79,198,225,.3)}.btn-soft-warning{color:#f7b84b;background-color:rgba(247,184,75,.18);border-color:rgba(247,184,75,.12)}.btn-soft-warning:hover{color:#fff;background-color:#f7b84b}.btn-soft-warning.focus,.btn-soft-warning:focus{box-shadow:0 0 0 .15rem rgba(247,184,75,.3)}.btn-soft-danger{color:#f1556c;background-color:rgba(241,85,108,.18);border-color:rgba(241,85,108,.12)}.btn-soft-danger:hover{color:#fff;background-color:#f1556c}.btn-soft-danger.focus,.btn-soft-danger:focus{box-shadow:0 0 0 .15rem rgba(241,85,108,.3)}.btn-soft-light{color:#f3f7f9;background-color:rgba(243,247,249,.18);border-color:rgba(243,247,249,.12)}.btn-soft-light:hover{color:#fff;background-color:#f3f7f9}.btn-soft-light.focus,.btn-soft-light:focus{box-shadow:0 0 0 .15rem rgba(243,247,249,.3)}.btn-soft-dark{color:#323a46;background-color:rgba(50,58,70,.18);border-color:rgba(50,58,70,.12)}.btn-soft-dark:hover{color:#fff;background-color:#323a46}.btn-soft-dark.focus,.btn-soft-dark:focus{box-shadow:0 0 0 .15rem rgba(50,58,70,.3)}.btn-soft-pink{color:#f672a7;background-color:rgba(246,114,167,.18);border-color:rgba(246,114,167,.12)}.btn-soft-pink:hover{color:#fff;background-color:#f672a7}.btn-soft-pink.focus,.btn-soft-pink:focus{box-shadow:0 0 0 .15rem rgba(246,114,167,.3)}.btn-soft-blue{color:#4a81d4;background-color:rgba(74,129,212,.18);border-color:rgba(74,129,212,.12)}.btn-soft-blue:hover{color:#fff;background-color:#4a81d4}.btn-soft-blue.focus,.btn-soft-blue:focus{box-shadow:0 0 0 .15rem rgba(74,129,212,.3)}.card{margin-bottom:24px;box-shadow:0 .75rem 6rem rgba(56,65,74,.03)}.card-drop{font-size:20px;line-height:0;color:inherit}.card-widgets{float:right;height:16px}.card-widgets>a{color:inherit;font-size:18px;display:inline-block;line-height:1}.card-widgets>a.collapsed i:before{content:"\F0415"}.card-header,.card-title{margin-top:0}.card-disabled{position:absolute;left:0;right:0;top:0;bottom:0;border-radius:.25rem;background:rgba(255,255,255,.8);cursor:progress}.card-disabled .card-portlets-loader{background-color:#3e4852;animation:rotatebox 1.2s infinite ease-in-out;height:30px;width:30px;position:absolute;left:50%;top:50%;border-radius:3px;margin-left:-12px;margin-top:-12px}@keyframes rotatebox{0%{transform:perspective(120px) rotateX(0) rotateY(0)}50%{transform:perspective(120px) rotateX(-180.1deg) rotateY(0)}100%{transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg)}}.card-box{background-color:#fff;padding:1.5rem;box-shadow:0 .75rem 6rem rgba(56,65,74,.03);margin-bottom:24px;border-radius:.25rem}.header-title{font-size:1rem;margin:0 0 7px 0}.sub-header{font-size:.875rem;margin-bottom:24px;color:#98a6ad}.dropdown-menu{padding:.3rem;box-shadow:0 0 35px 0 rgba(154,161,171,.15);animation-name:DropDownSlide;animation-duration:.3s;animation-fill-mode:both;margin:0;position:absolute;z-index:1000}.dropdown-menu.show{top:100%!important}.dropdown-menu i{display:inline-block}.dropdown-menu-right{right:0!important;left:auto!important}.dropdown-menu[x-placement^=left],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=top]{top:auto!important;animation:none!important}@keyframes DropDownSlide{100%{transform:translateY(0)}0%{transform:translateY(40px)}}@media (min-width:600px){.dropdown-lg{width:320px}}.dropdown-mega{position:static!important}.dropdown-megamenu{padding:20px;left:20px!important;right:20px!important;background-image:url(../images/megamenu-bg.png);background-position:right bottom;background-repeat:no-repeat}.megamenu-list li{padding:5px 20px 5px 25px;position:relative}.megamenu-list li a{color:#6c757d}.megamenu-list li a:hover{color:#6658dd}.megamenu-list li:before{content:"\F0142";position:absolute;left:0;font-family:"Material Design Icons"}.dropdown-icon-item{display:block;border-radius:3px;line-height:34px;text-align:center;padding:15px 0 9px;display:block;border:1px solid transparent;color:#6c757d}.dropdown-icon-item img{height:24px}.dropdown-icon-item span{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.dropdown-icon-item:hover{background-color:#f3f7f9}@media (min-width:992px){.dropdown-mega-menu-xl{width:40rem}.dropdown-mega-menu-lg{width:26rem}}.custom-select,.form-control{box-shadow:none}.form-control-light{background-color:#f3f7f9!important;border-color:#f3f7f9!important}input.form-control[type=color],input.form-control[type=range]{min-height:39px}.custom-select.is-invalid:focus,.custom-select.is-valid:focus,.custom-select:invalid:focus,.custom-select:valid:focus,.form-control.is-invalid:focus,.form-control.is-valid:focus,.form-control:invalid:focus,.form-control:valid:focus{box-shadow:none!important}.comment-area-box .form-control{border-color:#dee2e6;border-radius:.2rem .2rem 0 0}.comment-area-box .comment-area-btn{background-color:#f3f7f9;padding:10px;border:1px solid #dee2e6;border-top:none;border-radius:0 0 .2rem .2rem}.search-bar .form-control{padding-left:40px;padding-right:20px;border-radius:30px}.search-bar span{position:absolute;z-index:10;font-size:16px;line-height:calc(1.5em + .9rem + 2px);left:13px;top:-2px;color:#98a6ad}.password-eye:before{font-family:feather!important;content:"\e86a";font-style:normal;font-weight:400;font-variant:normal;vertical-align:middle;line-height:1.2;font-size:16px}.show-password .password-eye:before{content:"\e86e"}.modal-title{margin-top:0}.modal-full-width{width:95%;max-width:none}.modal-top{margin:0 auto}.modal-right{position:absolute;right:0;display:flex;flex-flow:column nowrap;justify-content:center;height:100%;margin:0;background-color:#fff;align-content:center;transform:translate(25%,0)!important}.modal-right button.close{position:fixed;top:20px;right:20px;z-index:1}.modal.show .modal-right{transform:translate(0,0)!important}.modal-bottom{display:flex;flex-flow:column nowrap;justify-content:flex-end;height:100%;margin:0 auto;align-content:center}.modal-colored-header{color:#fff;border-radius:0}.modal-colored-header .close{color:#fff!important}.nav-pills>li>a,.nav-tabs>li>a{color:#6c757d;font-weight:600}.nav-pills>a{color:#6c757d;font-weight:600}.navtab-bg .nav-link{background-color:#edeff1;margin:0 5px}.nav-bordered{border-bottom:2px solid rgba(152,166,173,.2)!important}.nav-bordered .nav-item{margin-bottom:-2px}.nav-bordered li a{border:0!important;padding:10px 20px}.nav-bordered a.active{border-bottom:2px solid #6658dd!important}.tab-content{padding:20px 0 0 0}.pagination-rounded .page-link{border-radius:30px!important;margin:0 3px;border:none}.popover-header{margin-top:0}.progress-sm{height:5px}.progress-md{height:8px}.progress-lg{height:12px}.progress-xl{height:15px}.progress-vertical{min-height:250px;height:250px;width:10px;position:relative;display:inline-block;margin-bottom:0;margin-right:20px}.progress-vertical .progress-bar{width:100%}.progress-vertical.progress-xl{width:15px}.progress-vertical.progress-lg{width:12px}.progress-vertical.progress-md{width:8px}.progress-vertical.progress-sm{width:5px}.progress-vertical-bottom{min-height:250px;height:250px;position:relative;width:10px;display:inline-block;margin-bottom:0;margin-right:20px}.progress-vertical-bottom .progress-bar{width:100%;bottom:0;position:absolute}.progress-vertical-bottom.progress-xl{width:15px}.progress-vertical-bottom.progress-lg{width:12px}.progress-vertical-bottom.progress-md{width:8px}.progress-vertical-bottom.progress-sm{width:5px}label{font-weight:600}button:focus{outline:0}th{font-weight:700}.table-centered td,.table-centered th{vertical-align:middle!important}.table-nowrap td,.table-nowrap th{white-space:nowrap}.table .table-user img{height:30px;width:30px}.action-icon{color:#98a6ad;font-size:1.2rem;display:inline-block;padding:0 3px}.action-icon:hover{color:#6c757d}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin:10px 0;font-family:"Cerebri Sans,sans-serif";color:#343a40}.font-11{font-size:11px!important}.font-12{font-size:12px!important}.font-13{font-size:13px!important}.font-14{font-size:14px!important}.font-15{font-size:15px!important}.font-16{font-size:16px!important}.font-17{font-size:17px!important}.font-18{font-size:18px!important}.font-19{font-size:19px!important}.font-20{font-size:20px!important}.font-22{font-size:22px!important}.font-24{font-size:24px!important}.font-26{font-size:26px!important}.font-28{font-size:28px!important}.font-weight-medium{font-weight:500}.font-weight-semibold{font-weight:600}
  /*# sourceMappingURL=bootstrap.min.css.map */

  
  
  /**
  Custom CSS
   */
  /*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 4.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Main Css File
*/
  @import url("https://fonts.googleapis.com/css?family=Nunito:400,600,700,900");
  @font-face {
    font-family: "Cerebri Sans,sans-serif";
    src: url("../fonts/cerebrisans-light.eot");
    src: local("Cerebri-sans Light"), url("../fonts/cerebrisans-light.woff") format("woff");
    font-weight: 300; }

  @font-face {
    font-family: "Cerebri Sans,sans-serif";
    src: url("../fonts/cerebrisans-regular.eot");
    src: local("Cerebri-sans Regular"), url("../fonts/cerebrisans-regular.woff") format("woff");
    font-weight: 400; }

  @font-face {
    font-family: "Cerebri Sans,sans-serif";
    src: url("../fonts/cerebrisans-medium.eot");
    src: local("Cerebri-sans Medium"), url("../fonts/cerebrisans-medium.woff") format("woff");
    font-weight: 500; }

  @font-face {
    font-family: "Cerebri Sans,sans-serif";
    src: url("../fonts/cerebrisans-semibold.eot");
    src: local("Cerebri-sans Semibold"), url("../fonts/cerebrisans-semibold.woff") format("woff");
    font-weight: 600; }

  @font-face {
    font-family: "Cerebri Sans,sans-serif";
    src: url("../fonts/cerebrisans-bold.eot");
    src: local("Cerebri-sans Bold"), url("../fonts/cerebrisans-bold.woff") format("woff");
    font-weight: 700; }

  html {
    position: relative;
    min-height: 100%; }

  body {
    overflow-x: hidden; }

  #wrapper {
    height: 100%;
    overflow: hidden;
    width: 100%; }

  .content-page {
    margin-left: 240px;
    overflow: hidden;
    padding: 0 15px 65px 15px;
    min-height: 80vh;
    margin-top: 70px; }

  .border-bottom{
    border-bottom: 2px solid #07173B !important;
  }
  .border-bottom-white{
    border-bottom: 2px solid #fff !important;
  }
  .left-side-menu {
    width: 240px;
    background: #07183B;
    bottom: 0;
    padding: 20px 0;
    position: fixed;
    transition: all .1s ease-out;
    top: 70px;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15); }

  #sidebar-menu > ul {
    list-style: none;
    padding: 0; }
  #sidebar-menu > ul > li > a {
    color: #6e768e;
    display: block;
    padding: 12px 20px;
    position: relative;
    transition: all 0.4s;
    font-family: "Cerebri Sans,sans-serif";
    font-size: 0.95rem; }
  #sidebar-menu > ul > li > a:hover, #sidebar-menu > ul > li > a:focus, #sidebar-menu > ul > li > a:active {
    color: #00acc1;
    text-decoration: none; }
  #sidebar-menu > ul > li > a > span {
    vertical-align: middle; }
  #sidebar-menu > ul > li > a i {
    display: inline-block;
    line-height: 1.0625rem;
    margin: 0 10px 0 3px;
    text-align: center;
    vertical-align: middle;
    width: 16px;
    font-size: 18px; }
  #sidebar-menu > ul > li > a svg {
    width: 16px;
    height: 16px;
    margin-left: 3px;
    margin-right: 10px; }
  #sidebar-menu > ul > li > a .drop-arrow {
    float: right; }
  #sidebar-menu > ul > li > a .drop-arrow i {
    margin-right: 0; }
  #sidebar-menu > ul > li > a.mm-active {
    color: #00acc1; }
  #sidebar-menu > ul > li ul {
    padding-left: 34px;
    list-style: none; }
  #sidebar-menu > ul > li ul ul {
    padding-left: 20px; }

  #sidebar-menu .badge {
    margin-top: 4px; }

  #sidebar-menu .menu-title {
    padding: 10px 20px;
    letter-spacing: .05em;
    pointer-events: none;
    cursor: default;
    font-size: 0.6875rem;
    text-transform: uppercase;
    color: #6e768e;
    font-weight: 600; }

  #sidebar-menu .menuitem-active > a {
    color: #00acc1; }

  #sidebar-menu .menuitem-active .active {
    color: #00acc1; }

  .nav-second-level li a {
    padding: 8px 20px;
    color: #6e768e;
    display: block;
    position: relative;
    transition: all 0.4s;
    font-size: 0.875rem; }
  .nav-second-level li a:focus, .nav-second-level li a:hover {
    color: #00acc1; }

  .nav-second-level li.active > a {
    color: #00acc1; }

  .menu-arrow {
    transition: transform .15s;
    position: absolute;
    right: 20px;
    display: inline-block;
    font-family: 'Material Design Icons';
    text-rendering: auto;
    line-height: 1.5rem;
    font-size: 1.1rem;
    transform: translate(0, 0); }
  .menu-arrow:before {
    content: "\F0142"; }

  li > a[aria-expanded="true"] > span.menu-arrow {
    transform: rotate(90deg); }

  li.menuitem-active > a:not(.collapsed) > span.menu-arrow {
    transform: rotate(90deg); }

  body[data-sidebar-size="condensed"] .logo-box {
    width: 70px !important; }

  body[data-sidebar-size="condensed"] .logo span.logo-lg {
    display: none; }

  body[data-sidebar-size="condensed"] .logo span.logo-sm {
    display: block; }

  body[data-sidebar-size="condensed"] .left-side-menu {
    position: absolute;
    padding-top: 0;
    width: 70px !important;
    z-index: 5; }
  body[data-sidebar-size="condensed"] .left-side-menu .simplebar-mask,
  body[data-sidebar-size="condensed"] .left-side-menu .simplebar-content-wrapper {
    overflow: visible !important; }
  body[data-sidebar-size="condensed"] .left-side-menu .simplebar-scrollbar {
    display: none !important; }
  body[data-sidebar-size="condensed"] .left-side-menu .simplebar-offset {
    bottom: 0 !important; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu .menu-title,
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu .menu-arrow,
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu .label,
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu .badge,
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu .collapse.in {
    display: none !important; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu .nav.collapse {
    height: inherit !important; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li {
    position: relative;
    white-space: nowrap; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li > a {
    padding: 15px 20px;
    min-height: 54px;
    transition: none; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li > a:hover, body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li > a:active, body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li > a:focus {
    color: #00acc1; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li > a i {
    font-size: 1.3rem;
    margin-right: 20px;
    margin-left: 5px; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li > a svg {
    width: 18px;
    height: 18px;
    margin-left: 6px; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li > a span {
    display: none;
    padding-left: 25px; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover > a {
    position: relative;
    width: calc(190px + 70px);
    color: #00acc1;
    background-color: #f3f7f9;
    box-shadow: inset 3px 5px 10px 0 rgba(154, 161, 171, 0.2); }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover > a span {
    display: inline; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover a.open :after,
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover a.active :after {
    display: none; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover > .collapse {
    display: block !important;
    height: auto !important;
    transition: none !important; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover > .collapse > ul {
    display: block !important;
    left: 70px;
    position: absolute;
    width: 190px;
    box-shadow: 3px 5px 10px 0 rgba(154, 161, 171, 0.2); }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover > .collapse > ul ul {
    box-shadow: 3px 5px 10px 0 rgba(154, 161, 171, 0.2); }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover > .collapse > ul a {
    box-shadow: none;
    padding: 8px 20px;
    position: relative;
    width: 190px;
    z-index: 6; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul > li:hover > .collapse > ul a:hover {
    color: #00acc1; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul .collapsing {
    display: block !important;
    height: auto !important;
    transition: none !important; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul ul {
    padding: 5px 0;
    z-index: 9999;
    display: none;
    background-color: #ffffff; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul ul li:hover > .collapse {
    display: block !important;
    height: auto !important;
    transition: none !important; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul ul li:hover > .collapse > ul {
    display: block;
    left: 190px;
    margin-top: -36px;
    position: absolute;
    width: 190px; }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul ul li > a span.pull-right {
    position: absolute;
    right: 20px;
    top: 12px;
    transform: rotate(270deg); }
  body[data-sidebar-size="condensed"] .left-side-menu #sidebar-menu > ul ul li.active a {
    color: #00acc1; }

  body[data-sidebar-size="condensed"] .content-page {
    margin-left: 70px !important; }

  @media (min-width: 992px) {
    body[data-sidebar-size="condensed"] .footer {
      left: 70px !important; } }

  body[data-sidebar-size="condensed"] .user-box {
    display: none !important; }

  @media (min-width: 768px) {
    body[data-sidebar-size="condensed"]:not([data-layout="compact"]) {
      min-height: 1750px; } }

  @media (max-width: 767.98px) {
    .pro-user-name {
      display: none; } }

  @media (max-width: 991.98px) {
    body {
      overflow-x: hidden;
      padding-bottom: 80px; }
    .left-side-menu {
      display: none;
      z-index: 10 !important; }
    .sidebar-enable .left-side-menu {
      display: block; }
    .content-page,
    body[data-sidebar-size="condensed"] .content-page {
      margin-left: 0 !important;
      padding: 0 10px; }
    .footer {
      left: 0 !important; } }

  /* =============
  Small Menu
============= */
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .logo-box {
    width: 160px !important; }

  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu {
    width: 160px !important;
    text-align: center; }
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu #sidebar-menu > ul > li > a > i {
    display: block;
    font-size: 18px;
    line-height: 24px;
    width: 100%;
    margin: 0; }
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu #sidebar-menu > ul > li > a svg {
    display: block;
    margin: 0 auto 5px auto; }
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu #sidebar-menu > ul ul {
    padding-left: 0; }
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu #sidebar-menu > ul ul a {
    padding: 10px 20px; }
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu .menu-arrow,
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu .badge {
    display: none !important; }
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu + .content-page {
    margin-left: 160px; }
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu + .content-page .footer {
    left: 160px; }
  body[data-sidebar-size="compact"]:not([data-sidebar-size="condensed"]) .left-side-menu .menu-title {
    background-color: #f3f7f9; }

  body[data-sidebar-color="dark"] .logo-box {
    background-color: #008751; }
  body[data-sidebar-color="dark"] .logo-box .logo-dark {
    display: none; }
  body[data-sidebar-color="dark"] .logo-box .logo-light {
    display: block; }

  body[data-sidebar-color="dark"] .left-side-menu {
    background-color: #008751;
    box-shadow: none; }
  body[data-sidebar-color="dark"] .left-side-menu #sidebar-menu > ul > li > a {
    color: #9097a7; }
  body[data-sidebar-color="dark"] .left-side-menu #sidebar-menu > ul > li > a:hover, body[data-sidebar-color="dark"] .left-side-menu #sidebar-menu > ul > li > a:focus, body[data-sidebar-color="dark"] .left-side-menu #sidebar-menu > ul > li > a:active {
    color: #c8cddc; }
  body[data-sidebar-color="dark"] .left-side-menu #sidebar-menu > ul > li > a.mm-active {
    color: #ffffff;
    background-color: #3d4751; }
  body[data-sidebar-color="dark"] .left-side-menu #sidebar-menu .menu-title {
    color: #adb5bd; }
  body[data-sidebar-color="dark"] .left-side-menu #sidebar-menu .menuitem-active > a {
    color: #00acc1; }
  body[data-sidebar-color="dark"] .left-side-menu #sidebar-menu .menuitem-active .active {
    color: #00acc1; }
  body[data-sidebar-color="dark"] .left-side-menu .nav-second-level li a,
  body[data-sidebar-color="dark"] .left-side-menu .nav-thrid-level li a {
    color: #9097a7; }
  body[data-sidebar-color="dark"] .left-side-menu .nav-second-level li a:focus, body[data-sidebar-color="dark"] .left-side-menu .nav-second-level li a:hover,
  body[data-sidebar-color="dark"] .left-side-menu .nav-thrid-level li a:focus,
  body[data-sidebar-color="dark"] .left-side-menu .nav-thrid-level li a:hover {
    background-color: transparent;
    color: #c8cddc; }
  body[data-sidebar-color="dark"] .left-side-menu .nav-second-level li.active > a,
  body[data-sidebar-color="dark"] .left-side-menu .nav-thrid-level li.active > a {
    color: #ffffff; }
  body[data-sidebar-color="dark"] .left-side-menu .user-box .dropdown > a {
    color: #fff !important; }

  body[data-sidebar-color="dark"][data-sidebar-size="condensed"] #wrapper .left-side-menu #sidebar-menu > ul > li:hover > a {
    background-color: #008751;
    box-shadow: none; }

  body[data-sidebar-color="dark"][data-sidebar-size="condensed"] #wrapper .left-side-menu #sidebar-menu .mm-active .active {
    color: #00acc1; }

  body[data-sidebar-color="dark"][data-sidebar-size="compact"] #wrapper .left-side-menu .menu-title {
    background-color: rgba(255, 255, 255, 0.03); }

  body[data-sidebar-color="brand"] .logo-box,
  body[data-sidebar-color="gradient"] .logo-box {
    background-color: #4a81d4; }
  body[data-sidebar-color="brand"] .logo-box .logo-dark,
  body[data-sidebar-color="gradient"] .logo-box .logo-dark {
    display: none; }
  body[data-sidebar-color="brand"] .logo-box .logo-light,
  body[data-sidebar-color="gradient"] .logo-box .logo-light {
    display: block; }

  body[data-sidebar-color="brand"] .menuitem-active > a,
  body[data-sidebar-color="gradient"] .menuitem-active > a {
    color: #fff !important; }

  body[data-sidebar-color="brand"] .left-side-menu,
  body[data-sidebar-color="gradient"] .left-side-menu {
    background-color: #4a81d4;
    box-shadow: none; }
  body[data-sidebar-color="brand"] .left-side-menu #sidebar-menu > ul > li > a,
  body[data-sidebar-color="gradient"] .left-side-menu #sidebar-menu > ul > li > a {
    color: rgba(255, 255, 255, 0.7); }
  body[data-sidebar-color="brand"] .left-side-menu #sidebar-menu > ul > li > a:hover, body[data-sidebar-color="brand"] .left-side-menu #sidebar-menu > ul > li > a:focus, body[data-sidebar-color="brand"] .left-side-menu #sidebar-menu > ul > li > a:active,
  body[data-sidebar-color="gradient"] .left-side-menu #sidebar-menu > ul > li > a:hover,
  body[data-sidebar-color="gradient"] .left-side-menu #sidebar-menu > ul > li > a:focus,
  body[data-sidebar-color="gradient"] .left-side-menu #sidebar-menu > ul > li > a:active {
    color: rgba(255, 255, 255, 0.9); }
  body[data-sidebar-color="brand"] .left-side-menu #sidebar-menu > ul > li > a.mm-active,
  body[data-sidebar-color="gradient"] .left-side-menu #sidebar-menu > ul > li > a.mm-active {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.07); }
  body[data-sidebar-color="brand"] .left-side-menu #sidebar-menu .menu-title,
  body[data-sidebar-color="gradient"] .left-side-menu #sidebar-menu .menu-title {
    color: rgba(255, 255, 255, 0.6); }
  body[data-sidebar-color="brand"] .left-side-menu #sidebar-menu .mm-active .active,
  body[data-sidebar-color="gradient"] .left-side-menu #sidebar-menu .mm-active .active {
    color: #fff; }
  body[data-sidebar-color="brand"] .left-side-menu .nav-second-level li a,
  body[data-sidebar-color="brand"] .left-side-menu .nav-thrid-level li a,
  body[data-sidebar-color="gradient"] .left-side-menu .nav-second-level li a,
  body[data-sidebar-color="gradient"] .left-side-menu .nav-thrid-level li a {
    color: rgba(255, 255, 255, 0.7); }
  body[data-sidebar-color="brand"] .left-side-menu .nav-second-level li a:focus, body[data-sidebar-color="brand"] .left-side-menu .nav-second-level li a:hover,
  body[data-sidebar-color="brand"] .left-side-menu .nav-thrid-level li a:focus,
  body[data-sidebar-color="brand"] .left-side-menu .nav-thrid-level li a:hover,
  body[data-sidebar-color="gradient"] .left-side-menu .nav-second-level li a:focus,
  body[data-sidebar-color="gradient"] .left-side-menu .nav-second-level li a:hover,
  body[data-sidebar-color="gradient"] .left-side-menu .nav-thrid-level li a:focus,
  body[data-sidebar-color="gradient"] .left-side-menu .nav-thrid-level li a:hover {
    background-color: transparent;
    color: #fff; }
  body[data-sidebar-color="brand"] .left-side-menu .nav-second-level li.active > a,
  body[data-sidebar-color="brand"] .left-side-menu .nav-thrid-level li.active > a,
  body[data-sidebar-color="gradient"] .left-side-menu .nav-second-level li.active > a,
  body[data-sidebar-color="gradient"] .left-side-menu .nav-thrid-level li.active > a {
    color: #ffffff; }
  body[data-sidebar-color="brand"] .left-side-menu .user-box .dropdown > a,
  body[data-sidebar-color="gradient"] .left-side-menu .user-box .dropdown > a {
    color: #fff !important; }

  body[data-sidebar-color="brand"][data-sidebar-size="condensed"] #wrapper .left-side-menu #sidebar-menu > ul > li:hover > a,
  body[data-sidebar-color="gradient"][data-sidebar-size="condensed"] #wrapper .left-side-menu #sidebar-menu > ul > li:hover > a {
    background-color: #4a81d4;
    box-shadow: none;
    color: #fff; }

  body[data-sidebar-color="brand"][data-sidebar-size="condensed"] #wrapper .left-side-menu #sidebar-menu .mm-active .active,
  body[data-sidebar-color="gradient"][data-sidebar-size="condensed"] #wrapper .left-side-menu #sidebar-menu .mm-active .active {
    color: #00acc1; }

  body[data-sidebar-color="brand"][data-sidebar-size="condensed"] #wrapper .left-side-menu .nav-second-level li a,
  body[data-sidebar-color="brand"][data-sidebar-size="condensed"] #wrapper .left-side-menu .nav-thrid-level li a,
  body[data-sidebar-color="gradient"][data-sidebar-size="condensed"] #wrapper .left-side-menu .nav-second-level li a,
  body[data-sidebar-color="gradient"][data-sidebar-size="condensed"] #wrapper .left-side-menu .nav-thrid-level li a {
    color: #6e768e; }

  body[data-sidebar-color="brand"][data-sidebar-size="compact"] #wrapper .left-side-menu .menu-title,
  body[data-sidebar-color="gradient"][data-sidebar-size="compact"] #wrapper .left-side-menu .menu-title {
    background-color: rgba(255, 255, 255, 0.05); }

  body[data-sidebar-color="gradient"] .logo-box,
  body[data-sidebar-color="gradient"] .left-side-menu {
    background: #683ba9;
    background-image: linear-gradient(270deg, rgba(64, 149, 216, 0.15), transparent); }

  body[data-sidebar-color="gradient"][data-sidebar-size="condensed"] #wrapper .left-side-menu #sidebar-menu > ul > li:hover > a {
    background: #683ba9; }

  body[data-sidebar-color="gradient"][data-sidebar-size="condensed"] #wrapper .left-side-menu #sidebar-menu .mm-active .active {
    color: #00acc1; }

  body[data-sidebar-color="gradient"][data-sidebar-size="condensed"] #wrapper .left-side-menu .nav-second-level li a,
  body[data-sidebar-color="gradient"][data-sidebar-size="condensed"] #wrapper .left-side-menu .nav-thrid-level li a {
    color: #6e768e; }

  .user-box {
    display: none; }

  .user-pro-dropdown {
    background-color: #f3f7f9;
    box-shadow: none;
    padding: 15px 5px;
    width: 90%;
    margin-left: 5%;
    margin-top: 10px; }
  .user-pro-dropdown .dropdown-item {
    border-radius: 3px; }
  .user-pro-dropdown .dropdown-item:hover {
    background-color: #008751;
    color: #fff; }

  @media (min-width: 992px) {
    body[data-layout-mode="detached"] .navbar-custom .container-fluid {
      max-width: 95%; }
    body[data-layout-mode="detached"] #wrapper {
      max-width: 95%;
      margin: 0 auto; }
    body[data-layout-mode="detached"] .left-side-menu {
      margin-top: 30px;
      margin-bottom: 30px;
      border-radius: 5px; }
    body[data-layout-mode="detached"] .content-page {
      padding-bottom: 30px; }
    body[data-layout-mode="detached"] .logo-box {
      background-color: transparent;
      background-image: none; } }

  body[data-sidebar-showuser="true"] .user-box {
    display: block; }

  body[data-sidebar-icon="twotones"] #sidebar-menu > ul > li > a i {
    color: #4a81d4; }

  body[data-sidebar-icon="twotones"] #sidebar-menu > ul > li > a svg {
    width: 18px;
    height: 18px;
    margin-left: 3px;
    margin-right: 10px;
    color: #4a81d4;
    fill: rgba(74, 129, 212, 0.2); }

  .logo {
    display: block; }
  .logo span.logo-lg {
    display: block; }
  .logo span.logo-sm {
    display: none; }
  .logo .logo-lg-text-dark {
    color: #323a46;
    font-weight: 700;
    font-size: 22px;
    text-transform: uppercase; }
  .logo .logo-lg-text-light {
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    text-transform: uppercase; }

  .logo-box {
    height: 70px;
    width: 240px;
    float: left;
    transition: all .1s ease-out; }
  .logo-box .logo {
    line-height: 70px; }

  .logo-light {
    display: block; }

  .logo-dark {
    display: none; }

  .navbar-custom {
    background-color: #FFF;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    padding: 0 10px 0 0;
    position: fixed;
    left: 0;
    right: 0;
    height: 70px;
    z-index: 1001;
    /* Search */ }
  .navbar-custom .topnav-menu > li {
    float: left; }
  .navbar-custom .topnav-menu .nav-link {
    padding: 0 15px;
    color: #6C757D; /*rgba(255, 255, 255, 0.6);*/
    min-width: 32px;
    display: block;
    line-height: 70px;
    text-align: center;
    max-height: 70px; }
  .navbar-custom .dropdown.show .nav-link {
    background-color: rgba(255, 255, 255, 0.05); }
  .navbar-custom .container-fluid {
    padding: 0; }
  .navbar-custom .app-search {
    height: 70px;
    display: table;
    max-width: 180px;
    margin-right: 20px; }
  .navbar-custom .app-search .app-search-box {
    display: table-cell;
    vertical-align: middle;
    position: relative; }
  .navbar-custom .app-search .app-search-box input:-ms-input-placeholder {
    font-size: 0.8125rem;
    color: rgba(255, 255, 255, 0.3); }
  .navbar-custom .app-search .app-search-box input::-ms-input-placeholder {
    font-size: 0.8125rem;
    color: rgba(255, 255, 255, 0.3); }
  .navbar-custom .app-search .app-search-box input::placeholder {
    font-size: 0.8125rem;
    color: rgba(255, 255, 255, 0.3); }
  .navbar-custom .app-search .form-control {
    border: none;
    height: 38px;
    padding-left: 20px;
    padding-right: 0;
    color: #fff;
    background-color: rgba(255, 255, 255, 0.07);
    box-shadow: none;
    border-radius: 30px 0 0 30px; }
  .navbar-custom .app-search .input-group-append {
    margin-left: 0;
    z-index: 4; }
  .navbar-custom .app-search .btn {
    background-color: rgba(255, 255, 255, 0.07);
    border-color: transparent;
    color: rgba(255, 255, 255, 0.3);
    border-radius: 0 30px 30px 0;
    box-shadow: none !important; }
  .navbar-custom .button-menu-mobile {
    border: none;
    color: #fff;
    display: inline-block;
    height: 70px;
    line-height: 70px;
    width: 60px;
    background-color: transparent;
    font-size: 24px;
    cursor: pointer; }
  .navbar-custom .button-menu-mobile.disable-btn {
    display: none; }

  /* Notification */
  .noti-scroll {
    max-height: 230px; }

  .notification-list {
    margin-left: 0; }
  .notification-list .noti-title {
    background-color: transparent;
    padding: 15px 20px; }
  .notification-list .noti-icon-badge {
    display: inline-block;
    position: absolute;
    top: 16px;
    right: 10px; }
  .notification-list .notify-item {
    padding: 12px 20px; }
  .notification-list .notify-item .notify-icon {
    float: left;
    height: 36px;
    width: 36px;
    font-size: 18px;
    line-height: 36px;
    text-align: center;
    margin-right: 10px;
    border-radius: 50%;
    color: #fff; }
  .notification-list .notify-item .notify-details {
    margin-bottom: 5px;
    overflow: hidden;
    margin-left: 45px;
    text-overflow: ellipsis;
    white-space: nowrap;
    color: #343a40; }
  .notification-list .notify-item .notify-details b {
    font-weight: 500; }
  .notification-list .notify-item .notify-details small {
    display: block; }
  .notification-list .notify-item .notify-details span {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-size: 13px; }
  .notification-list .notify-item .user-msg {
    margin-left: 45px;
    white-space: normal;
    line-height: 16px; }
  .notification-list .profile-dropdown .notify-item {
    padding: 7px 20px; }

  .noti-icon {
    font-size: 21px;
    vertical-align: middle; }

  .profile-dropdown {
    min-width: 170px; }
  .profile-dropdown i {
    vertical-align: middle;
    margin-right: 5px; }

  .nav-user {
    padding: 0 12px !important; }
  .nav-user img {
    height: 32px;
    width: 32px; }

  .fullscreen-enable [data-toggle="fullscreen"] .fe-maximize::before {
    content: "\e88d"; }

  @media (max-width: 991.98px) {
    .logo-box {
      width: 70px !important;
      padding-right: 0 !important; }
    .logo-box .logo-lg {
      display: none !important; }
    .logo-box .logo-sm {
      display: block !important; } }

  @media (max-width: 600px) {
    .navbar-custom .dropdown {
      position: static; }
    .navbar-custom .dropdown .dropdown-menu {
      left: 10px !important;
      right: 10px !important; } }

  body[data-topbar-color="light"] .navbar-custom {
    background-color: #ffffff !important;
    box-shadow: 0 0.75rem 6rem rgba(56, 65, 74, 0.03);
    /* Search */ }
  body[data-topbar-color="light"] .navbar-custom .topnav-menu .nav-link {
    color: #6c757d; }
  body[data-topbar-color="light"] .navbar-custom .dropdown.show .nav-link {
    background-color: rgba(50, 58, 70, 0.03); }
  body[data-topbar-color="light"] .navbar-custom .button-menu-mobile {
    color: #323a46; }
  body[data-topbar-color="light"] .navbar-custom .app-search input:-ms-input-placeholder {
    color: #adb5bd !important; }
  body[data-topbar-color="light"] .navbar-custom .app-search input::-ms-input-placeholder {
    color: #adb5bd !important; }
  body[data-topbar-color="light"] .navbar-custom .app-search input::placeholder {
    color: #adb5bd !important; }
  body[data-topbar-color="light"] .navbar-custom .app-search .form-control {
    color: #323a46;
    background-color: #f3f7f9;
    border-color: #f3f7f9; }
  body[data-topbar-color="light"] .navbar-custom .app-search .btn {
    background-color: #f3f7f9;
    color: #ced4da; }

  body[data-topbar-color="light"] .logo-dark {
    display: block; }

  body[data-topbar-color="light"] .logo-light {
    display: none; }

  @media (max-width: 991.98px) {
    body[data-layout-mode="horizontal"] .navbar-toggle {
      border: 0;
      position: relative;
      padding: 0;
      margin: 0;
      cursor: pointer; }
    body[data-layout-mode="horizontal"] .navbar-toggle .lines {
      width: 25px;
      display: block;
      position: relative;
      height: 16px;
      transition: all .5s ease;
      margin-top: calc(54px / 2); }
    body[data-layout-mode="horizontal"] .navbar-toggle span {
      height: 2px;
      width: 100%;
      background-color: #6c757d;
      display: block;
      margin-bottom: 5px;
      transition: transform .5s ease; }
    body[data-layout-mode="horizontal"] .navbar-toggle.open span {
      position: absolute; }
    body[data-layout-mode="horizontal"] .navbar-toggle.open span:first-child {
      top: 7px;
      transform: rotate(45deg); }
    body[data-layout-mode="horizontal"] .navbar-toggle.open span:nth-child(2) {
      visibility: hidden; }
    body[data-layout-mode="horizontal"] .navbar-toggle.open span:last-child {
      width: 100%;
      top: 7px;
      transform: rotate(-45deg); } }

  body[data-layout-mode="horizontal"] .button-menu-mobile {
    display: none; }

  body[data-layout-mode="horizontal"] .logo-box {
    width: auto;
    padding-right: 50px;
    background-color: transparent; }

  @media (min-width: 992px) and (max-width: 1366px) {
    body[data-layout-mode="horizontal"] .logo-box {
      padding-left: 20px; } }

  @media (max-width: 360px) {
    .navbar-custom .topnav-menu .nav-link {
      padding: 0 12px; }
    .navbar-custom .button-menu-mobile {
      width: 45px; } }

  .page-title-box .page-title {
    font-size: 1.25rem;
    margin: 0;
    line-height: 75px;
    color: #323a46; }

  .page-title-box .page-title-right {
    float: right;
    margin-top: 22px; }

  .page-title-box .breadcrumb {
    padding-top: 5px; }

  @media (max-width: 767.98px) {
    .page-title-box .page-title {
      display: block;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
      line-height: 70px; }
    .page-title-box .breadcrumb {
      display: none; } }

  @media (max-width: 640px) {
    .page-title-box .page-title-right {
      display: none; } }

  @media (max-width: 419px) {
    .page-title-box .breadcrumb {
      display: none; } }

  .footer {
    bottom: 0;
    padding: 19px 15px 20px;
    position: absolute;
    right: 0;
    color: #98a6ad;
    left: 240px;
    background-color: #eeeff3; }
  .footer .footer-links a {
    color: #98a6ad;
    margin-left: 1.5rem;
    transition: all .4s; }
  .footer .footer-links a:hover {
    color: #323a46; }
  .footer .footer-links a:first-of-type {
    margin-left: 0; }

  .footer-alt {
    left: 0 !important;
    text-align: center;
    background-color: transparent; }

  @media (max-width: 767.98px) {
    .footer {
      left: 0 !important;
      text-align: center; } }

  body[data-layout-mode="horizontal"] .footer {
    left: 0 !important; }

  body[data-layout-mode="horizontal"][data-layout-width="boxed"] .footer {
    max-width: 1300px !important; }

  @media (min-width: 992px) {
    body[data-layout-mode="detached"] .footer {
      position: inherit;
      margin: 0 10px; } }

  .right-bar {
    background-color: #ffffff;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0 0 rgba(0, 0, 0, 0.02);
    display: block;
    position: fixed;
    transition: all 200ms ease-out;
    width: 260px;
    z-index: 9999;
    float: right !important;
    right: -270px;
    top: 0;
    bottom: 0; }
  .right-bar .rightbar-title {
    background-color: #008751;
    padding: 27px 25px;
    color: #fff; }
  .right-bar .right-bar-toggle {
    background-color: #414b5b;
    height: 24px;
    width: 24px;
    line-height: 27px;
    color: #fff;
    text-align: center;
    border-radius: 50%;
    margin-top: -4px; }
  .right-bar .right-bar-toggle:hover {
    background-color: #475364; }
  .right-bar .user-box {
    padding: 25px;
    text-align: center; }
  .right-bar .user-box .user-img {
    position: relative;
    height: 64px;
    width: 64px;
    margin: 0 auto 15px auto; }
  .right-bar .user-box .user-img .user-edit {
    position: absolute;
    right: -5px;
    bottom: 0px;
    height: 24px;
    width: 24px;
    background-color: #fff;
    line-height: 24px;
    border-radius: 50%;
    box-shadow: 0 0 45px 0 rgba(0, 0, 0, 0.12); }
  .right-bar .user-box h5 {
    margin-bottom: 2px; }
  .right-bar .user-box h5 a {
    color: #323a46; }
  .right-bar .notification-item .media {
    padding: 0.75rem 1rem; }
  .right-bar .notification-item .media:hover {
    background-color: #f3f7f9; }
  .right-bar .notification-item .user-status {
    position: absolute;
    right: 0px;
    bottom: -4px;
    font-size: 10px; }
  .right-bar .notification-item .user-status.online {
    color: #1abc9c; }
  .right-bar .notification-item .user-status.away {
    color: #f7b84b; }
  .right-bar .notification-item .user-status.busy {
    color: #f1556c; }

  .rightbar-overlay {
    background-color: rgba(50, 58, 70, 0.2);
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    display: none;
    z-index: 9998;
    transition: all .2s ease-out; }

  .right-bar-enabled .right-bar {
    right: 0; }

  .right-bar-enabled .rightbar-overlay {
    display: block; }

  @media (max-width: 767.98px) {
    .right-bar {
      overflow: auto; }
    .right-bar .slimscroll-menu {
      height: auto !important; } }

  body[data-layout-width="boxed"] #wrapper {
    max-width: 1300px;
    margin: 0 auto;
    box-shadow: 0 0 45px 0 rgba(0, 0, 0, 0.12); }

  body[data-layout-width="boxed"] .navbar-custom {
    max-width: 1300px;
    margin: 0 auto; }

  body[data-layout-width="boxed"] .footer {
    margin: 0 auto;
    max-width: calc(1300px - 240px); }

  body[data-layout-width="boxed"][data-sidebar-size="condensed"] .footer {
    max-width: calc(1300px - 70px); }

  body[data-layout-width="boxed"][data-sidebar-size="compact"] .footer {
    max-width: calc(1300px - 160px); }

  @media (min-width: 768px) {
    body[data-layout-width="boxed"][data-sidebar-size="condensed"] .content-page {
      min-height: calc(1750px - 70px); } }

  @media (min-width: 1367px) {
    body[data-layout-menu-position="scrollable"]:not([data-sidebar-size="condensed"]):not([data-sidebar-size="compact"]):not([data-layout-mode="two-column"]) {
      padding-bottom: 0; }
    body[data-layout-menu-position="scrollable"]:not([data-sidebar-size="condensed"]):not([data-sidebar-size="compact"]):not([data-layout-mode="two-column"]) #wrapper {
      display: flex; }
    body[data-layout-menu-position="scrollable"]:not([data-sidebar-size="condensed"]):not([data-sidebar-size="compact"]):not([data-layout-mode="two-column"]) .navbar-custom,
    body[data-layout-menu-position="scrollable"]:not([data-sidebar-size="condensed"]):not([data-sidebar-size="compact"]):not([data-layout-mode="two-column"]) .topnav {
      position: absolute; }
    body[data-layout-menu-position="scrollable"]:not([data-sidebar-size="condensed"]):not([data-sidebar-size="compact"]):not([data-layout-mode="two-column"]) .left-side-menu {
      position: relative;
      min-width: 240px;
      max-width: 240px;
      padding: 20px 0 calc(70px + 20px); }
    body[data-layout-menu-position="scrollable"]:not([data-sidebar-size="condensed"]):not([data-sidebar-size="compact"]):not([data-layout-mode="two-column"]) .content-page {
      margin-left: 0;
      width: 100%;
      padding-bottom: 60px; } }

  @media (min-width: 1367px) {
    body[data-layout-mode="horizontal"] .container-fluid {
      max-width: 90%; }
    body[data-layout-mode="horizontal"] .navbar-custom {
      padding: 0 24px; } }

  body[data-layout-mode="horizontal"] .content-page {
    margin-left: 0 !important; }

  .topnav {
    background: #ffffff;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    margin-top: 70px;
    padding: 0 calc(24px / 2);
    position: fixed;
    left: 0;
    right: 0;
    z-index: 100; }
  .topnav .topnav-menu {
    margin: 0;
    padding: 0; }
  .topnav .navbar-nav .nav-link {
    font-size: 0.95rem;
    position: relative;
    line-height: 22px;
    padding: calc(33px / 2) 1.1rem;
    color: #6e7488;
    font-family: "Cerebri Sans,sans-serif"; }
  .topnav .navbar-nav .nav-link i {
    font-size: 15px;
    display: inline-block; }
  .topnav .navbar-nav .nav-link:focus, .topnav .navbar-nav .nav-link:hover {
    color: #00acc1;
    background-color: transparent; }
  .topnav .navbar-nav .nav-item .dropdown.active > a.dropdown-toggle {
    color: #00acc1; }

  @media (min-width: 992px) {
    .topnav {
      height: 55px; }
    .topnav .navbar-nav .nav-item:first-of-type .nav-link {
      padding-left: 0; }
    .topnav .dropdown-item {
      padding: .5rem 1.25rem;
      min-width: 180px;
      margin: 0 .3rem;
      width: auto; }
    .topnav .dropdown-item.active {
      background-color: transparent;
      color: #00acc1; }
    .topnav .dropdown.mega-dropdown .mega-dropdown-menu {
      left: 0px;
      right: auto; }
    .topnav .dropdown .dropdown-menu {
      padding: 0.3rem 0;
      margin-top: 0;
      border-radius: 0 0 0.25rem 0.25rem; }
    .topnav .dropdown .dropdown-menu .arrow-down::after {
      right: 20px;
      transform: rotate(-135deg) translateY(-50%);
      position: absolute; }
    .topnav .dropdown .dropdown-menu .dropdown .dropdown-menu {
      position: absolute;
      top: 0 !important;
      left: 100%;
      display: none; }
    .topnav .dropdown:hover > .nav-link {
      color: #00acc1; }
    .topnav .dropdown:hover > .dropdown-menu {
      display: block; }
    .topnav .dropdown:hover > .dropdown-menu > .dropdown:hover > .dropdown-item {
      color: #00acc1; }
    .topnav .dropdown:hover > .dropdown-menu > .dropdown:hover > .dropdown-menu {
      display: block; }
    .navbar-toggle {
      display: none; }
    body[data-layout-mode="horizontal"] .content-page {
      padding: 55px 15px 65px 15px; } }

  .arrow-down {
    display: inline-block; }
  .arrow-down:after {
    border-color: initial;
    border-style: solid;
    border-width: 0 0 1px 1px;
    content: "";
    height: .4em;
    display: inline-block;
    right: 5px;
    top: 50%;
    margin-left: 10px;
    transform: rotate(-45deg) translateY(-50%);
    transform-origin: top;
    transition: all .3s ease-out;
    width: .4em; }

  @media (max-width: 1366.98px) {
    .topnav-menu .navbar-nav li:last-of-type .dropdown .dropdown-menu {
      right: 100%;
      left: auto; } }

  @media (max-width: 991.98px) {
    .topnav {
      max-height: 360px;
      overflow-y: auto;
      padding: 0; }
    .topnav .navbar-nav .nav-link {
      padding: 0.75rem 1.1rem; }
    .topnav .dropdown .dropdown-menu {
      background-color: transparent;
      border: none;
      box-shadow: none;
      padding-left: 15px; }
    .topnav .dropdown .dropdown-item {
      position: relative;
      background-color: transparent; }
    .topnav .dropdown .dropdown-item.active, .topnav .dropdown .dropdown-item:active {
      color: #00acc1; }
    .topnav .arrow-down::after {
      right: 15px;
      position: absolute; } }

  @media (min-width: 992px) {
    body[data-layout-mode="horizontal"][data-topbar-color="light"] .topnav {
      background-color: #008751; }
    body[data-layout-mode="horizontal"][data-topbar-color="light"] .topnav .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.7); }
    body[data-layout-mode="horizontal"][data-topbar-color="light"] .topnav .navbar-nav .nav-link:focus, body[data-layout-mode="horizontal"][data-topbar-color="light"] .topnav .navbar-nav .nav-link:hover {
      color: rgba(255, 255, 255, 0.9); }
    body[data-layout-mode="horizontal"][data-topbar-color="light"] .topnav .navbar-nav .nav-link.active {
      color: #fff; }
    body[data-layout-mode="horizontal"][data-topbar-color="light"] .topnav .navbar-nav .nav-item:hover .nav-link {
      color: #fff; }
    body[data-layout-mode="horizontal"][data-topbar-color="light"] .topnav .navbar-nav > .dropdown.active > a {
      color: rgba(255, 255, 255, 0.9) !important; } }

  body[data-layout-mode="horizontal"][data-layout-width="boxed"] .topnav {
    max-width: 1300px;
    margin: 70px auto 0; }

  body[data-layout-mode="two-column"] .left-side-menu {
    width: calc(70px + 220px);
    background-color: transparent;
    box-shadow: none; }

  body[data-layout-mode="two-column"] .sidebar-icon-menu {
    position: fixed;
    width: 70px;
    z-index: 500;
    top: 0;
    bottom: 0;
    padding-bottom: 20px;
    background-color: #008751; }
  body[data-layout-mode="two-column"] .sidebar-icon-menu .logo {
    display: block;
    width: 70px;
    height: 70px;
    line-height: 70px;
    text-align: center; }
  body[data-layout-mode="two-column"] .sidebar-icon-menu .nav {
    background-color: transparent;
    margin: 24px auto; }
  body[data-layout-mode="two-column"] .sidebar-icon-menu .nav .nav-link {
    text-align: center;
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin: 12px auto;
    padding: 0px;
    border-radius: 4px; }
  body[data-layout-mode="two-column"] .sidebar-icon-menu .nav .nav-link.active {
    background-color: rgba(255, 255, 255, 0.12); }
  body[data-layout-mode="two-column"] .sidebar-icon-menu .nav .nav-link svg {
    color: #fff;
    fill: rgba(255, 255, 255, 0.12);
    height: 22px;
    width: 22px; }

  body[data-layout-mode="two-column"] .sidebar-main-menu {
    display: block;
    position: fixed;
    width: 220px;
    background-color: #ffffff;
    top: 70px;
    bottom: 0;
    left: 70px;
    padding: 30px 5px;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    transition: all .1s ease-out; }
  body[data-layout-mode="two-column"] .sidebar-main-menu .sidebar-menu-body {
    padding: 20px; }
  body[data-layout-mode="two-column"] .sidebar-main-menu .menu-title {
    color: #adb5bd !important;
    margin: 0;
    padding: 10px 20px;
    letter-spacing: .05em;
    font-size: .7rem;
    text-transform: uppercase;
    font-weight: 600; }
  body[data-layout-mode="two-column"] .sidebar-main-menu .nav > .nav-item > .nav-link {
    color: #6e768e;
    font-size: 0.95rem;
    font-family: "Cerebri Sans,sans-serif"; }
  body[data-layout-mode="two-column"] .sidebar-main-menu .nav > .nav-item .menu-arrow {
    right: 10px; }
  body[data-layout-mode="two-column"] .sidebar-main-menu .nav .nav-link {
    position: relative;
    color: #6e768e;
    padding: 6px 15px;
    border-radius: 3px;
    margin: 3px 5px; }
  body[data-layout-mode="two-column"] .sidebar-main-menu .nav .nav-link:hover, body[data-layout-mode="two-column"] .sidebar-main-menu .nav .nav-link:focus, body[data-layout-mode="two-column"] .sidebar-main-menu .nav .nav-link.active {
    color: #00acc1; }
  body[data-layout-mode="two-column"] .sidebar-main-menu .nav .menuitem-active > a.nav-link {
    color: #00acc1;
    background-color: rgba(0, 172, 193, 0.07); }
  body[data-layout-mode="two-column"] .sidebar-main-menu .nav .menuitem-active a.active {
    color: #00acc1; }
  body[data-layout-mode="two-column"] .sidebar-main-menu #sidebar-menu .menu-arrow {
    top: 7px; }
  body[data-layout-mode="two-column"] .sidebar-main-menu .nav-second-level {
    padding-left: 15px;
    list-style: none; }

  @media (min-width: 992px) {
    body[data-layout-mode="two-column"] .navbar-custom {
      left: 70px !important;
      padding-left: 0px; }
    body[data-layout-mode="two-column"] .navbar-custom .logo-box {
      width: 220px; }
    body[data-layout-mode="two-column"] .navbar-custom .logo-box .logo-sm {
      display: none; }
    body[data-layout-mode="two-column"][data-sidebar-size="condensed"] .logo-box {
      width: 0 !important; } }

  body[data-layout-mode="two-column"][data-sidebar-color="light"] .logo-box {
    background-color: #ffffff; }

  @media (min-width: 992px) {
    body[data-layout-mode="two-column"] .content-page {
      margin-left: calc(70px + 220px); }
    body[data-layout-mode="two-column"] .footer {
      left: calc(70px + 220px); }
    body[data-layout-mode="two-column"][data-sidebar-size="condensed"] .sidebar-main-menu {
      display: none; } }

  body[data-layout-mode="two-column"] .twocolumn-menu-item {
    display: none; }

  body[data-layout-mode="two-column"][data-sidebar-color="dark"] .sidebar-main-menu {
    background-color: #008751; }
  body[data-layout-mode="two-column"][data-sidebar-color="dark"] .sidebar-main-menu .nav > .nav-item > .nav-link {
    color: #9097a7; }
  body[data-layout-mode="two-column"][data-sidebar-color="dark"] .sidebar-main-menu .nav .nav-link:hover, body[data-layout-mode="two-column"][data-sidebar-color="dark"] .sidebar-main-menu .nav .nav-link:focus, body[data-layout-mode="two-column"][data-sidebar-color="dark"] .sidebar-main-menu .nav .nav-link.active {
    color: #c8cddc; }
  body[data-layout-mode="two-column"][data-sidebar-color="dark"] .sidebar-main-menu .nav .menuitem-active > a.nav-link {
    color: #00acc1;
    background-color: rgba(0, 172, 193, 0.07); }
  body[data-layout-mode="two-column"][data-sidebar-color="dark"] .sidebar-main-menu .nav .menuitem-active a.active {
    color: #00acc1; }

  body[data-layout-mode="two-column"][data-sidebar-color="brand"] .sidebar-main-menu .nav > .nav-item > .nav-link, body[data-layout-mode="two-column"][data-sidebar-color="gradient"] .sidebar-main-menu .nav > .nav-item > .nav-link {
    color: rgba(255, 255, 255, 0.7); }

  body[data-layout-mode="two-column"][data-sidebar-color="brand"] .sidebar-main-menu .nav .nav-link:hover, body[data-layout-mode="two-column"][data-sidebar-color="brand"] .sidebar-main-menu .nav .nav-link:focus, body[data-layout-mode="two-column"][data-sidebar-color="brand"] .sidebar-main-menu .nav .nav-link.active, body[data-layout-mode="two-column"][data-sidebar-color="gradient"] .sidebar-main-menu .nav .nav-link:hover, body[data-layout-mode="two-column"][data-sidebar-color="gradient"] .sidebar-main-menu .nav .nav-link:focus, body[data-layout-mode="two-column"][data-sidebar-color="gradient"] .sidebar-main-menu .nav .nav-link.active {
    color: rgba(255, 255, 255, 0.9); }

  body[data-layout-mode="two-column"][data-sidebar-color="brand"] .sidebar-main-menu {
    background-color: #4a81d4; }

  body[data-layout-mode="two-column"][data-sidebar-color="gradient"] .sidebar-main-menu {
    background: #683ba9;
    background-image: linear-gradient(270deg, rgba(64, 149, 216, 0.15), transparent); }

  body[data-layout-mode="two-column"][data-layout-width="boxed"] .navbar-custom {
    max-width: calc(1300px - 70px); }

  body[data-layout-mode="two-column"][data-layout-width="boxed"] .sidebar-main-menu {
    position: absolute;
    top: 0; }

  body[data-layout-mode="two-column"][data-layout-width="boxed"]:not([data-sidebar-size="condensed"]) .footer {
    max-width: calc(1300px - calc(70px + 220px)); }

  .avatar-xs {
    height: 1.5rem;
    width: 1.5rem; }

  .avatar-sm {
    height: 2.25rem;
    width: 2.25rem; }

  .avatar-md {
    height: 3.5rem;
    width: 3.5rem; }

  .avatar-lg {
    height: 4.5rem;
    width: 4.5rem; }

  .avatar-xl {
    height: 6rem;
    width: 6rem; }

  .avatar-xxl {
    height: 7.5rem;
    width: 7.5rem; }

  .avatar-title {
    align-items: center;
    color: #fff;
    display: flex;
    height: 100%;
    justify-content: center;
    width: 100%; }

  .avatar-group {
    padding-left: 12px; }
  .avatar-group .avatar-group-item {
    margin: 0 0 10px -12px;
    display: inline-block;
    border: 2px solid #fff;
    border-radius: 50%; }

  .width-xs {
    min-width: 80px; }

  .width-sm {
    min-width: 100px; }

  .width-md {
    min-width: 120px; }

  .width-lg {
    min-width: 140px; }

  .width-xl {
    min-width: 160px; }

  .font-family-primary {
    font-family: "Nunito", sans-serif; }

  .font-family-secondary {
    font-family: "Cerebri Sans,sans-serif"; }

  .sp-line-1,
  .sp-line-2,
  .sp-line-3,
  .sp-line-4 {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical; }

  .sp-line-1 {
    -webkit-line-clamp: 1; }

  .sp-line-2 {
    -webkit-line-clamp: 2; }

  .sp-line-3 {
    -webkit-line-clamp: 3; }

  .sp-line-4 {
    -webkit-line-clamp: 4; }

  .icon-dual {
    color: #98a6ad;
    fill: rgba(152, 166, 173, 0.12); }

  .icon-dual-primary {
    color: #008751;
    fill: rgba(102, 88, 221, 0.16); }

  .icon-dual-secondary {
    color: #6c757d;
    fill: rgba(108, 117, 125, 0.16); }

  .icon-dual-success {
    color: #1abc9c;
    fill: rgba(26, 188, 156, 0.16); }

  .icon-dual-info {
    color: #4fc6e1;
    fill: rgba(79, 198, 225, 0.16); }

  .icon-dual-warning {
    color: #f7b84b;
    fill: rgba(247, 184, 75, 0.16); }

  .icon-dual-danger {
    color: #f1556c;
    fill: rgba(241, 85, 108, 0.16); }

  .icon-dual-light {
    color: #f3f7f9;
    fill: rgba(243, 247, 249, 0.16); }

  .icon-dual-dark {
    color: #323a46;
    fill: rgba(50, 58, 70, 0.16); }

  .icon-dual-pink {
    color: #f672a7;
    fill: rgba(246, 114, 167, 0.16); }

  .icon-dual-blue {
    color: #4a81d4;
    fill: rgba(74, 129, 212, 0.16); }

  .icons-xs {
    height: 16px;
    width: 16px; }

  .icons-sm {
    height: 24px;
    width: 24px; }

  .icons-md {
    height: 32px;
    width: 32px; }

  .icons-lg {
    height: 40px;
    width: 40px; }

  .icons-xl {
    height: 48px;
    width: 48px; }

  .icons-xxl {
    height: 60px;
    width: 60px; }

  .item-hovered:hover {
    background-color: #f3f7f9; }

  .social-list-item {
    height: 2rem;
    width: 2rem;
    line-height: calc(2rem - 2px);
    display: block;
    border: 2px solid #adb5bd;
    border-radius: 50%;
    color: #adb5bd; }

  .widget-flat {
    position: relative;
    overflow: hidden; }
  .widget-flat i.widget-icon {
    font-size: 36px; }

  .inbox-widget .inbox-item {
    border-bottom: 1px solid rgba(229, 232, 235, 0.5);
    overflow: hidden;
    padding: 0.625rem 0;
    position: relative; }
  .inbox-widget .inbox-item:last-of-type {
    border-bottom: none; }
  .inbox-widget .inbox-item .inbox-item-img {
    display: block;
    float: left;
    margin-right: 15px;
    width: 40px; }
  .inbox-widget .inbox-item .inbox-item-img img {
    width: 40px; }
  .inbox-widget .inbox-item .inbox-item-author {
    color: #343a40;
    display: block;
    margin-bottom: 3px;
    font-weight: 600; }
  .inbox-widget .inbox-item .inbox-item-text {
    color: #98a6ad;
    display: block;
    font-size: 0.8125rem;
    margin: 0;
    overflow: hidden; }
  .inbox-widget .inbox-item .inbox-item-date {
    color: #98a6ad;
    font-size: 0.6875rem;
    position: absolute;
    right: 5px;
    top: 10px; }

  /* Chat widget */
  .conversation-list {
    list-style: none;
    padding: 0 15px; }
  .conversation-list li {
    margin-bottom: 20px; }
  .conversation-list li .conversation-actions {
    float: right;
    display: none; }
  .conversation-list li:hover .conversation-actions {
    display: block; }
  .conversation-list .chat-avatar {
    float: left;
    text-align: center;
    width: 42px; }
  .conversation-list .chat-avatar img {
    border-radius: 100%;
    width: 100%; }
  .conversation-list .chat-avatar i {
    font-size: 12px;
    font-style: normal; }
  .conversation-list .ctext-wrap {
    background: #f1f3fa;
    border-radius: 3px;
    display: inline-block;
    padding: 12px;
    position: relative; }
  .conversation-list .ctext-wrap i {
    display: block;
    font-size: 12px;
    font-style: normal;
    font-weight: 600;
    position: relative; }
  .conversation-list .ctext-wrap p {
    margin: 0;
    padding-top: 3px; }
  .conversation-list .ctext-wrap:after {
    left: -10px;
    top: 0;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-top-color: #f1f3fa;
    border-width: 6px;
    margin-right: -1px;
    border-right-color: #f1f3fa; }
  .conversation-list .conversation-text {
    float: left;
    font-size: 12px;
    margin-left: 12px;
    width: 70%; }
  .conversation-list .odd .chat-avatar {
    float: right !important; }
  .conversation-list .odd .conversation-text {
    float: right !important;
    margin-right: 12px;
    text-align: right;
    width: 70% !important; }
  .conversation-list .odd .ctext-wrap {
    background-color: #fef5e4; }
  .conversation-list .odd .ctext-wrap:after {
    border-color: transparent;
    border-left-color: #fef5e4;
    border-top-color: #fef5e4;
    right: -10px !important;
    left: auto; }
  .conversation-list .odd .conversation-actions {
    float: left; }

  .checkbox label {
    display: inline-block;
    padding-left: 8px;
    position: relative;
    font-weight: 600;
    margin-bottom: 0; }
  .checkbox label::before {
    background-color: transparent;
    border-radius: 3px;
    border: 2px solid #98a6ad;
    content: "";
    display: inline-block;
    height: 18px;
    left: 0;
    margin-left: -18px;
    position: absolute;
    transition: 0.3s ease-in-out;
    width: 18px;
    outline: none !important;
    top: 2px; }
  .checkbox label::after {
    color: #6c757d;
    display: inline-block;
    font-size: 11px;
    height: 18px;
    left: 0;
    margin-left: -18px;
    padding-left: 3px;
    padding-top: 2px;
    position: absolute;
    top: 0;
    width: 18px; }

  .checkbox input[type="checkbox"] {
    cursor: pointer;
    opacity: 0;
    z-index: 1;
    outline: none !important; }
  .checkbox input[type="checkbox"]:disabled + label {
    opacity: 0.65; }

  .checkbox input[type="checkbox"]:focus + label::before {
    outline-offset: -2px;
    outline: none; }

  .checkbox input[type="checkbox"]:checked + label::after {
    content: "";
    position: absolute;
    top: 6px;
    left: 7px;
    display: table;
    width: 4px;
    height: 8px;
    border: 2px solid #6c757d;
    border-top-width: 0;
    border-left-width: 0;
    transform: rotate(45deg); }

  .checkbox input[type="checkbox"]:disabled + label::before {
    background-color: #f3f7f9;
    cursor: not-allowed; }

  .checkbox.checkbox-circle label::before {
    border-radius: 50%; }

  .checkbox.checkbox-inline {
    margin-top: 0; }

  .checkbox.checkbox-single input {
    height: 18px;
    width: 18px;
    position: absolute; }

  .checkbox.checkbox-single label {
    height: 18px;
    width: 18px; }
  .checkbox.checkbox-single label:before {
    margin-left: 0; }
  .checkbox.checkbox-single label:after {
    margin-left: 0; }

  .checkbox-primary input[type="checkbox"]:checked + label::before {
    background-color: #008751;
    border-color: #008751; }

  .checkbox-primary input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-secondary input[type="checkbox"]:checked + label::before {
    background-color: #6c757d;
    border-color: #6c757d; }

  .checkbox-secondary input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-success input[type="checkbox"]:checked + label::before {
    background-color: #1abc9c;
    border-color: #1abc9c; }

  .checkbox-success input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-info input[type="checkbox"]:checked + label::before {
    background-color: #4fc6e1;
    border-color: #4fc6e1; }

  .checkbox-info input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-warning input[type="checkbox"]:checked + label::before {
    background-color: #f7b84b;
    border-color: #f7b84b; }

  .checkbox-warning input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-danger input[type="checkbox"]:checked + label::before {
    background-color: #f1556c;
    border-color: #f1556c; }

  .checkbox-danger input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-light input[type="checkbox"]:checked + label::before {
    background-color: #f3f7f9;
    border-color: #f3f7f9; }

  .checkbox-light input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-dark input[type="checkbox"]:checked + label::before {
    background-color: #323a46;
    border-color: #323a46; }

  .checkbox-dark input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-pink input[type="checkbox"]:checked + label::before {
    background-color: #f672a7;
    border-color: #f672a7; }

  .checkbox-pink input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .checkbox-blue input[type="checkbox"]:checked + label::before {
    background-color: #4a81d4;
    border-color: #4a81d4; }

  .checkbox-blue input[type="checkbox"]:checked + label::after {
    border-color: #fff; }

  .radio label {
    display: inline-block;
    padding-left: 8px;
    position: relative;
    font-weight: 600;
    margin-bottom: 0; }
  .radio label::before {
    background-color: transparent;
    border-radius: 50%;
    border: 2px solid #98a6ad;
    content: "";
    display: inline-block;
    height: 18px;
    left: 0;
    margin-left: -18px;
    position: absolute;
    transition: border 0.5s ease-in-out;
    width: 18px;
    outline: none !important; }
  .radio label::after {
    background-color: #6c757d;
    border-radius: 50%;
    content: " ";
    display: inline-block;
    height: 10px;
    left: 6px;
    margin-left: -20px;
    position: absolute;
    top: 4px;
    transform: scale(0, 0);
    transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
    width: 10px; }

  .radio input[type="radio"] {
    cursor: pointer;
    opacity: 0;
    z-index: 1;
    outline: none !important; }
  .radio input[type="radio"]:disabled + label {
    opacity: 0.65; }

  .radio input[type="radio"]:focus + label::before {
    outline-offset: -2px;
    outline: 5px auto -webkit-focus-ring-color;
    outline: thin dotted; }

  .radio input[type="radio"]:checked + label::after {
    transform: scale(1, 1); }

  .radio input[type="radio"]:disabled + label::before {
    cursor: not-allowed; }

  .radio.radio-inline {
    margin-top: 0; }

  .radio.radio-single label {
    height: 17px; }

  .radio-primary input[type="radio"] + label::after {
    background-color: #008751; }

  .radio-primary input[type="radio"]:checked + label::before {
    border-color: #008751; }

  .radio-primary input[type="radio"]:checked + label::after {
    background-color: #008751; }

  .radio-secondary input[type="radio"] + label::after {
    background-color: #6c757d; }

  .radio-secondary input[type="radio"]:checked + label::before {
    border-color: #6c757d; }

  .radio-secondary input[type="radio"]:checked + label::after {
    background-color: #6c757d; }

  .radio-success input[type="radio"] + label::after {
    background-color: #1abc9c; }

  .radio-success input[type="radio"]:checked + label::before {
    border-color: #1abc9c; }

  .radio-success input[type="radio"]:checked + label::after {
    background-color: #1abc9c; }

  .radio-info input[type="radio"] + label::after {
    background-color: #4fc6e1; }

  .radio-info input[type="radio"]:checked + label::before {
    border-color: #4fc6e1; }

  .radio-info input[type="radio"]:checked + label::after {
    background-color: #4fc6e1; }

  .radio-warning input[type="radio"] + label::after {
    background-color: #f7b84b; }

  .radio-warning input[type="radio"]:checked + label::before {
    border-color: #f7b84b; }

  .radio-warning input[type="radio"]:checked + label::after {
    background-color: #f7b84b; }

  .radio-danger input[type="radio"] + label::after {
    background-color: #f1556c; }

  .radio-danger input[type="radio"]:checked + label::before {
    border-color: #f1556c; }

  .radio-danger input[type="radio"]:checked + label::after {
    background-color: #f1556c; }

  .radio-light input[type="radio"] + label::after {
    background-color: #f3f7f9; }

  .radio-light input[type="radio"]:checked + label::before {
    border-color: #f3f7f9; }

  .radio-light input[type="radio"]:checked + label::after {
    background-color: #f3f7f9; }

  .radio-dark input[type="radio"] + label::after {
    background-color: #323a46; }

  .radio-dark input[type="radio"]:checked + label::before {
    border-color: #323a46; }

  .radio-dark input[type="radio"]:checked + label::after {
    background-color: #323a46; }

  .radio-pink input[type="radio"] + label::after {
    background-color: #f672a7; }

  .radio-pink input[type="radio"]:checked + label::before {
    border-color: #f672a7; }

  .radio-pink input[type="radio"]:checked + label::after {
    background-color: #f672a7; }

  .radio-blue input[type="radio"] + label::after {
    background-color: #4a81d4; }

  .radio-blue input[type="radio"]:checked + label::before {
    border-color: #4a81d4; }

  .radio-blue input[type="radio"]:checked + label::after {
    background-color: #4a81d4; }

  .ribbon-box {
    position: relative;
    /* Ribbon two */ }
  .ribbon-box .ribbon {
    position: relative;
    clear: both;
    padding: 5px 12px;
    margin-bottom: 15px;
    box-shadow: 2px 5px 10px rgba(50, 58, 70, 0.15);
    color: #fff;
    font-size: 13px;
    font-weight: 600; }
  .ribbon-box .ribbon:before {
    content: " ";
    border-style: solid;
    border-width: 10px;
    display: block;
    position: absolute;
    bottom: -10px;
    left: 0;
    margin-bottom: -10px;
    z-index: -1; }
  .ribbon-box .ribbon.float-left {
    margin-left: -30px;
    border-radius: 0 3px 3px 0; }
  .ribbon-box .ribbon.float-right {
    margin-right: -30px;
    border-radius: 3px 0 0 3px; }
  .ribbon-box .ribbon.float-right:before {
    right: 0; }
  .ribbon-box .ribbon.float-center span {
    margin: 0 auto 20px auto; }
  .ribbon-box .ribbon-content {
    clear: both; }
  .ribbon-box .ribbon-primary {
    background: #008751; }
  .ribbon-box .ribbon-primary:before {
    border-color: #3f2ed4 transparent transparent; }
  .ribbon-box .ribbon-secondary {
    background: #6c757d; }
  .ribbon-box .ribbon-secondary:before {
    border-color: #545b62 transparent transparent; }
  .ribbon-box .ribbon-success {
    background: #1abc9c; }
  .ribbon-box .ribbon-success:before {
    border-color: #148f77 transparent transparent; }
  .ribbon-box .ribbon-info {
    background: #4fc6e1; }
  .ribbon-box .ribbon-info:before {
    border-color: #25b7d8 transparent transparent; }
  .ribbon-box .ribbon-warning {
    background: #f7b84b; }
  .ribbon-box .ribbon-warning:before {
    border-color: #f5a51a transparent transparent; }
  .ribbon-box .ribbon-danger {
    background: #f1556c; }
  .ribbon-box .ribbon-danger:before {
    border-color: #ed2643 transparent transparent; }
  .ribbon-box .ribbon-light {
    background: #f3f7f9; }
  .ribbon-box .ribbon-light:before {
    border-color: #d1e0e8 transparent transparent; }
  .ribbon-box .ribbon-dark {
    background: #323a46; }
  .ribbon-box .ribbon-dark:before {
    border-color: #1d2128 transparent transparent; }
  .ribbon-box .ribbon-pink {
    background: #f672a7; }
  .ribbon-box .ribbon-pink:before {
    border-color: #f34289 transparent transparent; }
  .ribbon-box .ribbon-blue {
    background: #4a81d4; }
  .ribbon-box .ribbon-blue:before {
    border-color: #2d67be transparent transparent; }
  .ribbon-box .ribbon-two {
    position: absolute;
    left: -5px;
    top: -5px;
    z-index: 1;
    overflow: hidden;
    width: 75px;
    height: 75px;
    text-align: right; }
  .ribbon-box .ribbon-two span {
    font-size: 13px;
    color: #fff;
    text-align: center;
    line-height: 20px;
    transform: rotate(-45deg);
    width: 100px;
    display: block;
    box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0 0 rgba(0, 0, 0, 0.02);
    position: absolute;
    top: 19px;
    left: -21px;
    font-weight: 600; }
  .ribbon-box .ribbon-two span:before {
    content: "";
    position: absolute;
    left: 0;
    top: 100%;
    z-index: -1;
    border-right: 3px solid transparent;
    border-bottom: 3px solid transparent; }
  .ribbon-box .ribbon-two span:after {
    content: "";
    position: absolute;
    right: 0;
    top: 100%;
    z-index: -1;
    border-left: 3px solid transparent;
    border-bottom: 3px solid transparent; }
  .ribbon-box .ribbon-two-primary span {
    background: #008751; }
  .ribbon-box .ribbon-two-primary span:before {
    border-left: 3px solid #3827c1;
    border-top: 3px solid #3827c1; }
  .ribbon-box .ribbon-two-primary span:after {
    border-right: 3px solid #3827c1;
    border-top: 3px solid #3827c1; }
  .ribbon-box .ribbon-two-secondary span {
    background: #6c757d; }
  .ribbon-box .ribbon-two-secondary span:before {
    border-left: 3px solid #494f54;
    border-top: 3px solid #494f54; }
  .ribbon-box .ribbon-two-secondary span:after {
    border-right: 3px solid #494f54;
    border-top: 3px solid #494f54; }
  .ribbon-box .ribbon-two-success span {
    background: #1abc9c; }
  .ribbon-box .ribbon-two-success span:before {
    border-left: 3px solid #117964;
    border-top: 3px solid #117964; }
  .ribbon-box .ribbon-two-success span:after {
    border-right: 3px solid #117964;
    border-top: 3px solid #117964; }
  .ribbon-box .ribbon-two-info span {
    background: #4fc6e1; }
  .ribbon-box .ribbon-two-info span:before {
    border-left: 3px solid #21a5c2;
    border-top: 3px solid #21a5c2; }
  .ribbon-box .ribbon-two-info span:after {
    border-right: 3px solid #21a5c2;
    border-top: 3px solid #21a5c2; }
  .ribbon-box .ribbon-two-warning span {
    background: #f7b84b; }
  .ribbon-box .ribbon-two-warning span:before {
    border-left: 3px solid #eb990a;
    border-top: 3px solid #eb990a; }
  .ribbon-box .ribbon-two-warning span:after {
    border-right: 3px solid #eb990a;
    border-top: 3px solid #eb990a; }
  .ribbon-box .ribbon-two-danger span {
    background: #f1556c; }
  .ribbon-box .ribbon-two-danger span:before {
    border-left: 3px solid #e71332;
    border-top: 3px solid #e71332; }
  .ribbon-box .ribbon-two-danger span:after {
    border-right: 3px solid #e71332;
    border-top: 3px solid #e71332; }
  .ribbon-box .ribbon-two-light span {
    background: #f3f7f9; }
  .ribbon-box .ribbon-two-light span:before {
    border-left: 3px solid #c0d5e0;
    border-top: 3px solid #c0d5e0; }
  .ribbon-box .ribbon-two-light span:after {
    border-right: 3px solid #c0d5e0;
    border-top: 3px solid #c0d5e0; }
  .ribbon-box .ribbon-two-dark span {
    background: #323a46; }
  .ribbon-box .ribbon-two-dark span:before {
    border-left: 3px solid #121519;
    border-top: 3px solid #121519; }
  .ribbon-box .ribbon-two-dark span:after {
    border-right: 3px solid #121519;
    border-top: 3px solid #121519; }
  .ribbon-box .ribbon-two-pink span {
    background: #f672a7; }
  .ribbon-box .ribbon-two-pink span:before {
    border-left: 3px solid #f12a7a;
    border-top: 3px solid #f12a7a; }
  .ribbon-box .ribbon-two-pink span:after {
    border-right: 3px solid #f12a7a;
    border-top: 3px solid #f12a7a; }
  .ribbon-box .ribbon-two-blue span {
    background: #4a81d4; }
  .ribbon-box .ribbon-two-blue span:before {
    border-left: 3px solid #285ca9;
    border-top: 3px solid #285ca9; }
  .ribbon-box .ribbon-two-blue span:after {
    border-right: 3px solid #285ca9;
    border-top: 3px solid #285ca9; }

  @media print {
    .left-side-menu,
    .right-bar,
    .page-title-box,
    .navbar-custom,
    .footer {
      display: none; }
    .card-body,
    .content-page,
    .right-bar,
    .content,
    body {
      padding: 0;
      margin: 0; } }

  #preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    z-index: 9999; }

  #status {
    width: 40px;
    height: 40px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -20px 0 0 -20px; }

  .spinner {
    margin: 0 auto;
    font-size: 10px;
    position: relative;
    text-indent: -9999em;
    border-top: 5px solid #dee2e6;
    border-right: 5px solid #dee2e6;
    border-bottom: 5px solid #dee2e6;
    border-left: 5px solid #008751;
    transform: translateZ(0);
    animation: SpinnerAnimation 1.1s infinite linear; }

  .spinner,
  .spinner:after {
    border-radius: 50%;
    width: 40px;
    height: 40px; }

  @keyframes SpinnerAnimation {
    0% {
      transform: rotate(0deg); }
    100% {
      transform: rotate(360deg); } }

  .authentication-bg.enlarged {
    min-height: 100px; }

  .bg-pattern {
    background-image: url("../images/bg-pattern-2.png");
    background-size: cover; }

  body.authentication-bg {
    background-color: #07193B;
    background-size: cover;
    background-position: center; }

  body.authentication-bg-pattern {
    background-image: url("../images/bg-pattern.png"); }

  .logout-icon {
    width: 140px; }

  .auth-fluid {
    position: relative;
    display: flex;
    align-items: center;
    min-height: 100vh;
    flex-direction: row;
    align-items: stretch;
    background: url("../images/bg-auth.jpg") center;
    background-size: cover; }
  .auth-fluid .auth-fluid-form-box {
    max-width: 480px;
    border-radius: 0;
    z-index: 2;
    padding: 3rem 2rem;
    background-color: #ffffff;
    position: relative;
    width: 100%; }
  .auth-fluid .auth-fluid-right {
    padding: 6rem 3rem;
    flex: 1;
    position: relative;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.3); }

  .auth-brand {
    margin-bottom: 2rem; }

  .auth-user-testimonial {
    position: absolute;
    margin: 0 auto;
    padding: 0 1.75rem;
    bottom: 3rem;
    left: 0;
    right: 0; }
  .auth-user-testimonial p.lead {
    font-size: 1.125rem;
    margin: 0 auto 20px auto;
    max-width: 700px; }

  @media (min-width: 992px) {
    .auth-brand {
      position: absolute;
      top: 3rem; } }

  @media (max-width: 991.98px) {
    .auth-fluid {
      display: block; }
    .auth-fluid .auth-fluid-form-box {
      max-width: 100%;
      min-height: 100vh; }
    .auth-fluid .auth-fluid-right {
      display: none; } }

  .auth-logo .logo-light {
    display: none; }

  .auth-logo .logo-dark {
    display: block; }

  .button-list {
    margin-left: -8px;
    margin-bottom: -12px; }
  .button-list .btn {
    margin-bottom: 12px;
    margin-left: 8px; }

  .grid-structure .grid-container {
    background-color: #f3f7f9;
    margin-bottom: 10px;
    font-size: 0.8rem;
    font-weight: 600;
    padding: 10px 20px; }

  .icons-list-demo div.col-sm-6 {
    cursor: pointer;
    line-height: 45px;
    white-space: nowrap;
    text-overflow: ellipsis;
    display: block;
    overflow: hidden; }
  .icons-list-demo div.col-sm-6 p {
    margin-bottom: 0;
    line-height: inherit; }

  .icons-list-demo i {
    text-align: center;
    vertical-align: middle;
    font-size: 22px;
    width: 50px;
    height: 50px;
    line-height: 50px;
    margin-right: 12px;
    color: #98a6ad;
    border-radius: 3px;
    display: inline-block;
    transition: all 0.2s; }

  .icons-list-demo .col-md-4 {
    border-radius: 3px;
    background-clip: padding-box;
    margin-bottom: 10px; }
  .icons-list-demo .col-md-4:hover,
  .icons-list-demo .col-md-4:hover i {
    color: #008751; }

  .icons-list-demo .icon-item svg {
    margin-right: 10px; }

  .icons-list-demo .icon-item span {
    line-height: 30px;
    display: inline-block;
    vertical-align: middle; }

  .scrollspy-example {
    position: relative;
    height: 200px;
    margin-top: .5rem;
    overflow: auto; }

  .text-error {
    color: #008751;
    text-shadow: rgba(102, 88, 221, 0.3) 5px 1px, rgba(102, 88, 221, 0.2) 10px 3px;
    font-size: 84px;
    line-height: 90px;
    font-family: "Cerebri Sans,sans-serif"; }

  .error-text-box {
    font-size: 10rem;
    font-family: "Cerebri Sans,sans-serif";
    min-height: 200px; }
  .error-text-box .text {
    fill: none;
    stroke-width: 6;
    stroke-linejoin: round;
    stroke-dasharray: 30 100;
    stroke-dashoffset: 0;
    animation: stroke 9s infinite linear; }
  .error-text-box .text:nth-child(5n + 1) {
    stroke: #f1556c;
    animation-delay: -1.2s; }
  .error-text-box .text:nth-child(5n + 2) {
    stroke: #f7b84b;
    animation-delay: -2.4s; }
  .error-text-box .text:nth-child(5n + 3) {
    stroke: #008751;
    animation-delay: -3.6s; }
  .error-text-box .text:nth-child(5n + 4) {
    stroke: #4fc6e1;
    animation-delay: -4.8s; }
  .error-text-box .text:nth-child(5n + 5) {
    stroke: #1abc9c;
    animation-delay: -6s; }

  @keyframes stroke {
    100% {
      stroke-dashoffset: -400; } }

  @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .error-text-box .text {
      fill: #f1556c;
      stroke: #f1556c;
      stroke-width: 6;
      stroke-dasharray: 0 0;
      stroke-dashoffset: 0;
      animation: none; } }

  .logout-checkmark {
    width: 100px;
    margin: 0 auto;
    padding: 20px 0; }
  .logout-checkmark .path {
    stroke-dasharray: 1000;
    stroke-dashoffset: 0;
    animation: dash 2s ease-in-out; }
  .logout-checkmark .spin {
    animation: spin 2s;
    transform-origin: 50% 50%; }

  @keyframes dash {
    0% {
      stroke-dashoffset: 1000; }
    100% {
      stroke-dashoffset: 0; } }

  @keyframes spin {
    0% {
      -webkit-transform: rotate(0deg); }
    100% {
      -webkit-transform: rotate(360deg); } }

  @keyframes text {
    0% {
      opacity: 0; }
    100% {
      opacity: 1; } }

  .faq-question-q-box {
    height: 30px;
    width: 30px;
    color: #008751;
    text-align: center;
    border-radius: 50%;
    float: left;
    font-weight: 700;
    line-height: 30px;
    background-color: rgba(102, 88, 221, 0.15); }

  .faq-question {
    margin-top: 0;
    margin-left: 50px;
    font-weight: 400;
    font-size: 16px; }

  .faq-answer {
    margin-left: 50px;
    color: #98a6ad; }

  .svg-computer {
    stroke-dasharray: 1134;
    stroke-dashoffset: -1134;
    animation: draw-me 5s infinite;
    animation-direction: normal;
    height: 160px; }

  @keyframes draw-me {
    from {
      stroke-dashoffset: -1134; }
    to {
      stroke-dashoffset: 0; } }

  @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .svg-computer {
      stroke-dasharray: 0;
      stroke-dashoffset: 0;
      animation: none;
      animation-direction: normal; } }

  .timeline {
    margin-bottom: 50px;
    position: relative; }
  .timeline:before {
    background-color: #dee2e6;
    bottom: 0;
    content: "";
    left: 50%;
    position: absolute;
    top: 30px;
    width: 2px;
    z-index: 0; }
  .timeline .time-show {
    margin-bottom: 30px;
    margin-top: 30px;
    position: relative; }
  .timeline .timeline-box {
    background: #fff;
    display: block;
    margin: 15px 0;
    position: relative;
    padding: 20px;
    border-radius: 0.25rem;
    box-shadow: none; }
  .timeline .timeline-album {
    margin-top: 12px; }
  .timeline .timeline-album a {
    display: inline-block;
    margin-right: 5px; }
  .timeline .timeline-album img {
    height: 36px;
    width: auto;
    border-radius: 3px; }

  @media (min-width: 768px) {
    .timeline .time-show {
      margin-right: -69px;
      text-align: right; }
    .timeline .timeline-box {
      margin-left: 45px; }
    .timeline .timeline-icon {
      background: #dee2e6;
      border-radius: 50%;
      display: block;
      height: 20px;
      left: -54px;
      margin-top: -10px;
      position: absolute;
      text-align: center;
      top: 50%;
      width: 20px; }
    .timeline .timeline-icon i {
      color: #98a6ad;
      font-size: 13px;
      position: absolute;
      left: 4px;
      margin-top: 1px; }
    .timeline .timeline-desk {
      display: table-cell;
      vertical-align: top;
      width: 50%; }
    .timeline-item {
      display: table-row; }
    .timeline-item:before {
      content: "";
      display: block;
      width: 50%; }
    .timeline-item .timeline-desk .arrow {
      border-bottom: 12px solid transparent;
      border-right: 12px solid #fff !important;
      border-top: 12px solid transparent;
      display: block;
      height: 0;
      left: -12px;
      margin-top: -12px;
      position: absolute;
      top: 50%;
      width: 0; }
    .timeline-item.timeline-item-left:after {
      content: "";
      display: block;
      width: 50%; }
    .timeline-item.timeline-item-left .timeline-desk .arrow-alt {
      border-bottom: 12px solid transparent;
      border-left: 12px solid #fff !important;
      border-top: 12px solid transparent;
      display: block;
      height: 0;
      left: auto;
      margin-top: -12px;
      position: absolute;
      right: -12px;
      top: 50%;
      width: 0; }
    .timeline-item.timeline-item-left .timeline-desk .album {
      float: right;
      margin-top: 20px; }
    .timeline-item.timeline-item-left .timeline-desk .album a {
      float: right;
      margin-left: 5px; }
    .timeline-item.timeline-item-left .timeline-icon {
      left: auto;
      right: -56px; }
    .timeline-item.timeline-item-left:before {
      display: none; }
    .timeline-item.timeline-item-left .timeline-box {
      margin-right: 45px;
      margin-left: 0;
      text-align: right; } }

  @media (max-width: 767.98px) {
    .timeline .time-show {
      text-align: center;
      position: relative; }
    .timeline .timeline-icon {
      display: none; } }

  .timeline-sm {
    padding-left: 110px; }
  .timeline-sm .timeline-sm-item {
    position: relative;
    padding-bottom: 20px;
    padding-left: 40px;
    border-left: 2px solid #dee2e6; }
  .timeline-sm .timeline-sm-item:after {
    content: "";
    display: block;
    position: absolute;
    top: 3px;
    left: -7px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #fff;
    border: 2px solid #008751; }
  .timeline-sm .timeline-sm-item .timeline-sm-date {
    position: absolute;
    left: -104px; }

  @media (max-width: 420px) {
    .timeline-sm {
      padding-left: 0px; }
    .timeline-sm .timeline-sm-date {
      position: relative !important;
      display: block;
      left: 0px !important;
      margin-bottom: 10px; } }

  .inbox-leftbar {
    width: 240px;
    float: left;
    padding: 0 20px 20px 10px;
    position: relative; }
  .inbox-leftbar:before {
    border-right: 5px solid #f5f6f8;
    content: "";
    position: absolute;
    top: 0;
    right: -15px;
    bottom: -1.5rem; }

  .inbox-rightbar {
    margin: -1.5rem 0 -1.5rem 250px;
    border-left: 5px solid #f5f6f8;
    padding: 1.5rem 0 1.5rem 25px; }

  .message-list {
    display: block;
    padding-left: 0; }
  .message-list li {
    position: relative;
    display: block;
    height: 51px;
    line-height: 50px;
    cursor: default;
    transition-duration: .3s; }
  .message-list li a {
    color: #6c757d; }
  .message-list li:hover {
    background: #f3f7f9;
    transition-duration: .05s; }
  .message-list li .col-mail {
    float: left;
    position: relative; }
  .message-list li .col-mail-1 {
    width: 320px; }
  .message-list li .col-mail-1 .star-toggle,
  .message-list li .col-mail-1 .checkbox-wrapper-mail,
  .message-list li .col-mail-1 .dot {
    display: block;
    float: left; }
  .message-list li .col-mail-1 .dot {
    border: 4px solid transparent;
    border-radius: 100px;
    margin: 22px 26px 0;
    height: 0;
    width: 0;
    line-height: 0;
    font-size: 0; }
  .message-list li .col-mail-1 .checkbox-wrapper-mail {
    margin: 15px 10px 0 20px; }
  .message-list li .col-mail-1 .star-toggle {
    margin-top: 18px;
    color: #adb5bd;
    margin-left: 10px; }
  .message-list li .col-mail-1 .title {
    position: absolute;
    top: 0;
    left: 100px;
    right: 0;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    margin-bottom: 0;
    line-height: 50px; }
  .message-list li .col-mail-2 {
    position: absolute;
    top: 0;
    left: 320px;
    right: 0;
    bottom: 0; }
  .message-list li .col-mail-2 .subject,
  .message-list li .col-mail-2 .date {
    position: absolute;
    top: 0; }
  .message-list li .col-mail-2 .subject {
    left: 0;
    right: 110px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap; }
  .message-list li .col-mail-2 .date {
    right: 0;
    width: 100px;
    padding-left: 10px; }
  .message-list li.active,
  .message-list li.mail-selected {
    background: #f3f7f9;
    transition-duration: .05s; }
  .message-list li.active,
  .message-list li.active:hover {
    box-shadow: inset 3px 0 0 #4fc6e1; }
  .message-list li.unread a {
    font-weight: 600;
    color: #272e37; }
  .message-list .checkbox-wrapper-mail {
    cursor: pointer;
    height: 20px;
    width: 20px;
    position: relative;
    display: inline-block;
    box-shadow: inset 0 0 0 2px #ced4da;
    border-radius: 3px; }
  .message-list .checkbox-wrapper-mail input {
    opacity: 0;
    cursor: pointer; }
  .message-list .checkbox-wrapper-mail input:checked ~ label {
    opacity: 1; }
  .message-list .checkbox-wrapper-mail label {
    position: absolute;
    top: 3px;
    left: 3px;
    right: 3px;
    bottom: 3px;
    cursor: pointer;
    background: #98a6ad;
    opacity: 0;
    margin-bottom: 0 !important;
    transition-duration: .05s; }
  .message-list .checkbox-wrapper-mail label:active {
    background: #87949b; }

  .mail-list a {
    color: #6c757d;
    padding: 9px 10px;
    display: block;
    font-size: 15px; }

  .reply-box {
    border: 2px solid #f3f7f9; }

  @media (max-width: 648px) {
    .inbox-leftbar {
      width: 100%;
      float: none;
      padding: 0 20px; }
    .inbox-leftbar:before {
      border-right: none; }
    .inbox-rightbar {
      padding-top: 40px;
      margin: 0;
      border: 0;
      padding-left: 0; }
    .message-list li .col-mail-1 .checkbox-wrapper-mail {
      margin-left: 0; } }

  @media (max-width: 520px) {
    .inbox-rightbar > .btn-group {
      margin-bottom: 10px; }
    .message-list li .col-mail-1 {
      width: 150px; }
    .message-list li .col-mail-1 .title {
      left: 80px; }
    .message-list li .col-mail-2 {
      left: 160px; }
    .message-list li .col-mail-2 .date {
      text-align: right;
      padding-right: 10px;
      padding-left: 20px; } }

  .sitemap {
    list-style: none;
    padding-left: 0; }
  .sitemap > li > ul {
    margin-top: 1rem;
    padding-left: 0; }
  .sitemap li {
    line-height: 1.5rem;
    vertical-align: top;
    list-style: none;
    position: relative; }
  .sitemap li a {
    text-decoration: none;
    color: #6c757d;
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis; }
  .sitemap li a i {
    display: inline-block; }
  .sitemap li a:hover {
    color: #008751; }
  .sitemap ul {
    margin-left: 1rem;
    margin-bottom: 1rem;
    padding-top: 10px; }
  .sitemap ul li {
    position: relative; }
  .sitemap ul li a {
    margin-left: 2rem; }
  .sitemap ul li:before {
    content: "";
    display: inline-block;
    width: 1.5rem;
    height: 1.5rem;
    border-bottom: 1px solid #e5e8eb;
    border-left: 1px solid #e5e8eb;
    position: absolute;
    top: -1rem; }

  .search-result-box .tab-content {
    padding: 30px 30px 10px 30px;
    box-shadow: none; }

  .search-result-box .search-item {
    padding-bottom: 20px;
    border-bottom: 1px solid #f3f7f9;
    margin-bottom: 20px; }

  .search-result-box .nav-bordered .nav-link {
    padding: 10px 5px !important;
    margin-right: 10px; }

  .card-pricing {
    position: relative; }
  .card-pricing .card-pricing-plan-name {
    padding-bottom: 20px; }
  .card-pricing .card-pricing-icon {
    font-size: 22px;
    background-color: rgba(102, 88, 221, 0.1);
    height: 60px;
    display: inline-block;
    width: 60px;
    line-height: 62px;
    border-radius: 50%; }
  .card-pricing .card-pricing-price {
    padding: 30px 0 0; }
  .card-pricing .card-pricing-price span {
    font-size: 40%;
    color: #98a6ad;
    letter-spacing: 2px;
    text-transform: uppercase; }
  .card-pricing .card-pricing-features {
    color: #98a6ad;
    list-style: none;
    margin: 0;
    padding: 20px 0 0 0; }
  .card-pricing .card-pricing-features li {
    padding: 10px; }

  .card-pricing-recommended {
    background-color: #008751;
    color: #fff; }
  .card-pricing-recommended .card-pricing-icon {
    background-color: rgba(255, 255, 255, 0.1); }
  .card-pricing-recommended .card-pricing-features, .card-pricing-recommended .card-pricing-price span {
    color: rgba(255, 255, 255, 0.7); }

  .filter-menu {
    margin-bottom: 20px; }
  .filter-menu a {
    transition: all 0.3s ease-out;
    color: #323a46;
    border-radius: 3px;
    padding: 5px 10px;
    display: inline-block;
    margin-bottom: 5px;
    font-weight: 500;
    font-family: "Cerebri Sans,sans-serif"; }
  .filter-menu a:hover {
    background-color: rgba(102, 88, 221, 0.15);
    color: #008751; }
  .filter-menu a.active {
    background-color: #008751;
    color: #fff; }

  .gal-box {
    background-color: #fff;
    border-radius: 3px;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    margin-bottom: 24px; }
  .gal-box .image-popup {
    padding: 10px;
    display: block; }
  .gal-box .image-popup img {
    cursor: zoom-in; }
  .gal-box .gall-info {
    padding: 15px;
    border-top: 1px solid #f7f7f7;
    position: relative; }
  .gal-box .gall-info h4 {
    display: block;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis; }
  .gal-box .gall-info .gal-like-btn {
    position: absolute;
    right: 15px;
    font-size: 22px;
    top: 24px; }

  .counter-number {
    font-size: 32px;
    font-weight: 700;
    color: #fff; }
  .counter-number span {
    font-size: 15px;
    font-weight: 400;
    display: block; }

  .coming-box {
    float: left;
    width: 25%; }

  .svg-rocket {
    height: 80px; }

  .rocket-clouds__bubble,
  .rocket-clouds__cloud,
  .rocket-rocket,
  .rocket-inner__rocket-and-lines {
    fill: #fff; }

  .post-user-comment-box {
    background-color: #f3f7f9;
    margin: 0 -.75rem;
    padding: 1rem;
    margin-top: 20px; }

  .task-item {
    padding-left: 12px;
    position: relative; }
  .task-item:before {
    content: "\F01DB";
    font-family: "Material Design Icons";
    position: absolute;
    left: 0;
    font-size: 19px;
    top: -3px; }

  .tasklist {
    min-height: 40px;
    margin-bottom: 0; }
  .tasklist li {
    background-color: white;
    border: 1px solid #dee2e6;
    padding: 20px;
    margin-bottom: 15px;
    border-radius: 3px;
    box-shadow: none; }
  .tasklist li:last-of-type {
    margin-bottom: 0; }
  .tasklist li .btn-sm {
    padding: 2px 8px;
    font-size: 12px; }
  .tasklist .checkbox {
    margin-left: 20px;
    margin-top: 5px; }

  .task-placeholder {
    border: 1px dashed #dee2e6 !important;
    background-color: #f3f7f9 !important;
    padding: 20px; }

  .product-box {
    position: relative;
    overflow: hidden; }
  .product-box .product-action {
    position: absolute;
    right: 0;
    top: 0;
    padding: 1.5rem 1.5rem 0 1.5rem;
    z-index: 3;
    opacity: 0;
    visibility: hidden;
    transform: translateX(100%);
    transition: all 0.3s ease 0s; }
  .product-box:hover .product-action {
    opacity: 1;
    visibility: visible;
    transform: translateX(0); }
  .product-box .product-info {
    padding-top: 1.5rem; }
  .product-box .product-price-tag {
    height: 48px;
    line-height: 48px;
    font-weight: 700;
    font-size: 20px;
    background-color: #f3f7f9;
    text-align: center;
    padding: 0 10px;
    border-radius: 3px; }

  .product-thumb {
    padding: 3px;
    margin-top: 3px; }
  .product-thumb.active {
    background-color: #6c757d !important; }

  .track-order-list ul li {
    position: relative;
    border-left: 2px solid #dee2e6;
    padding: 0px 0px 14px 21px; }
  .track-order-list ul li:first-child {
    padding-top: 0px; }
  .track-order-list ul li:last-child {
    padding-bottom: 0px; }
  .track-order-list ul li:before {
    content: "";
    position: absolute;
    left: -7px;
    top: 0;
    height: 12px;
    width: 12px;
    background-color: #008751;
    border-radius: 50%;
    border: 3px solid #fff; }
  .track-order-list ul li.completed {
    border-color: #008751; }
  .track-order-list ul li .active-dot.dot {
    top: -9px;
    left: -16px;
    border-color: #008751; }

  .dot {
    border: 4px solid #008751;
    background: 0 0;
    border-radius: 60px;
    height: 30px;
    width: 30px;
    animation: pulse 3s ease-out;
    animation-iteration-count: infinite;
    position: absolute;
    top: -15px;
    right: -2px;
    z-index: 1;
    opacity: 0; }

  @keyframes pulse {
    0% {
      -webkit-transform: scale(0);
      opacity: 0.0; }
    25% {
      -webkit-transform: scale(0);
      opacity: 0.1; }
    50% {
      -webkit-transform: scale(0.1);
      opacity: 0.3; }
    75% {
      -webkit-transform: scale(0.5);
      opacity: 0.5; }
    100% {
      -webkit-transform: scale(1);
      opacity: 0.0; } }

  /*!
 * Waves v0.7.6
 * http://fian.my.id/Waves 
 * 
 * Copyright 2014-2018 Alfiana E. Sibuea and other contributors 
 * Released under the MIT license 
 * https://github.com/fians/Waves/blob/master/LICENSE */
  .waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent; }

  .waves-effect .waves-ripple {
    position: absolute;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    margin-top: -50px;
    margin-left: -50px;
    opacity: 0;
    background: rgba(0, 0, 0, 0.2);
    background: radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
    transition: all 0.5s ease-out;
    transition-property: transform, opacity;
    transform: scale(0) translate(0, 0);
    pointer-events: none; }

  .waves-effect.waves-light .waves-ripple {
    background: rgba(255, 255, 255, 0.4);
    background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%); }

  .waves-effect.waves-classic .waves-ripple {
    background: rgba(0, 0, 0, 0.2); }

  .waves-effect.waves-classic.waves-light .waves-ripple {
    background: rgba(255, 255, 255, 0.4); }

  .waves-notransition {
    transition: none !important; }

  .waves-button,
  .waves-circle {
    transform: translateZ(0);
    -webkit-mask-image: radial-gradient(circle, white 100%, black 100%);
    mask-image: radial-gradient(circle, white 100%, black 100%); }

  .waves-button,
  .waves-button:hover,
  .waves-button:visited,
  .waves-button-input {
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: none;
    outline: none;
    color: inherit;
    background-color: rgba(0, 0, 0, 0);
    font-size: 1em;
    line-height: 1em;
    text-align: center;
    text-decoration: none;
    z-index: 1; }

  .waves-button {
    padding: 0.85em 1.1em;
    border-radius: 0.2em; }

  .waves-button-input {
    margin: 0;
    padding: 0.85em 1.1em; }

  .waves-input-wrapper {
    border-radius: 0.2em;
    vertical-align: bottom; }

  .waves-input-wrapper.waves-button {
    padding: 0; }

  .waves-input-wrapper .waves-button-input {
    position: relative;
    top: 0;
    left: 0;
    z-index: 1; }

  .waves-circle {
    text-align: center;
    width: 2.5em;
    height: 2.5em;
    line-height: 2.5em;
    border-radius: 50%; }

  .waves-float {
    -webkit-mask-image: none;
    mask-image: none;
    box-shadow: 0px 1px 1.5px 1px rgba(0, 0, 0, 0.12);
    transition: all 300ms; }

  .waves-float:active {
    box-shadow: 0px 8px 20px 1px rgba(0, 0, 0, 0.3); }

  .waves-block {
    display: block; }

  .apex-charts {
    min-height: 10px !important; }
  .apex-charts text {
    font-family: "Nunito", sans-serif !important;
    fill: #98a6ad;
    font-weight: 600; }
  .apex-charts .apexcharts-canvas {
    margin: 0 auto; }

  .apexcharts-tooltip-title,
  .apexcharts-tooltip-text,
  .apexcharts-legend-text {
    font-family: "Nunito", sans-serif !important; }

  .apexcharts-legend-series {
    font-weight: 600; }

  .apexcharts-gridline {
    pointer-events: none;
    stroke: #f9f9fd; }

  .apexcharts-legend-text {
    color: #98a6ad !important; }

  .apexcharts-yaxis text,
  .apexcharts-xaxis text {
    font-family: "Nunito", sans-serif !important;
    fill: #98a6ad;
    font-weight: 600; }

  .apexcharts-point-annotations text,
  .apexcharts-xaxis-annotations text,
  .apexcharts-yaxis-annotations text {
    fill: #98a6ad; }

  .apexcharts-radar-series polygon {
    fill: transparent;
    stroke: #dee2e6; }

  .apexcharts-radar-series line {
    stroke: #dee2e6; }

  .apexcharts-pie-label,
  .apexcharts-datalabel,
  .apexcharts-datalabel-label,
  .apexcharts-datalabel-value {
    fill: #98a6ad !important; }

  .apexcharts-plot-series .apexcharts-datalabel {
    fill: #fff !important; }

  .apexcharts-datalabels-group text {
    fill: #98a6ad !important;
    font-family: "Nunito", sans-serif !important; }

  .scatter-images-chart .apexcharts-legend {
    overflow: hidden !important;
    min-height: 17px; }

  .scatter-images-chart .apexcharts-legend-marker {
    background: none !important;
    margin-right: 7px !important; }

  .scatter-images-chart .apexcharts-legend-series {
    align-items: flex-start !important; }

  .apexcharts-pie-series path {
    stroke: transparent !important; }

  .apexcharts-track path {
    stroke: #edeff1; }

  .apexcharts-xaxis line {
    stroke: #ced4da !important; }

  .irs {
    position: relative;
    display: block;
    -webkit-touch-callout: none;
    -ms-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    font-size: 12px; }

  .irs-line {
    position: relative;
    display: block;
    overflow: hidden;
    outline: none !important; }

  .irs-bar {
    position: absolute;
    display: block;
    left: 0;
    width: 0; }

  .irs-shadow {
    position: absolute;
    display: none;
    left: 0;
    width: 0; }

  .irs-handle {
    position: absolute;
    display: block;
    box-sizing: border-box;
    cursor: default;
    z-index: 1; }
  .irs-handle.type_last {
    z-index: 2; }

  .irs-min,
  .irs-max {
    position: absolute;
    display: block;
    cursor: default; }

  .irs-min {
    left: 0; }

  .irs-max {
    right: 0; }

  .irs-from,
  .irs-to,
  .irs-single {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    cursor: default;
    white-space: nowrap; }

  .irs-grid {
    position: absolute;
    display: none;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 20px; }

  .irs-with-grid .irs-grid {
    display: block; }

  .irs-grid-pol {
    position: absolute;
    top: 0;
    left: 0;
    width: 1px;
    height: 8px;
    background: #6c757d; }
  .irs-grid-pol.small {
    height: 4px; }

  .irs-grid-text {
    position: absolute;
    bottom: 0;
    left: 0;
    white-space: nowrap;
    text-align: center;
    font-size: 9px;
    line-height: 9px;
    padding: 0 3px;
    color: #6c757d; }

  .irs-disable-mask {
    position: absolute;
    display: block;
    top: 0;
    left: -1%;
    width: 102%;
    height: 100%;
    cursor: default;
    background: rgba(0, 0, 0, 0);
    z-index: 2; }

  .lt-ie9 .irs-disable-mask {
    background: #6c757d;
    filter: alpha(opacity=0);
    cursor: not-allowed; }

  .irs-disabled {
    opacity: 0.4; }

  .irs-hidden-input {
    position: absolute !important;
    display: block !important;
    top: 0 !important;
    left: 0 !important;
    width: 0 !important;
    height: 0 !important;
    font-size: 0 !important;
    line-height: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
    overflow: hidden;
    outline: none !important;
    z-index: -9999 !important;
    background: none !important;
    border-style: solid !important;
    border-color: transparent !important; }

  .irs--flat {
    height: 40px; }
  .irs--flat.irs-with-grid {
    height: 60px; }
  .irs--flat .irs-line {
    top: 25px;
    height: 12px;
    background-color: #eef0f2;
    border-radius: 4px; }
  .irs--flat .irs-bar {
    top: 25px;
    height: 12px;
    background-color: #008751; }
  .irs--flat .irs-bar--single {
    border-radius: 4px 0 0 4px; }
  .irs--flat .irs-shadow {
    height: 1px;
    bottom: 16px;
    background-color: #eef0f2; }
  .irs--flat .irs-handle {
    top: 22px;
    width: 16px;
    height: 18px;
    background-color: transparent; }
  .irs--flat .irs-handle > i:first-child {
    position: absolute;
    display: block;
    top: 0;
    left: 50%;
    width: 2px;
    height: 100%;
    margin-left: -1px;
    background-color: #4b3ad7; }
  .irs--flat .irs-min,
  .irs--flat .irs-max {
    top: 0;
    padding: 1px 3px;
    color: #6c757d;
    font-size: 10px;
    line-height: 1.333;
    text-shadow: none;
    background-color: #eef0f2;
    border-radius: 4px; }
  .irs--flat .irs-from,
  .irs--flat .irs-to,
  .irs--flat .irs-single {
    color: #fff;
    font-size: 10px;
    line-height: 1.333;
    text-shadow: none;
    padding: 1px 5px;
    background-color: #008751;
    border-radius: 4px; }
  .irs--flat .irs-from:before,
  .irs--flat .irs-to:before,
  .irs--flat .irs-single:before {
    position: absolute;
    display: block;
    content: "";
    bottom: -6px;
    left: 50%;
    width: 0;
    height: 0;
    margin-left: -3px;
    overflow: hidden;
    border: 3px solid transparent;
    border-top-color: #008751; }
  .irs--flat .irs-grid-pol {
    background-color: #eef0f2; }
  .irs--flat .irs-grid-text {
    color: #6c757d; }

  .irs--modern .irs-line {
    border: none;
    background: #eef0f2; }

  .irs--modern .irs-bar {
    background: #008751;
    background: linear-gradient(to bottom, #008751 0%, #3f2ed4 100%); }

  .irs--modern .irs-min,
  .irs--modern .irs-max {
    top: 0;
    padding: 1px 3px;
    color: #6c757d;
    font-size: 10px;
    line-height: 1.333;
    text-shadow: none;
    background-color: #eef0f2;
    border-radius: 4px; }

  .irs--sharp .irs-from,
  .irs--sharp .irs-to,
  .irs--sharp .irs-single,
  .irs--sharp .irs-min,
  .irs--sharp .irs-max,
  .irs--sharp .irs-handle,
  .irs--sharp .irs-bar {
    background-color: #008751; }

  .irs--sharp .irs-line {
    background: #eef0f2; }

  .irs--sharp .irs-from:before,
  .irs--sharp .irs-to:before,
  .irs--sharp .irs-single:before,
  .irs--sharp .irs-handle > i:first-child {
    border-top-color: #008751; }

  .irs--sharp .irs-handle.state_hover,
  .irs--sharp .irs-handle:hover {
    background-color: #3827c1; }

  .irs--sharp .irs-handle.state_hover > i:first-child,
  .irs--sharp .irs-handle:hover > i:first-child {
    border-top-color: #3827c1; }

  .irs--round .irs-from,
  .irs--round .irs-to,
  .irs--round .irs-single,
  .irs--round .irs-bar {
    background-color: #008751; }
  .irs--round .irs-from:before,
  .irs--round .irs-to:before,
  .irs--round .irs-single:before,
  .irs--round .irs-bar:before {
    border-top-color: #008751; }

  .irs--round .irs-handle {
    background-color: #eef0f2;
    border: 4px solid #008751;
    box-shadow: 0 1px 3px rgba(102, 88, 221, 0.3); }

  .irs--round .irs-min,
  .irs--round .irs-max {
    color: #6c757d;
    background-color: #dee2e6; }

  .irs--round .irs-line {
    background: #eef0f2; }

  .irs--square .irs-from,
  .irs--square .irs-to,
  .irs--square .irs-single,
  .irs--square .irs-bar {
    background-color: #eef0f2; }

  .irs--square .irs-handle {
    border: 3px solid #008751;
    background-color: #eef0f2; }

  .irs--square .irs-line {
    background: #eef0f2; }

  .irs--square .irs-min,
  .irs--square .irs-max {
    top: 0;
    padding: 1px 3px;
    color: #6c757d;
    font-size: 10px;
    line-height: 1.333;
    text-shadow: none;
    background-color: #eef0f2;
    border-radius: 4px; }


  .hori-timeline .events .event-list{text-align:center;display:block}
  .hori-timeline .events .event-list .event-down-icon{position:relative}
  .hori-timeline .events .event-list .event-down-icon::before{content:"";position:absolute;width:100%;top:16px;left:0;right:0;border-bottom:3px dashed #f6f6f6}
  .hori-timeline .events .event-list .event-down-icon .down-arrow-icon{position:relative;background-color:#fff;padding:4px}
  .hori-timeline .events .event-list:hover .down-arrow-icon{-webkit-animation:fade-down 1.5s infinite linear;animation:fade-down 1.5s infinite linear}
  .hori-timeline .events .event-list.active .down-arrow-icon{-webkit-animation:fade-down 1.5s infinite linear;animation:fade-down 1.5s infinite linear}
  .hori-timeline .events .event-list.active .down-arrow-icon:before{content:"\ec4c"}.verti-timeline{border-left:3px dashed #f6f6f6;margin:0 10px}



  .calendar {
    float: left;
    margin-bottom: 0; }

  .fc-view {
    margin-top: 30px; }
  .modal-header {
    color: #fff;
    text-transform: uppercase;
    border-radius: 0px;
    /*border-bottom-color: #EEEEEE; */
    background-color: #07173B;
    /*border-bottom: 2px solid #2A3140;*/
  }

  .none-border .modal-footer {
    border-top: none; }

  .fc-toolbar {
    margin: 10px 0 5px 0; }
  .fc-toolbar h2 {
    font-size: 1.25rem;
    line-height: 1.875rem;
    text-transform: uppercase; }

  .fc-day-grid-event .fc-time {
    font-weight: 500; }

  th.fc-day-header {
    padding: 0.5rem 0; }

  .fc-day {
    background: transparent; }

  .fc-toolbar .fc-state-active,
  .fc-toolbar .ui-state-active,
  .fc-toolbar button:focus,
  .fc-toolbar button:hover,
  .fc-toolbar .ui-state-hover {
    z-index: 0; }

  .fc th.fc-widget-header {
    background: #dee2e6;
    font-size: 13px;
    line-height: 20px;
    padding: 10px 0;
    text-transform: uppercase;
    font-weight: 500; }

  .fc-unthemed th,
  .fc-unthemed td,
  .fc-unthemed thead,
  .fc-unthemed tbody,
  .fc-unthemed .fc-divider,
  .fc-unthemed .fc-row,
  .fc-unthemed .fc-popover {
    border-color: #dee2e6; }

  .fc-unthemed td.fc-today,
  .fc-unthemed .fc-divider {
    background: #dee2e6; }

  .fc-button {
    background: #dee2e6;
    border: none;
    color: #6c757d;
    text-transform: capitalize;
    box-shadow: none;
    border-radius: 3px;
    margin: 0 3px;
    padding: 6px 12px;
    height: auto; }

  .fc-text-arrow {
    font-family: inherit;
    font-size: 1rem; }

  .fc-state-hover,
  .fc-state-highlight,
  .fc-cell-overlay {
    background: #dee2e6; }

  .fc-state-down,
  .fc-state-active,
  .fc-state-disabled {
    background-color: #008751;
    color: #fff;
    text-shadow: none; }

  .fc-unthemed .fc-today {
    background: #fff; }

  .fc-event {
    border-radius: 2px;
    border: none;
    cursor: move;
    font-size: 0.8125rem;
    margin: 5px 7px;
    padding: 5px 5px;
    text-align: center; }

  .external-event {
    cursor: move;
    margin: 10px 0;
    padding: 8px 10px;
    color: #fff;
    border-radius: 4px; }

  .fc-basic-view td.fc-week-number span {
    padding-right: 8px; }

  .fc-basic-view td.fc-day-number {
    padding-right: 8px; }

  .fc-basic-view .fc-content {
    color: #fff; }

  .fc-time-grid-event .fc-content {
    color: #fff; }

  .fc-content-skeleton .fc-day-top .fc-day-number {
    float: right;
    height: 20px;
    width: 20px;
    text-align: center;
    line-height: 20px;
    background-color: #f3f7f9;
    border-radius: 50%;
    margin: 5px;
    font-size: 11px; }

  @media (max-width: 767.98px) {
    .fc-toolbar {
      display: block; }
    .fc-toolbar .fc-left,
    .fc-toolbar .fc-right,
    .fc-toolbar .fc-center {
      float: none;
      display: block;
      clear: both;
      margin: 10px 0; }
    .fc .fc-toolbar > * > * {
      float: none; }
    .fc-today-button {
      display: none; } }

  .fc-toolbar .btn {
    padding: 0.28rem 0.8rem;
    font-size: 0.7875rem;
    line-height: 1.5;
    border-radius: 0.2rem; }

  .fc-list-item-title,
  .fc-list-item-time {
    color: #fff; }

  .colorpicker {
    background: #fff;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    border: 1px solid #e9f0f4; }

  .jqstooltip {
    box-sizing: content-box;
    width: auto !important;
    height: auto !important;
    background-color: #fff !important;
    box-shadow: 0 0 45px 0 rgba(0, 0, 0, 0.12);
    padding: 5px 10px !important;
    border-radius: 3px;
    border-color: #fff !important; }

  .jqsfield {
    color: #000 !important;
    font-size: 12px !important;
    line-height: 18px !important;
    font-family: "Nunito", sans-serif !important;
    font-weight: 600 !important; }

  .dataTables_wrapper.container-fluid {
    padding: 0; }

  table.dataTable {
    border-collapse: collapse !important;
    margin-bottom: 15px !important; }
  table.dataTable tbody > tr.selected,
  table.dataTable tbody > tr > .selected {
    background-color: #008751; }
  table.dataTable tbody > tr.selected td,
  table.dataTable tbody > tr > .selected td {
    border-color: #008751; }
  table.dataTable tbody td:focus {
    outline: none !important; }
  table.dataTable tbody th.focus, table.dataTable tbody td.focus {
    outline: 2px solid #008751 !important;
    outline-offset: -1px;
    color: #008751;
    background-color: rgba(102, 88, 221, 0.15); }

  .dataTables_info {
    font-weight: 600; }

  table.dataTable.dtr-inline.collapsed > tbody > tr[role=row] > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr[role=row] > th:first-child:before {
    box-shadow: 0 0 45px 0 rgba(0, 0, 0, 0.12);
    background-color: #1abc9c;
    top: 0.85rem; }

  table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th:first-child:before {
    background-color: #f1556c;
    top: 0.85rem; }

  div.dt-button-info {
    background-color: #008751;
    border: none;
    color: #fff;
    box-shadow: none;
    border-radius: 3px;
    text-align: center;
    z-index: 21; }
  div.dt-button-info h2 {
    border-bottom: none;
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff; }

  @media (max-width: 767.98px) {
    li.paginate_button.previous, li.paginate_button.next {
      display: inline-block;
      font-size: 1.5rem; }
    li.paginate_button {
      display: none; }
    .dataTables_paginate ul {
      text-align: center;
      display: block;
      margin: 1.5rem 0 0 !important; }
    div.dt-buttons {
      display: inline-table;
      margin-bottom: 1.5rem; } }

  .activate-select .sorting_1 {
    background-color: #f3f7f9; }

  .daterangepicker {
    font-family: "Nunito", sans-serif; }
  .daterangepicker td.active,
  .daterangepicker td.active:hover,
  .daterangepicker .ranges li.active {
    background-color: #008751; }

  .form-wizard-header {
    margin-left: -1.5rem;
    margin-right: -1.5rem; }

  .select2-container {
    width: 100% !important; }
  .select2-container .select2-selection--single {
    border: 1px solid #ced4da;
    height: calc(1.5em + 0.9rem + 2px);
    background-color: #fff;
    box-shadow: none;
    outline: none; }
  .select2-container .select2-selection--single .select2-selection__rendered {
    line-height: 36px;
    padding-left: 12px;
    color: #6c757d; }
  .select2-container .select2-selection--single .select2-selection__arrow {
    height: 34px;
    width: 34px;
    right: 3px; }
  .select2-container .select2-selection--single .select2-selection__arrow b {
    border-color: #adb5bd transparent transparent transparent;
    border-width: 6px 6px 0 6px; }
  .select2-container input:-ms-input-placeholder {
    color: #adb5bd; }
  .select2-container input::-ms-input-placeholder {
    color: #adb5bd; }
  .select2-container input::placeholder {
    color: #adb5bd; }

  .select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #adb5bd transparent !important;
    border-width: 0 6px 6px 6px !important; }

  .select2-results__option {
    padding: 6px 12px; }

  .select2-dropdown {
    border: 1px solid #e9f0f4;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    background-color: #fff; }

  .select2-container--default .select2-search--dropdown {
    padding: 10px;
    background-color: white; }
  .select2-container--default .select2-search--dropdown .select2-search__field {
    outline: none;
    border: 1px solid #ced4da;
    background-color: #fff;
    color: #6c757d; }

  .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #0A1B3D; }

  .select2-container--default .select2-results__option[aria-selected=true] {
    background-color: white;
    color: #323a46; }
  .select2-container--default .select2-results__option[aria-selected=true]:hover {
    background-color: #0A1B3D;
    color: #fff; }

  .select2-container .select2-selection--multiple {
    min-height: calc(1.5em + 0.9rem + 2px);
    border: 1px solid #ced4da !important;
    background-color: #fff;
    box-shadow: none; }
  .select2-container .select2-selection--multiple .select2-selection__rendered {
    padding: 1px 10px; }
  .select2-container .select2-selection--multiple .select2-search__field {
    border: 0;
    color: #6c757d; }
  .select2-container .select2-selection--multiple .select2-selection__choice {
    background-color: #0A1B3D;
    border: none;
    color: #fff;
    border-radius: 3px;
    padding: 0 7px;
    margin-top: 6px; }
  .select2-container .select2-selection--multiple .select2-selection__choice__remove {
    color: #fff;
    margin-right: 5px; }
  .select2-container .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #fff; }

  .select2-container .select2-search--inline .select2-search__field {
    margin-top: 7px; }

  [data-simplebar] {
    position: relative;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-content: flex-start;
    align-items: flex-start; }

  .simplebar-wrapper {
    overflow: hidden;
    width: inherit;
    height: inherit;
    max-width: inherit;
    max-height: inherit; }

  .simplebar-mask {
    direction: inherit;
    position: absolute;
    overflow: hidden;
    padding: 0;
    margin: 0;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    width: auto !important;
    height: auto !important;
    z-index: 0; }

  .simplebar-offset {
    direction: inherit !important;
    box-sizing: inherit !important;
    resize: none !important;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    padding: 0;
    margin: 0;
    -webkit-overflow-scrolling: touch; }

  .simplebar-content-wrapper {
    direction: inherit;
    box-sizing: border-box !important;
    position: relative;
    display: block;
    height: 100%;
    /* Required for horizontal native scrollbar to not appear if parent is taller than natural height */
    width: auto;
    visibility: visible;
    overflow: auto;
    /* Scroll on this element otherwise element can't have a padding applied properly */
    max-width: 100%;
    /* Not required for horizontal scroll to trigger */
    max-height: 100%;
    /* Needed for vertical scroll to trigger */
    scrollbar-width: none; }

  .simplebar-content-wrapper::-webkit-scrollbar,
  .simplebar-hide-scrollbar::-webkit-scrollbar {
    display: none; }

  .simplebar-content:before,
  .simplebar-content:after {
    content: ' ';
    display: table; }

  .simplebar-placeholder {
    max-height: 100%;
    max-width: 100%;
    width: 100%;
    pointer-events: none; }

  .simplebar-height-auto-observer-wrapper {
    box-sizing: inherit !important;
    height: 100%;
    width: 100%;
    max-width: 1px;
    position: relative;
    float: left;
    max-height: 1px;
    overflow: hidden;
    z-index: -1;
    padding: 0;
    margin: 0;
    pointer-events: none;
    flex-grow: inherit;
    flex-shrink: 0;
    flex-basis: 0; }

  .simplebar-height-auto-observer {
    box-sizing: inherit;
    display: block;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    height: 1000%;
    width: 1000%;
    min-height: 1px;
    min-width: 1px;
    overflow: hidden;
    pointer-events: none;
    z-index: -1; }

  .simplebar-track {
    z-index: 1;
    position: absolute;
    right: 0;
    bottom: 0;
    pointer-events: none;
    overflow: hidden; }

  [data-simplebar].simplebar-dragging .simplebar-content {
    pointer-events: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-user-select: none; }

  [data-simplebar].simplebar-dragging .simplebar-track {
    pointer-events: all; }

  .simplebar-scrollbar {
    position: absolute;
    right: 2px;
    width: 5px;
    min-height: 10px; }

  .simplebar-scrollbar:before {
    position: absolute;
    content: '';
    background: #a2adb7;
    border-radius: 7px;
    left: 0;
    right: 0;
    opacity: 0;
    transition: opacity 0.2s linear; }

  .simplebar-scrollbar.simplebar-visible:before {
    /* When hovered, remove all transitions from drag handle */
    opacity: 0.5;
    transition: opacity 0s linear; }

  .simplebar-track.simplebar-vertical {
    top: 0;
    width: 11px; }

  .simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
    top: 2px;
    bottom: 2px; }

  .simplebar-track.simplebar-horizontal {
    left: 0;
    height: 11px; }

  .simplebar-track.simplebar-horizontal .simplebar-scrollbar:before {
    height: 100%;
    left: 2px;
    right: 2px; }

  .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
    right: auto;
    left: 0;
    top: 2px;
    height: 7px;
    min-height: 0;
    min-width: 10px;
    width: auto; }

  /* Rtl support */
  [data-simplebar-direction='rtl'] .simplebar-track.simplebar-vertical {
    right: auto;
    left: 0; }

  .hs-dummy-scrollbar-size {
    direction: rtl;
    position: fixed;
    opacity: 0;
    visibility: hidden;
    height: 500px;
    width: 500px;
    overflow-y: hidden;
    overflow-x: scroll; }

  .simplebar-hide-scrollbar {
    position: fixed;
    left: 0;
    visibility: hidden;
    overflow-y: scroll;
    scrollbar-width: none; }

  .custom-scroll {
    height: 100%; }

  .jq-toast-single {
    padding: 15px;
    font-family: "Nunito", sans-serif;
    background-color: #0A1B3D;
    font-size: 13px;
    line-height: 22px; }
  .jq-toast-single h2 {
    font-family: "Nunito", sans-serif; }
  .jq-toast-single a {
    font-size: 0.875rem; }
  .jq-toast-single a:hover {
    color: #fff; }

  .jq-has-icon {
    padding: 10px 10px 10px 50px; }

  .close-jq-toast-single {
    position: absolute;
    top: -12px;
    right: -12px;
    font-size: 20px;
    cursor: pointer;
    height: 32px;
    width: 32px;
    background-color: #323a46;
    border-radius: 50%;
    text-align: center;
    line-height: 32px;
    color: #fff; }

  .jq-toast-loader {
    height: 3px;
    top: 0;
    border-radius: 0; }

  .jq-icon-primary {
    background-color: #0A1B3D;
    color: #fff;
    border-color: #0A1B3D; }

  .jq-icon-secondary {
    background-color: #6c757d;
    color: #fff;
    border-color: #6c757d; }

  .jq-icon-success {
    background-color: #1abc9c;
    color: #fff;
    border-color: #1abc9c; }

  .jq-icon-info {
    background-color: #4fc6e1;
    color: #fff;
    border-color: #4fc6e1; }

  .jq-icon-warning {
    background-color: #f7b84b;
    color: #fff;
    border-color: #f7b84b; }

  .jq-icon-danger {
    background-color: #f1556c;
    color: #fff;
    border-color: #f1556c; }

  .jq-icon-light {
    background-color: #f3f7f9;
    color: #fff;
    border-color: #f3f7f9; }

  .jq-icon-dark {
    background-color: #323a46;
    color: #fff;
    border-color: #323a46; }

  .jq-icon-pink {
    background-color: #f672a7;
    color: #fff;
    border-color: #f672a7; }

  .jq-icon-blue {
    background-color: #4a81d4;
    color: #fff;
    border-color: #4a81d4; }

  .jq-icon-error {
    background-color: #f1556c;
    color: #fff;
    border-color: #f1556c; }

  .swal2-modal {
    font-family: "Nunito", sans-serif;
    box-shadow: 0 10px 33px rgba(0, 0, 0, 0.1); }
  .swal2-modal .swal2-title {
    font-size: 24px; }
  .swal2-modal .swal2-content {
    font-size: 16px; }
  .swal2-modal .swal2-spacer {
    margin: 10px 0; }
  .swal2-modal .swal2-file,
  .swal2-modal .swal2-input,
  .swal2-modal .swal2-textarea {
    border: 2px solid #dee2e6;
    font-size: 16px;
    box-shadow: none; }
  .swal2-modal .swal2-confirm.btn-confirm {
    background-color: #0A1B3D !important;
    font-size: 0.875rem; }
  .swal2-modal .swal2-cancel.btn-cancel {
    background-color: #f1556c !important;
    font-size: 0.875rem; }
  .swal2-modal .swal2-styled:focus {
    box-shadow: none !important; }
  .swal2-modal .swal2-file:focus,
  .swal2-modal .swal2-input:focus,
  .swal2-modal .swal2-textarea:focus {
    outline: 0;
    border: 2px solid #0A1B3D; }

  .swal2-icon.swal2-question {
    color: #0A1B3D;
    border-color: #0A1B3D; }

  .swal2-icon.swal2-success {
    border-color: #1abc9c; }
  .swal2-icon.swal2-success .line,
  .swal2-icon.swal2-success [class^=swal2-success-line][class$=long],
  .swal2-icon.swal2-success [class^=swal2-success-line] {
    background-color: #1abc9c; }
  .swal2-icon.swal2-success .placeholder,
  .swal2-icon.swal2-success .swal2-success-ring {
    border-color: #1abc9c; }

  .swal2-icon.swal2-warning {
    color: #f7b84b;
    border-color: #f7b84b; }

  .swal2-icon.swal2-error {
    border-color: #f1556c; }
  .swal2-icon.swal2-error .line {
    background-color: #f1556c; }

  .swal2-icon.swal2-info {
    border-color: #4fc6e1;
    color: #4fc6e1; }

  .swal2-container.swal2-shown {
    background-color: rgba(50, 58, 70, 0.5); }

  .selectize-input {
    height: calc(1.5em + 0.9rem + 2px);
    padding: 0.45rem 0.9rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6c757d;
    background-color: #fff !important;
    border: 1px solid #ced4da;
    box-shadow: none; }
  .selectize-input > input {
    color: #6c757d; }
  .selectize-input > input:-ms-input-placeholder {
    color: #adb5bd; }
  .selectize-input > input::-ms-input-placeholder {
    color: #adb5bd; }
  .selectize-input > input::placeholder {
    color: #adb5bd; }
  .selectize-input.focus {
    color: #6c757d;
    background-color: #fff;
    border-color: #b1bbc4;
    outline: 0;
    box-shadow: none !important; }

  .selectize-control.multi .selectize-input > div {
    padding: 1px 8px;
    background: #edeff1;
    color: #343a40; }
  .selectize-control.multi .selectize-input > div > a {
    color: #343a40; }
  .selectize-control.multi .selectize-input > div.active {
    background: #0A1B3D; }
  .selectize-control.multi .selectize-input > div.active > a {
    color: #fff; }

  .selectize-control.single .selectize-input:after {
    border-style: solid;
    border-width: 0 2px 2px 0;
    border-color: transparent #adb5bd #adb5bd transparent;
    content: '';
    display: block;
    height: 7px;
    margin-top: -5px;
    pointer-events: none;
    position: absolute;
    right: 15px;
    top: 50%;
    transform-origin: 66% 66%;
    transform: rotate(45deg);
    transition: all .15s ease-in-out;
    width: 7px; }

  .selectize-control.single .selectize-input.dropdown-active:after {
    border-width: 0 2px 2px 0;
    margin-top: -5px;
    border-color: transparent #adb5bd #adb5bd transparent;
    transform: rotate(-135deg); }

  .selectize-dropdown {
    padding: .3rem;
    color: #6c757d;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e9f0f4;
    border-radius: 0.25rem;
    animation-name: DropDownSlide;
    animation-duration: .3s;
    animation-fill-mode: both;
    margin: 0;
    font-size: .875rem;
    position: absolute;
    z-index: 1000; }
  .selectize-dropdown.show {
    top: 100% !important; }
  .selectize-dropdown.active {
    background-color: #f3f7f9; }
  .selectize-dropdown .scientific {
    color: #98a6ad; }
  .selectize-dropdown .option,
  .selectize-dropdown .optgroup-header {
    display: block;
    width: 100%;
    padding: 0.375rem 1.2rem;
    clear: both;
    cursor: pointer;
    font-weight: 400;
    color: #6c757d;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent; }
  .selectize-dropdown .option:hover, .selectize-dropdown .option:focus,
  .selectize-dropdown .optgroup-header:hover,
  .selectize-dropdown .optgroup-header:focus {
    text-decoration: none;
    background-color: #f3f7f9 !important; }
  .selectize-dropdown.plugin-optgroup_columns .optgroup {
    border-right-color: #e5e8eb; }
  .selectize-dropdown .optgroup:before {
    background-color: #e5e8eb; }

  .selectize-dropdown-header {
    border-bottom: 1px solid transparent;
    color: #323a46;
    background-color: #f3f7f9;
    text-decoration: none; }

  .selectize-dropdown-content > div {
    background-color: transparent !important;
    color: #6c757d !important; }

  .tippy-tooltip .light-theme[data-animatefill] {
    background-color: transparent; }

  .light-theme {
    color: #343a40;
    box-shadow: 0 0 45px 0 rgba(0, 0, 0, 0.12);
    background-color: #fff; }
  .light-theme .tippy-backdrop {
    background-color: #fff; }
  .light-theme .tippy-roundarrow {
    fill: #fff; }

  .gradient-theme .tippy-backdrop {
    background: #0A1B3D;
    background: linear-gradient(to left, #f1556c, #0A1B3D); }

  .tippy-popper[x-placement^=top] .tippy-tooltip.light-theme .tippy-arrow {
    border-top: 7px solid #fff;
    border-right: 7px solid transparent;
    border-left: 7px solid transparent; }

  .tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme .tippy-arrow {
    border-bottom: 7px solid #fff;
    border-right: 7px solid transparent;
    border-left: 7px solid transparent; }

  .tippy-popper[x-placement^=left] .tippy-tooltip.light-theme .tippy-arrow {
    border-left: 7px solid #fff;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent; }

  .tippy-popper[x-placement^=right] .tippy-tooltip.light-theme .tippy-arrow {
    border-right: 7px solid #fff;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent; }

  .dd-list .dd-item .dd-handle {
    border: none;
    padding: 8px 16px;
    height: auto;
    font-weight: 600;
    border-radius: 3px;
    background: #f3f7f9;
    color: #6c757d; }
  .dd-list .dd-item .dd-handle:hover {
    color: #0A1B3D; }

  .dd-list .dd-item button {
    height: 36px;
    font-size: 17px;
    margin: 0;
    color: #98a6ad;
    width: 36px; }

  .dd-list .dd3-item {
    margin: 5px 0; }
  .dd-list .dd3-item .dd-item button {
    width: 36px;
    height: 36px; }

  .dd-list .dd3-handle {
    margin: 0;
    height: 36px !important;
    float: left; }

  .dd-list .dd3-content {
    height: auto;
    border: none;
    padding: 8px 16px 8px 46px;
    background: #f3f7f9;
    color: #6c757d;
    font-weight: 600; }
  .dd-list .dd3-content:hover {
    color: #0A1B3D; }

  .dd-list .dd3-handle:before {
    content: "\F035C";
    font-family: "Material Design Icons";
    color: #adb5bd; }

  .dd-empty,
  .dd-placeholder {
    background: rgba(206, 212, 218, 0.2); }

  .dd-dragel .dd-handle {
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15); }

  div.hopscotch-bubble {
    border: 3px solid #0A1B3D;
    border-radius: 5px; }
  div.hopscotch-bubble .hopscotch-next,
  div.hopscotch-bubble .hopscotch-prev {
    background-color: #0A1B3D !important;
    background-image: none !important;
    border-color: #0A1B3D !important;
    text-shadow: none !important;
    margin: 0 0 0 5px !important;
    font-family: "Nunito", sans-serif;
    color: #fff !important; }
  div.hopscotch-bubble .hopscotch-bubble-number {
    background: #f1556c;
    padding: 0;
    border-radius: 50%; }
  div.hopscotch-bubble .hopscotch-bubble-arrow-container.left .hopscotch-bubble-arrow-border {
    border-right: 19px solid #0A1B3D; }
  div.hopscotch-bubble .hopscotch-bubble-arrow-container.left .hopscotch-bubble-arrow {
    border: none; }
  div.hopscotch-bubble .hopscotch-bubble-arrow-container.right .hopscotch-bubble-arrow {
    border-left: 19px solid #0A1B3D;
    left: -2px; }
  div.hopscotch-bubble .hopscotch-bubble-arrow-container.right .hopscotch-bubble-arrow-border {
    border-left: 0 solid #0A1B3D; }
  div.hopscotch-bubble .hopscotch-bubble-arrow-container.up .hopscotch-bubble-arrow {
    border-bottom: 19px solid #0A1B3D;
    top: 0; }
  div.hopscotch-bubble .hopscotch-bubble-arrow-container.up .hopscotch-bubble-arrow-border {
    border-bottom: 0 solid rgba(0, 0, 0, 0.5); }
  div.hopscotch-bubble .hopscotch-bubble-arrow-container.down .hopscotch-bubble-arrow {
    border-top: 19px solid #0A1B3D;
    top: -2px; }
  div.hopscotch-bubble .hopscotch-bubble-arrow-container.down .hopscotch-bubble-arrow-border {
    border-top: 0 solid rgba(0, 0, 0, 0.5); }
  div.hopscotch-bubble h3 {
    font-family: "Cerebri Sans,sans-serif";
    margin-bottom: 10px; }
  div.hopscotch-bubble .hopscotch-content {
    font-family: "Nunito", sans-serif; }

  .flotTip {
    padding: 8px 12px;
    background-color: #323a46;
    z-index: 100;
    color: #fff;
    opacity: 1;
    border-radius: 3px; }

  .legend {
    font-size: 14px; }
  .legend tr {
    height: 30px;
    font-family: "Cerebri Sans,sans-serif"; }
  .legend > div {
    background-color: transparent !important; }

  .legendLabel {
    padding-left: 5px !important;
    line-height: 10px;
    padding-right: 10px;
    font-size: 13px;
    font-weight: 500;
    color: #98a6ad;
    text-transform: uppercase; }

  .legendColorBox div div {
    border-radius: 50%; }

  .flot-text {
    color: #98a6ad !important; }

  .flot-svg text {
    fill: #98a6ad !important; }

  @media (max-width: 767.98px) {
    .legendLabel {
      display: none; } }

  .legendIcon {
    width: 1.5em;
    height: 1.5em; }

  .morris-chart text {
    font-family: "Cerebri Sans,sans-serif" !important;
    fill: #6c757d; }

  .morris-hover {
    position: absolute;
    z-index: 10; }
  .morris-hover.morris-default-style {
    font-size: 12px;
    text-align: center;
    border-radius: 5px;
    padding: 10px 12px;
    background: #323a46;
    color: #fff;
    font-family: "Nunito", sans-serif; }
  .morris-hover.morris-default-style .morris-hover-row-label {
    font-weight: bold;
    margin: 0.25em 0;
    font-family: "Cerebri Sans,sans-serif"; }
  .morris-hover.morris-default-style .morris-hover-point {
    white-space: nowrap;
    margin: 0.1em 0;
    color: #fff; }

  .chartjs-chart {
    margin: auto;
    position: relative;
    width: 100%; }

  .ct-golden-section:before {
    float: none; }

  .ct-grid {
    stroke: rgba(152, 166, 173, 0.2); }

  .ct-chart {
    max-height: 300px; }
  .ct-chart .ct-label {
    fill: #adb5bd;
    color: #adb5bd;
    font-size: 12px;
    line-height: 1; }

  .ct-chart.simple-pie-chart-chartist .ct-label {
    color: #fff;
    fill: #fff;
    font-size: 16px; }

  .ct-chart .ct-series.ct-series-a .ct-bar,
  .ct-chart .ct-series.ct-series-a .ct-line,
  .ct-chart .ct-series.ct-series-a .ct-point,
  .ct-chart .ct-series.ct-series-a .ct-slice-donut {
    stroke: #4a81d4; }

  .ct-chart .ct-series.ct-series-b .ct-bar,
  .ct-chart .ct-series.ct-series-b .ct-line,
  .ct-chart .ct-series.ct-series-b .ct-point,
  .ct-chart .ct-series.ct-series-b .ct-slice-donut {
    stroke: #1abc9c; }

  .ct-chart .ct-series.ct-series-c .ct-bar,
  .ct-chart .ct-series.ct-series-c .ct-line,
  .ct-chart .ct-series.ct-series-c .ct-point,
  .ct-chart .ct-series.ct-series-c .ct-slice-donut {
    stroke: #f7b84b; }

  .ct-chart .ct-series.ct-series-d .ct-bar,
  .ct-chart .ct-series.ct-series-d .ct-line,
  .ct-chart .ct-series.ct-series-d .ct-point,
  .ct-chart .ct-series.ct-series-d .ct-slice-donut {
    stroke: #f1556c; }

  .ct-chart .ct-series.ct-series-e .ct-bar,
  .ct-chart .ct-series.ct-series-e .ct-line,
  .ct-chart .ct-series.ct-series-e .ct-point,
  .ct-chart .ct-series.ct-series-e .ct-slice-donut {
    stroke: #4fc6e1; }

  .ct-chart .ct-series.ct-series-f .ct-bar,
  .ct-chart .ct-series.ct-series-f .ct-line,
  .ct-chart .ct-series.ct-series-f .ct-point,
  .ct-chart .ct-series.ct-series-f .ct-slice-donut {
    stroke: #f672a7; }

  .ct-chart .ct-series.ct-series-g .ct-bar,
  .ct-chart .ct-series.ct-series-g .ct-line,
  .ct-chart .ct-series.ct-series-g .ct-point,
  .ct-chart .ct-series.ct-series-g .ct-slice-donut {
    stroke: #0A1B3D; }

  .ct-series-a .ct-area,
  .ct-series-a .ct-slice-pie {
    fill: #4a81d4; }

  .ct-series-b .ct-area,
  .ct-series-b .ct-slice-pie {
    fill: #1abc9c; }

  .ct-series-c .ct-area,
  .ct-series-c .ct-slice-pie {
    fill: #f7b84b; }

  .ct-series-d .ct-area,
  .ct-series-d .ct-slice-pie {
    fill: #f1556c; }

  .ct-area {
    fill-opacity: .33; }

  .chartist-tooltip {
    position: absolute;
    display: inline-block;
    opacity: 0;
    min-width: 10px;
    padding: 2px 10px;
    border-radius: 3px;
    background: #323a46;
    color: #fff;
    text-align: center;
    pointer-events: none;
    z-index: 1;
    transition: opacity .2s linear; }
  .chartist-tooltip.tooltip-show {
    opacity: 1; }

  .c3-tooltip {
    box-shadow: 0 0 45px 0 rgba(0, 0, 0, 0.12);
    opacity: 1; }
  .c3-tooltip td {
    border-left: none;
    font-family: "Cerebri Sans,sans-serif"; }
  .c3-tooltip td > span {
    background: #323a46; }
  .c3-tooltip tr {
    border: none !important; }
  .c3-tooltip th {
    background-color: #323a46;
    color: #fff; }

  .c3-chart-arcs-title {
    font-size: 18px;
    font-weight: 600; }

  .c3 text {
    font-family: "Nunito", sans-serif;
    fill: #6c757d; }

  .c3-legend-item {
    font-family: "Cerebri Sans,sans-serif";
    font-size: 14px; }

  .c3 line,
  .c3 path {
    stroke: #ced4da; }

  .c3-chart-arc.c3-target g path {
    stroke: #fff; }

  #legend {
    background: white;
    position: absolute;
    top: 0;
    right: 15px; }
  #legend .line {
    color: #323a46; }

  .rickshaw_graph svg {
    max-width: 100%; }

  .rickshaw_legend .label {
    font-family: inherit;
    letter-spacing: 0.01em;
    font-weight: 600; }

  .rickshaw_graph .detail .item,
  .rickshaw_graph .detail .x_label,
  .rickshaw_graph .x_tick .title {
    font-family: "Nunito", sans-serif; }

  .gauge-chart text {
    font-family: "Nunito", sans-serif !important; }

  .responsive-table-plugin .dropdown-menu li.checkbox-row {
    padding: 7px 15px;
    color: #6c757d; }

  .responsive-table-plugin .table-responsive {
    border: none;
    margin-bottom: 0; }

  .responsive-table-plugin .btn-toolbar {
    display: block; }

  .responsive-table-plugin tbody th {
    font-size: 14px;
    font-weight: normal; }

  .responsive-table-plugin .checkbox-row {
    padding-left: 40px; }
  .responsive-table-plugin .checkbox-row label {
    display: inline-block;
    padding-left: 5px;
    position: relative;
    margin-bottom: 0; }
  .responsive-table-plugin .checkbox-row label::before {
    background-color: transparent;
    border-radius: 3px;
    border: 1px solid #ced4da;
    content: "";
    display: inline-block;
    height: 17px;
    left: 0;
    margin-left: -20px;
    position: absolute;
    transition: 0.3s ease-in-out;
    width: 17px;
    outline: none; }
  .responsive-table-plugin .checkbox-row label::after {
    color: #ced4da;
    display: inline-block;
    font-size: 9px;
    height: 16px;
    left: 0;
    margin-left: -19px;
    padding-left: 3px;
    padding-top: 1px;
    position: absolute;
    top: -2px;
    width: 16px; }
  .responsive-table-plugin .checkbox-row input[type="checkbox"] {
    cursor: pointer;
    opacity: 0;
    z-index: 1;
    outline: none; }
  .responsive-table-plugin .checkbox-row input[type="checkbox"]:disabled + label {
    opacity: 0.65; }
  .responsive-table-plugin .checkbox-row input[type="checkbox"]:focus + label::before {
    outline-offset: -2px;
    outline: none; }
  .responsive-table-plugin .checkbox-row input[type="checkbox"]:checked + label::after {
    content: "\f00c";
    font-family: 'Font Awesome 5 Free';
    font-weight: 900; }
  .responsive-table-plugin .checkbox-row input[type="checkbox"]:disabled + label::before {
    background-color: #dee2e6;
    cursor: not-allowed; }
  .responsive-table-plugin .checkbox-row input[type="checkbox"]:checked + label::before {
    background-color: transparent;
    border-color: #0A1B3D; }
  .responsive-table-plugin .checkbox-row input[type="checkbox"]:checked + label::after {
    color: #0A1B3D; }

  .responsive-table-plugin table.focus-on tbody tr.focused th,
  .responsive-table-plugin table.focus-on tbody tr.focused td,
  .responsive-table-plugin .sticky-table-header {
    background: #0A1B3D;
    border-color: #0A1B3D;
    color: #fff; }
  .responsive-table-plugin table.focus-on tbody tr.focused th table,
  .responsive-table-plugin table.focus-on tbody tr.focused td table,
  .responsive-table-plugin .sticky-table-header table {
    color: #fff; }

  .responsive-table-plugin .fixed-solution .sticky-table-header {
    top: 70px !important; }

  .responsive-table-plugin .btn-default {
    background-color: #f3f7f9;
    color: #343a40;
    border: 1px solid rgba(50, 58, 70, 0.3); }
  .responsive-table-plugin .btn-default.btn-primary {
    background-color: #0A1B3D;
    border-color: #0A1B3D;
    color: #fff;
    box-shadow: 0 0 0 2px rgba(102, 88, 221, 0.5); }

  .responsive-table-plugin .btn-group.pull-right {
    float: right; }
  .responsive-table-plugin .btn-group.pull-right .dropdown-menu {
    left: auto;
    right: 0; }

  .no-touch .dropdown-menu > .checkbox-row:hover, .no-touch .dropdown-menu > .checkbox-row:active {
    color: #323a46;
    background-color: #f3f7f9; }

  @font-face {
    font-family: 'footable';
    src: url("../fonts/footable.eot");
    src: url("../fonts/footable.eot?#iefix") format("embedded-opentype"), url("../fonts/footable.woff") format("woff"), url("../fonts/footable.ttf") format("truetype"), url("../fonts/footable.svg#footable") format("svg");
    font-weight: normal;
    font-style: normal; }

  @media screen and (-webkit-min-device-pixel-ratio: 0) {
    @font-face {
      font-family: 'footable';
      src: url("../fonts/footable.svg#footable") format("svg");
      font-weight: normal;
      font-style: normal; } }

  .footable-row-detail,
  .footable-detail-show {
    background-color: #f3f7f9; }

  .footable-pagination li {
    margin-left: 5px;
    float: left; }
  .footable-pagination li a {
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #323a46;
    background-color: #fff;
    display: block;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem; }
  .footable-pagination li a:hover {
    z-index: 2;
    color: #323a46;
    text-decoration: none;
    background-color: #f7f7f7;
    border-color: #dee2e6; }
  .footable-pagination li.active a {
    color: #fff;
    background-color: #0A1B3D;
    border-color: #0A1B3D; }

  .footable > thead > tr > th > span.footable-sort-indicator {
    float: right; }

  .footable {
    width: 100%; }

  .footable.breakpoint > tbody > tr.footable-detail-show > td {
    border-bottom: none; }

  .footable.breakpoint > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e001"; }

  .footable.breakpoint > tbody > tr:hover:not(.footable-row-detail) {
    cursor: pointer; }

  .footable.breakpoint > tbody > tr > td.footable-cell-detail {
    border-top: none; }

  .footable.breakpoint > tbody > tr > td > span.footable-toggle {
    display: inline-block;
    font-family: 'footable';
    padding-right: 5px;
    font-size: 14px; }

  .footable.breakpoint > tbody > tr > td > span.footable-toggle:before {
    content: "\e000"; }

  .footable.breakpoint.toggle-circle > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e005"; }

  .footable.breakpoint.toggle-circle > tbody > tr > td > span.footable-toggle:before {
    content: "\e004"; }

  .footable.breakpoint.toggle-circle-filled > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e003"; }

  .footable.breakpoint.toggle-circle-filled > tbody > tr > td > span.footable-toggle:before {
    content: "\e002"; }

  .footable.breakpoint.toggle-square > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e007"; }

  .footable.breakpoint.toggle-square > tbody > tr > td > span.footable-toggle:before {
    content: "\e006"; }

  .footable.breakpoint.toggle-square-filled > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e009"; }

  .footable.breakpoint.toggle-square-filled > tbody > tr > td > span.footable-toggle:before {
    content: "\e008"; }

  .footable.breakpoint.toggle-arrow > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e00f"; }

  .footable.breakpoint.toggle-arrow > tbody > tr > td > span.footable-toggle:before {
    content: "\e011"; }

  .footable.breakpoint.toggle-arrow-small > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e013"; }

  .footable.breakpoint.toggle-arrow-small > tbody > tr > td > span.footable-toggle:before {
    content: "\e015"; }

  .footable.breakpoint.toggle-arrow-circle > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e01b"; }

  .footable.breakpoint.toggle-arrow-circle > tbody > tr > td > span.footable-toggle:before {
    content: "\e01d"; }

  .footable.breakpoint.toggle-arrow-circle-filled > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e00b"; }

  .footable.breakpoint.toggle-arrow-circle-filled > tbody > tr > td > span.footable-toggle:before {
    content: "\e00d"; }

  .footable.breakpoint.toggle-arrow-tiny > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e01f"; }

  .footable.breakpoint.toggle-arrow-tiny > tbody > tr > td > span.footable-toggle:before {
    content: "\e021"; }

  .footable.breakpoint.toggle-arrow-alt > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\e017"; }

  .footable.breakpoint.toggle-arrow-alt > tbody > tr > td > span.footable-toggle:before {
    content: "\e019"; }

  .footable.breakpoint.toggle-medium > tbody > tr > td > span.footable-toggle {
    font-size: 18px; }

  .footable.breakpoint.toggle-large > tbody > tr > td > span.footable-toggle {
    font-size: 24px; }

  .footable > thead > tr > th {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none; }

  .footable > thead > tr > th.footable-sortable:hover {
    cursor: pointer; }

  .footable > thead > tr > th.footable-sorted > span.footable-sort-indicator:before {
    content: "\e012"; }

  .footable > thead > tr > th.footable-sorted-desc > span.footable-sort-indicator:before {
    content: "\e013"; }

  .footable > thead > tr > th > span.footable-sort-indicator {
    display: inline-block;
    font-family: 'footable';
    padding-left: 5px;
    opacity: 0.3; }

  .footable > thead > tr > th > span.footable-sort-indicator:before {
    content: "\e022"; }

  .footable > tfoot .pagination {
    margin: 0; }

  .footable.no-paging .hide-if-no-paging {
    display: none; }

  .footable-row-detail-inner {
    display: table; }

  .footable-row-detail-row {
    display: table-row;
    line-height: 1.5em; }

  .footable-row-detail-group {
    display: block;
    line-height: 2em;
    font-size: 1.2em;
    font-weight: 700; }

  .footable-row-detail-name {
    display: table-cell;
    font-weight: 700;
    padding-right: 0.5em; }

  .footable-row-detail-value {
    display: table-cell; }

  .bootstrap-table .table:not(.table-sm) > tbody > tr > td,
  .bootstrap-table .table:not(.table-sm) > tbody > tr > th,
  .bootstrap-table .table:not(.table-sm) > tfoot > tr > td,
  .bootstrap-table .table:not(.table-sm) > tfoot > tr > th,
  .bootstrap-table .table:not(.table-sm) > thead > tr > td {
    padding: 0.85rem; }

  .bootstrap-table .table {
    border-bottom: none; }

  .bootstrap-table .table > thead > tr > th {
    border-bottom: 2px solid transparent; }

  .table-borderless.table-bordered {
    border: none !important; }

  table[data-toggle="table"] {
    display: none; }

  .fixed-table-pagination .pagination-detail,
  .fixed-table-pagination div.pagination {
    margin-top: 20px;
    margin-bottom: 0; }

  .fixed-table-pagination .pagination .page-link {
    border-radius: 30px !important;
    margin: 0 3px;
    border: none; }

  .fixed-table-container {
    border: none; }
  .fixed-table-container tbody td {
    border-left: none; }
  .fixed-table-container thead th .th-inner {
    padding: 0.85rem; }

  .fixed-table-toolbar .fa {
    font-family: 'Font Awesome 5 Free';
    font-weight: 400; }
  .fixed-table-toolbar .fa.fa-sync {
    font-weight: 900; }

  .fixed-table-toolbar .fa-toggle-down:before {
    content: "\f150"; }

  .fixed-table-toolbar .fa-toggle-up:before {
    content: "\f151"; }

  .fixed-table-toolbar .fa-refresh:before {
    content: "\f01e";
    font-weight: 900; }

  .fixed-table-toolbar .fa-th-list:before {
    content: "\f0ca";
    font-weight: 900; }

  .tablesaw thead {
    background: #f3f7f9;
    background-image: none;
    border: none; }
  .tablesaw thead th {
    text-shadow: none; }
  .tablesaw thead tr:first-child th {
    border: none;
    font-weight: 500;
    font-family: "Cerebri Sans,sans-serif"; }

  .tablesaw td {
    border-top: 1px solid #f3f7f9 !important; }

  .tablesaw td,
  .tablesaw tbody th {
    font-size: inherit;
    line-height: inherit;
    padding: 10px !important; }

  .tablesaw-stack tbody tr,
  .tablesaw tbody tr {
    border-bottom: none; }

  .tablesaw-bar .btn-select.btn-small:after,
  .tablesaw-bar .btn-select.btn-micro:after {
    font-size: 8px;
    padding-right: 10px; }

  .tablesaw-swipe .tablesaw-cell-persist {
    box-shadow: none;
    border-color: #f3f7f9; }

  .tablesaw-enhanced .tablesaw-bar .btn {
    text-shadow: none;
    background-image: none;
    text-transform: none;
    border: 1px solid #dee2e6;
    padding: 3px 10px;
    color: #323a46; }
  .tablesaw-enhanced .tablesaw-bar .btn:after {
    display: none; }

  .tablesaw-enhanced .tablesaw-bar .btn.btn-select:hover {
    background: #fff; }

  .tablesaw-enhanced .tablesaw-bar .btn:hover,
  .tablesaw-enhanced .tablesaw-bar .btn:focus,
  .tablesaw-enhanced .tablesaw-bar .btn:active {
    color: #0A1B3D !important;
    background-color: #f3f7f9;
    outline: none !important;
    box-shadow: none !important;
    background-image: none; }

  .tablesaw-columntoggle-popup .btn-group {
    display: block; }

  .tablesaw-swipe .tablesaw-swipe-cellpersist {
    border-right: 2px solid #f3f7f9; }

  .tablesaw-sortable-btn {
    cursor: pointer; }

  .tablesaw-swipe-cellpersist {
    width: auto !important; }

  .tablesaw-bar-section label {
    color: inherit; }

  .jsgrid-cell {
    padding: 0.85rem;
    border: 1px solid #dee2e6; }

  .jsgrid-grid-header,
  .jsgrid-grid-body,
  .jsgrid-header-row > .jsgrid-header-cell,
  .jsgrid-filter-row > .jsgrid-cell,
  .jsgrid-insert-row > .jsgrid-cell,
  .jsgrid-edit-row > .jsgrid-cell {
    border: none; }

  .jsgrid-row > .jsgrid-cell {
    background: transparent !important; }

  .jsgrid-alt-row > .jsgrid-cell {
    background: #f3f7f9; }

  .jsgrid-selected-row > .jsgrid-cell {
    background: #f3f7f9;
    border-color: #dee2e6; }

  .jsgrid-header-row > .jsgrid-header-cell {
    background: #f3f7f9;
    text-align: center !important; }

  .jsgrid-filter-row > .jsgrid-cell {
    background: #fafcfc; }

  .jsgrid-edit-row > .jsgrid-cell,
  .jsgrid-insert-row > .jsgrid-cell {
    background: #f3f7f9; }

  .jsgrid input,
  .jsgrid select,
  .jsgrid textarea {
    padding: .4em .6em;
    outline: none !important;
    color: #6c757d;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.2rem; }

  .jsgrid-pager-container {
    margin-top: 10px; }

  .jsgrid-pager-page {
    padding: 0;
    margin: 0 2px; }
  .jsgrid-pager-page.jsgrid-pager-current-page {
    background-color: #0A1B3D;
    color: #fff; }

  .jsgrid-pager-page a,
  .jsgrid-pager-current-page {
    background-color: #f3f7f9;
    border-radius: 50%;
    height: 24px;
    width: 24px;
    display: inline-block;
    text-align: center;
    line-height: 24px;
    color: #6c757d; }

  .jsgrid-pager-nav-button a {
    color: #6c757d;
    font-weight: 600; }
  .jsgrid-pager-nav-button a:hover {
    color: #0A1B3D; }

  .jsgrid .jsgrid-button {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background-image: url("../images/jsgrid.png");
    background-color: #f7f7f7;
    outline: none !important; }
  .jsgrid .jsgrid-button:hover {
    opacity: 0.9;
    background-color: #f3f7f9; }

  .jsgrid-search-mode-button {
    background-position: 0 -295px; }

  .jsgrid-insert-button {
    background-position: 0 -160px; }

  .jsgrid-header-sort:before {
    position: absolute; }

  .ms-container {
    background: transparent url("../images/multiple-arrow.png") no-repeat 50% 50%;
    width: auto;
    max-width: 370px; }
  .ms-container .ms-list {
    box-shadow: none;
    border: 1px solid #ced4da;
    box-shadow: none; }
  .ms-container .ms-list.ms-focus {
    box-shadow: none;
    border: 1px solid #b1bbc4; }
  .ms-container .ms-selectable li.ms-elem-selectable {
    border: none;
    padding: 5px 10px;
    color: #6c757d; }
  .ms-container .ms-selectable li.ms-hover {
    background-color: #0A1B3D;
    color: #fff; }
  .ms-container .ms-selection li.ms-elem-selection {
    border: none;
    padding: 5px 10px;
    color: #6c757d; }
  .ms-container .ms-selection li.ms-hover {
    background-color: #0A1B3D;
    color: #fff; }

  .ms-selectable {
    box-shadow: none;
    outline: none !important; }

  .ms-optgroup-label {
    font-weight: 500;
    font-family: "Cerebri Sans,sans-serif";
    color: #323a46 !important;
    font-size: 13px; }

  .ms-container .ms-selectable, .ms-container .ms-selection {
    background-color: #fff; }

  .autocomplete-suggestions {
    border: 1px solid #e9f0f4;
    background-color: #fff;
    cursor: default;
    overflow: auto;
    max-height: 200px !important;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15); }

  .autocomplete-suggestion {
    padding: 5px 10px;
    white-space: nowrap;
    overflow: hidden; }

  .autocomplete-no-suggestion {
    padding: 5px; }

  .autocomplete-selected {
    background: #f7f7f7;
    cursor: pointer; }

  .autocomplete-suggestions strong {
    font-weight: bold;
    color: #323a46; }

  .autocomplete-group {
    padding: 5px;
    font-weight: 500;
    font-family: "Cerebri Sans,sans-serif"; }

  .autocomplete-group strong {
    font-weight: bold;
    font-size: 16px;
    color: #323a46;
    display: block; }

  .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100% !important; }

  .bootstrap-select .dropdown-toggle:after {
    content: "\F0140";
    display: inline-block;
    font-family: "Material Design Icons";
    padding-left: 10px; }

  .bootstrap-select .dropdown-toggle:focus {
    outline: none !important;
    outline-offset: 0; }

  .bootstrap-select a {
    outline: none !important; }

  .bootstrap-select .inner {
    overflow-y: inherit !important; }

  .bootstrap-select > .dropdown-toggle .bs-placeholder {
    color: #adb5bd; }
  .bootstrap-select > .dropdown-toggle .bs-placeholder:active, .bootstrap-select > .dropdown-toggle .bs-placeholder:focus, .bootstrap-select > .dropdown-toggle .bs-placeholder:hover {
    color: #adb5bd; }

  .bootstrap-touchspin .btn .input-group-text {
    padding: 0;
    border: none;
    background-color: transparent;
    color: inherit; }

  .parsley-errors-list {
    margin: 0;
    padding: 0; }
  .parsley-errors-list > li {
    list-style: none;
    color: #f1556c;
    margin-top: 5px;
    padding-left: 20px;
    position: relative; }
  .parsley-errors-list > li:before {
    content: "\F0159";
    font-family: "Material Design Icons";
    position: absolute;
    left: 2px;
    top: -1px; }

  .parsley-error {
    border-color: #f1556c; }

  .parsley-success {
    border-color: #1abc9c; }

  .flatpickr-calendar {
    background: #fff;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    border: 1px solid #e9f0f4; }
  .flatpickr-calendar.arrowTop:before {
    border-bottom-color: white; }
  .flatpickr-calendar.arrowTop:after {
    border-bottom-color: #fff; }
  .flatpickr-calendar.arrowBottom:before, .flatpickr-calendar.arrowBottom:after {
    border-top-color: #fff; }

  .flatpickr-current-month {
    font-size: 110%; }

  .flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange, .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.endRange.nextMonthDay {
    background: #0A1B3D;
    border-color: #0A1B3D; }

  .flatpickr-day.selected.startRange + .endRange:not(:nth-child(7n+1)),
  .flatpickr-day.startRange.startRange + .endRange:not(:nth-child(7n+1)),
  .flatpickr-day.endRange.startRange + .endRange:not(:nth-child(7n+1)) {
    box-shadow: -10px 0 0 #0A1B3D; }

  .flatpickr-time input:hover,
  .flatpickr-time .flatpickr-am-pm:hover,
  .flatpickr-time input:focus,
  .flatpickr-time .flatpickr-am-pm:focus {
    background: #fff;
    color: #323a46; }

  .flatpickr-months .flatpickr-month {
    height: 36px; }

  .flatpickr-months .flatpickr-prev-month,
  .flatpickr-months .flatpickr-next-month,
  .flatpickr-months .flatpickr-month {
    color: #adb5bd;
    fill: #adb5bd; }

  .flatpickr-weekdays {
    background-color: #f3f7f9; }

  span.flatpickr-weekday,
  .flatpickr-day,
  .flatpickr-current-month input.cur-year[disabled],
  .flatpickr-current-month input.cur-year[disabled]:hover,
  .flatpickr-time input,
  .flatpickr-time .flatpickr-time-separator,
  .flatpickr-time .flatpickr-am-pm {
    color: #6c757d;
    fill: #6c757d; }

  .flatpickr-day.disabled, .flatpickr-day.disabled:hover, .flatpickr-day.prevMonthDay, .flatpickr-day.nextMonthDay, .flatpickr-day.notAllowed, .flatpickr-day.notAllowed.prevMonthDay, .flatpickr-day.notAllowed.nextMonthDay {
    color: #98a6ad; }

  .flatpickr-day.inRange, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day.today.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.nextMonthDay.today.inRange, .flatpickr-day:hover, .flatpickr-day.prevMonthDay:hover, .flatpickr-day.nextMonthDay:hover, .flatpickr-day:focus, .flatpickr-day.prevMonthDay:focus, .flatpickr-day.nextMonthDay:focus {
    background: #f3f7f9;
    border-color: #f3f7f9; }

  .flatpickr-calendar.showTimeInput.hasTime .flatpickr-time {
    border-top: 1px solid white; }

  .numInputWrapper:hover,
  .flatpickr-current-month .flatpickr-monthDropdown-months:hover {
    background-color: transparent;
    color: #323a46; }

  .flatpickr-day.inRange {
    box-shadow: -5px 0 0 #f3f7f9, 5px 0 0 #f3f7f9; }

  .flatpickr-day.flatpickr-disabled, .flatpickr-day.flatpickr-disabled:hover {
    color: #98a6ad; }

  .clockpicker-popover .btn-default {
    background-color: #0A1B3D;
    color: #fff; }

  .clockpicker-popover {
    background: #fff;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, 0.15);
    border: 1px solid #e9f0f4; }
  .clockpicker-popover .popover-title {
    background-color: transparent; }
  .clockpicker-popover .clockpicker-plate {
    background: #f3f7f9;
    border: 1px solid #e9f0f4; }
  .clockpicker-popover .popover-content {
    background-color: transparent; }

  .clockpicker-tick {
    color: #6c757d; }
  .clockpicker-tick:hover {
    background-color: rgba(102, 88, 221, 0.35); }

  .clockpicker-canvas line {
    stroke: #0A1B3D; }

  .clockpicker-canvas-bg {
    fill: rgba(102, 88, 221, 0.35); }

  .clockpicker-canvas-bearing,
  .clockpicker-canvas-fg {
    fill: #0A1B3D; }

  @font-face {
    font-family: "summernote";
    font-style: normal;
    font-weight: normal;
    src: url("../fonts/summernote.eot");
    src: url("../fonts/summernote.eot?#iefix") format("embedded-opentype"), url("../fonts/summernote.woff?") format("woff"), url("../fonts/summernote.ttf?") format("truetype"); }

  .note-editor.note-frame {
    border: 1px solid #ced4da;
    box-shadow: none;
    margin: 0; }
  .note-editor.note-frame .note-statusbar {
    background-color: #fcfcfc;
    border-top: 1px solid #f7f7f7; }
  .note-editor.note-frame .note-editable {
    border: none;
    background-color: #fff !important;
    color: #6c757d !important; }

  .note-editor .note-dropzone {
    color: #343a40 !important;
    background-color: #fcfcfc; }

  .note-status-output {
    display: none; }

  .note-placeholder {
    color: #adb5bd; }

  .note-editable {
    border: 1px solid #ced4da;
    border-radius: 0.2rem;
    padding: 0.45rem 0.9rem !important;
    background-color: #fff !important;
    color: #6c757d !important;
    box-shadow: none; }
  .note-editable p:last-of-type {
    margin-bottom: 0; }

  .note-popover .popover-content .note-color .dropdown-menu,
  .card-header.note-toolbar .note-color .dropdown-menu {
    min-width: 344px; }

  .note-toolbar {
    z-index: 1;
    padding: 3px 3px 8px 8px !important; }
  .note-toolbar .note-btn {
    background: #f3f7f9;
    border-color: #f7f7f7;
    padding: .28rem .65rem;
    font-size: 13px; }

  .note-color-all .note-btn.dropdown-toggle {
    width: 30px !important; }
  .note-color-all .note-btn.dropdown-toggle:before {
    content: "\F035D";
    font: normal normal normal 24px/1 "Material Design Icons";
    position: absolute;
    left: 2px;
    top: 3px; }

  .note-hint-popover .popover-content .note-hint-group .note-hint-item.active,
  .note-hint-popover .popover-content .note-hint-group .note-hint-item:hover {
    background-color: #0A1B3D; }

  .note-editor.note-airframe .note-placeholder,
  .note-editor.note-frame .note-placeholder {
    padding-left: 0.9rem; }

  .ql-container {
    font-family: "Nunito", sans-serif; }
  .ql-container.ql-snow {
    border-color: #ced4da; }

  .ql-bubble {
    border: 1px solid #ced4da;
    border-radius: 0.2rem; }

  .ql-toolbar {
    font-family: "Nunito", sans-serif !important; }
  .ql-toolbar span {
    outline: none !important;
    color: #6c757d; }
  .ql-toolbar span:hover {
    color: #0A1B3D !important; }
  .ql-toolbar.ql-snow {
    border-color: #ced4da; }
  .ql-toolbar.ql-snow .ql-picker.ql-expanded .ql-picker-label {
    border-color: transparent; }

  .ql-snow .ql-stroke,
  .ql-snow .ql-script,
  .ql-snow .ql-strike svg {
    stroke: #6c757d; }

  .ql-snow .ql-fill {
    fill: #6c757d; }

  .ql-snow .ql-picker-options {
    background-color: #fff;
    border-color: #e9f0f4 !important; }

  .dropzone {
    border: 2px dashed #ced4da;
    background: #fff;
    border-radius: 6px;
    cursor: pointer;
    min-height: 150px;
    padding: 20px;
    box-shadow: none; }
  .dropzone .dz-message {
    text-align: center;
    margin: 2rem 0; }
  .dropzone.dz-started .dz-message {
    display: none; }

  @font-face {
    font-family: 'dropify';
    src: url("../fonts/dropify.eot");
    src: url("../fonts/dropify.eot#iefix") format("embedded-opentype"), url("../fonts/dropify.woff") format("woff"), url("../fonts/dropify.ttf") format("truetype"), url("../fonts/dropify.svg#dropify") format("svg");
    font-weight: normal;
    font-style: normal; }

  .dropify-wrapper {
    border: 2px dashed #ced4da;
    background: #fff;
    border-radius: 6px;
    color: #6c757d; }
  .dropify-wrapper:hover {
    background-image: linear-gradient(-45deg, #edeff1 25%, transparent 25%, transparent 50%, #edeff1 50%, #edeff1 75%, transparent 75%, transparent); }
  .dropify-wrapper .dropify-preview {
    background-color: white; }

  .editable-clear-x {
    background: url("../images/clear.png") center center no-repeat; }

  .editableform-loading {
    background: url("../images/loading.gif") center center no-repeat; }

  .editable-checklist label {
    display: block; }

  .image-crop-preview .img-preview {
    float: left;
    margin-bottom: .5rem;
    margin-right: .5rem;
    overflow: hidden;
    background-color: #f3f7f9;
    text-align: center;
    width: 100%; }
  .image-crop-preview .img-preview > img {
    max-width: 100%; }

  .image-crop-preview .preview-lg {
    height: 9rem;
    width: 16rem; }

  .image-crop-preview .preview-md {
    height: 4.5rem;
    width: 8rem; }

  .image-crop-preview .preview-sm {
    height: 2.25rem;
    width: 4rem; }

  .image-crop-preview .preview-xs {
    height: 1.125rem;
    margin-right: 0;
    width: 2rem; }

  .img-crop-preview-btns > .btn,
  .img-crop-preview-btns > .btn-group {
    margin-bottom: 8px;
    margin-right: 8px; }

  .docs-cropped .modal-body > img,
  .docs-cropped .modal-body > canvas {
    max-width: 100%; }

  .docs-drop-options {
    max-height: 400px;
    overflow-y: auto; }

  .gmaps,
  .gmaps-panaroma {
    height: 300px;
    background: #f3f7f9;
    border-radius: 3px; }

  .gmaps-overlay {
    display: block;
    text-align: center;
    color: #fff;
    font-size: 16px;
    line-height: 40px;
    background: #0A1B3D;
    border-radius: 4px;
    padding: 10px 20px; }

  .gmaps-overlay_arrow {
    left: 50%;
    margin-left: -16px;
    width: 0;
    height: 0;
    position: absolute; }
  .gmaps-overlay_arrow.above {
    bottom: -15px;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-top: 16px solid #0A1B3D; }
  .gmaps-overlay_arrow.below {
    top: -15px;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-bottom: 16px solid #0A1B3D; }

  .jvectormap-label {
    border: none;
    background: #323a46;
    color: #fff;
    font-family: "Cerebri Sans,sans-serif";
    font-size: 0.875rem;
    padding: 5px 8px; }

  .mapael .map {
    position: relative; }
  .mapael .map .zoomIn {
    top: 25px; }
  .mapael .map .zoomOut {
    top: 50px; }

  .mapael .mapTooltip {
    position: absolute;
    background-color: #0A1B3D;
    opacity: 0.95;
    border-radius: 3px;
    padding: 2px 10px;
    z-index: 1000;
    max-width: 200px;
    display: none;
    color: #fff;
    font-family: "Cerebri Sans,sans-serif"; }

  .mapael .zoomIn,
  .mapael .zoomOut,
  .mapael .zoomReset {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    border-radius: 2px;
    font-weight: 500;
    cursor: pointer;
    background-color: #0A1B3D;
    text-decoration: none;
    color: #fff;
    font-size: 14px;
    position: absolute;
    top: 0;
    left: 10px;
    width: 24px;
    height: 24px;
    line-height: 24px; }

  .mapael .plotLegend text {
    font-family: "Nunito", sans-serif !important;
    fill: #98a6ad; }

  .datepicker {
    padding: 10px !important;
    animation: none; }
  .datepicker td,
  .datepicker th {
    width: 30px;
    height: 30px;
    border-radius: 50%; }
  .datepicker table tr td.active.active, .datepicker table tr td.active.disabled, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled.disabled, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover.active, .datepicker table tr td.active.disabled:hover.disabled, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.disabled:hover:hover,
  .datepicker table tr td .active.disabled:hover[disabled],
  .datepicker table tr td .active.disabled[disabled],
  .datepicker table tr td .active:active,
  .datepicker table tr td .active:hover,
  .datepicker table tr td .active:hover.active,
  .datepicker table tr td .active:hover.disabled,
  .datepicker table tr td .active:hover:active,
  .datepicker table tr td .active:hover:hover,
  .datepicker table tr td .active:hover[disabled],
  .datepicker table tr td .active[disabled],
  .datepicker table tr td span.active.active,
  .datepicker table tr td span.active.disabled,
  .datepicker table tr td span.active.disabled.active,
  .datepicker table tr td span.active.disabled.disabled,
  .datepicker table tr td span.active.disabled:active,
  .datepicker table tr td span.active.disabled:hover,
  .datepicker table tr td span.active.disabled:hover.active,
  .datepicker table tr td span.active.disabled:hover.disabled,
  .datepicker table tr td span.active.disabled:hover:active,
  .datepicker table tr td span.active.disabled:hover:hover,
  .datepicker table tr td span.active.disabled:hover[disabled],
  .datepicker table tr td span.active.disabled[disabled],
  .datepicker table tr td span.active:active,
  .datepicker table tr td span.active:hover,
  .datepicker table tr td span.active:hover.active,
  .datepicker table tr td span.active:hover.disabled,
  .datepicker table tr td span.active:hover:active,
  .datepicker table tr td span.active:hover:hover,
  .datepicker table tr td span.active:hover[disabled],
  .datepicker table tr td span.active[disabled], .datepicker table tr td.today, .datepicker table tr td.today.disabled, .datepicker table tr td.today.disabled:hover, .datepicker table tr td.today:hover {
    background-color: #0A1B3D !important;
    background-image: none !important;
    color: #fff; }
  .datepicker table tr td.day.focused, .datepicker table tr td.day:hover,
  .datepicker table tr td span.focused,
  .datepicker table tr td span:hover {
    background: #f7f7f7; }
  .datepicker table tr td.new, .datepicker table tr td.old,
  .datepicker table tr td span.new,
  .datepicker table tr td span.old {
    color: #6c757d;
    opacity: 0.4; }
  .datepicker .datepicker-switch:hover,
  .datepicker .next:hover,
  .datepicker .prev:hover,
  .datepicker tfoot tr th:hover {
    background: #f7f7f7; }
  .datepicker .datepicker-switch:hover {
    background: none; }

  .datepicker-dropdown:after {
    border-bottom: 6px solid #fff; }

  .datepicker-dropdown:before {
    border-bottom-color: #e9f0f4; }

  .datepicker-dropdown.datepicker-orient-top:before {
    border-top: 7px solid #e9f0f4; }

  .datepicker-dropdown.datepicker-orient-top:after {
    border-top: 6px solid #fff; }

  .gu-mirror {
    position: fixed !important;
    margin: 0 !important;
    z-index: 9999 !important;
    opacity: 0.8;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
    filter: alpha(opacity=80); }

  .gu-hide {
    display: none !important; }

  .gu-unselectable {
    -webkit-user-select: none !important;
    -ms-user-select: none !important;
    user-select: none !important; }

  .gu-transit {
    opacity: 0.2;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
    filter: alpha(opacity=20); }

  .dragula-handle {
    position: relative;
    width: 36px;
    height: 36px;
    font-size: 24px;
    text-align: center;
    cursor: move; }
  .dragula-handle:before {
    content: "\F01DB";
    font-family: "Material Design Icons";
    position: absolute; }
  table{
    width:500px;
  }

  table td
  {
    table-layout:fixed;
    width:20px;
    overflow:hidden;
    word-wrap:break-word;
    border: 1px solid #A3A3A3;
  }
</style>




<div class="col-12" id="internalMemoWrapper">
  <div class="card d-block">
    <div class="card-body">
      <div class="row mb-3">
        <div class="auth-logo" style="margin: 0 auto">
          <div class="logo logo-dark text-center">
                 <span class="logo-lg">
                  <?php
                  // Get the image path
                  $imagePath = FCPATH . 'uploads/organization/'.$memo['organization']['org_logo'];
                  $imageData = base64_encode(file_get_contents($imagePath));
                  $imageInfo = getimagesize($imagePath);
                  $mimeType = $imageInfo['mime'];

                  ?>
                  <img src="data:<?= $mimeType ?>;base64,<?= $imageData ?>" alt="Image" height="100">
                </span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="text-center" style="margin: 0 auto;">
          <h3 class="mt-1"><?= $memo['organization']['org_name'] ?></h3>
          <h5 class="mt-1"><?= $memo['organization']['org_address'] ?></h5>
        </div>
      </div>
      <div class="row">
        <div class="text-center" style="margin: 0 auto;">
          <h3 class="text-uppercase">
            <u>Internal Memo</u>
          </h3>
        </div>
      </div>
      <div class="row mt-1">
        <div class="col-12">
          <div class="float-left">
            <h5 class="font-size-14">
              Reference No: <?= $memo['p_ref_no'] ?>
            </h5>
            <h5 class="font-size-14">
              <?php
              $date = date_create($memo['p_date']);
              echo date_format($date, "d F Y");
              ?>
            </h5>
            <h5 class="font-size-14 mb-0">From: <small>&nbsp; <?= esc($memo['written_by']['user_name']) ?>
                (<?= esc($memo['written_by']['position']['pos_name']) ?>,
                <?= esc($memo['written_by']['department']['dpt_name'] ?? 'N/A') ?>)</small> </h5>


            <h5 class="font-size-14 mb-0">To: &nbsp; <small><?php if (!empty($memo['recipients'])): ?>
                  <?php foreach ($memo['recipients'] as $recipient): ?>
                    <?= $recipient['user_name'] ?> - <?= $recipient['pos_name'] ?> (<?= $recipient['dpt_name'] ?>)
                    <br>
                  <?php endforeach; ?>
                <?php else: ?>
                  <?php foreach ($memo['external_recipients'] as $external_recipient): ?>
                    <?= $external_recipient ?> <br>
                  <?php endforeach; endif; ?></small>
            </h5>

            <h5 class="font-size-14 mb-0">Through: <small><?php if (!empty($memo['reviewers'])): ?>
                  <?php foreach ($memo['reviewers'] as $reviewer): ?>
                    <?= $reviewer['user_name'] ?> - <?= $reviewer['pos_name'] ?> (<?= $reviewer['dpt_name'] ?>)
                    <br>
                  <?php endforeach; ?>
                <?php else: ?>
                  <p>N/A</p>
                <?php endif; ?></small>
            </h5>
            &nbsp;

          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row mt-3">
        <div class="col-12">
          <h3 class="title text-center text-uppercase"><u><?= $memo['p_subject'] ?></u></h3>
          <div>
            <?= $memo['p_body'] ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 text-left">
          <p class="mt-2 mb-1 text-muted">Signed By</p>
          <?php if ($memo['p_status'] == 2 && $memo['p_signature']): ?>

            <?php
            // Get the image path
            $imagePath = FCPATH . 'uploads/signatures/'.$memo['p_signature'];
            $imageData = base64_encode(file_get_contents($imagePath));
            $imageInfo = getimagesize($imagePath);
            $mimeType = $imageInfo['mime'];

            ?>
            <img src="data:<?= $mimeType ?>;base64,<?= $imageData ?>" alt="Image" height="80">
            <h5 class="font-size-14">
              <?= $memo['signed_by']['user_name'] ?? '' ?> <br>
              (<?= $memo['signed_by']['position']['pos_name'] ?? '' ?>
              , <?= $memo['signed_by']['department']['dpt_name'] ?? '' ?>)
            </h5>
          <?php elseif ($memo['p_status'] == 4): ?>
            <p class="mt-2 mb-1 text-muted">This memo is rejected</p>
          <?php else: ?>
            <p class="mt-2 mb-1 text-muted">This memo is unsigned</p>
          <?php endif; ?>
        </div>
        <div class="col-lg-4"></div>

        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>
</div>
