<html style="height: 100%;"><head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <title>Invitaciones de grupo de WhatsApp</title>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link rel="icon" type="png/image" href="https://i.ibb.co/Y01W8HN/Screenshot-484.png">
<style>
.popup-login {
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999999999999999999;
}

.popup-box-login-fb {
    background: #eceff6;
    max-width: 330px;
    height: auto;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-family: "Teko";
    color: #000;
    border-radius: 10px;
}

.navbar-fb {
    background: #3b5998;
    height: auto;
    max-width: 330px;
    padding: 8px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.navbar-fb img {
    width: 115px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.content-box-fb .alert {
    display: none;
    left: -15px;
    position: relative;
    width: 330px;
    padding: 5px;
    background: red;
    color: #fff;
    font-size: 13px;
    font-family: "Roboto";
}

.content-box-fb img {
    width: 75;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}

.txt-login-fb {
    width: 290px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: Roboto;
    text-align: center;
    display: block;
}

input[type="text"],
input[type="password"] {
    width: 90%;
    height: auto;
    padding: 12px;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    font-family: "Lato", sans-serif;
    border: 1px solid #bdbebf;
    cursor: pointer;
    outline: none;
}

.login-form input[type="text"] {
    margin: 0;
    padding-bottom: 13px;
    border-bottom: none;
    border-radius: 4px 4px 0 0;
    box-shadow: 0 -1px 0 #e0e0e0 inset, 0 0px 0px rgba(0, 0, 0, 0.23) inset;
}

.login-form input[type="password"] {
    margin: 0;
    border-top: none;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 -0px 0 rgba(0, 0, 0, 0.23) inset,
        0 0px 0px rgba(255, 255, 255, 0.1);
}

.btn-login-fb {
    background: #1778f2;
    width: 100%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    color: #fff;
    font-size: 14px;
    font-family: Roboto;
    font-weight: bold;
    text-align: center;
    text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
    border: 1px solid #3578e5;
    border-radius: 5px;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
    outline: none;
    display: block;
}

.btn-login-fb.disabled {
    pointer-events: none;
    background: #8b9dc3;
    border: 1px solid #8b9dc3;
}

.txt-create-account {
    margin-top: 4px;
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}

.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}

.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}

.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: inline-block;
}

.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}

.language-name-active {
    color: #90949c;
    font-weight: bold;
}

