<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/portal.css">
  <link rel="stylesheet" href="/assets/css/header-nav.css">
  <title>Admissions Portal</title>
</head>

<body>
  <header>
    <nav>
      <a href="/"><img class="logo" src="/assets/images/brand (2).png" alt="ECX Logo"></a>
      <ul>
        <li><a class="active" href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
      </ul>
      <ul>
        <li><a href="/login">Login</a></li>
        <li><a class="sign-up-btn" href="/register">Sign Up</a></li>
      </ul>
      <div id="openButton" class="mobile-nav-hamburger display-none">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
      </div>
      <div id="myModal" class="mobile-nav">
        <div>
          <span style="cursor: pointer;" id="closeBtn" class="close">&times;</span>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Sign Up</a></li>
          </ul>
          <a style="text-align: center;" href="/"><img src="/assets/images/brand (2).png"></a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="welcome">
      <div class="text">
        <h1> Welcome to ECX Admissions.</h1>
        <p class="begin"> Your Journey begins here.</p>
        <p class="easy"> We have provided an easy to follow admission <br> process but
          if you need any guidance please <br> do not hesitate to contact us.</p>

        <a href='/create-profile'><button class="btn1">Get Started</button></a>
        <a href="/contact"> <button class="btn2">Contact Us</button></a>

      </div>
      <div class="stu-img">
        <img src="/assets/images/Capture.PNG" alt="">
      </div>
    </div>

    <div class="content">
      <div class="news">
        <h2>News Update</h2>
        <ul>
          <li class="news-item">Admissions Ongoing
Registrants for ECX mid-year training session <br> for Front-end Developers, Backend Developers, UI/UX Designers, and Content <br> Writers can now check their admission status on the portal, www.ecx.org/admissions.
</li>
        </ul>
        <div class="view" id="viewmore">
          <ul>
            <li class="news-item"> On admission, new intakes are advised to create a student’s profile to complete their registration. For more information, you can visit our website www.ecx.org or call 080XXXXXXXX, 080XXXXXXX.
            </li>
            <li class="news-item">The Chairman’s Partial Scholarship:
              Applicants who got admitted on merit can now apply for the chairman’s partial scholarship. It is to encourage the dedication of students and help alleviate the lack of motivation amongst them.
              </li>
            <li class="news-item"> ECX announces new president
              Congratulations to Mr Xyz Abc on his announcement as the new ECX for the 2020/2021 session.
              
              
            </li>
           
          </ul>
        </div>
        <button id="vbutton" class="btn-5">
          View More
        </button>
      </div>

      <div class="log">
        <form name="login" id="enter" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
          <h2>User Login</h2>
          <label class="log-label" for="username">Username</label>
          <br>
          <input name="email" placeholder="  Email" type="text">
          <br>
          <label for="password">Password</label>
          <br>
          <input name="password" placeholder="   Password" type="password" id="">
          <br>

          <input id="sub" type="submit" value="Login">
          <br>
          <p class="doublespan"><a class="doublespan" href="/forgotpassword">forgot password?</a> <span>/<a class="doublespan"
                href="mailto:ecx@unilag.edu">Can't access account?</a></span></p>

        </form>
      </div>
    </div>
  </main>
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Admin Login</a>
                    @endauth
                </div>
            @endif

  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/portal.js"></script>
</body>

</html>
