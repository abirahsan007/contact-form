<!doctype html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact-us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 </head>
   <body>
   <section style="padding-top:60px">
       <div class="container">
           <div class="row">
               <div class="col-md-6 offset-md-3">
                   <div class="card">
                       <div class="card-header">Contact Us</div>
                       <div class="card-body">
                           @if(Session::has('message_sent'))
                               <div class="alert alert-success" role="alert">
                                   {{Session::get('message_sent')}}
                               </div>
                           @endif
                           <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                               @csrf
                               <div class="form-group">
                                   <label>Full name:</label>
                                   <input type="text" class="form-control" name="name">
                               </div>

                               <div class="form-group">
                                   <label>E-mail Address:</label>
                                   <input type="text" class="form-control" name="email">
                               </div>

                               <div class="form-group">
                                   <label>Phone:</label>
                                   <input type="text" class="form-control" name="phone">
                               </div>

                               <div class="form-group">
                                   <label>Message:</label>
                                   <textarea name="msg" class="form-control"></textarea>
                               </div>

                               <button class="btn btn-primary float-right">SUBMIT</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
           integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
           crossorigin="anonymous"></script>
   </body>

</html>
