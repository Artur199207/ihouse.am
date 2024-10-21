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

                <form action="{{ url('admin/update-newcategory/' . $newcategory->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="mb-3">
                        <label for="name">Շրջան</label>
                        <input type="text" name="name" value="{{$newcategory->name}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="name23">Փողոց</label>
                        <input type="text" name="name23" value="{{$newcategory->name23}}"  class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="name1">Շինության տիպ</label>
                        <input type="text" name="name1" value="{{$newcategory->name1}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name2">Տեսակ</label>
                        <input type="text" name="name2" value="{{$newcategory->name2}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name3">Տան մակերես</label>
                        <input type="text" name="name3" value="{{$newcategory->name3}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name4">Հողատարածքի մակերես</label>
                        <input type="text" name="name4" value="{{$newcategory->name4}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name5">Հարկերի քանակ</label>
                        <input type="text" name="name5" value="{{$newcategory->name5}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name6">Սենյակների քանակ </label>
                        <input type="text" name="name6" value="{{$newcategory->name6}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name7">Սանհանգույցի քանակ </label>
                        <input type="text" name="name7" value="{{$newcategory->name7}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name8">Սենյակների քանակ</label>
                        <input type="text" name="name8" value="{{$newcategory->name8}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name9">Կահույք </label>
                        <input type="text" name="name9" value="{{$newcategory->name9}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name10">Ավտոտնակ </label>
                        <input type="text" name="name10" value="{{$newcategory->name10}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name11">Ավտոկայանատեղի </label>
                        <input type="text" name="name11" value="{{$newcategory->name11}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name12">Առաստաղի բարձրություն </label>
                        <input type="text" name="name12" value="{{$newcategory->name12}}" class="form-control">
                    </div>







                    <div class="mb-3">
                        <label for="name13">Վերանորոգում</label>
                        <input type="text" name="name13" value="{{$newcategory->name13}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name14">Հարմարություններ</label>
                        <input type="text" name="name14" value="{{$newcategory->name14}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name15">Կոմունիկացիաներ</label>
                        <input type="text" name="name15" value="{{$newcategory->name15}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name16">Պարսպապատում</label>
                        <input type="text" name="name16" value="{{$newcategory->name16}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name17">Տարածաշրջան Goolge map
                        </label>
                        <input type="text" name="name17" value="{{$newcategory->name17}}" class="form-control">
                    </div>


                    <div class="mb-3">
                        <label for="name18">Գին</label>
                        <input type="text" name="name18" value="{{$newcategory->name18}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="name19">կոդ</label>
                        <input type="text" name="name19" value="{{$newcategory->name19}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">

                    </div>

                    <div class="mb-3">
                        <label for="name20">Գործակալ</label>
                        <input type="text" name="name20" value="{{$newcategory->name20}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name21">Գործակալի Հեռ․՝</label>
                        <input type="text" name="name21" value="{{$newcategory->name21}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name22">Գործակալի Հեռ․՝ Social-Hub</label>
                        <input type="text" name="name22" value="{{$newcategory->name22}}" class="form-control">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="name23">Գործակալի Հեռ․՝ Social-Hub</label>
                        <input type="text" name="name23" class="form-control">
                    </div> --}}
                    <div class="mb-3">
                        <label for="image1">Նոր նկարներ (մուլտիմեդիա)</label>
                        <input type="file" name="image1[]" class="form-control" id="image1"
                            aria-describedby="emailHelp" multiple>
                        @error('image1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div id="image-preview" class="mt-3"></div>

                    <div class="row">
                        <div class="mb-3">
                            <label for="name25">Նկարագիր</label>
                            <textarea rows="3" name="name25"   class="form-control">{{$newcategory->name25}}"</textarea>
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
            Yerevan: [{
                    value: "Աջափնյակ",
                    text: "Աջափնյակ"
                },
                {
                    value: "Արաբկիր",
                    text: "Արաբկիր"
                },
                {
                    value: "Ավան",
                    text: "Ավան"
                },
                {
                    value: "Դավիթաշեն",
                    text: "Դավիթաշեն"
                },
                {
                    value: "Կենտրոն",
                    text: "Կենտրոն"
                },
                {
                    value: "Էրեբունի",
                    text: "Էրեբունի"
                },
                {
                    value: "Մալաթիա-Սեբաստիա",
                    text: "Մալաթիա-Սեբաստիա"
                },
                {
                    value: "Նոր-Նորք",
                    text: "Նոր-Նորք"
                },
                {
                    value: "Նորք-Մարաշ",
                    text: "Նորք-Մարաշ"
                },
                {
                    value: "Նուբարաշեն",
                    text: "Նուբարաշեն"
                },
                {
                    value: "Շենգավիթ",
                    text: "Շենգավիթ"
                },
                {
                    value: "Քանաքեռ-Զեյթուն",
                    text: "Քանաքեռ-Զեյթուն"
                },

            ],
            Armavir: [{
                    value: "Արմավիր",
                    text: "Արմավիր"
                },
                {
                    value: "Էջմիածին",
                    text: "Էջմիածին"
                },

            ],
            Ararat: [{
                    value: "Ազատաշեն",
                    text: "Ազատաշեն"
                },
                {
                    value: "Այնթապ",
                    text: "Այնթապ"
                },
                {
                    value: "Գեղանիստ",
                    text: "Գեղանիստ"
                },
                {
                    value: "Գետափնյա",
                    text: "Գետափնյա"
                },
                {
                    value: "Ղուկասավան",
                    text: "Ղուկասավան"
                },
                {
                    value: "Նոր Խարբերդ",
                    text: "Նոր Խարբերդ"
                },
                {
                    value: "Նորաբաց",
                    text: "Նորաբաց"
                },

            ],
            Kotayk: [{
                    value: "Առինջ",
                    text: "Առինջ"
                },
                {
                    value: "Ծաղկաձոր",
                    text: "Ծաղկաձոր"
                },
                {
                    value: "Ձորաղբյուր",
                    text: "Ձորաղբյուր"
                },

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
