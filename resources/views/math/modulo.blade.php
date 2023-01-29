<!doctype html>
<html>

<head>
    @include('links')
    <style>
        a {
            text-decoration: none;
            color: #b26200;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="manual-container w-full mt-md-5 mt-3">
        <div class="row">
            <p class="col-12 h1">Modulo Calculator</p>
            <p class="col-12 fs-5">A quick and easy calculator to solve modulo operations.</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <form class="form-bg" action="{{ url('/modulo')}}" method="post">
                    @csrf
                    <div class="h4 text-light">Enter Modulo Problem </div>
                    <hr>
                    <div class="row">
                        <span class="py-3">Enter a number </span>
                            <div class="col-4">
                                <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="number" placeholder="">
                            </div>
                            <div class="col-4 col-md-2 col-lg-2 "><h5>MOD</h5></div>
                            <div class="col-4">
                                <input class="effect-2 mx-0" name="num2" id="num2" oninput="calculate()" type="number" placeholder="">
                            </div>
                            
                    </div>
                    <div class="row">
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
            <p>I mean, do we really need to explain how this calculator works? You enter the dividend and divisor numbers you want to solve in the two input fields, then you click "Calculate" and hey presto, you get the answer.</p>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <p class="h2">Preset List of Modulo Problems</p>
            </div>
            <div class="col-12">
                <p>Below are links to some preset modulo operations that are commonly searched for:</p>
                <hr>
            </div>
        </div>
        <div class="row">
            @for($num1 = 2; $num1 <= 99; $num1++)
                @for($num2 = 3; $num2 <= 100; $num2++)
                    @if($num1 >= $num2)
                        @continue
                    @endif
                            <a href="modulo/what-is-{{$num1}}-modulo-of-{{$num2}}" class="col-md-4 col-sm-6 col-12 text-center my-2">
                                What is {{$num1}} mod {{$num2}}
                            </a>
                @endfor
            @endfor
        </div>
    </div>

    @include('math.math-footer')
</body>
<script>
    function calculate() {
        var num1 = document.getElementById('num1').value;
        document.getElementById('num').setContent(num1);
        var num2 = document.getElementById('num2').value;
        document.getElementById('num').setContent(num2);
    }
</script>
@include('math.math-scripts')
</html>
