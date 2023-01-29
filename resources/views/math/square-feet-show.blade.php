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
                <div class="row">
                    <p class="col-12 my-3 h2">How Many Square Feet is a {{ $num1 }}x{{ $num2 }} Room?
                    </p>
                    <h4 class="col-12" style="color: #0a4b78;  ">
                        In this article we will show you how to calculate the square feet of an
                        {{ $num1 }}x{{ $num2 }} room or area and
                        also let you calculate how much your project might cost based on a price per square foot (which
                        is a common thing for household jobs).</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>You can use this guide to calculate the square footage and cost of a building, floor, walls,
                            and more.
                        </p>
                        <p>The calculation to work out the square feet of both a square and rectangular room like
                            {{ $num1 }}x{{ $num2 }} is very simple. All you need to do is multiply the
                            length by the width.
                        </p>
                        <div class="col-12 p-3" style="background-color:rgb(202, 202, 202); font-weight:700">
                            <p class="">Square Feet = Length x Width</p>
                        </div>
                        <div class="col-12 p-3 my-3" style="background-color:rgb(202, 202, 202); font-weight:700">
                            <p class="">{{ $num1 }} x {{ $num2 }} = {{ $num1 * $num2 }}</p>
                        </div>
                        <p>This means the answer is:</p>
                        <h1>{{ $num1 }} x {{ $num2 }} room = {{ $num1 * $num2 }} square feet</h1>
                        <p>Typing out the words square feet is quite long winded and if you deal with square feet a lot
                            you'll mostly see it written as either sq ft or ft2.</p>
                        <p>We can write the answer above using those notation and
                            {{ $num1 }}x{{ $num2 }} is {{ $num1 * $num2 }} ft <sup>2</sup></p>
                    </div>
                </div>
                <div class="row">
                    <p class="col-12 my-3 h2">Calculate the Price of a {{ $num1 }}x{{ $num2 }} Room
                    </p>
                    <p class="col-12">
                        If you have a project that requires you to calculate the cost of work or materials needed for a
                        {{ $num1 }}x{{ $num2 }} room or area, the below calculator can help.</p>
                    <p>For example, laying new carpet or flooring, painting or papering walls, installing bathroom tiles
                        etc.</p>
                    <p>Simple enter the price per square foot in the tool below and we'll show you how much it will cost
                        for your project.</p>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <form class="form-bg" action="{{ url('/square-feet') }}" method="post">
                                @csrf
                                <div class="h4 text-light">Price Calculator</div>
                                <hr>
                                <div class="row ">
                                    <div class="col-8 mb-2 mb-md-0  col-sm-8 col-md-8">
                                        <span>Price Per Square Foot</span>
                                        <input class="effect-2" name="price" id="price" type="number"
                                            placeholder="">
                                    </div>
                                    <div class="col-4 mt-md-4 mt-5">
                                        <span>x {{ $num1 * $num2 }} ft <sup>2</sup></span>
                                    </div>
                                    <div class="col-12 mb-2 my-3 mb-md-0 col-sm-12 col-md-12">
                                        <span>Total Price</span>
                                        <input class="effect-2 mx-0 border border-warning "
                                            style="background-color:rgb(225, 213, 193)" name="result" id="result"
                                            type="number" placeholder="" readonly>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-8 mt-2">
                                        <button type="button" onclick="calculate()" class="btn btn-color"
                                            style="width: 100%;">Calculate </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Calculate the Square Foot of Another Room</h2>
                        <p>Use the calculator below to find the square feet of another room and work out the project
                            costs.</p>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <form class="form-bg" action="{{ url('/square-feet') }}" method="post">
                                    @csrf
                                    <div class="h4 text-light">Square feet Calculator</div>
                                    <hr>
                                    <div class="row ">
                                        <span class="py-3">Square feet of </span>
                                        <div class="col-12 mb-2 mb-md-0  col-sm-4 col-md-4">
                                            <input class="effect-2" name="num1" id="num1" oninput="calculate()"
                                                type="number" placeholder="">
                                        </div>
                                        <div class="col-12 mb-2 mb-md-0 col-sm-4 col-md-4">
                                            <input class="effect-2 mx-0" name="num2" id="num2"
                                                oninput="calculate()" type="number" placeholder="">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-8 mt-2">
                                            <button type="submit" class="btn btn-color" style="width: 100%;">Calculate
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <h2>More Calculation</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    @for ($num1 = 4; $num1 <= 20; $num1++)
                        @for ($num2 = $num1; $num2 <= $num1 + 4; $num2++)
                            <a href="square-feet/what-is-{{ $num1 }}-square-feet-{{ $num2 }}"
                                class="col-md-6 col-sm-6 col-12 text-center my-2  ">
                                how many square feet is a {{ $num1 }}x{{ $num2 }} room?
                            </a>
                        @endfor
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
        let result = price * {{ $num1 }} * {{ $num2 }};
        document.getElementById('result').value = result;
    }
</script>
@include('math.math-scripts')

</html>
