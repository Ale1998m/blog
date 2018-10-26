<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="it">

    <head>@include('partials/head')</head>

    <body>
         @if(isset($_SESSION['user']))
         Ciao {{$_SESSION['user']}}
         @else
             <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 bg-light border-dark border mt-5">
                        <form action="{{url('users/validate')}}" method="POST">
                            <div class="row mt-3 mb-3">
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-12">
                                    <input type="Password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-12 text-center">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
         @endif
        <!-- Footer -->
        <footer>
            @include('partials.footer')
        </footer>

        @include('partials.bottomScripts')
    </body>

</html>
