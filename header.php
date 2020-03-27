<?php include "includes/db.php"; ?>


<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-inner">
        <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop" /></a>
        <!-- <form class="form-inline navbar-search" method="post" action="products.html" > -->
        <form class="form-inline navbar-search" method="Get" action="result.php" enctype="multipart/form-data">
            <input id="srchFld" name="user_query" class="srchTxt" type="text"  style="    padding: 15px 0;"/>
            <!-- <input id="srchFld" class="srchTxt" type="text" /> -->



            <select class="srchTxt">
                <?php $get_cat = "select * from categories";

                $run = mysqli_query($con, $get_cat);

                while($row_cat = mysqli_fetch_array($run)){

                    $cat_id = $row_cat['cat_id'];
                    $cat_title = $row_cat['cat_title'];

                  echo  "<option>$cat_title</option>";
                };


                ?>
                
            </select>
            <button type="submit" value="search" id="submitButton" class="btn btn-primary">Go</button>
        </form>
        <ul id="topMenu" class="nav pull-right">
            <li class=""><a href="special_offer.html">Specials Offer</a></li>
            <li class=""><a href="normal.html">Delivery</a></li>
            <li class=""><a href="contact.html">Contact</a></li>
            <li class="">
                <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
                <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3>Login Block</h3>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal loginFrm">
                            <div class="control-group">
                                <input type="text" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="control-group">
                                <input type="password" id="inputPassword" placeholder="Password">
                            </div>
                            <div class="control-group">
                                <label class="checkbox">
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </form>
                        <button type="submit" class="btn btn-success">Sign in</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->