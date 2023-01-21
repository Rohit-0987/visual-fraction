<!doctype html>
<html>

<head>
    @include('links')
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="manual-container w-full mt-md-5 mt-3">
        <div class="row">
            <p class="col-12 h1">Factor Calculator</p>
            <p class="col-12 fs-5">A quick and easy factor calculator to work out the factors and factor pairs of any number..</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <form class="form-bg" action="{{ url('/fact')}}" method="post">
                    @csrf
                    <div class="h4 text-light">Find the Factorial </div>
                    <hr>
                    <div class="row">
                            <div class="col-12">
                                <span>Enter a number from 1-170</span>
                                <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="text" placeholder="">
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit"  class="btn btn-color"
                                    style="width: 100%;">Calculate Factorial</button>
                            </div>
                    </div>
                </form>
            </div>
            {{-- <div class="col-md-6 col-12 mt-md-0 mt-2">
                <div class="h3">How to use</div>
                <p>It's really simple. Just type a whole number from 1 to 170 into the input on the left and click
                    "Calculate".</p>

                <p>The calculator will work out the factorial for you and also list out the solution for you.</p>
            </div> --}}
        </div>
        <div class="row mt-4">
            <div class="h3">How to use</div>
            <p>It's really simple. Just type a whole number from 1 to 100000 into the input on the left and click "Calculate".</p>
            <p>The calculator will work out the factors for you and also list out the solutions.</p>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <p class="h2">List of All Number Factorials</p>
            </div>
            <div class="col-12">
                <p>Alternatively, the list below contains all 170 numbers that have a factorial. Why only 170? Well,
                    because to calculate the factorial of a number you have to multiply every single whole number in
                    that number.

                    For the number 170 that means a total of 170 whole numbers that all need to multiplied together.
                    Since we are using basic PHP code for this calculation, anything higher than 170 cannot be
                    calculated without a more powerful computer.</p>
                <hr>
            </div>
        </div>
        <div class="row">
            @for($nume1 = 1; $nume1 <= 170; $nume1++)
            <div class="col-md-4"><a href="factorial/what-is-the-factorial-of-{{$nume1}}"><p>Factorial of {{$nume1}}</p></a>
            </div>
            @endfor
        </div>
    </div>

    @include('math.math-footer')
</body>
<script>
    function calculate() {
        var num1 = document.getElementById('num1').value;
        document.getElementById('num').setContent(num1);
    }
</script>
@include('math.math-scripts')
</html>
