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
            <p class="col-12 h1">Factor Pair Calculator</p>
            <p class="col-12 fs-5">A quick and easy factor calculator to work out the factor pairs of any number..</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <form class="form-bg" action="{{ url('/factor-pair')}}" method="post">
                    @csrf
                    <div class="h4 text-light">Find the Factor Pairs </div>
                    <hr>
                    <div class="row">
                            <div class="col-12">
                                <span>Enter a number </span>
                                <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="text" placeholder="">
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit"  class="btn btn-color"
                                    style="width: 100%;">Calculate </button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="h3">How to use</div>
            <p>It's really simple. Just type a whole number from 1 to 100000 into the input on the left and click "Calculate".</p>
            <p>The calculator will work out the factor pairs for you and also list out the solutions.</p>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <p class="h2">Common List of Factor Pairs</p>
            </div>
            <div class="col-12">
                <p>Below are links to some preset factor calculations to calculations that are commonly searched for:</p>
                <hr>
            </div>
        </div>
        <div class="row">
            @for($nume1 = 1; $nume1 <= 1000; $nume1++)
            <div class="col-md-4"><a href="factor-pair/what-is-the-factors-pair-of-{{$nume1}}"><p>Factors of {{$nume1}} in pairs</p></a>
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
