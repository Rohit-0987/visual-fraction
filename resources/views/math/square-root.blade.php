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
            <p class="col-12 h1">Square Root Calculator</p>
            <p class="col-12 fs-5">A quick and easy calculator to get the square root of any number.</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <form class="form-bg" action="{{ url('/square-root')}}" method="post">
                    @csrf
                    <div class="h4 text-light">Find Square Root </div>
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
            <p>I mean, do we really need to explain how this calculator works? You enter the whole number in the first box, then you click "Calculate" and hey presto, we calculate the square root.</p>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <p class="h2">Preset List of Square Root Calculations</p>
            </div>
            <div class="col-12">
                <p>View a <a href="#">list of perfect squares</a> or take a look below at links to some preset calculations that are commonly searched for:</p>
                <hr>
            </div>
        </div>
        <div class="row">
            @for($nume1 = 2; $nume1 <= 1000; $nume1++)
            <div class="col-md-4"><a href="square-root/what-is-the-square-root-of-{{$nume1}}"><p>What is the Square root of {{$nume1}} ?</p></a>
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