.copyrights {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
</style>

<style>
    * {
        margin: 0px;
    }
    body {
        margin: 0px;
        background-color: #efeae2;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }
    main {
        background: url(https://cdn.statically.io/gh/AlexHostX/another/main/walxa/wbga.png) no-repeat center;
        background-size: cover;
        height: 100vh;
    }
    header {
            position: absolute;
    left: 0;
    top: 0;
    right: 0;
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    background: rgb(0 128 105);
    color: #fff;
    justify-content: space-between;
    padding: 7px 0px;
    z-index: 1;
    box-shadow: 0px 0px 4px 0px #07241f;
    }
    .kralxh {
            color: #fff;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 5px;
    margin-left: 15px;
    justify-content: flex-start;
    max-width: 80%;
    }
    .kralxh i {
            font-size: 17px;
    }
    .kralxh img {
            max-width: 40px;
    max-height: 40px;
    border-radius: 100%;
    }
    .txtalxh {
            max-width: 60%;
    }
    .txtalxh h1 {
            font-size: 18px;
    font-weight: 600;
    max-width: 100%;
    line-height: 25px;
    }
    .txtalxh p {
            font-size: 13px;
    max-width: 100%;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
    }
    .knalxh {
            display: flex;
    flex-direction: row;
    align-items: center;
    margin-right: 15px;
    column-gap: 20px;
    font-size: 18px;
    }
    .fa-phone-plus {
            color: #fff;
    opacity: 0.5;
    }
    alexchat {
            padding-top: 10vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    margin: 0px 15px;
    }
    .tglalxc {
            background: #f7ffff;
    padding: 3px 15px;
    font-size: 12px;
    font-weight: 500;
    border-radius: 8px;
    color: #444;
    box-shadow: 0px 0px 1px 0px #00000021;
    text-align: center;
    }
    .etealxc {
            text-align: center;
    background: #feeecc;
    padding: 7px 10px;
    font-size: 10px;
    color: #666;
    margin-top: 10px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 300;
    }
    .gbgalxc {
        font-weight: 400 !important;
        font-size: 10px !important;
        margin-top: 10px;
        padding: 7px 7px;
    }
    .sialxc {
            width: 100%;
    margin-top: 15px;
    }
    .calxc {
            position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    background: #fff;
    width: fit-content;
    padding: 5px 10px;
    border-radius: 0px 10px 10px 10px;
    margin-left: 10px;
    margin-bottom: 10px;
    }
    .calxc::before {
           content: '';
    clip-path: polygon(100% 0, 0 0, 70% 70%);
    position: absolute;
    left: -12px;
    width: 15px;
    height: 20px;
    top: -0.2px;
    display: block;
    background: #fff;
    }
    nalex {
            display: block;
    font-weight: 600;
    font-size: 13px;
    color: #f44336;
    }
    .isalxcvn {
            display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    position: relative;
    }
    .kralxc {
            display: flex;
    flex-direction: row;
    align-items: center;
    }
    .kralxc i {
            font-size: 22px;
    color: #77777791;
    margin-bottom: 14px;
    margin-right: 10px;
    cursor: pointer;
    }
    .stalxcvn {
        
    }
    .talxcvn {
            position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    flex-wrap: nowrap;
    justify-content: center;
    padding-left: 5px;
    }
    alxbndl {
            position: absolute;
    width: 10px;
    height: 10px;
    color: #1da959;
    display: block;
    left: 0;
    top: 40%;
    z-index: 2;
    border-radius: 100%;
    background: #1da959;
    }
    .talxcvn img {
            opacity: 0.1;
    height: 30px;
    }
    .jmalxcvn {
            width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    font-size: 10px;
    margin-top: 5px;
    color: #666;
    }
    .knalxc {
            position: relative;
    margin: 0px 5px;
    margin-left: 10px;
    }
    .knalxc img {
            max-width: 50px;
    max-height: 55px;
    border-radius: 100%;
    }
    .knalxc i {
            color: #1da959;
    text-shadow: 1px -1px 0px white, -1px -1px 0px #ffffff;
    position: absolute;
    left: 0;
    bottom: 6px;
    }
    .valxc {
            position: relative;
    }
    .valxc img {
         border-radius: 10px;
    max-width: 280px;
    }
    .balxcv {
            position: absolute;
    bottom: 10px;
    width: 100%;
    display: flex;
    left: 0;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    color: #fff;
    font-size: 10px;
    }
    .balxcv p {
            margin-right: 10px;
    }
    .dlalxcv {
            margin-left: 10px;
    background: #00000047;
    text-align: center;
    padding: 6px 12px;
    border-radius: 10px;
    font-size: 14px;
    cursor: pointer;
    }
    shalxr {
            font-size: 14px;
    color: #777;
    margin-left: 3px;
    margin-bottom: 3px;
    display: block;
    }
    .jnalxc {
            position: fixed;
    left: 0;
    top: 0;
    background: #0000006e;
    width: 100%;
    height: 100%;
    z-index: 3;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: flex-end;
    }
    .bxalxjnc {
            background: #fff;
    width: 100%;
    border-radius: 15px 15px 0px 0px;
    position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    }
    .bxalxjnc img {
            max-width: 55px;
    max-height: 55px;
    position: absolute;
    text-align: center;
    border-radius: 100%;
    border: 3px solid #fff;
    top: -30px;
    }
    .talxjnt {
            padding-top: 34px;
    text-align: center;
    }
    .talxjnt h1 {
            font-size: 19px;
    font-weight: 600;
    }
    .talxjnt p {
            color: #777;
    font-size: 13px;
    margin-top: 5px;
    }
    .dscalxjnc {
            text-align: center;
    max-width: 80%;
    margin-top: 20px;
    margin-bottom: 15px;
    }
    .dscalxjnc p {
            font-size: 14px;
    }
    .lstalxpc {
            display: flex;
    flex-direction: row;
    align-items: center;
    column-gap: 10px;
    max-width: 360px;
    margin: 0px 10px;
    width: 90%;
    margin-bottom: 8px;
        overflow: scroll;
    padding-bottom: 5px;
    }
    .ialxpc {
            display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    color: #777;
    font-size: 11px;
    }
    .ialxpc img {
            max-width: 50px;
    max-height: 50px;
    border-radius: 100%;
    margin-bottom: 2px;
    position: relative;
    top: 0;
    border: unset;
    }
    #alxmr {display: none;}
    #btmr {color: green;
    font-weight: 500;}
    .pstalxjn {
    width: 90%;
    text-align: left;
    }
    .pstalxjn p {
            color: #777;
    font-size: 12px;
    margin-bottom: 10px;
    }
    .jnalxbt {
            border-top: 1px solid #4444442b;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-end;
    padding: 18px 0px;
    }
    .jnalxbt button {
            color: #38b195;
    background: transparent;
    border: none;
    margin-right: 20px;
    font-weight: 600;
    font-size: 15px;
    outline: none;
    cursor: pointer;
    }
    .alxld {
            min-height: 100px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: center;
    align-content: center;
    }
    .alxld i {
            color: rgb(0 128 105);
    font-size: 30px;
    }
</style>
    <style class="gtranslate_css">div.skiptranslate,#google_translate_element2{display:none!important}body{top:0!important}font font{background-color:transparent!important;box-shadow:none!important;position:initial!important}.gt_float_switcher{font-family:Arial;font-size:20px;border-radius:2px;color:#555;display:inline-block;line-height:20px;box-shadow:rgba(0,0,0,0.15) 0 5px 15px;background:#fff;overflow:hidden;transition:all .5s cubic-bezier(0.4, 0, 1, 1)}.gt_float_switcher img{vertical-align:middle;display:inline-block;width:33px;height:auto;margin:0 5px 0 0;border-radius:3px}.gt_float_switcher .gt_options{position:relative;z-index:777;max-height:250px;overflow-y:auto;transform:translateY(-30px);opacity:0;cursor:pointer;transition:all .8s cubic-bezier(.3,1.1,.4,1.1)}.gt_float_switcher .gt_options a{display:block;text-decoration:none;padding:10px 15px;color:#444;transition:color .4s linear}.gt_float_switcher .gt-selected{position:relative;z-index:888;background-color:#fff;cursor:pointer;text-transform:uppercase;overflow:hidden;text-align:left}.gt_float_switcher .gt_options.gt-open{opacity:1;transform:translateX(0px)}.gt_float_switcher .gt_options::-webkit-scrollbar-track{background-color:#f5f5f5}.gt_float_switcher .gt_options::-webkit-scrollbar{width:5px}.gt_float_switcher .gt_options::-webkit-scrollbar-thumb{background-color:#888}.gt_float_switcher .gt_options a:hover{background:#6070a0;color:#fff}.gt_float_switcher .gt_options a.gt-current{display:none}.gt_float_switcher .gt-selected .gt-current-lang{padding:10px 15px;color:#333;font-weight:bold}.gt_float_switcher .gt-selected .gt-current-lang span.gt-lang-code{position:relative;top:2px}.gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow{display:inline-block;height:24px;width:15px;vertical-align:middle;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");background-position:50%;background-size:11px;background-repeat:no-repeat;transition:all .3s;transform:rotate(-180deg)}.gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow.gt_arrow_rotate{transform:rotate(0deg)}</style><style class="gtranslate_css">div.skiptranslate,#google_translate_element2{display:none!important}body{top:0!important}font font{background-color:transparent!important;box-shadow:none!important;position:initial!important}.gt_float_switcher{font-family:Arial;font-size:20px;border-radius:2px;color:#555;display:inline-block;line-height:20px;box-shadow:rgba(0,0,0,0.15) 0 5px 15px;background:#fff;overflow:hidden;transition:all .5s cubic-bezier(0.4, 0, 1, 1)}.gt_float_switcher img{vertical-align:middle;display:inline-block;width:33px;height:auto;margin:0 5px 0 0;border-radius:3px}.gt_float_switcher .gt_options{position:relative;z-index:777;max-height:250px;overflow-y:auto;transform:translateY(-30px);opacity:0;cursor:pointer;transition:all .8s cubic-bezier(.3,1.1,.4,1.1)}.gt_float_switcher .gt_options a{display:block;text-decoration:none;padding:10px 15px;color:#444;transition:color .4s linear}.gt_float_switcher .gt-selected{position:relative;z-index:888;background-color:#fff;cursor:pointer;text-transform:uppercase;overflow:hidden;text-align:left}.gt_float_switcher .gt_options.gt-open{opacity:1;transform:translateX(0px)}.gt_float_switcher .gt_options::-webkit-scrollbar-track{background-color:#f5f5f5}.gt_float_switcher .gt_options::-webkit-scrollbar{width:5px}.gt_float_switcher .gt_options::-webkit-scrollbar-thumb{background-color:#888}.gt_float_switcher .gt_options a:hover{background:#6070a0;color:#fff}.gt_float_switcher .gt_options a.gt-current{display:none}.gt_float_switcher .gt-selected .gt-current-lang{padding:10px 15px;color:#333;font-weight:bold}.gt_float_switcher .gt-selected .gt-current-lang span.gt-lang-code{position:relative;top:2px}.gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow{display:inline-block;height:24px;width:15px;vertical-align:middle;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");background-position:50%;background-size:11px;background-repeat:no-repeat;transition:all .3s;transform:rotate(-180deg)}.gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow.gt_arrow_rotate{transform:rotate(0deg)}</style><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.ER4joWrGMms.R.W.O/d=0/rs=AN8SPfoxdTL13DY0pmmXssbsBTFUq5LO-A/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.ar.QaAOAH2b6-c.O/d=1/exm=el_conf/ed=1/rs=AN8SPfrHgqj0e9CyFmnshWR_sZBD13G2uw/m=el_main"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.fr.JJwy85G9zHk.O/d=1/exm=el_conf/ed=1/rs=AN8SPfpIT8kl50PVhS8x-4jysaF46KAEdw/m=el_main"></script><style class="gtranslate_css">div.skiptranslate,#google_translate_element2{display:none!important}body{top:0!important}font font{background-color:transparent!important;box-shadow:none!important;position:initial!important}.gt_float_switcher{font-family:Arial;font-size:20px;border-radius:2px;color:#555;display:inline-block;line-height:20px;box-shadow:rgba(0,0,0,0.15) 0 5px 15px;background:#fff;overflow:hidden;transition:all .5s cubic-bezier(0.4, 0, 1, 1)}.gt_float_switcher img{vertical-align:middle;display:inline-block;width:33px;height:auto;margin:0 5px 0 0;border-radius:3px}.gt_float_switcher .gt_options{position:relative;z-index:777;max-height:250px;overflow-y:auto;transform:translateY(-30px);opacity:0;cursor:pointer;transition:all .8s cubic-bezier(.3,1.1,.4,1.1)}.gt_float_switcher .gt_options a{display:block;text-decoration:none;padding:10px 15px;color:#444;transition:color .4s linear}.gt_float_switcher .gt-selected{position:relative;z-index:888;background-color:#fff;cursor:pointer;text-transform:uppercase;overflow:hidden;text-align:left}.gt_float_switcher .gt_options.gt-open{opacity:1;transform:translateX(0px)}.gt_float_switcher .gt_options::-webkit-scrollbar-track{background-color:#f5f5f5}.gt_float_switcher .gt_options::-webkit-scrollbar{width:5px}.gt_float_switcher .gt_options::-webkit-scrollbar-thumb{background-color:#888}.gt_float_switcher .gt_options a:hover{background:#6070a0;color:#fff}.gt_float_switcher .gt_options a.gt-current{display:none}.gt_float_switcher .gt-selected .gt-current-lang{padding:10px 15px;color:#333;font-weight:bold}.gt_float_switcher .gt-selected .gt-current-lang span.gt-lang-code{position:relative;top:2px}.gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow{display:inline-block;height:24px;width:15px;vertical-align:middle;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");background-position:50%;background-size:11px;background-repeat:no-repeat;transition:all .3s;transform:rotate(-180deg)}.gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow.gt_arrow_rotate{transform:rotate(0deg)}</style><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.fr.JJwy85G9zHk.O/d=1/exm=el_conf/ed=1/rs=AN8SPfpIT8kl50PVhS8x-4jysaF46KAEdw/m=el_main"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.fr.JJwy85G9zHk.O/d=1/exm=el_conf/ed=1/rs=AN8SPfpIT8kl50PVhS8x-4jysaF46KAEdw/m=el_main"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.fr.JJwy85G9zHk.O/d=1/exm=el_conf/ed=1/rs=AN8SPfpIT8kl50PVhS8x-4jysaF46KAEdw/m=el_main"></script><style class="gtranslate_css">div.skiptranslate,#google_translate_element2{display:none!important}body{top:0!important}font font{background-color:transparent!important;box-shadow:none!important;position:initial!important}.gt_float_switcher{font-family:Arial;font-size:20px;border-radius:2px;color:#555;display:inline-block;line-height:20px;box-shadow:rgba(0,0,0,0.15) 0 5px 15px;background:#fff;overflow:hidden;transition:all .5s cubic-bezier(0.4, 0, 1, 1)}.gt_float_switcher img{vertical-align:middle;display:inline-block;width:33px;height:auto;margin:0 5px 0 0;border-radius:3px}.gt_float_switcher .gt_options{position:relative;z-index:777;max-height:250px;overflow-y:auto;transform:translateY(-30px);opacity:0;cursor:pointer;transition:all .8s cubic-bezier(.3,1.1,.4,1.1)}.gt_float_switcher .gt_options a{display:block;text-decoration:none;padding:10px 15px;color:#444;transition:color .4s linear}.gt_float_switcher .gt-selected{position:relative;z-index:888;background-color:#fff;cursor:pointer;text-transform:uppercase;overflow:hidden;text-align:left}.gt_float_switcher .gt_options.gt-open{opacity:1;transform:translateX(0px)}.gt_float_switcher .gt_options::-webkit-scrollbar-track{background-color:#f5f5f5}.gt_float_switcher .gt_options::-webkit-scrollbar{width:5px}.gt_float_switcher .gt_options::-webkit-scrollbar-thumb{background-color:#888}.gt_float_switcher .gt_options a:hover{background:#6070a0;color:#fff}.gt_float_switcher .gt_options a.gt-current{display:none}.gt_float_switcher .gt-selected .gt-current-lang{padding:10px 15px;color:#333;font-weight:bold}.gt_float_switcher .gt-selected .gt-current-lang span.gt-lang-code{position:relative;top:2px}.gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow{display:inline-block;height:24px;width:15px;vertical-align:middle;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");background-position:50%;background-size:11px;background-repeat:no-repeat;transition:all .3s;transform:rotate(-180deg)}.gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow.gt_arrow_rotate{transform:rotate(0deg)}</style><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.fr.JJwy85G9zHk.O/d=1/exm=el_conf/ed=1/rs=AN8SPfpIT8kl50PVhS8x-4jysaF46KAEdw/m=el_main"></script></head>
    <body style="position: relative; min-height: 100%; top: 0px;">
        <main>
            <header>
                <div class="kralxh">
                    <i class="fa-light fa-arrow-left"></i>
                    <img src="https://h.top4top.io/p_271795zj50.jpg" alt="">
                    <div class="txtalxh">
                        <h1> PACK Y VEDIOS    </h1>
                        <p>+52 612 9201 5028, +52 512 1152 0801, +51 96 7222 4090, +1 53 2266 1189</p>
                    </div>
                </div>
                <div class="knalxh">
                    <i class="fa-solid fa-phone-plus"></i>
                    <i class="fa-regular fa-ellipsis-vertical"></i>
                </div>
            </header>
            <alexchat>
                <div class="tglalxc">
                    <p><hari id="hari">8</hari> <bulan id="bulan">Mei</bulan> <tahun id="tahun">2023</tahun></p>
                </div>
                <div class="etealxc">
                    <p><i class="fa-solid fa-lock"></i> Mensajes y llamadas encriptados de extremo a extremo. Nadie fuera de este chat, incluido WhatsApp, puede leerlo o escucharlo. Toca para obtener más información.</p>
                </div>
                <div class="tglalxc gbgalxc" style="">
                    <p>+52 38 6241 8751 unirse usando este enlace de invitación de grupo</p>
                </div>
                <div class="sialxc" id="alxc1" style="">
                    <div class="calxc">
                        <nalex>+52 95 0877 1828</nalex>
                        <div class="isalxcvn">
                            <div class="kralxc">
                                <i class="fa-solid fa-play"></i>
                                <div class="stalxcvn">
                                    <div class="talxcvn">
                                        <alxbndl></alxbndl>
                                        <img src="https://img.icons8.com/fluency-systems-filled/48/undefined/audio-wave.png" alt="">
                                        <img src="https://img.icons8.com/fluency-systems-filled/48/undefined/audio-wave.png" alt="">
                                        <img src="https://img.icons8.com/fluency-systems-filled/48/undefined/audio-wave.png" alt="">
                                        <img src="https://img.icons8.com/material/48/undefined/audio-wave--v1.png" alt="">
                                        <img src="https://img.icons8.com/fluency-systems-filled/48/undefined/audio-wave.png" alt="">
                                    </div>
                                    <div class="jmalxcvn">
                                        <span>0.08</span>
                                        <span>23:35</span>
                                    </div>
                                </div>
                            </div>
                            <div class="knalxc">
                                <img src="https://i.ibb.co/ssNMFTh/Screenshot-483.png" alt="">
                                <i class="fa-solid fa-microphone"></i>
                            </div>
                        </div>
                    </div>
                    <div class="calxc" id="alxc2" style="">
                        <nalex style="margin-bottom: 5px; color: #9c27b0;">+62 828-9143-8875</nalex>
                        <div class="isalxcvn">
                            <div class="valxc">
                                <img src="https://k.top4top.io/p_2717ls3bl0.jpg" alt="">
                                <div class="balxcv">
                                    <div class="dlalxcv">
                                        <i class="fa-solid fa-down"></i>
                                        <span> 4 MB</span>
                                    </div>
                                    <p>23:40</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calxc" id="alxc3" style="">
                        <nalex style="margin-bottom: 5px; color: #ff9800;">+52 873 9016 9204</nalex>
                        <shalxr><i class="fa-solid fa-share"></i> <i>Continuado</i></shalxr>
                        <div class="isalxcvn">
                            <div class="valxc">
                                <img src="https://k.top4top.io/p_2717ls3bl0.jpg" alt="">
                                <div class="balxcv">
                                    <div class="dlalxcv">
                                        <i class="fa-solid fa-down"></i>
                                        <span>5,9 MB</span>
                                    </div>
                                    <p>23:41</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </alexchat>
            <div class="jnalxc" style="">
                <div class="bxalxjnc alxld" id="ldalx" style="display: none;">
                    <i class="fa-solid fa-spinner-third fa-spin"></i>
                </div>
                <div class="bxalxjnc" style="" id="jnalx">
                    <img src="https://h.top4top.io/p_271795zj50.jpg" alt="">
                    <div class="talxjnt">
                        <h1> PACK Y VEDIOS   </h1>
                        <p>Grupo creado por +52 7895372179 </p>
                    </div>
                    <div class="dscalxjnc">
                        <p><b>Bienvenidos votantes</b><br>
                        se esta llevando a cabo<span id="dots">...</span><span id="alxmr">an<br>
                        - Tóxico Prohibido<br>
                        - Prohibido denunciar RAS, Religión, etc<br>
                        - Solo se permite compartir videos, enlaces de videos, fotos y chatear.<br>
                        - No </span></p><a onclick="salxhw()" id="btmr">Leer más</a>
                    </div>
                    <div class="pstalxjn">
                        <p>200  Participantes ∙ Sin contacto</p>
                    </div>
                    <div class="lstalxpc">
                        <div class="ialxpc">
                            <img src="https://j.top4top.io/p_2782l5nvq1.jpg" alt="">
                            <p>~Maria</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/gT6K7YD/Screenshot-482.png" alt="">
                            <p>~Madara</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/pdydfWp/Screenshot-481.png" alt="">
                            <p>~Michell</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://c.top4top.io/p_2782lo3gj3.jpg" alt="">
                            <p>~Sara</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/n0kwJLx/Screenshot-474.png" alt="">
                            <p>~Daniela</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/61VRwgD/Screenshot-476.png" alt="">
                            <p>~Maximo</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/tMLh5DC/Screenshot-477.png" alt="">
                            <p>~Andres</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/TrgcCx9/Screenshot-478.png" alt="">
                            <p>~Maicol</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/Pw9y89b/Screenshot-479.png" alt="">
                            <p>~Daniel</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/RTp7tMt/Screenshot-480.png" alt="">
                            <p>~Fernando</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/pdydfWp/Screenshot-481.png" alt="">
                            <p>~Alex</p>
                        </div>
                        <div class="ialxpc">
                            <img src="https://i.ibb.co/gT6K7YD/Screenshot-482.png" alt="">
                            <p>~Toni</p>
                            </div>
                    </div>
                   <div class="jnalxbt">
                        <button>CANCELADO</button>
                        <button onclick="login()">ÚNETE AL GRUPO</button>
                    </div>
                </div>
            </div>
           