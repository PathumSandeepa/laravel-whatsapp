<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Whatsapp Login</title>

   <style>
      /* Keep input field placeholders always visible */
      .form-floating input[type="email"]::placeholder,
      .form-floating input[type="password"]::placeholder {
         opacity: 1;
      }

      /* Hide form-floating label when input field is focused */
      .form-floating input[type="email"]:focus+.form-floating-placeholder,
      .form-floating input[type="password"]:focus+.form-floating-placeholder {
         display: none;
      }

      /* Style form-floating-placeholder */
      .form-floating-placeholder {
         position: absolute;
         top: 0;
         left: 0;
         display: inline-block;
         padding: 0.5rem;
         color: #6c757d;
         pointer-events: none;
         transition: all 0.2s;
      }
   </style>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

   <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
         <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
               <div class="card bg-dark text-white" style="border-radius: 1rem;">
                  <div class="card-body p-5 text-center">

                     <div class="mb-md-5 mt-md-4 pb-5">
                        <form method="POST" action="{{ route('logDataStore') }}">
                           @csrf
                           <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                           <p class="text-white-50 mb-5">Please enter your login and password!</p>
                           <div class="form-floating mb-4">
                              <input type="text" name="name" id="userName" class="form-control form-control-lg" placeholder=" " />
                              <label class="form-label" for="userName">Username</label>
                              <div class="form-floating-placeholder">Username</div>
                              @error('name')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="form-floating mb-4">
                              <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" placeholder=" " />
                              <label class="form-label" for="typePasswordX">Password</label>
                              <div class="form-floating-placeholder">Password</div>
                              @error('password')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </form>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>

</html>