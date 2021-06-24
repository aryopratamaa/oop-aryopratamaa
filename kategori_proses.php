<?php 

include_once "app/Kategori.php";

$kategori = new Kategori();

if ($_GET['delete-id']) {
	$kategori->delete($_GET['delete-id']);
}

if ($_POST['btn_tambah']) {
	$kategori->input();
}

if ($_POST['btn_edit']) {
	$kategori->update();
}

?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
       <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FFFCFA">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .empty-3-1{
            padding: 5rem 2rem;
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
            padding: 0.5rem 5rem;
            border-radius: 0.75rem;
            background-color: #15a362;
            transition: 0.3s;
        }
        .empty-3-1 .btn-view:hover{
            background-color: #11814f;
            transition: 0.3s;
        }

		.success-animation { margin:auto auto 20px auto;}

		.checkmark {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			display: block;
			stroke-width: 2;
			stroke: #4bb71b;
			stroke-miterlimit: 10;
			box-shadow: inset 0px 0px 0px #4bb71b;
			animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
			position:relative;
			top: auto;
			right: 5px;
		margin: 0 auto;
		}
		.checkmark__circle {
			stroke-dasharray: 166;
			stroke-dashoffset: 166;
			stroke-width: 2;
			stroke-miterlimit: 10;
			stroke: #4bb71b;
			fill: #fff;
			animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
		
		}

		.checkmark__check {
			transform-origin: 50% 50%;
			stroke-dasharray: 48;
			stroke-dashoffset: 48;
			animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
		}

		@keyframes stroke {
			100% {
				stroke-dashoffset: 0;
			}
		}

		@keyframes scale {
			0%, 100% {
				transform: none;
			}

			50% {
				transform: scale3d(1.1, 1.1, 1);
			}
		}

		@keyframes fill {
			100% {
				box-shadow: inset 0px 0px 0px 30px #4bb71b;
			}
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
        <div class="mx-auto d-flex align-items-center justify-content-center flex-column success-animation">
			<div class="success-animation">
				<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
			</div>                       
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