<!doctype html>
<html>

<head>
    @include('links')
    <link href="{{ URL::asset('assets/css/percentage-show.css') }}" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
            color: #b26200;
        }
    </style>
</head>

<body style="font-size: 1.2rem">
    @include('navbar')
    <div class="container w-full mt-md-10 mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row ">
                    <h1 class="col-12 my-3 h2">Trigonometry Tools and Calculators
                    </h1>
                    <h4 class="col-12" style="color: #0a4b78;  ">
                        In this section, we provide tools and calculations to help you with your trigonometry.</h4>
                    <p>This section of the site is a work in progress and more content will be added soon.</p>
                </div>
                <div class="row ">
                    <h1 class="col-12 my-3 h2">Supplementary Angles
                    </h1>
                </div>
                <div class="row mt-4">
                    @for($nume1 = 2; $nume1 <= 100; $nume1++)
                    <div class="col-md-4"><a href="trigonometry/what-is-the-trigonometry-angle-of-{{$num1=random_int(1,100)}}"><p>• Supplementary Angle of {{$num1}}</p></a>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                @include('math.right-section-math')
            </div>
        </div>
    </div>

    @include('math.math-footer')
</body>
<script>
    function calculate() {
        let price = document.getElementById('price').value;
        let result = price * {{ 3 }} * {{ 3 }};
        document.getElementById('result').value = result;
    }
</script>
@include('math.math-scripts')

</html>
