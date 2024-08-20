@extends('layouts.master')
@section('title', 'Կարգավիճակ')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h1 class="">Ավելացնել կատեգորիան</h1>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/add-categ') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="mb-3">
                    <label for="name">Շինության տիպ</label>
                    <input type="text" name="name" class="form-control" >
                </div> --}}
                    <div class="mb-3">
                        <label for="name100">Տարածաշրջանը</label>
                        <select id="region" name="name100" class="form-control">
                            <option value="">Ընտրել տարածաշրջանը</option>
                            <option value="Yerevan">Երևան</option>
                            <option value="Armavir">Արմավիր</option>
                            <option value="Ararat">Արարատ</option>
                            <option value="Kotayk">Կոտայք</option>
                            <option value="Shirak">Շիրակ</option>
                            <option value="Lori">Լոռի</option>
                            <option value="Gexarquniq">Գեղարքունիք</option>
                            <option value="Syuniq">Սյունիք</option>
                            <option value="Aragacotni">Արագածոտն</option>
                            <option value="Tavush">Տավուշ</option>
                            <option value="Vayoc Gzor">Վայոց Ձոր</option>

                            <!-- Add more regions as needed -->
                        </select>
                    </div>

                    <div class="mb-3" id="district-container" style="display: none;">
                        <label for="district">Շրջան</label>
                        <select id="district" name="name100" class="form-control">
                            <option value="">Ընտրել շրջանը</option>
                            <!-- District options will be populated dynamically -->
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="name101">Շինության տիպ</label>
                        <input type="text" name="name101" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name102">Տեսակ</label>
                        <input type="text" name="name102" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name103">Տան մակերես</label>
                        <input type="text" name="name103" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name104">Հողատարածքի մակերես</label>
                        <input type="text" name="name104" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name105">Հարկերի քանակ</label>
                        <input type="text" name="name105" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name106">Սենյակների քանակ </label>
                        <input type="text" name="name106" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name107">Սանհանգույցի քանակ </label>
                        <input type="text" name="name107" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name108">Սենյակների քանակ</label>
                        <input type="text" name="name108" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name109">Կահույք </label>
                        <input type="text" name="name109" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name110">Ավտոտնակ </label>
                        <input type="text" name="name110" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name111">Ավտոկայանատեղի </label>
                        <input type="text" name="name111" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name112">Առաստաղի բարձրություն </label>
                        <input type="text" name="name112" class="form-control">
                    </div>







                    <div class="mb-3">
                        <label for="name113">Վերանորոգում</label>
                        <input type="text" name="name113" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name114">Հարմարություններ</label>
                        <input type="text" name="name114" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name115">Կոմունիկացիաներ</label>
                        <input type="text" name="name115" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name116">Պարսպապատում</label>
                        <input type="text" name="name116" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name117">Տարածաշրջան
                        </label>
                        <input type="text" name="name117" class="form-control">
                    </div>
 

                    <div class="mb-3">
                        <label for="name118">Գին</label>
                        <input type="text" name="name118" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="name119">կոդ</label>
                        <textarea name="name119" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image001">Image</label>
                        <input type="file" name="image001" class="form-control">

                    </div>

                    <div class="mb-3">
                        <label for="name121">Գործակալ</label>
                        <textarea rows="3" name="name121" class="form-control"></textarea>
                    </div>
                     <div class="mb-3">
                        <label for="name122">Գործակալի Հեռ․՝</label>
                        <input type="text" name="name122" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description">Կենցաղային տեխնիկա</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image002">Նոր նկարներ (մուլտիմեդիա)</label>
                        <input type="file" name="image002[]" class="form-control" id="image1"
                            aria-describedby="emailHelp" multiple>
                        @error('image002')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div id="image-preview" class="mt-3"></div>

                    <div class="row">
                        <div class="mb-3">
                            <label for="name120">Նկարագիր</label>
                            <textarea rows="3" name="name120" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Պահպանել կատեգորիան</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('image1').addEventListener('change', function(event) {
            var previewContainer = document.getElementById('image-preview');
            previewContainer.innerHTML = ''; // Clear previous previews

            var files = event.target.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var imgElement = document.createElement('img');
                    imgElement.className = 'img-thumbnail mr-2 mb-2';
                    imgElement.style.maxWidth = '150px';
                    imgElement.style.maxHeight = '150px';
                    imgElement.src = e.target.result;
                    previewContainer.appendChild(imgElement);
                }

                reader.readAsDataURL(file);
            }
        });
        const districtOptions = {
        Yerevan: [
            { value: "Աջափնյակ", text: "Աջափնյակ" },
            { value: "Արաբկիր", text: "Արաբկիր" },
            { value: "Ավան", text: "Ավան" },
            { value: "Դավիթաշեն", text: "Դավիթաշեն" },
            { value: "Կենտրոն", text: "Կենտրոն" },
            { value: "Էրեբունի", text: "Էրեբունի" },
            { value: "Մալաթիա-Սեբաստիա", text: "Մալաթիա-Սեբաստիա" },
            { value: "Նոր-Նորք", text: "Նոր-Նորք" },
            { value: "Նորք-Մարաշ", text: "Նորք-Մարաշ" },
            { value: "Նուբարաշեն", text: "Նուբարաշեն" },
            { value: "Շենգավիթ", text: "Շենգավիթ" },
            { value: "Քանաքեռ-Զեյթուն", text: "Քանաքեռ-Զեյթուն" },
            { value: "Դպրոցականների", text: "Դպրոցականների" },
            { value: "Գյուղ Գետափնյա", text: "Գյուղ Գետափնյա" },
            { value: "Պռոշյան սովխոզ", text: "Պռոշյան սովխոզ" },
            { value: "Վահագնի թաղամաս", text: "Վահագնի թաղամաս" },
            { value: "Փոքր կենտրոն", text: "Փոքր կենտրոն" },
            { value: "Ջրվեժ", text: "Ջրվեժ" },
            { value: "Ձորաղբյուր", text: "Ձորաղբյուր" },
        ],
        Armavir: [
            { value: "Արմավիր", text: "Արմավիր" },
            { value: "Էջմիածին", text: "Էջմիածին" },
            
        ]
       
    };

    document.getElementById('region').addEventListener('change', function() {
        const selectedRegion = this.value;
        const districtSelect = document.getElementById('district');
        const districtContainer = document.getElementById('district-container');

        districtSelect.innerHTML = '<option value="">Ընտրել շրջանը</option>'; // Reset district options

        if (selectedRegion && districtOptions[selectedRegion]) {
            districtContainer.style.display = 'block';
            districtOptions[selectedRegion].forEach(function(district) {
                const option = document.createElement('option');
                option.value = district.value;
                option.textContent = district.text;
                districtSelect.appendChild(option);
            });
        } else {
            districtContainer.style.display = 'none';
        }
    });
    </script>
@endsection
