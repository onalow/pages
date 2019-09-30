<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Block Login</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset ("login/css/bootstrap.min.css")}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset ("login/css/mdb.min.css")}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset ("login/css/style.css")}}" rel="stylesheet">
</head>

<style>

  .form-elegant .font-small {
    font-size: 0.8rem; }

    .form-elegant .z-depth-1a {
      -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
      box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

      .form-elegant .z-depth-1-half,
      .form-elegant .btn:hover {
        -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
        box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }

        .form-elegant .modal-header {
          border-bottom: none; }

          .modal-dialog .form-elegant .btn .fab {
            color: #2196f3!important; }

            .form-elegant .modal-body, .form-elegant .modal-footer {
              font-weight: 400; }
            </style>
            <body>

              <!-- Start your project here-->
              <div style="height: 100vh">

                <div class="container">
                  {{-- <h2>Small Modal</h2> --}}
                  <!-- Button to Open the Modal -->
                 {{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Open modal
                  </button> --}}
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-sm modal-dialog-centered" role="document" >
                    <!--Content-->
                    <div class="modal-content form-elegant" style="border-radius: 10px;">
                      <!--Header-->
                      <div class="modal-header text-center" style="margin: 0 !important; padding: 0 !important;">
                        <h5 class="modal-title w-100 dark-grey-text my-3" style="margin-bottom: 0 !important;" id="myModalLabel">Send Email</h5>
                       {{--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> --}}
                      </div>
                      <!--Body-->
                      <div class="modal-body mx-4" style="margin-right: 0 !important; margin-left: 0 !important;">
                        <!--Body-->
                        <form method="POST" action="{{ route('sendmail') }}">
                          @csrf
                          <div class="md-form mb-5" style="margin-bottom: 5px !important;">
                            <input type="email" name="email" id="Form-email1" placeholder="Email Address" class="form-control validate" style="margin-bottom: 15px;">
                            <label data-error="wrong" data-success="right" for="Form-email1"></label>
                          </div>
                          
                          <div class="text-center mb-1">
                            <button type="submit" class="btn btn-blue btn-block btn-rounded z-depth-1a" style="border-radius: 6px; padding-left: 0; margin-left: 0;">Send Email</button>
                          </div>
                        </form>

                      </div>
                      
                    </div>
                    <!--/.Content-->
                  </div>
                </div>
                <!-- Modal -->

              </div>
              <!-- Start your project here-->

              <!-- SCRIPTS -->
              <!-- JQuery -->
              <script type="text/javascript" src="{{ asset ("js/jquery-3.4.1.min.js")}}"></script>
              <!-- Bootstrap tooltips -->
              <script type="text/javascript" src="{{ asset ("js/popper.min.js")}}"></script>
              <!-- Bootstrap core JavaScript -->
              <script type="text/javascript" src="{{ asset ("js/bootstrap.min.js")}}"></script>
              <!-- MDB core JavaScript -->
              <script type="text/javascript" src="{{ asset ("js/mdb.min.js")}}"></script>

              <script type="text/javascript">
                $(window).on('load',function(){
                  $('#myModal').modal('show');
                });
              </script>
            </body>

            </html>