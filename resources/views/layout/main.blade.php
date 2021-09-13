<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bintang.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">    

  <title>@yield('judul')</title>
</head>
<body>
  @yield('isi')  

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('/js/index.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/owl.carousel.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('/js/jquery-ui.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/tanggal.js') }}"></script>
  <script>
    var app = <?php echo json_encode($tanggalTerpesan); ?>;
  </script>
  <script src="https://kit.fontawesome.com/1df79d4840.js" crossorigin="anonymous"></script>

</body>
</html>