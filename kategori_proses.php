<?php 

include_once "app/Kategori.php";

$kategori = new Kategori();

if ($_GET['delete-id']) {
	$kategori->delete($_GET['delete-id']);
}

?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FFFCFA">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .empty-3-1{
            padding: 5rem 2rem;
        }
        .empty-3-1 .main-img{
            width: 83.333333%;
            margin-bottom: 2.5rem;
            object-fit: cover;
            object-position: center;
        }
        .empty-3-1 .title-text{
            font: 600 1.875rem/2.25rem Poppins, sans-serif;            
            color: #000000;
            letter-spacing: 0.025em;
            margin-bottom: 0.75rem;
        }
        .empty-3-1 .caption-text{
            margin-bottom: 3rem;
            color: #9C9C9C;
            font-size: 1rem;
            letter-spacing: 0.025em;
            line-height: 1.75rem;
        }
        .empty-3-1 .btn-view{
            font: 600 1.125rem/1.75rem Poppins, sans-serif;            
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            background-color: #FF7C57;
            transition: 0.3s;
        }
        .empty-3-1 .btn-view:hover{
            background-color: #FF9779;
            transition: 0.3s;
        }
        @media (min-width: 576px) {
            .empty-3-1{
                padding: 8rem 2rem;
            }
            .empty-3-1 .main-img{
                width: auto;
            }
        }        
    </style>

    <div class="empty-3-1" style="font-family: 'Poppins', sans-serif;">    
        <div class="mx-auto d-flex align-items-center justify-content-center flex-column">
            <img class="main-img" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-3.png" alt="">                       
            <div class="text-center w-100">
                <h1 class="title-text">
                    Successful
                </h1>
                <p class="caption-text">
				The data has been successfully updated,<br class="d-sm-block d-none"> contact admin if there are problems.
                </p>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-view d-inline-flex text-white" href="index.php?page=kategori">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
  </section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>