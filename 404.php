<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PAGE NOT FOUND</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Source+Sans+Pro:wght@800;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        *{
    transition: all 0.6s;
        }

        html {
            height: 100%;
        }

        body{
            font-family: 'Lato', sans-serif;
            color: #888;
            margin: 0;
        }

        #main{
            display: table;
            width: 100%;
            height: 100vh;
            text-align: center;
        }

        .fof{
            display: table-cell;
            vertical-align: middle;
        }

        .fof h1{
            font-size: 50px;
            display: inline-block;
            padding-right: 12px;
            animation: type .5s alternate infinite;
        }
        .go-back-btn {
          background-color:hsl(222, 50%, 11%);
          border: none;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 10px;
          cursor: pointer;
          border-radius: 10px;

        }
        
        .go-back-btn:hover {
          background-color: rgb(0, 0, 0);
        }

        @keyframes type{
            from{box-shadow: inset -3px 0px 0px #888;}
            to{box-shadow: inset -3px 0px 0px transparent;}
        }
        </style>
</head>

<body>
   

    <!-- 404 Start -->
   <div class="container">
    <div id="main">
    	<div class="fof">
        		<h1 class="fw-bold">Error 404</h1>
                <h2 class="fw-bold">Page Not Found</h1>
                <p >We’re sorry, the page you have looked for does not exist in our website! Maybe go back to fix it.</p>
                <a class="go-back-btn fw-bold" onclick="goBack()">Go Back</a>
    	</div>
</div>
                    
                    
 
    <!-- 404 End -->
</div>
    
    
<script>
    function goBack() {
      window.history.back();
    }
    </script>
</body>

</html>
