<?php
$errMsg = "";
try {
	require_once("./connect_aqua.php");
	$sql = "select * from ticket_info";
	$tickets = $pdo->query($sql);
	$tickets->bindColumn("ticketType", $ticketType);
	$tickets->bindColumn("ticketPrice", $ticketPrice);
} catch (PDOException $e) {
	$errMsg .= "錯誤原因 : " . $e->getMessage() . "<br>";
	$errMsg .= "錯誤行號 : " . $e->getLine() . "<br>";
	echo $errMsg;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/layout/headerCart.js"></script>
    <script src="./js/ticket/ticket.js"></script>
    <title>Aqua Wonderland</title>
</head>
<body>
  <!-- 下面是背景的div，先不要動到 -->
  <div class="ticketBG">
    <div class="commonBG00 commonBGSet"></div>
    <div class="commonBG01 commonBGSet"></div>
    <div class="commonBG02 commonBGSet"></div>
    <div class="commonBGLeft commonBGSet"></div>
    <div class="commonBGRight commonBGSet"></div>
    <img src="./image/background/fish1.png" alt="" class="BGFish1">
    <img src="./image/background/fish1.png" alt="" class="BGFish2">
  </div> 
  <!-- 上面是背景的div，先不要動到 -->
  <header class="main_menu">
    <nav class="main_nav">
      <div class="logo_box">
        <a href="homepage.html" class="logo">
          <img src="./image/header/logo.png" alt="">
        </a>
        <a href="homepage.html" class="logo_text_box">
          <h1 class="logo_text">AQUA WONDERLAND</h1>
        </a>
      </div>
      <ul class="main_menu_ul">
        <li class="main_menu_li">
          <a href="tour.html" class="li_logo">
            <img src="./image/header/header_tour.png" alt="">
            <img src="./image/header/header_tour_cover.png" alt="">
          </a>
          <a href="tour.html" class="li_text">TOUR</a>
        </li>
        <li class="main_menu_li">
          <a href="journal.html" class="li_logo">
            <img src="./image/header/header_journal.png" alt="">
            <img src="./image/header/header_journal_cover.png" alt="">
          </a>
          <a href="journal.html" class="li_text">JOURNAL</a>
        </li>
        <li class="main_menu_li active">
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
          <a href="blog.html" class="li_logo">
            <img src="./image/header/header_blog.png" alt="">
            <img src="./image/header/header_blog_cover.png" alt="">
          </a>
          <a href="blog.html" class="li_text">BLOG</a>
        </li>
      </ul>
      <div class="header_right">
        <a href="#" class="member_box btn_modal">
          <img src="./image/header/header_member_fish.png" alt="">
        </a>
        <a class="cart_box" href="cart.html">
          <img src="./image/header/header_cart.png" alt="">
          <span class="cart_amount">1</span>
        </a>
        <div class="hamburger_box">
          <div class="hamburger">
            <span class="hamburger_line is-active"></span>
            <span class="hamburger_cross">&times;</span>
          </div>
        </div>
      </div>
    </nav>
  </header>


  <div id="ticketApp">
    <div class="commonTitleBox ticketTitleBox">
      <h2 class="commonTitle">TICKET</h2>
      <h4 class="commonSubTitle">Go buy tickets and go booking for staying overnight in Aqua Wonderland.</h4>
    </div>
<!-- 你的code打這下面 -->

    <!-- Sign In -->
    <div class="memLogin overlay">
      <form class="LogInForm" id="LogInForm" method="post">
        <div class="btn_modal_close">
          <div></div>
          <div></div>
        </div>
        <h3 class="memLogTitle">LOG IN</h3>
        <input type="text" name="memId" id="memId" minlength="8" maxlength="12" pattern="[A-Za-z0-9]*" placeholder="Username" size="35"/><br>
        <input type="password" name="memPsw" id="memPsw" minlength="8" maxlength="12" pattern="[A-Za-z0-9]*" placeholder="Password" size="35"/><br>
        <h6><a href="./memberLock.html" class="memForgot memForget_modal">Forget Password?</a></h6><br>
        <button type="button" class="submitBtnLog" id="btnLogin">LOG IN</button><br>
        <div class="memLine">
          <h5>OR</h5>
        </div>
        <p>Don't have an account?</p><br>
        <a href="./memberlogin.html"><button type="button" class="submitBtnSign" id="btnSignup">SIGN UP</button></a>
      </form>
    </div>

    <section class="ticketTicketBox">
      <h3 class="ticketMainTitle">Buy Ticket</h3>
      <div class="ticketTicketImgBlock">
        <img src="./image/ticket/ticketJPG3.jpg" alt="" class="ticketTicketImg1 ticketTicketImg">
        <img src="./image/ticket/ticketJPG1.jpg" alt="" class="ticketTicketImg3 ticketTicketImg">
      </div>
      <div class="ticketTicketContent">
        <p class="ticketTicketText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex tempore in, ea ipsum expedita et dicta architecto nostrum nulla magni fugiat sit consequatur quae voluptates mollitia voluptate, placeat fugit praesentium!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex tempore in, ea ipsum expedita et dicta architecto nostrum nulla magni fugiat sit consequatur quae voluptates mollitia voluptate, placeat fugit praesentium!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex tempore in, ea ipsum expedita et dicta architecto nostrum nulla magni fugiat sit consequatur quae voluptates mollitia voluptate, placeat fugit praesentium!</p>
        <div class="ticketButtonBlock">
          <div class="ticketButtonBox ticketProduct">
            <input type="hidden" value="Adult(18-64)|30|0">
            <p class="ticketTicketName">ticketName</p>
            <p class="ticketTicketPrice"><span>$</span><span>ticketPrice</span></p>
            <div class="ticketButtons">
              <button class="ticketButton"><span>－</span></button>
              <p class="ticketTicketAmount" >0</p>
              <button class="ticketButton"><span>＋</span></button>
            </div>
          </div>
          <div class="ticketButtonBox ticketProduct">
            <input type="hidden" value="Kid(4-11)|15|0">
            <p class="ticketTicketName">ticketName</p>
            <p class="ticketTicketPrice"><span>$</span><span>ticketPrice</span></p>
            <div class="ticketButtons">
              <button class="ticketButton"><span>－</span></button>
              <p class="ticketTicketAmount" >0</p>
              <button class="ticketButton"><span>＋</span></button>
            </div>
          </div>
          <div class="ticketButtonBox ticketProduct">
            <input type="hidden" value="Elder(65-)|20|0">
            <p class="ticketTicketName">ticketName</p>
            <p class="ticketTicketPrice"><span>$</span><span>ticketPrice</span></p>
            <div class="ticketButtons">
              <button class="ticketButton"><span>－</span></button>
              <p class="ticketTicketAmount" >0</p>
              <button class="ticketButton"><span>＋</span></button>
            </div>
          </div>
        </div>
        <p class="ticketTicketTotal"><span>Total&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;</span><span>0</span></p>
        <div class="ticketTicketButtonBlock">
          <!-- <button id="ticketAddToCart" @click="ticketNotice">ADD TO CART</button> -->
          <button id="ticketAddToCart">ADD TO CART</button>
        </div>
      </div>
    </section>

    <section class="ticketOverNightBox">
      <h3 class="ticketMainTitle">Overnight Ticket</h3>
      <div class="ticketONIntroBlock">
        <div class="ticketAreaSelect">
          <a href="#" class="ticketToTour">
            <span>Area A</span>
            <span>Dolphinarium</span>
          </a>
          <div class="ticketONIntroBox">
            <img src="./image/ticket/ticketA1.jpg"/>
            <img src="./image/ticket/ticketA2.jpg"/>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, saepe ratione incidunt necessitatibus, quaerat consectetur molestiae quae cum assumenda!</p>
          </div>
        </div>
        <div class="ticketAreaSelect">
          <a href="#" class="ticketToTour">
            <span>Area B</span>
            <span>Whale House</span>
          </a>
          <div class="ticketONIntroBox">
            <img src="./image/ticket/ticketB1.jpg"/>
            <img src="./image/ticket/ticketB2.jpg"/>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, saepe ratione incidunt necessitatibus, quaerat consectetur molestiae quae cum assumenda!</p>
          </div>
        </div>
        <div class="ticketAreaSelect">
          <a href="#" class="ticketToTour">
            <span>Area C</span>
            <span>Seal House</span>
          </a>
          <div class="ticketONIntroBox">
            <img src="./image/ticket/ticketC1.jpg"/>
            <img src="./image/ticket/ticketC2.jpg"/>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, saepe ratione incidunt necessitatibus, quaerat consectetur molestiae quae cum assumenda!</p>
          </div>
        </div>
        <div class="ticketAreaSelect">
          <a href="#" class="ticketToTour">
            <span>Area D</span>
            <span>Sea Turtle House</span>
          </a>
          <div class="ticketONIntroBox">
            <img src="./image/ticket/ticketD1.jpg"/>
            <img src="./image/ticket/ticketD2.jpg"/>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, saepe ratione incidunt necessitatibus, quaerat consectetur molestiae quae cum assumenda!</p>
          </div>
        </div>
        <div class="ticketONBigImg">
          <img src="./image/ticket/ticketJPG2.jpg"/>
        </div>
      </div>
      <form class="ticketBookingBlock" action="./overnightBooking.html">
        <h4>Select Date</h4>
        <div class="ticketCalendarBlock">       
        </div>
        <div class="ticketBooking">
          <div class="ticketAreaRemainBox">
            <p class="ticketAreaRemain"><span>Remaining Vacancies：</span>&nbsp;&nbsp;&nbsp;<span class="ticketRemainNumber">2</span></p>
            <div class="ticketButtonBox">
              <input type="hidden" value="Area A|80|0">
              <p class="ticketTicketName">Area A</p>
              <p class="ticketTicketPrice"><span>$</span><span>80</span></p>
              <div class="ticketButtons">
                <button class="ticketButton"><span>－</span></button>
                <p class="ticketTicketAmount" >0</p>
                <button class="ticketButton"><span>＋</span></button>
              </div>
            </div>
          </div>
          <div class="ticketAreaRemainBox">
            <p class="ticketAreaRemain"><span>Remaining Vacancies：</span>&nbsp;&nbsp;&nbsp;<span>0</span></p>
            <div class="ticketButtonBox">
              <input type="hidden" value="Area B|70|0">
              <p class="ticketTicketName">Area B</p>
              <p class="ticketTicketPrice"><span>$</span><span>70</span></p>
              <div class="ticketButtons">
                <button class="ticketButton"><span>－</span></button>
                <p class="ticketTicketAmount" >0</p>
                <button class="ticketButton"><span>＋</span></button>
              </div>
            </div>
          </div>
          <div class="ticketAreaRemainBox">
            <p class="ticketAreaRemain"><span>Remaining Vacancies：</span>&nbsp;&nbsp;&nbsp;<span>20</span></p>
            <div class="ticketButtonBox">
              <input type="hidden" value="Area C|100|0">
              <p class="ticketTicketName">Area C</p>
              <p class="ticketTicketPrice"><span>$</span><span>100</span></p>
              <div class="ticketButtons">
                <button class="ticketButton"><span>－</span></button>
                <p class="ticketTicketAmount" >0</p>
                <button class="ticketButton"><span>＋</span></button>
              </div>
            </div>
          </div>
          <div class="ticketAreaRemainBox">
            <p class="ticketAreaRemain"><span>Remaining Vacancies：</span>&nbsp;&nbsp;&nbsp;<span>3</span></p>
            <div class="ticketButtonBox">
              <input type="hidden" value="Area D|90|0">
              <p class="ticketTicketName">Area D</p>
              <p class="ticketTicketPrice"><span>$</span><span>90</span></p>
              <div class="ticketButtons">
                <button class="ticketButton"><span>－</span></button>
                <p class="ticketTicketAmount" >0</p>
                <button class="ticketButton"><span>＋</span></button>
              </div>
            </div>
          </div>

          <p class="ticketONTotal"><span>Total&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;</span><span>0</span></p>
          <div class="ticketONButtonBlock">
            <input type="submit" value="Go Booking" id="ticketBookingButton">         
          </div>

        </div>
      </form>
    </section>
<!-- 你的code打這上面 -->

  </div>











  <footer>
    Copyright 2020 ED103-G1 Aqua Wonderland All Rights Reserved
  </footer>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    // jQuery
    //漢堡
    $("div.hamburger_box").on("click", function(){
      $("span.hamburger_line").toggleClass("is-active");
      $("span.hamburger_cross").toggleClass("is-active");
      $("ul.main_menu_ul").toggleClass("is-active");
    });
    // 選擇區域區底圖消失出現
    $('.ticketAreaSelect').hover(function(){
      $('.ticketONBigImg').css("opacity","0");
    },function(){
      $('.ticketONBigImg').css("opacity","1");
    });

    //手機板避免連結沒hover效果禁止跳轉功能
    $('.ticketToTour').on('click', function(e){
      e.preventDefault();
    })

    //月曆
    $('.ticketCalendarBlock').datepicker({
      startDate: " new date()",
      todayHighlight: true,
    });

    
    
    //防止加減按鈕提交表單
    $('.ticketButton').on('click', function(){
      return false;
    })


  // Login彈窗
  $(function(){
    // 開啟 Modal 彈跳視窗
    $("a.btn_modal").on("click", function(){
      $("div.overlay").addClass("-on");
    });
    // 關閉 Modal
    $("div.btn_modal_close").on("click", function(){
      $("div.overlay").addClass("-opacity-zero");
      // 設定隔一秒後，移除相關 class
      setTimeout(function(){
        $("div.overlay").removeClass("-on -opacity-zero");
      }, 1000);
    });
  });











  </script>
</body>
</html>