@extends('layouts.app')

@section('content')
    <style>
        h3 {
            margin-top: 55px;
            text-align: center
        }

        p {
            text-align: center
        }

        select,
        input {
            max-width: 300px;
            width: 100%;
            min-height: 40px;
        }

        .row.rowering {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .btn_button {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 55px;
        }

        .btn-primary {
            width: unset !important;
            padding: 10px 15px
        }
        @media screen and (max-width:540px){
            
            .row.rowering{
                flex-direction: column;
            }
        }
    </style>


<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="{{ url('/') }}">Home</a> / ԳՆԱՀԱՏՈՒՄ</span>
        <h2>ԳՆԱՀԱՏՈՒՄ</h2>
    </div>
</div>

    <div class="container">
        <div class="row">
            <h3>ԳՆԱՀԱՏՈՒՄ</h3>
            <p>ԵՐԵՒԱՆԻ ԱՆՇԱՐԺ ԳՈՒՅՔԻ ԳՆԱՀԱՏՄԱՆ ԼԱՎԱԳՈՒՅՆ ՄԱՍՆԱԳԵՏՆԵՐԻ ԿՈՂՄԻՑ ՍՏԵՂԾՎԱԾ ԱՅՍ ՀԱՇՎԻՉԸ, ՀՆԱՐԱՎՈՐՈՒԹՅՈՒՆ Է ՏԱԼԻՍ
                ՈՐՈՇԵԼ ՁԵՐ ԲՆԱԿԱՐԱՆԻ ՎԱՃԱՌՔԻ ՇՈՒԿԱՅԱԿԱՆ ԳԻՆԸ</p>
        </div>
        <div class="row rowering">
            <select name="" id="">
                <option value="">Կառուցվածք</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
            </select>
            <select name="" id="">
                <option value="">Համայնք</option>
                <option value="">Արաբկիր</option>
                <option value="">Դավիթաշեն</option>
                <option value="">Կենտրոն</option>
                <option value="">Աջափնյակ</option>
                <option value="">Ավան</option>
                <option value="">Էրեբունի</option>
                <option value="">Մալաթիա-Սեբաստիա</option>
                <option value="">Նոր-Նորք</option>
                <option value="">Նորք-Մարաշ</option>
                <option value="">Նուբարաշեն</option>
                <option value="">Շենգավիթ</option>
                <option value="">Քանաքեռ-Զեյթուն</option>
                <option value="">Դպրոցականների</option>
                <option value="">Գյուղ Գետափնյա</option>
                <option value="">Պռոշյան սովխոզ</option>
                <option value="">Վահագնի թաղամաս</option>
                <option value="">Փոքր կենտրոն</option>
                <option value="">Ջրվեժ</option>
                <option value="">Ձորաղբյուր</option>
                <option value="">Էջմիածին</option>
            </select>
            <select name="" id="">
                <option value="">Վիճակ</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">4ընթ</option>
            </select>
        </div>
        <div class="row rowering">
            <select name="" id="">
                <option value=""> Շենքի հեռավորությունը գլխավոր փողոցից</option>
                <option value="">Շենքի հեռավորությունը գլխավոր փողոցից</option>
                <option value="">Փողոցին կից ( 1-ին գիծ)</option>
                <option value="">2-րդ գիծ </option>
                <option value="">3-րդ գիծ </option>
            </select>
            <select name="" id="">
                <option value=""> Արևի նկատմամբ դիրքը</option>
                <option value="">Արևկողմ է</option>
                <option value="">Արևկողմ չէ</option>
            </select>
            <select name="" id="">
                <option value=""> Հարկ</option>
                <option value="">Կիսանկուղ</option>
                <option value="">1-ին հարկ</option>
                <option value="">2-5 հարկ</option>
                <option value="">6-9 հարկ </option>
                <option value="">10 - 13 հարկ</option>
                <option value="">14 - 16 հարկ</option>
                <option value="">Դուպլեքս</option>
                <option value="">Վերջին հարկ </option>
                <option value="">Պենթ Հաուս</option>
            </select>
        </div>
        <div class="row rowering">
            <select name="" id="">
                <option value=""> Պատշգամբ</option>
                <option value="">Փակ պատշգամբ</option>
                <option value="">Բաց պատշգամբ</option>
                <option value="">Շքապատշգամբ</option>
                <option value="">Ֆրանսիական պատշգամբ</option>
                <option value="">Լոջա</option>
            </select>
            <input type="text" name="Մակերես" placeholder=" Մակերես">
        </div>
        <div class="btn_button">
            <input type="number" placeholder=" մուտքագրեք ձեր հեռ․">
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#exampleModal">Գնահատում</button>
        </div>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Գնահատման այս տեսակը սահմանելու է Ձեր բնակարանի շուկայական գնի մոտավոր արժեքը: Վաճառքի ներկայիս
                            արժեքը իմանալու համար կարող եք զանգահարել 033-61-40-10</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
