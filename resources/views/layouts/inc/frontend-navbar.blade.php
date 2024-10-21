
<style>
    a{
        text-decoration: none !important;
    }
    .offcanvas {
    position: fixed;
    left: -250px; /* Hide off-canvas menu */
    transition: left 0.3s ease;
    width: 250px;
    height: 100%;
    background-color: #333;
    color: white;
    /* other styling */
}

.offcanvas.open {
    left: 0; /* Show off-canvas menu */
}
.main__menu--link::before{
    background: unset !important;
}
.main__menu--items:hover .main__menu--link{
    color: unset !important;
    background: silver;
}
.main__menu--link{
    padding: 15px 45px 15px 45px;
    background-color: silver;
}
.main__menu--link {
    padding: 15px 20px 15px 20px;
    background-color: #8b8989;
    color:white;
}
</style>
<header class="header__section">
    <div class="header__sticky">
        <div class="container-fluid">
            <div class="main__header d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                        <span class="visually-hidden">Offcanvas Menu Open</span>
                    </a>
                </div>
                <div class="main__logo">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="{{ url('/') }}">
                        <img class="main__logo--img" src="{{asset('assets/image/logoihouse.svg')}}" alt="logo-img" style="width:150px;">
                    </a></h1>
                </div>
                <div class="main__menu d-none d-lg-block">
                    <nav class="main__menu--navigation">
                        <ul class="main__menu--wrapper d-flex">
                            <li class="main__menu--items">
                                <a class="main__menu--link" href="{{ url('/') }}">
                                    Գլխավոր էջ 
                                </a>
                            </li>
                            <li class="main__menu--items">
                                <a class="main__menu--link" href="{{ route('agents') }}"> Գործակալներ </a>
                            </li>
                            <li class="main__menu--items">
                                <a class="main__menu--link" href="./admin/my-properties.html"> Գործընկերներ </a>  
                            </li>
                          
                            <li class="main__menu--items">
                                <a class="main__menu--link" href="./blog.html">Նորություններ 
                                </a>
                            </li>
                            <li class="main__menu--items">
                                <a class="main__menu--link" href="#"> Բաժիններ </a>  
                                <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                    <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                </svg>
                                <ul class="sub__menu">
                                    <li class="sub__menu--items"><a href="{{route('aboute')}}" class="sub__menu--link">Մեր Մասին</a></li>
                                    <li class="sub__menu--items"><a href="{{route('email')}}" class="sub__menu--link">Հետադարց կապ</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="offcanvas-menu" class="offcanvas__header">
    <div class="offcanvas__inner">
        <div class="offcanvas__logo">
            <a class="offcanvas__logo_link" href="./index.html">
                <img src="{{asset('assets/image/logoihouse.svg')}}" alt="Logo-img" width="158" height="36">
            </a>
            <button class="offcanvas__close--btn" data-offcanvas>close</button>
        </div>
        
        <nav class="offcanvas__menu">
            <ul class="offcanvas__menu_ul">
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="{{ url('/') }}">Գլխավոր էջ </a>
                </li>
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="{{ route('agents') }}">Գործակալներ</a>
                </li>
                
                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="./admin/my-properties.html">Գործընկերներ</a></li>
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="./admin/dashboard.html">Նորություններ</a>
                </li>
                <li class="offcanvas__menu_li">
                    <a class="offcanvas__menu_item" href="#">Բաժիններ</a>
                    <ul class="offcanvas__sub_menu">
                        <li class="offcanvas__sub_menu_li"><a href="{{route('aboute')}}" class="offcanvas__sub_menu_item">Մեր Մասին</a></li>
                        <li class="offcanvas__sub_menu_li"><a href="./contact.html" class="offcanvas__sub_menu_item">Հետադարց կապ</a></li>

                    </ul>
                </li>
            </ul>
        </nav>
       
        <div class="side__menu--footer mobile__menu--footer">
            <div class="side__menu--info">
                <div class="side__menu--info__list">
                    <h3 class="side__menu--info__title">Կապ մեզ հետ</h3>
                    <p><a class="side__menu--info__text" href="tel:+37433614010">(+374) 33 61-40-10</a></p>
                    <p><a class="side__menu--info__text" href="tel:+37493614011">(+374) 33 61-40-11</a></p>
                </div>
                <div class="side__menu--info__list">
                    <h3 class="side__menu--info__title"> Էլ․ հասցե </h3>
                    <p><a class="side__menu--info__text" href="mailto:example@example.com">info@ihouse.am</a></p>
                </div>
            </div>
            <div class="side__menu--share d-flex ">
                <h3 class="side__menu--share__title">Հետևեք մեզ :</h3>
                <ul class=" side__menu--share__wrapper d-flex ">
                    <li class="side__menu--share__list">
                        <a class="side__menu--share__icon" target="_blank" href="https://www.facebook.com/IhouseAgency?mibextid=LQQJ4d">
                            <svg width="10" height="17" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                            </svg>
                            <span class="visually-hidden">Facebook</span>
                        </a>
                    </li>
                    
                    <li class="side__menu--share__list">
                        <a class="side__menu--share__icon" target="_blank" href="https://www.instagram.com/ihouserealty?igsh=MXZtMTl2MmF6cTJnNw==">
                            <svg width="16" height="16" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                            </svg>  
                            <span class="visually-hidden">Instagram</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select the menu button, close button, and off-canvas menu
        var menuButton = document.querySelector('[data-offcanvas]');
        var closeButton = document.querySelector('.offcanvas__close--btn');
        var offcanvasMenu = document.getElementById('offcanvas-menu');

        // Function to toggle the menu open/close state
        function toggleMenu() {
            if (offcanvasMenu.classList.contains('open')) {
                offcanvasMenu.classList.remove('open');
            } else {
                offcanvasMenu.classList.add('open');
            }
        }

        // Add click event listener to the menu button
        menuButton.addEventListener('click', toggleMenu);

        // Add click event listener to the close button
        closeButton.addEventListener('click', function() {
            offcanvasMenu.classList.remove('open');
        });
    });
</script>

