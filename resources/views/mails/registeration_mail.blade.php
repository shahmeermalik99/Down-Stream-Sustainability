<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Down Stream</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  .header-img {
    background-size: cover;
    width: 100%;

  }

  .lower-section {
    background-color: #00a19c;
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
    color: white;

  }

  .text-inner p {
    line-height: 28.75px;

  }

  .line {
    background-color: white;
    height: 2px;
    /* width: 100%; */
    margin-left: 30%;
    margin-right: 30%;
    align-content: center;
    font-weight: 300;
  }

  .padding-top {
    padding-top: 3%;
  }

  .fonw-300 {
    font-weight: 300;
  }

  .fonw-700 {
    font-weight: 700;
  }

  .gamil {
    font-size: 18px;
  }

  .style-under {
    text-decoration: underline;
  }

  @media (max-width: 992px) {
    .lower-section {
      background-color: #00a19c;
      font-size: 14px;
      font-family: Arial, Helvetica, sans-serif;
      color: white;
      text-align: center;
    }
    .gamil {
    font-size: 8px;
}
}

</style>



<body>
  <div class="">
    <img class="header-img" src="{{ asset('assets/images/header-img.png') }}" alt="">
  </div>
  <div class="lower-section">
    <div class="g-lo-sec">
    <div class="text-inner text-center pb-5 pt-5">
      <div>
        <p class="mt-2 ">Dear {{ $name }},</p>
        <p class="mt-2 ">Thank you for registering for<br><br>

          <span class="fonw-700"> DOWNSTREAM SUSTAINABILITY DAY<br>
            2023</span><br><br>

          Event Details:<br><br>
          <span class="fonw-700">12 - 13 June 2023 | Zenith Kuantan</span>
        </p>
      </div>
      <br>
      <div class="line text-center"></div>
      <div class="pt-5 mb-5">
        <p>If you wish to book a room at Zenith Hotel,<br> please follow the link below:<br>
          <span class="style-under">www.link.com</span>
        </p>

      </div>
      <div class="line text-center  "></div>
      <div class="mt-5 mb-3 fonw-300 gamil">
        <p>For any inquiry or technical assistance, please email us at:<br>
          <span class="style-under">admin@downstreamsustainability.com</span>
        </p>
      </div>
    </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>
