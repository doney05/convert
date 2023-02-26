<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Convert MP3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">
</head>

<body>
  <section class="header" style="height: 100vh;">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap");

      body .header {
        background: #0f9ebb;
      }

      @media screen and (max-width: 768px) {
       #form {
        text-align: center;
        width: 100%;
       }
       #form input {
        width: 50%;
       }
      }

      body .header .content {
        padding-top: 90px;
      }

      body .header .content .button-header {
        margin-top: 50px;
      }

      @media screen and (min-width: 768px) {
        body .header .img-brand {
          padding-top: 100px;
        }
      }

      @media screen and (min-width: 768px) {
        body .header .img-brand .mr-60 {
          margin-right: 60px;
        }
      }
    </style>

    <div class="container text-center">
      <div class="row content">
        <div class="col-12" style="margin-top: 10%; color: white;">
          <h1 style="font-family: cursive;">Convert MP3 From <span style="color: red;"><i class="fa-brands fa-youtube"></i>Youtube</span></h1>
           <p style="margin-bottom: -35px; font-family: fangsong;">Copy the youtube video link and paste it below</p>
          <div class="button-header">
            <div class="container">
              <div class="row justify-content-center">
                <form action="{{ route('convert') }}" method="post" id="form">
                @csrf
                  <div class="search-box">
                    <input type="text" name="search-data" placeholder="Paste here.." />
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
                  <i class="bi bi-search"></i>
                </form>
              </div>
              <div class="bottom-container">
                @if ($message = Session::get('gagal'))
                <div class="container">
                    <div class="alert alert-warning alert-block" style="padding: 1%">
                        <i class="fa-solid fa-brake-warning"></i>
                        <strong>{{ $message }}</strong>
                    </div>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
</body>

</html>
