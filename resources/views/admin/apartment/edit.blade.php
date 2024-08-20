@extends('layouts.master')
@section('title', 'Ավելացնել կատեգորիան')

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

                <form action="{{ route('admin/categ', $categs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Region and District Selection -->
                    <div class="mb-3">
                        <label for="region">Տարածաշրջանը</label>
                        <select id="region" name="region" class="form-control">
                            <option value="">Ընտրել տարածաշրջանը</option>
                            @foreach (['Yerevan' => 'Երևան', 'Armavir' => 'Արմավիր', 'Ararat' => 'Արարատ', 'Kotayk' => 'Կոտայք', 'Shirak' => 'Շիրակ', 'Lori' => 'Լոռի', 'Gexarquniq' => 'Գեղարքունիք', 'Syuniq' => 'Սյունիք', 'Aragacotni' => 'Արագածոտն', 'Tavush' => 'Տավուշ', 'Vayoc Gzor' => 'Վայոց Ձոր'] as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3" id="district-container" style="display: none;">
                        <label for="district">Շրջան</label>
                        <select id="district" name="district" class="form-control">
                            <option value="">Ընտրել շրջանը</option>
                            <!-- District options will be populated dynamically -->
                        </select>
                    </div>

                    <!-- Form Fields -->
                    @foreach ([
                        'name101' => 'Շինության տիպ',
                        'name102' => 'Տեսակ',
                        'name103' => 'Տան մակերես',
                        'name104' => 'Հողատարածքի մակերես',
                        'name105' => 'Հարկերի քանակ',
                        'name106' => 'Սենյակների քանակ',
                        'name107' => 'Սանհանգույցի քանակ',
                        'name108' => 'Սենյակների քանակ',
                        'name109' => 'Կահույք',
                        'name110' => 'Ավտոտնակ',
                        'name111' => 'Ավտոկայանատեղի',
                        'name112' => 'Առաստաղի բարձրություն',
                        'name113' => 'Վերանորոգում',
                        'name114' => 'Հարմարություններ',
                        'name115' => 'Կոմունիկացիաներ',
                        'name116' => 'Պարսպապատում',
                        'name117' => 'Տարածաշրջան',
                        'name118' => 'Գին',
                        'name119' => 'Կոդ'
                        'name121' => 'Գործակալ'
                        'name122' => 'Գործակալի Հեռ․՝'
                    ] as $name => $label)
                        <div class="mb-3">
                            <label for="{{ $name }}">{{ $label }}</label>
                            <input type="text" name="{{ $name }}" class="form-control">
                        </div>
                    @endforeach

                    <div class="mb-3">
                        <label for="image001">Image</label>
                        <input type="file" name="image001" class="form-control">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="name119">Գործակալ</label>
                        <textarea rows="3" name="name119" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name118">Գործակալի Հեռ․՝</label>
                        <input type="text" name="name118" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description">Կոդ</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div> --}}
                    <div class="mb-3">
                        <label for="image002">Նոր նկարներ (մուլտիմեդիա)</label>
                        <input type="file" name="image002[]" class="form-control" id="image1" multiple>
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
                { value: "Ajapnyak", text: "Աջափնյակ" },
                { value: "Arabkir", text: "Արաբկիր" },
                { value: "Avan", text: "Ավան" },
                { value: "Davtashen", text: "Դավիթաշեն" },
                { value: "Kentron", text: "Կենտրոն" },
                { value: "Erebuni", text: "Էրեբունի" },
                { value: "MalatiaSebastia", text: "Մալաթիա-Սեբաստիա" },
                { value: "NorNork", text: "Նոր-Նորք" },
                { value: "NorqMarash", text: "Նորք-Մարաշ" },
                { value: "Nubarashen", text: "Նուբարաշեն" },
                { value: "Shengavit", text: "Շենգավիթ" },
                { value: "KanakerZeytun", text: "Քանաքեռ-Զեյթուն" },
                { value: "Dprotsakan", text: "Դպրոցականների" },
                { value: "GoruGetapnya", text: "Գյուղ Գետափնյա" },
                { value: "ProshyanSovkhoz", text: "Պռոշյան սովխոզ" },
                { value: "Vahagni", text: "Վահագնի թաղամաս" },
                { value: "PokrKentron", text: "Փոքր կենտրոն" },
                { value: "Jrvezh", text: "Ջրվեժ" },
                { value: "Zoraghbyur", text: "Ձորաղբյուր" }
            ],
            Armavir: [
                { value: "Armavir", text: "Արմավիր" },
                { value: "Echmiadzin", text: "Էջմիածին" }
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
                    option.text = district.text;
                    districtSelect.add(option);
                });
            } else {
                districtContainer.style.display = 'none';
            }
        });
    </script>
@endsection
