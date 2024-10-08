<footer>



    <div class="footer">

        <div class="container">



            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <h4>Տեղեկություն</h4>
                    <ul class="row">
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('aboute') }}">Մեր մասին</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('agents') }}">Գործակալներ</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('evaluation') }}">Գնահատում</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('email') }}">Կապ</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-3">
                    <h4>Տեղեկագիր</h4>
                    <p>Ստացեք ծանուցումներ մեր շուկայի վերջին անշարժ գույքի մասին:</p>
                    <form class="form-inline" role="form">
                        <input type="text" placeholder="Enter Your email address" class="form-control">
                        <button class="btn btn-success" type="button">Notify Me!</button>
                    </form>
                </div>

                <div class="col-lg-3 col-sm-3">
                    <h4>Հետևեք մեզ</h4>
                    <a href="https://www.facebook.com/IhouseAgency?mibextid=LQQJ4d" target="_blank"><img src="{{ asset('assets/images/facebook.png') }}" alt="facebook"></a>
                    <a href="#"><img src="{{ asset('assets/image/tiktok_3116491.png') }}" alt="twitter" style="width: 40px"></a>
                    <a href="#"><img src="{{ asset('assets/images/linkedin.png') }}" alt="linkedin"></a>
                    <a href="https://www.instagram.com/ihouserealty?igsh=MXZtMTl2MmF6cTJnNw==" target="_blank"><img src="{{ asset('assets/images/instagram.png') }}" alt="instagram"></a>
                </div>

                <div class="col-lg-3 col-sm-3">
                    <h4>Կապ մեզ հետ</h4>
                    <span class="glyphicon glyphicon-map-marker"></span> Հասցե՝ Մանթաշյան 1 <br>
                    <span class="glyphicon glyphicon-envelope"></span> Էլ․ հասցե <br>
                    <span class="glyphicon glyphicon-earphone"></span>Հեռ․ 033 61 40 10<br>
                    093 61 40 11
                    </p>
                </div>
            </div>
            <p class="copyright">Հեղինակային Բոլոր իրավունքները պաշտպանված են: Արթուր Պարոնյան հեռ՝ 033-26-84-26 </p>


        </div>
    </div>




    <!-- Modal -->
    <div id="loginpop" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-6 login">
                        <h4>Login</h4>
                        <form class="" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2"
                                    placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Sign in</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h4>New User Sign Up</h4>
                        <p>Join today and get updated with all the properties deal happening around.</p>
                        <button type="submit" class="btn btn-info" onclick="window.location.href='register.php'">Join
                            Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer>
