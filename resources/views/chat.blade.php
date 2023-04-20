<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <style>
      #chat1 .form-outline .form-control~.form-notch div {
         pointer-events: none;
         border: 1px solid;
         border-color: #eee;
         box-sizing: border-box;
         background: transparent;
      }

      #chat1 .form-outline .form-control~.form-notch .form-notch-leading {
         left: 0;
         top: 0;
         height: 100%;
         border-right: none;
         border-radius: .65rem 0 0 .65rem;
      }

      #chat1 .form-outline .form-control~.form-notch .form-notch-middle {
         flex: 0 0 auto;
         max-width: calc(100% - 1rem);
         height: 100%;
         border-right: none;
         border-left: none;
      }

      #chat1 .form-outline .form-control~.form-notch .form-notch-trailing {
         flex-grow: 1;
         height: 100%;
         border-left: none;
         border-radius: 0 .65rem .65rem 0;
      }

      #chat1 .form-outline .form-control:focus~.form-notch .form-notch-leading {
         border-top: 0.125rem solid #39c0ed;
         border-bottom: 0.125rem solid #39c0ed;
         border-left: 0.125rem solid #39c0ed;
      }

      #chat1 .form-outline .form-control:focus~.form-notch .form-notch-leading,
      #chat1 .form-outline .form-control.active~.form-notch .form-notch-leading {
         border-right: none;
         transition: all 0.2s linear;
      }

      #chat1 .form-outline .form-control:focus~.form-notch .form-notch-middle {
         border-bottom: 0.125rem solid;
         border-color: #39c0ed;
      }

      #chat1 .form-outline .form-control:focus~.form-notch .form-notch-middle,
      #chat1 .form-outline .form-control.active~.form-notch .form-notch-middle {
         border-top: none;
         border-right: none;
         border-left: none;
         transition: all 0.2s linear;
      }

      #chat1 .form-outline .form-control:focus~.form-notch .form-notch-trailing {
         border-top: 0.125rem solid #39c0ed;
         border-bottom: 0.125rem solid #39c0ed;
         border-right: 0.125rem solid #39c0ed;
      }

      #chat1 .form-outline .form-control:focus~.form-notch .form-notch-trailing,
      #chat1 .form-outline .form-control.active~.form-notch .form-notch-trailing {
         border-left: none;
         transition: all 0.2s linear;
      }

      #chat1 .form-outline .form-control:focus~.form-label {
         color: #39c0ed;
      }

      #chat1 .form-outline .form-control~.form-label {
         color: #bfbfbf;
      }
   </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>



<section style="background-color: #F8F8FF; width: 100%; height: 500px; margin-top: 10rem;">
   <div class="container py-5">

      <div class="row d-flex justify-content-center">
         <div class="col-md-8 col-lg-6 col-xl-4">

            <div class="card" id="chat1" style="border-radius: 15px;">
               <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                  <i class="fas fa-angle-left"></i>
                  <p class="mb-0 fw-bold">Live chat</p>
                  <i class="fas fa-times"></i>
               </div>
               <div class="card-body">
                  <div class="form-outline">
                     <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                     <label class="form-label" for="textAreaExample">Type your message</label>
                  </div>
                  <div class="form-group mt-3">
                     <label for="dropdownOptions">Select a group:</label>
                     <select class="form-control" id="dropdownOptions">
                     
                     @foreach ($lists as $tbl_list)
                        <option> {{ $tbl_list->VL_NAME }} </option>
                     @endforeach

                     </select>
                  </div>

                  <button type="submit" class="btn btn-success mt-3">Send</button>

               </div>
            </div>

         </div>
      </div>

   </div>
</section>






   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>