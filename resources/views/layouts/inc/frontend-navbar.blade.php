
<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
           
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ url('/') }}">գլխավոր</a></li>
                    <li><a href="{{ route('aboute') }}">Մեր մասին</a></li>
                    <li><a href="{{ route('agents') }}">Գործակալներ</a></li>
                    <li><a href="{{ route('evaluation') }}">Գնահատում</a></li>
                    <li><a href="{{ route('email') }}">Կապ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="header">
        <a href="{{ url('/') }}">
            <img src="{{asset('assets/image/new_logo.png')}}" alt="ihouse.am" style="width:100px;height:100px;">
        </a>
        <ul class="pull-right">
            <li><a href="buysalerent.php">Buy</a></li>
            <li><a href="buysalerent.php">Sale</a></li>
            <li><a href="buysalerent.php">Rent</a></li>
        </ul>
    </div>

</div>
