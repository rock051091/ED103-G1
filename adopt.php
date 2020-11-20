<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt</title>
    <link rel="icon" href="./image/header/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>   
    <div class="jourBackground">
        <div class="commonBG00 commonBGSet"></div>
        <div class="commonBG01 commonBGSet"></div>
        <div class="commonBG02 commonBGSet"></div>
        <div class="commonBGLeft commonBGSet"></div>
        <div class="commonBGRight commonBGSet"></div>
        <img src="./image/background/fish1.png" alt="" class="BGFish1">
        <img src="./image/background/fish1.png" alt="" class="BGFish2">
    </div>
    <!-- Log In開始 -->
    <div id="memLightBox" class="memLogin overlay">
        <form action="" class="LogInForm" id="LogInForm" method="post">
            <div class="btn_modal_close">
                <div></div>
                <div></div>
            </div>
            <h3 class="memLogTitle">LOG IN</h3>
            <input type="text" name="memId" id="memId" minlength="6" maxlength="12" pattern="[A-Za-z0-9]*"
                placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'"
                size="25" /><br>
            <input type="password" name="memPsw" id="memPsw" minlength="6" maxlength="12" pattern="[A-Za-z0-9]*"
                placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'"
                size="25" /><br>
            <h6><a href="./memberLock.html" class="memForgot memForget_modal">Forget Password?</a></h6><br>
            <input type="button" class="submitBtnLog" id="btnLogin" value="LOG IN"><br>
            <div class="memLine">
                <h5>OR</h5>
            </div>
            <p>Don't have an account?</p><br>
            <a href="./memberlogin.html"><button type="button" class="submitBtnSign" id="btnSignup">SIGN
                    UP</button></a>
        </form>
    </div>
    <!-- Log In結束 -->

    <!-- header開始 -->
    <header class="main_menu">
        <!-- header第一區塊 主導覽列 -->
        <nav class="main_nav">
            <div class="logo_box">
                <a href="homepage.html" class="logo">
                    <img src="./image/header/logo.png" alt="">
                </a>
                <a href="" class="logo_text_box">
                    <h1 class="logo_text">AQUA WONDERLAND</h1>
                </a>
            </div>
            <ul class="main_menu_ul" id="main_menu_ul">
                <li class="main_menu_li">
                    <a href="tour.html" class="li_logo">
                        <img src="./image/header/header_tour.png" alt="">
                        <img src="./image/header/header_tour_cover.png" alt="">
                    </a>
                    <a href="tour.html" class="li_text">TOUR</a>
                </li>
                <li class="main_menu_li active">
                    <a href="journal.html" class="li_logo">
                        <img src="./image/header/header_journal.png" alt="">
                        <img src="./image/header/header_journal_cover.png" alt="">
                    </a>
                    <a href="journal.html" class="li_text">JOURNAL</a>
                </li>
                <li class="main_menu_li">
                    <a href="ticket.html" class="li_logo">
                        <img src="./image/header/header_ticket.png" alt="">
                        <img src="./image/header/header_ticket_cover.png" alt="">
                    </a>
                    <a href="ticket.html" class="li_text">TICKET</a>
                </li>
                <li class="main_menu_li">
                    <a href="vote.html" class="li_logo">
                        <img src="./image/header/header_vote.png" alt="">
                        <img src="./image/header/header_vote_cover.png" alt="">
                    </a>
                    <a href="vote.html" class="li_text">VOTE</a>
                </li>
                <li class="main_menu_li">
                    <a href="blog1.php" class="li_logo">
                        <img src="./image/header/header_blog.png" alt="">
                        <img src="./image/header/header_blog_cover.png" alt="">
                    </a>
                    <a href="blog1.php" class="li_text">BLOG</a>
                </li>
            </ul>
            <div class="header_right">
                <span class="member_box btn_modal" id="btn_modal">
                    <img src="./image/header/header_member_fish.png" alt="" title="Log In" id="memberPic"
                        onerror="javascript:this.src='./image/header/header_member_fish_login.png'">
                </span>
                <a class="cart_box" href="cart.html">
                    <img src="./image/header/header_cart.png" alt="">
                    <span class="cart_amount"></span>
                </a>
                <div class="hamburger_box" id="hamburger_box">
                    <div class="hamburger">
                        <span class="hamburger_line is-active" id="hamburger_line"></span>
                        <span class="hamburger_cross" id="hamburger_cross">&times;</span>
                    </div>
                </div>
            </div>
        </nav>

        <!-- header第二區塊 會員登入後點頭像出線的小窗 -->
        <div class="memProfileBlock" id="memProfileBlock" style="display: none;">
            <p class="memNameInProfileBlock"><span>Hello!&nbsp;&nbsp;</span><span id="memNameInProfileBlock"></span>
            </p>
            <a href="./memberProfile.html" class="memProfileLink">Member Profile</a>
            <p id="SignOutLink">Sign Out</p>
        </div>

    </header>

    <!-- header結束 -->

    <div class="adoptSection">
        <div class="adoptTitleBox commonTitleBox">
            <h3 class="commonTitle">ADOPT</h3>
            <h4 class="adoptSubTitle commonSubTitle">
                Let's adopt marine life, you can also choose to make a customized thanks card!
            </h4>
        </div>
        <div class="adoptInnerSection">
            <h3 class="adoptStepTitle">Start Your Adoption</h3>
            <div class="adoptAquaBlock">
                <div class="adoptAqua">
                    <img src="./img/aqua/<?=$_GET["aquaPic"]?>" alt="">
                </div>
                <p style="display: inline-block;">Aqua No.<?=$_GET["aquaNo"]?></p>
            </div>
            <!-- right adopt process -->
            <!-- step 1 -->
            <div class="adoptProcessContainer">
                <div class="adoptProcessContents">
                    <div class="adoptTab tab1 -on">
                        <div class="adoptProcessList">
                            <div class="adoptTabList">
                                <div class="active">
                                    <p>1</p>
                                </div>
                                <span></span>
                                <div class="">
                                    <p>2</p>
                                </div>
                                <span></span>
                                <div class="">
                                    <p>3</p>
                                </div>
                                <span></span>
                                <div class="">
                                    <p>4</p>
                                </div>
                            </div>
                        </div>

                        <div class="adoptConfirmAmount">
                            <h4>ADOPT AMOUNT</h4>
                            <div class="adoptAmountSection">
                                <!-- <label class="adoptFrontTitle" for="adoptAmount">$</label> -->
                                <input type="text" name="amountType" id="adoptAmount" placeholder="Please enter the amount">
                            </div>
                        </div>
                        <div class="adoptProcessStep">
                            <a href="#" class="adoptProcessBtn adoptProcessBtnFirst">ADOPT NOW</a>
                        </div>

                    </div>
                    <!-- </div> -->



                    <!-- step 2 -->
                    <!-- <div class="adoptProcessContents"> -->
                    <div class="adoptTab tab2">
                        <div class="adoptProcessList">
                            <div class="adoptTabList">
                                <div class="done">
                                    <p>1</p>
                                </div>
                                <span></span>
                                <div class="active">
                                    <p>2</p>
                                </div>
                                <span></span>
                                <div class="">
                                    <p>3</p>
                                </div>
                                <span></span>
                                <div class="">
                                    <p>4</p>
                                </div>
                            </div>
                        </div>
                        <h4>YOUR INFORMATION</h4>
                        <div class="adoptInfo">
                            <label class="adoptFrontTitle">NAME</label>
                            <p><?=$_SESSION["memName"]?></p>
                            <!-- <input type="text" name="firstname" placeholder="first name" id="adoptFirstname"> -->
                            <!-- <input type="text" name="lastname" placeholder="last name" id="adoptLastname"> -->
                        </div>

                        <div class="adoptInfo">
                            <label class="adoptFrontTitle" for="adoptEmail">EMAIL</label>
                            <p><?=$_SESSION["memEmail"]?></p>
                            <!-- <input type="text" name="email" id="adoptEmail"> -->
                            <!-- <h6>*Your receipt will be emailed here</h6> -->
                        </div>

                        <div class="adoptInfo">
                            <label class="adoptFrontTitle" for="adoptPhone">PHONE</label>
                            <p><?=$_SESSION["memPhone"]?></p>
                            <!-- <input type="text" name="phone" id="adoptPhone"> -->
                        </div>

                        <!-- <div class="adoptInfo">
                            <label class="adoptFrontTitle" for="adoptMessage">LEAVE MESSAGE TO AQUA</label>
                            <textarea name="adoptmessage" id="adoptMessage" cols="44" rows="6"></textarea>
                        </div> -->

                        <div class="adoptProcessStep">
                            <a href="#" class="adoptBackBtn">BACK</a>
                            <a href="#" class="adoptProcessBtn">NEXT</a>
                        </div>
                    </div>

                    <!-- step 3 -->
                    <!-- <div class="adoptProcessContents"> -->
                    <div class="adoptTab tab3">
                        <div class="adoptProcessList">
                            <div class="adoptTabList">
                                <div class="done">
                                    <p>1</p>
                                </div>
                                <span></span>
                                <div class="done">
                                    <p>2</p>
                                </div>
                                <span></span>
                                <div class="active">
                                    <p>3</p>
                                </div>
                                <span></span>
                                <div class="">
                                    <p>4</p>
                                </div>
                            </div>
                        </div>
                        <h4>PAYMENT DETIAL</h4>
                        <div class="adoptPaymentSection">

                            <!-- <div class="adoptPayment">
                                    <p>Payment amount</p>
                                    <p>$500</p>
                                </div> -->

                            <!-- <div class="adoptPayment">
                                <label class="adoptFrontTitle" for="adoptCardname">Name on Card</label>
                                <input type="text" name="cardname" id="adoptCardname">
                            </div> -->

                            <!-- <div class="adoptPayment">
                                <label class="adoptFrontTitle" for="adoptCardnumber">Card Number</label>
                                <input type="text" name="cardnumber" id="adoptCardnumber">
                            </div>

                            <div class="adoptPayment">
                                <label class="adoptFrontTitle" for="adoptCarddate">Effective Date</label>
                                <input type="text" name="carddate" placeholder="MM/YY" id="adoptCarddate">
                            </div>

                            <div class="adoptPayment">
                                <label class="adoptFrontTitle" for="adoptCardcode">Security Code</label>
                                <input type="text" name="cardcode" id="adoptCardcode">
                            </div> -->

                            <div class="adoptPayment">
                                <label>CARD NUMBER</label><input type="text">&nbsp;-&nbsp;<input type="text">&nbsp;-&nbsp;<input type="text">&nbsp;-&nbsp;<input type="text">
                            </div>
                            <div class="adoptPayment">
                                <label >EFFECTIVE DATE</label><input type="text">&nbsp;/&nbsp;<input type="text">
                            </div>
                            <div class="adoptPayment">
                                <label>SECURITY CODE</label><input type="text">
                            </div>
                        </div>


                        <div class="adoptProcessStep">
                            <a href="#" class="adoptBackBtn">BACK</a>
                            <a href="#" class="adoptProcessBtn">NEXT</a>
                        </div>

                    </div>


                    <!-- step 4 -->
                    <!-- <div class="adoptProcessContents"> -->
                    <div class="adoptConfirmSection adoptTab tab4">
                        <div class="adoptProcessList">
                            <div class="adoptTabList">
                                <div class="done">
                                    <p>1</p>
                                </div>
                                <span></span>
                                <div class="done">
                                    <p>2</p>
                                </div>
                                <span></span>
                                <div class="done">
                                    <p>3</p>
                                </div>
                                <span></span>
                                <div class="active">
                                    <p>4</p>
                                </div>
                            </div>
                        </div>
                        <h4>ADOPTION CONFIRM</h4>
                        <div class="adoptConfirmCheck">
                            <div class="adoptConfirm">
                                <h5>ADOPTED AQUA</h5>
                                <!-- <input type="text"> -->
                                <p id="adoptAquaNameResult"></p>
                            </div>

                            <div class="adoptConfirm">
                                <h5>ADOPT AMOUNT</h5>
                                <!-- <input type="text"> -->
                                <label class="adoptFrontTitle" for="adoptAmount">$</label>
                                <p id="adoptAmountResult"></p>
                            </div>
                        </div>


                        <div class="adoptConfirmCheck">
                            <div class="adoptConfirm">
                                <h5>YOUR INFORMATION</h5>
                                <div class="adoptInfo">
                                    <!-- <input type="text" placeholder="first name"> -->
                                    <label class="adoptFrontTitle">First name:</label>
                                    <p id="adoptFirstnameResult"></p>
                                    <!-- <input type="text" placeholder="last name"> -->
                                    <label class="adoptFrontTitle">Last name:</label>
                                    <p id="adoptLastnameResult"></p>
                                </div>

                                <div class="adoptInfo">
                                    <label class="adoptFrontTitle">Email:</label>
                                    <!-- <input type="text"> -->
                                    <p id="adoptEmailResult"></p>
                                    <h6 class="adoptReceipt">*Your receipt will be emailed here</h6>
                                </div>

                                <div class="adoptInfo">
                                    <label class="adoptFrontTitle">Phone Number:</label>
                                    <!-- <input type="text"> -->
                                    <p id="adoptPhoneResult"></p>
                                </div>
                            </div>

                            <div class="adoptConfirm">
                                <h5>PAYMENT DETIAL</h5>

                                <div class="adoptPayment">
                                    <label class="adoptFrontTitle">Name on Card:</label>
                                    <!-- <input type="text"> -->
                                    <p id="adoptCardnameResult"></p>
                                </div>

                                <div class="adoptPayment">
                                    <label class="adoptFrontTitle">Card Number:</label>
                                    <!-- <input type="text"> -->
                                    <p id="adoptCardnumberResult"></p>
                                </div>

                                <div class="adoptPayment">
                                    <label class="adoptFrontTitle">Effective Date:</label>
                                    <!-- <input type="text" placeholder="MM/YY"> -->
                                    <p id="adoptCarddateResult"></p>
                                </div>

                                <div class="adoptPayment">
                                    <label class="adoptFrontTitle">Security Code:</label>
                                    <!-- <input type="number"> -->
                                    <p id="adoptCardcodeResult"></p>
                                </div>
                            </div>
                        </div>

                        <div class="adoptProcessStep adoptProcessStepFinal">
                            <a href="#" class="adoptBackBtn">BACK</a>
                            <button class="adoptProcessBtn" type="button">ADOPT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        Copyright 2020 ED103-G1 Aqua Wonderland All Rights Reserved
    </footer>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./js/memLogin.js"></script>
    <script src="./js/layout/header.js"></script>
    <script src="./js/journal/adopt.js"></script>

    <script>
        //前往上一步下一步切換的jquery
        id = 1; //全域變數
        firstname = '';
        $(function(){
            firstname = $('#firstname').val();
            // let firstname = ''; //區域變數
            $(".adoptProcessContents .adoptTab").css({
                'display': 'none'
            });
            $(".adoptProcessContents .adoptTab:nth-child(1)").css({
                'display': 'block'
            });
            $('.adoptProcessBtn').on('click', function () {
                $(`.adoptProcessContents .adoptTab:nth-child(${id})`).css({
                    'display': 'none'
                });
                $(`.adoptTabList li a`).removeClass('-on');
                id += 1;
                $(`.adoptProcessContents .adoptTab:nth-child(${id})`).css({
                    'display': 'block'
                });
                $(`.adoptTabList li:nth-child(${id}) a`).addClass('-on');

            });

            $('.adoptBackBtn').on('click', function () {
                $(`.adoptProcessContents .adoptTab:nth-child(${id})`).css({
                    'display': 'none'
                });
                $(`.adoptTabList li a`).removeClass('-on');
                id -= 1;
                $(`.adoptProcessContents .adoptTab:nth-child(${id})`).css({
                    'display': 'block'
                });
                $(`.adoptTabList li:nth-child(${id}) a`).addClass('-on');
            });


            $("a.adoptTab").on("click", function (e) {
                e.preventDefault();
                /* 將頁籤列表移除所有 -on，再將指定的加上 -on */
                $(this).closest("ul").find("a.adoptTab").removeClass("-on");
                $(this).addClass("-on");

                /* 找到對應的頁籤內容，加上 -on 來顯示 */
                $("div.adoptTab").removeClass("-on");
                $("div.adoptTab." + $(this).attr("data-target")).addClass("-on");
            });
        });
    </script>
    <!-- adopt succeed -->
    <script>
        // document.getElementById("demo1").addEventListener("click", function () {
        //     swal("Adopt Succeed!", "Thank you for your adoption!", "success");
        // });
    </script>

</body>

</html>
