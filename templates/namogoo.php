<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="style/images/favicon.ico" type="image/x-icon"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <link type="text/css" rel="stylesheet" href="style/proxy.css">
    <link type="text/css" rel="stylesheet" href="style/fonts.css">
    <link type="text/css" rel="stylesheet" href="style/resolutions.css">


</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2 col-sm-3">
                        <img src="style/images/namogoo_logo.png" onclick="logoClick()" class="logo_img" />
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class=" panel infectedUserAlert" id="infectedUserBrowsingAlert">
                            You Are Now Browsing As a User With Client-side Injected Malware
                        </div>

                    </div>
                    <div class="col-md-5 col-sm-12">

                        <form action="index.php" method="post" class="form-inline" style="float:right;margin-top: 10px;">
                            <input name="url" type="text" style="width:300px;" class="form-control upper_input" autocomplete="off" placeholder="http://" />
                            <input type="submit" value="Go" class="btn btn-default browsBtn" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div id="iframeDiv" class="row">
    <div class="col-md-12">
        <!--http://proxy.nmgcdn.com/browse.php?u=http%3A%2F%2Fwww.gilt.com%2F&b=4-->
        <iframe id="proxyIframe" src="" frameborder="0" scrolling="yes" height="100%" width="100%"></iframe>
    </div>
</div>

<div class="page-err" id="main_page">

    <div class="err-container text-center">
        <p class="main_title">Ever Wondered How Users </br>With Client-side Injected Malware </br>Experience Your
            Site?</p>

        <div class="err">
            <div class="err-inner">

                <h2 style="color: white">Check Your Website Now</h2>
                <!--<span class="glyphicon glyphicon-arrow-down" style="font-size: 58px;margin-top: 4px;"></span>-->
                <!--<h1>404</h1>-->
            </div>
        </div>

        <div class="err-body">

            <div id="placeHolderPage">

                <div>
                    <!--<form >-->
                    <!--<div style="padding-top: 25px;" class="form-group" >-->
                    <!--&lt;!&ndash;<div>&ndash;&gt;-->
                    <!--&lt;!&ndash;<label >Enter Your Website And Browse It: </label>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--<div style="display: inline-block;width: 30%;">-->
                    <!--<label >Enter Your Website And Browse It: </label>-->
                    <!--<input type="url" onkeypress="searchKeyPress(event);" class="form-control" id="webUrl2" style="border-radius: 25px;" placeholder="Enter Your Website Here...">-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<button onclick="checkURL('webUrl2')" id="webUrlBtn2" type="button" class="btn btn-default browsBtn" style="padding: 5px 79px;font-size: 15px;border-radius: 25px;">Submit</button>-->
                    <!--</form>-->
                    <form onsubmit="return false;" class="form-inline buttom_form">
                        <div class="form-group">
                            <label style="color:white;">http:// </label>
                            <input type="url" onkeypress="searchKeyPress(event);" class="form-control buttom_input"
                                   id="webUrl2" placeholder="www.mysite.com">
                        </div>
                        <button onclick="checkURL('webUrl2')" id="webUrlBtn2" type="button"
                                class="btn btn-default browsBtn">SUBMIT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- proxy js -->
<!-- <script src="proxy.js"></script> -->
<!--jquary-->
<!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
</body>
</html>
