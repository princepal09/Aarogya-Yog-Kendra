
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank YOU</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .container {
      padding: 60px 40px ;
      height: 100vh;
      display: flex;
      background: #f4fcec;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
   .content {
  display: flex;
  max-width: 800px;
  flex-direction: column;
  gap: 1px;
  padding: 20px 0px;
 background: linear-gradient(135deg, #f4fcec, #e8f5d9);
border: 1px solid #d0eac3;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

    .icon {
      display: flex;
      justify-content: center;
    }
    .icon i {
      color: #a6ce39;
      font-size: clamp(3rem, 5vw, 8rem);
    }
    .content-para {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: justify;
      justify-content: center;
    }
    .footer-social-media-links {
      display: flex;
      justify-content: center;
      gap: 10px;
    }
    .animated-icon {
      animation: popIn 1s ease forwards;
    }
    @keyframes popIn {
      0% {
        transform: scale(0);
        opacity: 0;
      }
      60% {
        transform: scale(1.2);
        opacity: 1;
      }
      100% {
        transform: scale(1);
      }
    }
    .content-para {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 16px;
  padding: 20px;
  font-family: 'Segoe UI', sans-serif;
  color: #333;
  animation: fadeIn 1s ease-in-out;
}

.content-para p {
  margin: 0;
  font-size: 27px;
  line-height: 1.6;
  max-width: 600px;
}

.first-para {
  font-size: 20px;
  color: #4B8B3B;
  animation: slideIn 0.6s ease-out;
}

.highlighted-name {
  color: #A6CE39;
  font-weight: 700;
}

.second-para {
  color: #555;
  animation: fadeIn 1s ease 0.3s forwards;
  opacity: 0;
}

.third-para {
  color: #555;
  animation: fadeIn 1s ease 0.6s forwards;
  opacity: 0;
}

/* Animations */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.footer-section{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 30px;
}

    .footer-social-media-links i {
      font-size: 20px;
      padding: 12px;
      color: #ffffff;
      background-color: #a6ce39;
      border-radius: 50%;
      transition: all 0.4s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      cursor: pointer;
    }
    .footer-social-media-links .fa-instagram:hover {
      background: linear-gradient(
        45deg,
        #f09433,
        #e6683c,
        #dc2743,
        #cc2366,
        #bc1888
      );
      box-shadow: 0 4px 18px rgba(220, 39, 67, 0.6);
      transform: scale(1.2);
    }
    .footer-social-media-links .fa-facebook:hover {
      background-color: #1877f2;
      box-shadow: 0 4px 18px rgba(24, 119, 242, 0.4);
      transform: scale(1.2);
    }
    .footer-social-media-links .fa-youtube:hover {
      background-color: #ff0000;
      box-shadow: 0 4px 18px rgba(255, 0, 0, 0.5);
      transform: scale(1.2);
    }
    .home-link {
  font-size: 16px;
  text-decoration: none;
  color: #A6CE39;
  font-weight: 600;
  display: flex;
  align-items: center;
   font-weight: bold;
  font-size: 20px;
  color: #4B8B3B;
  transition: color 0.3s ease;
}

.home-link:hover {
  color: #4B8B3B;
  text-decoration: underline;
}

  </style>
  <body>
    <div class="container">
      <div class="content">
        <div class="icon">
          <i class="fa-solid fa-circle-check animated-icon"></i>
        </div>
        <div class="content-para">
          <p class="first-para">
            Thank you,
            <span class="highlighted-name"><?php echo $name; ?></span>, for
            contacting us!
          </p>
          <p class="second-para">
            We truly appreciate your visit and will get back to you soon.
          </p>
          <p class="third-para">Have a wonderful day!</p>
        </div>

        <div class="footer-section">

        <div class="footer-social-media-links">
          <a href="#" target="_blank"> <i class="fa-brands fa-youtube"></i></a>
          <a
            href="https://www.instagram.com/aarogyayogkendra?igsh=Y2R0dmJubTA3MHk="
            target="_blank"
          >
            <i class="fa-brands fa-instagram"></i
          ></a>
          <a
            href="https://www.facebook.com/share/1FgKq39KPJ/?mibextid=wwXIfr"
            target="_blank"
            ><i class="fa-brands fa-facebook"></i
          ></a>
        </div>
        <a class="home-link" href="index.html">Go to home page</a>


        </div>
      </div>
    </div>
  </body>
</html>
