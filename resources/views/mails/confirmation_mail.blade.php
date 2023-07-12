<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Downstream Sustainability Day 2023</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="assets/css/login.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
  .header-img {
    background-size: cover;
    width: 100%;
    

  }

  .lower-section {
    /*background-color: #00a19c;*/
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
    color: black;

  }

  .text-inner p {
    line-height: 1.2;

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

  /*.style-under {*/
  /*  text-decoration: underline;*/
  /*}*/

</style>
</head>

<body>
  <div style="text-align:center;">
    <img class="header-img img-fluid" style="vertical-align:middle;" src="{{ asset('assets/images/header-img-sd.png')}}" alt="">
  </div>
  <div class="lower-section" style="text-align:center">
    <div class="text-inner text-center pb-5 pt-5">
      <div>
        <br><p class="mt-0 pt-5 " style="margin-top:0px;padding-top:10px; padding-top:20px;">Dear {{ $name }},</p>
        <!--<p class="mt-2 ">Thank you for registering for<br><br>-->

          <span class="fonw-700"><span style="font-weight:400;">See you at</span> <br> DOWNSTREAM SUSTAINABILITY DAY<br>
            2023!</span>

          <!--<span style="text-decoration:underline;">Event Details:</span><br>
          <span class="fonw-700">12 June, 1:30 PM - 13 June, 5:00 PM <br> Physical: Zenith Kuantan <br> Virtual: <a href="https://downstreamsustainability.com/" style="color:white; text-decoration:none;">www.downstreamsustainability.com</a></span>-->
        </p>
        <!--<br>
        <a href="https://forms.office.com/pages/responsepage.aspx?id=QYkuO0h5MUGXirLfxylQkUCyc-0a5AFJvqA3a6O_IjBUNFRHVDhLMkxZWVlMMDI2RjY0OVJTNjExWi4u" style="display:inline-block; padding:8px 15px; background:white; color: #00a19c; font-weight: 700; text-align:center; text-decoration:none; border-radius:10px; margin-top:20px;"> Click here to finalise your registration </a>-->
        <br><br>
        Check out our full event agenda and speakers’ information at:<br><a href="https://downstreamsustainability.com/" style="display:inline-block; padding:8px 15px; background:white; color: #00a19c; font-weight: 700; text-align:center; text-decoration:none; border-radius:10px; margin-top:20px;"> www.downstreamsustainability.com </a>
      </div>
      <br>
      <div class="line text-center"></div>
      <div class="pt-5 mb-5">
        <p class="fonw-700">Please present the following QR code <br> during the event day at the registration desk:<br>(near Silk Ballroom Entrance, Level 3):</p>
           <img onclick=" download('{{ $qr_link }}');" style="border-radius:10px;" class="qrscan" src="{{ $qr_link }}">
      </div>
      <div class="line text-center" style="margin-top:20px;"></div>
      <div>
          <p style="max-width:600px; margin:auto; margin-top:20px;">
             <div class="mt-5 mb-3 fonw-300 gamil" style="padding-bottom:20px;">
        <p>Outlook may prevent automatic download of images. <br>If you are unable to load the QR code you may also opt to manually register at the registration counter upon your arrival.<br>
          
        </p>
      </div>
                 <br><br>
                  Thank You
          </p>
      </div>
      <div class="line text-center" style="margin-top:20px;"></div>
      <div class="mt-5 mb-3 fonw-300 gamil" style="padding-bottom:20px;">
        <p>For any enquiry or technical assistance, please email us at:<br>
          <a class="style-under" href="mailto:admin@downstreamsustainability.com" style="color: black; text-decoration:none;">admin@downstreamsustainability.com</a>
        </p>
      </div>
    </div>
  </div>

</body>

</html>